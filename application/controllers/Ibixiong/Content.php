<?php
class Ibixiong_ContentController  extends Yaf_Controller_Abstract {

	public function viewAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		
		$id = intval($this->getRequest()->getParam('id'));
		
		$post = $this->getpost($id);
		//print_r($post);
		$tags = $this->gettags($post['post_id']);
		
		$this->getView()->assign("post",$post);
		$this->getView()->assign("tag",$tags);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/content_view.tpl");
	}
	
	public function editAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		
		$id = intval($this->getRequest()->getParam('id'));
		
		$post = $this->getpost($id);
		$category = $this->getcategory($id);
		$categorys = $managemodel->get_parent_category(1);
		$tags = $this->gettags($post['post_id']);
		if ($category) {
			$this->getView()->assign("category",$category);
			if ($category['category_parent'] != 0) {
				$parent_category = $managemodel->get_parent_category_by_id($category['category_parent']);
				$this->getView()->assign("parent_category",$parent_category);
			}
		}	
		//echo "<pre>";
		//print_r($post);
		//print_r($tags);
		//print_r($categorys);
		//print_r($category);
		//print_r($parent_category);
		//echo "</pre>";
		$this->getView()->assign("post",$post);
		$this->getView()->assign("tag",$tags);
		$this->getView()->assign("categorys",$categorys);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/content_editor.tpl");
	}
	
	public function editupdateAction() {
		
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		//echo "<pre>";
		$managemodel = new ManageModel();
		$manager_info = $this->session->get('manager_info');
		$post_id = intval($this->getRequest()->getPost("post_id"));
		
		$old_tags = $this->gettags($post_id);
		$tags_data = $this->getRequest()->getPost("hidden_tags");
		$category_id = $this->getRequest()->getPost("category");
		$child_category_id = $this->getRequest()->getPost("childcategory");
		//print_r($old_tags);
		//print_r($tags_data);
		if ($tags_data && $old_tags) {
			$new_tags = explode(",", $tags_data);
			//取两者交集
			/*$intersect_tags = array();
			foreach ($old_tags as $old_tag) {
				foreach($new_tags as $new_tag) {
					if (in_array($new_tag,$old_tag)) {
						$intersect_tags[] = $old_tag;
					}
				}
			}*/
			$old_tag_ids = array();
			foreach($old_tags as $old_tag) {
				$old_tag_ids[] = $old_tag['tag_id'];
			}
			
			$tag_ids = array();
			foreach ($new_tags as $tag) {	
				$tag_check = $managemodel->check_tag($tag);
				if (!$tag_check) {
					$insert_data['tag_name'] =  $tag;
					$insert_data['tag_slug'] = urlencode($tag);
					$id = $managemodel->insert_tag($insert_data);
					$tag_ids[] = $id; 
				} else {
					$tag_ids[] = $tag_check['tag_id'];
				}
			}
			
			$intersect_tagids = array_intersect($tag_ids,$old_tag_ids);
			$diff_old_tagids = array_diff($old_tag_ids,$intersect_tagids);
			$diff_new_tagids = array_diff($tag_ids,$intersect_tagids);
			//print_r($tag_ids);
			//print_r($old_tag_ids);
			//print_r($intersect_tagids);
			//print_r($diff_old_tagids);
			//print_r($diff_new_tagids);
			foreach ($diff_old_tagids as $id) {
				$data = array();
				$ids['tag_id'] = $id;
				$ids['post_id'] = $post_id;
				$data['tag_relationship_status'] = 0;
				$rowaffected =$managemodel->update_tag_relationship('tag_relationships',$data,$ids);
				if (!$rowaffected) {
					echo "101:文章老标签状态更新失败";
					//echo "old done.";
				}
			}
			
			foreach ($diff_new_tagids as $id) {
				$flag = $managemodel->check_post_tag_relationship($id,$post_id);
				if ($flag) {
					if (!$flag['tag_relationship_status']) {
						$data = array();
						$ids['tag_id'] = $id;
						$ids['post_id'] = $post_id;
						$data['tag_relationship_status'] = 1;
						$rowaffected = $managemodel->update_tag_relationship('tag_relationships',$data,$ids);
						if (!$rowaffected) {
							//echo "new update done.";
							echo "101:文章新标签状态更新失败";
						}
					}
				} else {
					$data = array();
					$data['tag_relationship_tag_id'] = $id;
					$data['tag_relationship_mixid'] = $post_id;
					$data['tag_relationship_type'] = 'post';
					$data['tag_relationship_status'] = 1;
					$lastid = $managemodel->insert_tag_relationships($data);
					if (!$lastid) {
						//echo "new insert done.";
						echo "101:文章新标签插入失败";
					}
				}
			}
			
		} else if (!$tags_data && $old_tags) {
			$old_tagids = $this->gettagids($post_id);
			$data = array();
			$ids['tag_ids'] = $old_tagids;
			$ids['post_id'] = $post_id;
			$data['tag_relationship_status'] = 0;
			$rowaffected = $managemodel->update_tag_relationships('tag_relationships',$data,$ids);
			if (!$rowaffected ) {
				echo "101:文章标签更新失败";
				//echo "done";
			}
		} else if ($tags_data && !$old_tags) {
			$new_tags = explode(",", $tags_data);
			//print_r($new_tags);
			$tag_ids = array();
			
			foreach ($new_tags as $tag) {
				
				$tag_id = $managemodel->check_tag($tag);
				if (!$tag_id) {
					$insert_data['tag_name'] =  $tag;
					$insert_data['tag_slug'] = urlencode($tag);
					$id = $managemodel->insert_tag($insert_data);
					$tag_ids[] = $id; 
				} else {
					$tag_ids[] = $tag_id['tag_id'];
				}
			}
			
			if ($tag_ids) {
				foreach ($tag_ids as $tag_id) {
					$relationships = array();
					$relationships['tag_relationship_mixid'] = $post_id;
					$relationships['tag_relationship_tag_id'] = $tag_id;
					$relationships['tag_relationship_type'] = 'post';
					$relationships['tag_relationship_status'] = 1;
					//print_r($relationships);
					$tag_relationship_id = $managemodel->insert_tag_relationships($relationships);
				}
			}
			
			
		}
		//echo "<pre>";
		if ($category_id) {
			$category_tagids = array();
			$category_tagids_array = $managemodel->get_category_tagids($category_id);
			foreach ($category_tagids_array as $category_id_array) {
				$category_tagids[] = $category_id_array['tag_relationship_tag_id'];
			}
			$diff_new_tagids = array_diff($tag_ids,$category_tagids);
			//print_r($tag_ids);
			//print_r($category_tagids);
			//print_r($diff_new_tagids);
			foreach ($diff_new_tagids as $tag_id) {
				$relationships = array();
				$relationships['tag_relationship_mixid'] = $category_id;
				$relationships['tag_relationship_tag_id'] = $tag_id;
				$relationships['tag_relationship_type'] = 'category';
				$relationships['tag_relationship_status'] = 1;
				$tag_relationship_id = $managemodel->insert_tag_relationships($relationships);
			}
		}
		if ($child_category_id) {
			//print_r($tag_ids);
			//print_r($category_tagids);
			//print_r($diff_new_tagids);
			$category_tagids = array();
			$category_tagids_array = $managemodel->get_category_tagids($child_category_id);
			
			foreach ($category_tagids_array as $category_id_array) {
				$category_tagids[] = $category_id_array['tag_relationship_tag_id'];
			}
			$diff_new_tagids = array_diff($tag_ids,$category_tagids);
			
			foreach ($diff_new_tagids as $tag_id) {
				$relationships = array();
				$relationships['tag_relationship_mixid'] = $child_category_id;
				$relationships['tag_relationship_tag_id'] = $tag_id;
				$relationships['tag_relationship_type'] = 'category';
				$relationships['tag_relationship_status'] = 1;
				$tag_relationship_id = $managemodel->insert_tag_relationships($relationships);
			}
		}
		$category_relationship = $managemodel->get_category_from_relationship('post',$post_id,1);
		//print_r($category_id);
		//print_r($category_relationship);
		if (isset($category_relationship['category_relationship_category_id'])) {
			if ($category_id && empty($child_category_id)) {
				if ($category_id != $category_relationship['category_relationship_category_id']) {
					$data_old = array();
					$data_new = array();
						
					$data_old['category_relationship_status'] = 0;
					$rowaffected = $managemodel->update_category_from_relationship('category_relationships',$data_old,$category_relationship['category_relationship_id']);
					
					$category_relationship_id = $managemodel->get_category_from_relationship_by_category($post_id,$category_id,'post');
					if ($category_relationship_id) {
						$data_new['category_relationship_status'] = 1;
						$rowaffected = $managemodel->update_category_from_relationship('category_relationships',$data_old,$category_relationship_id);
						if (!$rowaffected) {
							//echo "update category_relationship success";
							echo "101:文章分类失败";
						}
					} else {
						$data_new['category_relationship_category_id'] = $category_id;
						$data_new['category_relationship_mixid'] = $post_id;
						$data_new['category_relationship_type'] = 'post';
						$data_new['category_relationship_status'] = 1;
						$lastid = $managemodel->insert_category_relationship($data_new);
						if (!$lastid) {
							//echo "insert category_relationship success";
							echo "101:文章分类失败";
						}
					}
				}
			} else if ($child_category_id) {
				if ($child_category_id != $category_relationship['category_relationship_category_id']) {
					$data_old = array();
					$data_new = array();
						
					$data_old['category_relationship_status'] = 0;
					$rowaffected = $managemodel->update_category_from_relationship('category_relationships',$data_old,$category_relationship['category_relationship_id']);
					
					$category_relationship_id = $managemodel->get_category_from_relationship_by_category($post_id,$child_category_id,'post');
					if ($category_relationship_id) {
						$data_new['category_relationship_status'] = 1;
						$rowaffected = $managemodel->update_category_from_relationship('category_relationships',$data_old,$category_relationship_id);
						if ($rowaffected) {
							//echo "update category_relationship success";
						}
					} else {
						$data_new['category_relationship_category_id'] = $child_category_id;
						$data_new['category_relationship_mixid'] = $post_id;
						$data_new['category_relationship_type'] = 'post';
						$data_new['category_relationship_status'] = 1;
						$lastid = $managemodel->insert_category_relationship($data_new);
						if (!$lastid) {
							//echo "insert category_relationship success";
							echo "101:文章分类失败";
						}
					}
				}
			}
		} else {

			$data_new = array();
			if ($category_id && empty($child_category_id)) {
				$data_new['category_relationship_category_id'] = $category_id;
			} else if ($child_category_id) {
				$data_new['category_relationship_category_id'] = $child_category_id;
			}
			$data_new['category_relationship_mixid'] = $post_id;
			$data_new['category_relationship_type'] = 'post';
			$data_new['category_relationship_status'] = 1;
			$lastid = $managemodel->insert_category_relationship($data_new);
			if (!$lastid) {
				//echo "insert category_relationship success";
				echo "101:文章分类失败";
			}
			
		}
		
		//echo "</pre>";
		$data = array();
		$data['post_title'] = $this->getRequest()->getPost("post_title");
		$data['post_from_url']	= $this->getRequest()->getPost("post_url");
		$data['post_from_site']	= $this->getRequest()->getPost("post_from_site");
		$data['post_content'] = $this->getRequest()->getPost("post_content");
		$data['post_img']	= $this->getRequest()->getPost("post_img");
		$data['post_original']	= $this->getRequest()->getPost("post_original");
		$data['post_modified'] = date("Y-m-d H:i:s");
		$data['post_modified_gmt'] = date("e");
		$data['post_modified_manager'] = $manager_info['manager_id'];
		//print_r($data);
		$rows_affected = $managemodel->update_post('posts',$data,$post_id);
		if ($rows_affected) {
			//echo "success";
			echo "1:提交成功";
			//$this->redirect(DOMAIN . '/Ibixiong_index');
		}
		//print_r($post_title);
		//print_r($post_url);
		//print_r($post_content);
		//echo "</pre>";
		
	}
	
	public function disposeAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
	
		$managemodel = new ManageModel();
		$data = array();
		$id = intval($this->getRequest()->getParam('id'));
		$type = intval($this->getRequest()->getParam('type'));
		
		$post_info = $managemodel->get_post($id);
		if ($type == 1) {
			if ($post_info['post_getkey_status']) {
				$activekey = array();
				$activekey['activekey_value'] = md5($post_info['post_getkey_email'].time());
				$activekey['activekey_owner'] = 1;
				$activekey['activekey_status'] = 2;
				$active_id = $managemodel->insert_activekey($activekey);
				if ($active_id) {
					$smtp = "smtp.ym.163.com";
					$smtpport=25;
					$title=" - i比熊";     //邮件标题
					$mailfrom="<ibixiong@ibixiong.com>"; //发送人
					$username = "ibixiong@ibixiong.com";//"qiuyanjie";
					$passwd="i@bixiong";   //SMTP密码
					$mailsend="ibixiong@ibixiong.com"; //对方显示的发送人
					$replyto="<ibixiong@ibixiong.com>";//回复邮件人
					$sendto="<".$post_info['post_getkey_email'].">"; //收件人
					$mail='
						<span style="color:#000;">欢迎使用i比熊 - 专注于精品阅读</span>
								
						<span style="color:#000;"><a href="http://www.ibixiong.com" target="_blank">i 比熊</a> 专注于精品阅读</span>
						<br />
						<strong><span >邀请码为：</span></strong>
						'.$activekey['activekey_owner'].'||'.$activekey['activekey_value'].'
						<br />
						<strong><span style="color:#000;">或点击以下链接直接注册：</span></strong>
						<a href="'. DOMAIN .'/register/index/id/1/key/'.$activekey['activekey_value'].'" target="_blank">'.DOMAIN .'/register/index/id/1/key/'.$activekey['activekey_value'].'</a>
						<br />
						<strong>
							<span style="color:#FF0000;">激活后才能正常登录</span>
						</strong>
						';
					$sendmail = new Mail_SendMail($smtp, $smtpport, $title, $username, $passwd, $mailfrom, $mailsend, $replyto, $sendto, $mail);
					$result = $sendmail->Send();
				} else {
					echo "<script>alert('本文章将发送邀请码，邀请码生成失败');history.go(-1);</script>";
				}
			}
		}
		$data['post_getkey_status'] = 0;
		$data['post_approved'] = $type;
		
		//print_r($data);
		$rows_affected = $managemodel->update_post('posts',$data,$id);
		
		if ($rows_affected) {
			echo "success";
			$this->redirect(DOMAIN . '/Ibixiong_index');
		}
	}
	
	public function getuser($user_id) {
		$managemodel = new ManageModel();
		
		$user = $managemodel->get_userinfo($user_id);
		
		return $user;
	}
	
	public function getpost($id) {
		$managemodel = new ManageModel();
		
		$post = $managemodel->get_post($id);
		$post['user_info'] =  $this->getuser($post['post_author']);
		
		return $post;
	}
	
	public function gettags($postid) {
		
		$managemodel = new ManageModel();
		$tags = array();
		
		$tag_ids = $this->gettagids($postid);
		//print_r($tag_ids);
		foreach ($tag_ids as $tag_id){
		
			$tags[] = $managemodel->get_tag($tag_id);
		
		}
		return $tags;
	}
	
	public function gettagids($postid) {
		$managemodel = new ManageModel();
		
		$tag_ids = $managemodel->get_tagids_from_relationship('post',$postid);
		
		return $tag_ids;
	}
	
	public function getcategory($postid) {
		$managemodel = new ManageModel();
		
		$category_relationship = $managemodel->get_category_from_relationship('post',$postid,1);
		if (isset($category_relationship['category_relationship_category_id'])) {
			$category = $managemodel->get_category_by_id($category_relationship['category_relationship_category_id']);
			
			return $category;
		} else {
			return false;
		}
	}
}