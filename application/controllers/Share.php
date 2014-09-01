<?php
/**
*	分享投稿页面
**/

class ShareController  extends Yaf_Controller_Abstract {
	
	protected $session;
	
	public function indexAction() {
		
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
			//$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/login");
		}
	
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
	
		$navbars = $this->getnavbar("share");
		$categorys = $this->getcategory("share");
		$quotes = $this->getquote();
		
		//echo "<pre>";
		////print_r($navbars);
		//print_r($categorys);
		//print_r($quotes);
		//echo "</pre>";
		$this->getView()->assign("title"," 精品阅读分享 - i比熊");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("quote",$quotes);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/share.tpl");
	}
	
	public function originalAction() {
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
			//$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/login");
		}
	
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
	
		$navbars = $this->getnavbar("share");
		$categorys = $this->getcategory("share");
		$quotes = $this->getquote();
		
		//echo "<pre>";
		////print_r($navbars);
		///print_r($categorys);
		//print_r($quotes);
		//echo "</pre>";
		$this->getView()->assign("title"," 精品阅读 原创分享 - i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("quote",$quotes);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/share_original.tpl");
	
	}
	
	public function postAction() {
	
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		$sharemodel = new ShareModel();
		//echo __METHOD__ ."has been called";
		$tags_data = $this->getRequest()->getPost("hidden-tags");
		if ($tags_data) {
			$tags_array = explode(",", $tags_data);
			$tag_ids = array();
			
			foreach ($tags_array as $tag) {
				
				$tag_id = $sharemodel->check_tag($tag);
				if (!$tag_id) {
					$insert_data['tag_name'] =  $tag;
					$insert_data['tag_slug'] = urlencode($tag);
					$id = $sharemodel->insert_tag($insert_data);
					$tag_ids[] = $id; 
				} else {
					$tag_ids[] = $tag_id['tag_id'];
				}
			}
		}
		$category_id = $this->getRequest()->getPost("category");
		$child_category_id = $this->getRequest()->getPost("childcategory");
		$data['post_title'] = $this->getRequest()->getPost("post_title");
		$data['post_img']	= $this->getRequest()->getPost("post_img");
		$data['post_original'] = 1;
		//$data['post_from_site'] = $this->getRequest()->getPost("post_from_site","");
		//$data['post_from_url']	= $this->getRequest()->getPost("post_url","");
		if ($this->getRequest()->getPost("getactivekey") == 1) {
			$data['post_getkey_status'] = 1;
			$data['post_getkey_email'] = $this->getRequest()->getPost("getactivekey_mail");
		} else if ($this->getRequest()->getPost("getactivekey_page") == 1) {
			$data['post_getkey_status'] = 1;
			$data['post_getkey_email'] = $this->getRequest()->getPost("getactivekey_mail_page");
		}
		//echo "<pre>";
		//print_r($tag_ids);
		//print_r(Yaf_Application::app()->getConfig()->debug->level);
		if ($this->session->has('userid')) {
			$data['post_author'] = $this->session->get('userid');
			$data['post_status'] = 0;
		} else {
			$data['post_author'] = 0;
			$data['post_status'] = 0;
		}
		$data['post_date'] = date("Y-m-d H:i:s");
		$data['post_date_gmt'] = date("e");
		
		if ($data['post_original'] == 1) {
			$data['post_content'] = $this->getRequest()->getPost("post_content");
		} else {
			$data['post_content'] = '';
		}
		
		//print_r($data);
		$post_id = $sharemodel->insert_post($data);
		//print_r($post_id);
		//echo "<pre>";
		if ($post_id ) {
			if ($this->session->has('userid')) {
				//echo "has userid";
				$user_post_relationships = array();
				$user_post_relationships['user_post_relationship_user_id'] = $this->session->get('userid');
				$user_post_relationships['user_post_relationship_post_id'] = $post_id;
				$user_post_relationships['user_post_relationship_type'] = 'share';
				$user_post_relationships['user_post_relationship_time'] = date("Y-m-d H:i:s");
				$user_post_relationships['user_post_relationship_timegmt'] = date("e");
				//print_r($user_post_relationships);
				$user_post_relationship_id = $sharemodel->insert_user_post_relationships($user_post_relationships);
				if ($user_post_relationship_id) {
					//echo "user post relationship success";
				} else {
					//echo "user post relationship fail";
				}
			}
			if (isset($tag_ids)) {	
				foreach ($tag_ids as $tag_id) {
					$relationships = array();
					$relationships['tag_relationship_mixid'] = $post_id;
					$relationships['tag_relationship_tag_id'] = $tag_id;
					$relationships['tag_relationship_type'] = 'post';
					$relationships['tag_relationship_status'] = 1;
					//print_r($relationships);
					$tag_relationship_id = $sharemodel->insert_tag_relationships($relationships);
				}
				if ($category_id) {
					$category_tagids = $sharemodel->get_category_tagids($category_id);
					$diff_new_tagids = array_diff($tag_ids,$category_tagids);
					foreach ($diff_new_tagids as $tag_id) {
						$relationships = array();
						$relationships['tag_relationship_mixid'] = $category_id;
						$relationships['tag_relationship_tag_id'] = $tag_id;
						$relationships['tag_relationship_type'] = 'category';
						$relationships['tag_relationship_status'] = 1;
						$tag_relationship_id = $sharemodel->insert_tag_relationships($relationships);
					}
				}
				if ($child_category_id) {
					$category_tagids = $sharemodel->get_category_tagids($child_category_id);
					$diff_new_tagids = array_diff($tag_ids,$category_tagids);
					foreach ($diff_new_tagids as $tag_id) {
						$relationships = array();
						$relationships['tag_relationship_mixid'] = $child_category_id;
						$relationships['tag_relationship_tag_id'] = $tag_id;
						$relationships['tag_relationship_type'] = 'category';
						$relationships['tag_relationship_status'] = 1;
						$tag_relationship_id = $sharemodel->insert_tag_relationships($relationships);
					}
				}
			}
			if ($category_id && empty($child_category_id)) {
				//echo $post_id;
				$data_category['category_relationship_category_id'] = $category_id;
				$data_category['category_relationship_type'] = 'post';
				$data_category['category_relationship_mixid'] = $post_id;
				$data_category['category_relationship_status'] = 1;
				//print_r($data_category);
				$category_relationship_id = $sharemodel->insert_category_relationships($data_category);
				if ($category_relationship_id) {
					//echo "category_success";
				}
			}
			if ($child_category_id) {
				$data_category['category_relationship_category_id'] = $child_category_id;
				$data_category['category_relationship_type'] = 'post';
				$data_category['category_relationship_mixid'] = $post_id;
				$data_category['category_relationship_status'] = 1;
				//print_r($data_category);
				$category_relationship_id = $sharemodel->insert_category_relationships($data_category);
				if ($category_relationship_id) {
					//echo "child_category_success";
				}
			}
			if (isset($data['post_getkey_status']) && $data['post_getkey_status'] == 1) {
				echo "1:提交成功,文章审核通过后，邀请码将发送至您指定的邮箱";
			} else {
				echo "1:发表成功，等待管理员审核";
			}
		}
		//echo "</pre>";
		
		//print_r($post_title);
		//print_r($post_url);
		//print_r($post_content);
		//echo "</pre>";
	}
	
	public function ajaxpostAction() {
		
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		$sharemodel = new ShareModel();
		
		$data['post_title'] = $this->getRequest()->getPost("post_title");
		$data['post_from_url']	= $this->getRequest()->getPost("post_url");
		$data['post_original'] = $this->getRequest()->getPost("type",0);
		if ($this->getRequest()->getPost("getactivekey")) {
			$data['post_getkey_status'] = 1;
			$data['post_getkey_email'] = $this->getRequest()->getPost("getactivekey_mail");
		} else if ($this->getRequest()->getPost("getactivekey_page")) {
			$data['post_getkey_status'] = 1;
			$data['post_getkey_email'] = $this->getRequest()->getPost("getactivekey_mail_page");
		}
		if ($this->session->has('userid')) {
			$data['post_author'] = $this->session->get('userid');
			$data['post_status'] = 0;
		} else {
			$data['post_author'] = 0;
			$data['post_status'] = 0;
		}
		$data['post_date'] = date("Y-m-d H:i:s");
		$data['post_date_gmt'] = date("e");
		
		$post_id = $sharemodel->insert_post($data);
		if ($post_id) {
			if ($this->session->has('userid')) {
				$user_post_relationships = array();
				$user_post_relationships['user_post_relationship_user_id'] = $this->session->get('userid');
				$user_post_relationships['user_post_relationship_post_id'] = $post_id;
				$user_post_relationships['user_post_relationship_type'] = 'share';
				$user_post_relationships['user_post_relationship_time'] = date("Y-m-d H:i:s");
				$user_post_relationships['user_post_relationship_timegmt'] = date("e");
				$user_post_relationships['user_post_relationship_status'] = 1;
				//print_r($user_post_relationships);
				$user_post_relationship_id = $sharemodel->insert_user_post_relationships($user_post_relationships);
				//print_r($user_post_relationship_id);
			}
			if (isset($data['post_getkey_status']) && $data['post_getkey_status'] == 1) {
				echo "1:提交成功,文章审核通过后，邀请码将发送至您指定的邮箱";
			} else {
				echo "1:发表成功，等待管理员审核";
			}	
		} else {
			echo "0:发表失败";
		}
	}
	
	public function childcategoryAction() {
		$sharemodel = new ShareModel();
		$category_id = $this->getRequest()->getPost("category");
		if (!empty($category_id)) {
			$category_children = $sharemodel->get_child_category($category_id);
			echo json_encode($category_children);
		}
	}
	
	public function tagsaheadAction() {
		$sharemodel = new ShareModel();
		$tags_result = array();
		$json = json_decode(file_get_contents('php://input'),true);
		$tagahead = $json['typeahead'];
		//$tagahead = $this->getRequest()->getPost("typeahead"); 
		$tags = $sharemodel->get_tags($tagahead);
		$tags_result = "{\"tags\":[";
		if ($tags) {
			
			foreach ($tags as $tag) {
				//$tags_result['tags']['tag'] = $tag['tag_name']; 
				$tags_result .= "{\"tag\":\"".$tag['tag_name']."\"},";
			}
			$tags_result = substr($tags_result,0,-1);
		}
		$tags_result .= "]}";
		echo $tags_result;
		//echo json_encode($tags_result,JSON_FORCE_OBJECT);
	}
	
	protected function getnavbar($type="share") {
		$sharemodel = new ShareModel();
		
		$allnavbars = $sharemodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	protected function getcategory($type="share") {
		$sharemodel = new ShareModel();
		$category_result = array();	
		$categorys = $sharemodel->get_categorys($type);
		//print_r($categorys);
		foreach ($categorys as $category) {
			$children = array();
			$children = $sharemodel->get_child_category($category['category_id']);
			$category['children'] = $children;
			//print_r($category);
			$category_result[] = $category;
		}
		return $category_result;
	}
	
	/*protected function getcategory($type="share") {
		$sharemodel = new ShareModel();
		$category_result = array();	
		$categorys = $sharemodel->get_categorys($type);
		//echo "<pre>";
		//var_dump($categorys);
		foreach ($categorys as $category) {
			
			$inners = array();
			$innerids = $sharemodel->get_category_relationships($category['category_id']);
			//var_dump($innerids);
			foreach ($innerids as $category_relationship_mixid) {
				$post_id = $category_relationship_mixid['category_relationship_mixid'];
				//var_dump($post_id);
				$inner_post_info = $sharemodel->get_category_inner_post_info($post_id);
				//var_dump($innertitle);
				//$inner['post_id'] = $post_id;
				//$inner['post_title'] = $innertitle[0]['post_title'];
				if ($inner_post_info) {
					$inners[] = $inner_post_info;
				}	
			}
			usort($inners, array("ShareController", "sort_inners"));
			//var_dump($inners);
			$category['inners'] = $inners;
			//var_dump($category);
			$category_result[] = $category;
		}
		//var_dump($category_result);
		//echo "</pre>";		
		return $category_result;
	}
	
	public function sort_inners($a,$b) {
		if ($a['post_browe_count'] == $b['post_browe_count']) {
			return 0;
		}
		return ($a['post_browe_count'] > $b['post_browe_count']) ? -1 : 1;
	}*/
	
	protected function getquote() {
		$sharemodel = new ShareModel();
		$quotes = $sharemodel->get_quotes();
		
		return $quotes;
	}

}