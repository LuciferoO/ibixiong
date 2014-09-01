<?php
/**
*	用户个人中心首页
**/

class CenterController extends Yaf_Controller_Abstract {

	protected $session ;
	protected $user_id;
	protected $check ;
	
	public function spaceAction() {

		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		
		if ($render_login_data['login'] == 1) {
			//echo "login <br/>";
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}

		$name = urldecode($this->getRequest()->getParam('name'));
		
		if (!$name) {
			exit();
		}
		//echo "<pre>";
		$navbars = $this->getnavbar("index");

		$user_info = $this->getuserinfo($name);
		//$recentbrowses = $this->getrecentactions($user_info['user_id'],'browse');
		$recentparticipate = $this->getrecentparticipate($user_info['user_id']);
		$user_relationships = $this->getuserrelationship_count($user_info['user_id']);
		if (isset($render_login_data['user_id'])) {
			$flag = $this->check_relationship($user_info['user_id'],$render_login_data['user_id']);
			if ($flag) {
				$this->getView()->assign("followed",1);
			}
		}
		
		//print_r($navbars);
		//print_r($user_info);
		//print_r($recentbrowses);
		//echo "</pre>";
		$this->getView()->assign("title",$user_info['user_nickname']." - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("recentparticipate",$recentparticipate);
		$this->getView()->assign("user_relationships",$user_relationships);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/center.tpl");
		
	}
	
	public function followAction() {
		if ($this->getRequest()->isPost()) {
			$this->check = new Antihack_Check_Login();
			$render_login_data = $this->check->checklogin();
			
			if ($render_login_data['login'] == 0) {
				exit();
			} 
			
			$follower = $this->getRequest()->getPost("user_id");
			$master_name = $this->getRequest()->getPost("follow");
			
			if ($master_name == $render_login_data['username']) {
				exit();
			}
			
			$centermodel = new CenterModel();
			$master_info = $centermodel->get_userinfo($master_name);
			
			$has_relationship = $centermodel->get_user_relationship($master_info['user_id'],$follower);
			//print_r($has_relationship);
			if ($has_relationship) {
				switch($has_relationship['user_relationship_status']) {
					case 1:
						$update_data = array();
						$update_data['user_relationship_status'] = 0;
						$centermodel->update_user_relationship('user_relationship',$update_data,$has_relationship['user_relationship_id']);
						echo 0;
						break;
					default:
						$update_data = array();
						$update_data['user_relationship_status'] = 1;
						$centermodel->update_user_relationship('user_relationship',$update_data,$has_relationship['user_relationship_id']);
						echo 1;
						break;
				}
			} else {
				$data = array();
				$data['user_relationship_master_id'] = $master_info['user_id'];
				$data['user_relationship_follow_id'] = $follower;
				$data['user_relationship_status'] = 1;
				$lastid = $centermodel->insert_user_relationship($data);
				if ($lastid) {
					echo 1;
				}
			}
		}
	}
	
	public function focusAction() {
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		
		if ($render_login_data['login'] == 1) {
			//echo "login <br/>";
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}

		$name = urldecode($this->getRequest()->getParam('name'));
		
		if (!$name) {
			exit();
		}
		//echo "<pre>";
		$navbars = $this->getnavbar("index");

		$user_info = $this->getuserinfo($name);
		//$recentbrowses = $this->getrecentactions($user_info['user_id'],'browse');
		$user_relationships = $this->getuserrelationship_count($user_info['user_id']);
		if (isset($render_login_data['user_id'])) {
			$flag = $this->check_relationship($user_info['user_id'],$render_login_data['user_id']);
			if ($flag) {
				$this->getView()->assign("followed",1);
			}
		}
		//$recentbrowses = $this->getrecentactions($user_info['user_id'],'browse');
		$user_ids = $this->getuserrelationship($user_info['user_id'],'follow');
		//print_r($user_ids);
		if ($user_ids) {
			$users = $this->getusers($user_ids);
			if ($users) {
				$this->getView()->assign("users",$users);
			}
		}
		//print_r($users);
		//echo "</pre>";
		$this->getView()->assign("title",$user_info['user_nickname']."的关注 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("user_relationships",$user_relationships);
		//$this->getView()->assign("users",$users);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/center_action.tpl");
	}
	
	public function followerAction() {
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		
		if ($render_login_data['login'] == 1) {
			//echo "login <br/>";
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}

		$name = urldecode($this->getRequest()->getParam('name'));
		
		if (!$name) {
			exit();
		}
		//echo "<pre>";
		$navbars = $this->getnavbar("index");

		$user_info = $this->getuserinfo($name);
		//$recentbrowses = $this->getrecentactions($user_info['user_id'],'browse');
		$user_relationships = $this->getuserrelationship_count($user_info['user_id']);
		if (isset($render_login_data['user_id'])) {
			$flag = $this->check_relationship($user_info['user_id'],$render_login_data['user_id']);
			if ($flag) {
				$this->getView()->assign("followed",1);
			}
		}
		//$recentbrowses = $this->getrecentactions($user_info['user_id'],'browse');
		$user_ids = $this->getuserrelationship($user_info['user_id'],'master');
		if ($user_ids) {
			$users = $this->getusers($user_ids);
			if ($users) {
				$this->getView()->assign("users",$users);
			}
		}
		//print_r($users);
		//echo "</pre>";
		$this->getView()->assign("title",$user_info['user_nickname']."的粉丝 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/center_action.tpl");
	}
	
	public function shareAction() {
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		
		if ($render_login_data['login'] == 1) {
			//echo "login <br/>";
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}
		
		$name = urldecode($this->getRequest()->getParam('name'));
		
		if (!$name) {
			exit();
		}
		//echo "<pre>";
		
		$navbars = $this->getnavbar("index");

		$user_info = $this->getuserinfo($name);
		$user_relationships = $this->getuserrelationship_count($user_info['user_id']);
		$user_share_ids = $this->getusershareids($user_info['user_id'],'share');
		
		if ($user_share_ids) {
			//print_r($user_share_ids);
			$user_shares = $this->getusershares($user_share_ids);
			//print_r($user_shares);
			if ($user_shares ) {
				foreach ($user_shares as &$share) {
					$share['post_content'] = strip_tags($share['post_content']);
					$share['post_content'] = mb_strcut($share['post_content'],0,100,'utf-8');
				}
				$this->getView()->assign("user_shares",$user_shares);
			}
		}
		
		//echo "</pre>";
		$this->getView()->assign("title",$user_info['user_nickname']."的分享 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("user_relationships",$user_relationships);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/center_action.tpl");
	}
	
	public function getnavbar($type="index") {
		$centermodel = new CenterModel();
		
		$allnavbars = $centermodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	public function getusers($user_ids = array()) {
		$centermodel = new CenterModel();
		//print_r($user_ids);
		$users = $centermodel->get_users($user_ids);
		//echo "3";
		return $users;
	}
	
	public function getuserinfo($nickname='') {
		$centermodel = new CenterModel();
		
		$user_info = $centermodel->get_userinfo($nickname);
		
		$province = $centermodel->get_user_regional($user_info['user_province'],'p');
		$city = $centermodel->get_user_regional($user_info['user_city'],'c');
		
		$user_info['province_name'] = $province['regional_name'];
		$user_info['city_name'] = $city['regional_name'];
		
		return $user_info;
	}
	
	public function getrecentparticipate($user_id) {
		$centermodel = new CenterModel();
		$recentparticipates = array();
		$post_ids = array();
		$post_comment_ids = array();
		$post_share_ids = array();
		
		$post_comment_ids = $centermodel->get_user_comment_postids($user_id);
		$post_share_ids = $centermodel->get_user_post_relationships_posts($user_id,'share');
		if ($post_share_ids && $post_comment_ids) {
			//交集
			$intersect = array_intersect($post_comment_ids,$post_share_ids);
			//与comment的差集
			$diff_comment = array_diff($post_comment_ids,$intersect);
			//与share的差集
			$diff_share = array_diff($post_share_ids,$intersect);
			//总集
			$post_ids = array_merge($intersect,$diff_comment,$diff_share);
			
			$recentparticipates = $centermodel->get_posts($post_ids);
		} else if ($post_share_ids && empty($post_comment_ids)) {
			$post_ids = $post_share_ids;
			
			$recentparticipates = $centermodel->get_posts($post_ids);
		} else if (empty($post_share_ids) && $post_comment_ids) {
			$post_ids = $post_comment_ids;
			
			$recentparticipates = $centermodel->get_posts($post_ids);
		}
		
		return $recentparticipates;
	}
	
	public function getrecentactions($user_id = 0, $type = '') {
		$centermodel = new CenterModel();
		$recentbrowses = array();
		$post_ids = array();
		$post_ids_array = $centermodel->get_user_post_relationships_posts($user_id,$type);
		//print_r($post_ids_array);
		foreach($post_ids_array as $array) {
			//print_r($array);
			$post_ids[] = $array['user_post_relationship_post_id'];
		}
		//print_r($post_ids);
		foreach($post_ids as $post_id) {
			$post_info = $centermodel->get_post($post_id);
			$recentbrowses[] = $post_info;
		}
		
		return $recentbrowses;
	}
	
	public function getuserrelationship($user_id,$type) {
		$centermodel = new CenterModel();
		//echo "1";
		$user_ids = $centermodel->get_user_relationship_users($user_id,$type);
		if ($user_ids) {
			//echo "2";
			return $user_ids;
		}
	}
	
	public function getuserrelationship_count($user_id) {
		$centermodel = new CenterModel();
		$followers = 0;
		$masters = 0;
		$result = array();
		$followers = $centermodel->get_user_relationships_count($user_id,'master');
		$masters = $centermodel->get_user_relationships_count($user_id,'follow');
		$shares = count($centermodel->get_user_post_relationships_posts($user_id,'share'));
		$result['followers'] = $followers;
		$result['masters'] = $masters;
		$result['shares'] = $shares;
		return $result;
	}
	
	public function check_relationship($master,$follower) {
		$centermodel = new CenterModel();
		$result = $centermodel->get_user_relationship($master,$follower);
		if (isset($result['user_relationship_status'])) {
			return $result['user_relationship_status'];
		}	
	}

	public function getusershareids($user_id,$type) {
		$centermodel = new CenterModel();
		//print_r($user_ids);
		$post_ids = $centermodel->get_user_post_relationships_posts($user_id,$type);
		//echo "3";
		return $post_ids;
	}
	
	public function getusershares($user_share_ids) {
		$centermodel = new CenterModel();
		//print_r($user_ids);
		$posts = $centermodel->get_posts($user_share_ids);
		//echo "3";
		return $posts;
	}
}
