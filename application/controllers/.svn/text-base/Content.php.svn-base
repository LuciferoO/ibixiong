<?php
/**
*	首页展示
**/

class ContentController extends Yaf_Controller_Abstract {

	private $answerbox = 0;
	protected $user_id;
	protected $username;
	
	public function viewAction() {
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		//echo "<pre>";
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("login",$render_login_data['login']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
			$user_id = $render_login_data['user_id'];
			$post_id = $this->getRequest()->getParam('id');
			if ($post_id) {
				$contentmodel = new ContentModel();
				$relationship = $contentmodel->get_user_post_relationships($user_id,$post_id,'browse');
				if ($relationship) {
					$relationship_data = array();	
					$relationship_data['user_post_relationship_type'] = 'browse';
					$relationship_data['user_post_relationship_time'] = date("Y-m-d H:i:s");
					$relationship_data['user_post_relationship_timegmt'] = date("e");
					$relationship_data['user_post_relationship_count'] = new Zend_Db_Expr('user_post_relationship_count + 1');
					$rowaffected = $contentmodel->update_user_post_relationships('user_post_relationships',$relationship_data,$relationship['user_post_relationship_id']);
					/*if ($rowaffected) {
						echo "update";
					}*/
				} else {
					$relationship_data = array();
					$relationship_data['user_post_relationship_user_id'] = $user_id;
					$relationship_data['user_post_relationship_post_id'] = $post_id;
					$relationship_data['user_post_relationship_type'] = 'browse';
					$relationship_data['user_post_relationship_time'] = date("Y-m-d H:i:s");
					$relationship_data['user_post_relationship_timegmt'] = date("e");
					$rowaffected = $contentmodel->insert_user_post_relationships($relationship_data);
					/*if ($rowaffected) {
						echo "insert";
					}*/
				}
			}
		} else {
			$this->getView()->assign("login",0);
		}
		
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
	

		$id = intval($this->getRequest()->getParam('id',1));
		$this->update_post($id);
		
		$navbars	= $this->getnavbar("index");
		$categorys = $this->getcategory();
		$post = $this->getpost($id);
		//print_r($post);
		$tags = $this->gettags($post['post_id']);		//get the tags of the post
		//print_r($tags);
		$rightbars = $this->getrightbar($post,$tags);
		//print_r($rightbars);
		$comments = $this->getcomments($post['post_id']);
		if (isset($user_id)) {
			$user = $this->getuser($user_id);
			
			if (isset($user)) {
				$user['now'] = date("Y-m-d H:i:s");
				
				if ($user['user_banned'] <= 0) {
					$this->answerbox = 1;
					$this->getView()->assign("user",$user);
				}
			}
		} else {
			$now = date("Y-m-d  H:i:s");
			$this->getView()->assign("now",$now);
		}
		//echo date("Y-m-d H:i:s")."<br />";
		//echo date("e")."<br />";
		//echo "</pre>";
		$this->getView()->assign("answerbox",$this->answerbox);
		$this->getView()->assign("title",$post['post_title']." - i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("post",$post);
		$this->getView()->assign("tag",$tags);//判断文章是否有tag
		$this->getView()->assign("comment",$comments);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/content.tpl");
	}
	
	public function commentAction() {
		if ($this->getRequest()->isPost()) {
		
			$this->check = new Antihack_Check_Login();
			$render_login_data = $this->check->checklogin();
			if ($render_login_data['login'] == 1) {
				$this->getView()->assign("login",1);
				$this->getView()->assign("user_id",$render_login_data['user_id']);
				$this->getView()->assign("username",$render_login_data['username']);
			} else {
				$this->getView()->assign("login",0);
				$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/login");
			}
			
			$this->user_id = $render_login_data['user_id'];
			$comment = $this->getRequest()->getPost("comment");
			$post_id = $this->getRequest()->getPost("id");
			//echo $comment;
			//echo $post_id;
			$data = array();
			$data['comment_content'] = $comment;
			$data['comment_author'] = $this->user_id;
			$data['comment_post_id'] = $post_id;
			$data['comment_authorip'] = $_SERVER['REMOTE_ADDR'];
			$data['comment_agent'] = $_SERVER['HTTP_USER_AGENT'];
			$data['comment_date'] = date("Y-m-d H:i:s");
			$data['comment_date_gmt'] = date("e");
			
			$contentmodel = new ContentModel();
			//echo $data;
			$lastid = $contentmodel->insert_comment($data);
			
			if ($lastid) {
				$data['comment_id'] = $lastid;
				$update_data = array('post_comment_count'=>new Zend_Db_Expr('post_comment_count+1'));
				$contentmodel->update_post('posts',$update_data,$post_id);
				echo json_encode($data);
				//$this->redirect(DOMAIN . "/content/view/id/$post_id");
				//$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/content/view/id/$post_id");
			} else {
				echo 0;
			}
		}
	}
	
	public function commentlikeAction() {
		if ($this->getRequest()->isPost()) {
		
			$this->check = new Antihack_Check_Login();
			$render_login_data = $this->check->checklogin();
			if ($render_login_data['login'] == 1) {
				$this->getView()->assign("login",1);
				$this->getView()->assign("user_id",$render_login_data['user_id']);
				$this->getView()->assign("username",$render_login_data['username']);
			} else {
				$this->getView()->assign("login",0);
				$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/login");
			}
			
			$this->user_id = $render_login_data['user_id'];
			$comment_id = $this->getRequest()->getPost("id");
			$contentmodel = new ContentModel();
			
			$data = array();
			$data['user_comment_relationship_user_id'] = $this->user_id;
			$data['user_comment_relationship_comment_id'] = $comment_id;
			$data['user_comment_relationship_status'] = 1;//此处在数据库默认设置1，后删除
			$data['user_comment_relationship_date'] = date("Y-m-d H:i:s");
			$data['user_comment_relationship_date_gmt'] = date("e");
			//echo "<pre>";
			//print_r($data);
			
			$lastid = $contentmodel->insert_user_comment_relationship($data);
			//print_r($lastid);
			//echo "</pre>";
			if ($lastid) {
				
				echo 1;
				//$this->redirect(DOMAIN . "/content/view/id/$post_id");
				//$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/content/view/id/$post_id");
			} 
		}	
	}
	
	public function buttonAction() {
		if ($this->getRequest()->isPost()) {
			$this->check = new Antihack_Check_Login();
			$render_login_data = $this->check->checklogin();
			if ($render_login_data['login'] == 1) {
				$this->getView()->assign("login",1);
				$this->getView()->assign("user_id",$render_login_data['user_id']);
				$this->getView()->assign("username",$render_login_data['username']);
			} else {
				$this->getView()->assign("login",0);
				$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/login");
			}
			
			$user_id = $render_login_data['user_id'];
			$post_id = $this->getRequest()->getPost("id");
			$type = $this->getRequest()->getPost("type");
			$contentmodel = new ContentModel();
			$relationship = $contentmodel->get_user_post_relationships($user_id,$post_id,$type);
			
			if ($relationship) {
				if($relationship['user_post_relationship_type'] == $type && $relationship['user_post_relationship_status'] == 1) {
					$relationship_data = array();
					$relationship_data['user_post_relationship_status'] = 0;
					$relationship_data['user_post_relationship_time'] = date("Y-m-d H:i:s");
					$relationship_data['user_post_relationship_timegmt'] = date("e");
					$rowaffected = $contentmodel->update_user_post_relationships('user_post_relationships',$relationship_data,$relationship['user_post_relationship_id']);
					if ($rowaffected) {
						echo 0;
					}
				} else if ($relationship['user_post_relationship_type'] == $type && $relationship['user_post_relationship_status'] == 0) {
					$relationship_data = array();
					$relationship_data['user_post_relationship_status'] = 1;
					$relationship_data['user_post_relationship_time'] = date("Y-m-d H:i:s");		
					$relationship_data['user_post_relationship_timegmt'] = date("e");
					$rowaffected = $contentmodel->update_user_post_relationships('user_post_relationships',$relationship_data,$relationship['user_post_relationship_id']);
					
					if ($rowaffected) {
						$update_data = array('post_like_count'=>new Zend_Db_Expr('post_like_count+1'));
						$contentmodel->update_post('posts',$update_data,$post_id);
						echo 1;
					}
				}
			} else {
				$relationship_data = array();
				$relationship_data['user_post_relationship_user_id'] = $user_id;
				$relationship_data['user_post_relationship_post_id'] = $post_id;
				$relationship_data['user_post_relationship_type'] = $type;
				$relationship_data['user_post_relationship_status'] = 1;
				$relationship_data['user_post_relationship_time'] = date("Y-m-d H:i:s");
				$relationship_data['user_post_relationship_timegmt'] = date("e");
				
				
				$rowaffected = $contentmodel->insert_user_post_relationships($relationship_data);
				if ($rowaffected) {
					$update_data = array('post_like_count'=>new Zend_Db_Expr('post_like_count+1'));
					$contentmodel->update_post('posts',$update_data,$post_id);
					echo 1;
				}
			}
		}
	}
	
	public function getuser($user_id) {
		$contentmodel = new ContentModel();
		
		$user = $contentmodel->get_userinfo($user_id);
		
		return $user;
	}
	
	public function getnavbar($type="content") {
		$contentmodel = new ContentModel();
		
		$allnavbars = $contentmodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	protected function getcategory($type="content") {
		$contentmodel = new ContentModel();
		$category_result = array();	
		$categorys = $contentmodel->get_categorys($type);
		//print_r($categorys);
		foreach ($categorys as $category) {
			$children = array();
			$children = $contentmodel->get_child_category($category['category_id']);
			$category['children'] = $children;
			//print_r($category);
			$category_result[] = $category;
		}
		return $category_result;
	}
	
	/*public function getcategory($type="content") {
		$contentmodel = new ContentModel();
		$category_result = array();	
		$categorys = $contentmodel->get_categorys($type);

		foreach ($categorys as $category) {
			
			$inners = array();
			$innerids = $contentmodel->get_category_relationships($category['category_id'],'post');

			foreach ($innerids as $category_relationship_mixid) {
				$post_id = $category_relationship_mixid['category_relationship_mixid'];

				$inner_post_info = $contentmodel->get_category_inner_post_info($post_id);
				//var_dump($innertitle);
				//$inner['post_id'] = $post_id;
				//$inner['post_title'] = $innertitle[0]['post_title'];
				if ($inner_post_info) {
					$inners[] = $inner_post_info;
				}	
			}
			
			usort($inners, array("ContentController", "sort_inners"));

			$category['inners'] = $inners;

			$category_result[] = $category;
		}
		
		return $category_result;
	}
	
	public function sort_inners($a,$b) {
		if ($a['post_browe_count'] == $b['post_browe_count']) {
			return 0;
		}
		return ($a['post_browe_count'] > $b['post_browe_count']) ? -1 : 1;
	}*/
	
	public function getpost($id) {
		$contentmodel = new ContentModel();
		
		$post = $contentmodel->get_post($id);
		$post['user_info'] =  $this->getuser($post['post_author']);
		
		return $post;
	}
	
	public function gettags($postid) {
		
		$contentmodel = new ContentModel();
		$tags = array();
		
		$tag_ids = $this->gettagids($postid);
		//print_r($tag_ids);
		foreach ($tag_ids as $tag_id){
		
			$tags[] = $contentmodel->get_tag($tag_id);
		
		}
		return $tags;
	}
	
	public function gettagids($postid) {
		$contentmodel = new ContentModel();
		
		$tag_ids = $contentmodel->get_tagids('post',$postid);
		
		return $tag_ids;
	}
	
	public function getcomments($postid) {
		$contentmodel = new ContentModel();
		$comments = array();
	
		$comment_table = $contentmodel->get_comments($postid);
	
		foreach ($comment_table as $comment) {
			$author = $comment['comment_author'];
			
			$author_info  = $this->getcommentauthor($author); 
		
			$comment['author_info'] = $author_info;
			//$comment['date'] = 
			//$comment['date'] = date('Y-m-d H:i');
			//$comment['timebefore'] = date('Y-m-d H:i');
			$comment['timebefore'] = $comment['comment_date'];
			
			$comments[] = $comment;
		}
		
		return $comments;
	}
	
	public function getcommentauthor($user_id)
	{
		$contentmodel = new ContentModel();
		
		$user_info = $contentmodel->get_comment_author($user_id); 
		
		return $user_info;
	}
	
	
	public function getrightbar($post_info,$tags='') {
		$rightbar_result = array();
		$contentmodel = new ContentModel();
		$rightbars = $contentmodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			switch($rightbar['option_name']) {
				case 'author':
					$author_info = $this->getuser($post_info['post_author']);
					$rightbar['author'] = $author_info;
					$author_recent_post = $this->getuser_recent_post($author_info['user_id']);
					$rightbar['recent_posts'] = $author_recent_post;
					$rightbar_result[] = $rightbar;
					break;
				case 'userlike':
					$userlike_posts = $this->getuserlike($rightbar,$tags,$post_info);
					$rightbar['userlikes'] = $userlike_posts;
					$rightbar_result[] = $rightbar;
					break;
				default:break;
			}
		}
		$rightbar_result = array_reverse($rightbar_result);
		return $rightbar_result;
	}
	
	public function getuserlike($rightbar='',$tags='',$post_info='') {
		$contentmodel = new ContentModel();
		$userlike_result = array();
		
		if(empty($tags)) {
			//echo "empty tags";
			//print_r($post_info);
			$category_id = $contentmodel->get_category_id($post_info['post_id'],'post');
			//print_r($category_id);
			if ($category_id) {
				$posts = $this->getpost_category($category_id);
				//print_r($posts);
				if (count($posts) > 10) {
					$userlike_result = array_slice($posts,0,10); 
				} else {
					$userlike_result = $posts;
				}
			} else {
				$posts = $contentmodel->get_posts_by_browse();
				$userlike_result = $posts;
			}
		}else {
			$all_posts = array();
			foreach ($tags as $tag) {
				$posts = $this->getpost_tag($tag['tag_id']);
				$all_posts[] = $posts;
			}
			$result_array = array_shift($all_posts);
			foreach($all_posts as $tag_posts) {
				$result_array = array_intersect($result_array, $tag_posts);
			}
			if (count($result_array) > 10) {
				$userlike_result = array_slice($result_array,0,10); 
			} else {
				$userlike_result = $result_array;
			}
		}
		//print_r($userlike_result);
		return $userlike_result;
	}
	
	public function getpost_category($category_id) {
		$contentmodel = new ContentModel();
		$postids = array();
		$ids = $contentmodel->get_category_relationships($category_id,'post');
		foreach($ids as $v) {
			$postids[] = $v['category_relationship_mixid'];
		}
		//print_r($ids);
		//$postids = substr($postids, 0, -1);  
		//print_r($postids);
		$posts = $contentmodel->get_posts($postids);
		
		return $posts;
	}
	
	public function getpost_tag($tag_id) {
		$contentmodel = new ContentModel();
		$postids = array();
		$ids = $contentmodel->get_tag_relationships_postids($tag_id,'post');
		foreach($ids as $v) {
			$postids[] = $v['tag_relationship_mixid'];
		}
		//print_r($ids);
		//$postids = substr($postids, 0, -1);  
		//print_r($postids);
		$posts = $contentmodel->get_posts($postids);
		
		return $posts;
	}
	
	public function update_post($id) {
		$contentmodel = new ContentModel();
		$update_data = array('post_browe_count'=>new Zend_Db_Expr('post_browe_count+1'));
		$rowaffected = $contentmodel->update_post('posts',$update_data,$id);
	}
	
	public function getuser_recent_post($user_id) {
		$contentmodel = new ContentModel();
		$recent_posts = $contentmodel->getuser_recent_post($user_id);
		return $recent_posts;
	}
}