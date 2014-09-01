<?php
/**
*	用户浏览足迹
**/

class User_BrowseController extends Yaf_Controller_Abstract {

	protected $session ;
	protected $check ;
	
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
			$this->redirect(DOMAIN ."/login");
		}
		//echo "<pre>";
		$this->user_id = $render_login_data['user_id'];
		$navbars = $this->getnavbar("index");
		$leftbars = $this->getleftbar("user");
		//$rightbars = $this->getrightbar();
		$user_browses = $this->getrecentbrowses($this->user_id);
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($user_browses);
		//echo "</pre>";
		$this->getView()->assign("title"," 我的足迹 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		//$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("user_browses",$user_browses);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/browse.tpl");
		
	}
	
	public function getnavbar($type="index") {
		$usermodel = new UserModel();
		
		$allnavbars = $usermodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	public function getleftbar($type="user") {
		$usermodel = new UserModel();
		$leftbars = array();
		
		$leftbar_up = $usermodel->get_leftbars($type,'leftbar_up');
		$leftbar_down = $usermodel->get_leftbars($type,'leftbar_down');
		
		$leftbars['leftbar_up'] = $leftbar_up;
		$leftbars['leftbar_down'] = $leftbar_down;
		
		return $leftbars;
	}
	
	public function getuserinfo($user_id=0) {
		$usermodel = new UserModel();
		
		$user_info = $usermodel->get_user($user_id);
		
		return $user_info;
	}
	
	
	public function getrecentbrowses($user_id=0) {
		$usermodel = new UserModel();
		$user_browses = array();	
		$browses = $usermodel->get_postids($user_id,'browse');	
			
		foreach ($browses as $browse) {
			$post_info = $usermodel->get_post($browse['user_post_relationship_post_id']);
			if ($post_info) {
				$post_info['browse_count'] = $browse['user_post_relationship_count'];
				$user_browses[] = $post_info;
			}	
		}
			
		return $user_browses;
	}
	
	public function getrightbar() {
		$rightbar_result = array();
		$usermodel = new UserModel();
		//echo "<pre>";
		$rightbars = $usermodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			
			$hotlinks = $this->gethotlink($rightbar);
			$rightbar['hotlinks'] = $hotlinks;
			//var_dump($rightbar['hotlinks']);
			$rightbar_result[] = $rightbar;
		}
		
		//$rightbar = $rightbars;
		//var_dump($rightbar_result);
		//echo "</pre>";
		return $rightbar_result;
	}
	
	public function gethotlink($rightbar='') {
		$usermodel = new UserModel();
		$hots_result = array();
		//var_dump($rightbar);
		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);
		//var_dump($others);
		if (isset($others['days'])) {
			$days = intval($others['days']);
		}
		//var_dump($days);
		$hotlinks = $usermodel->get_hotlinks($type,$days);
		
		foreach($hotlinks as $hotlink)
		{
			$hot['hotid'] = $hotlink[$type.'_id'];
			if(isset($hotlink[$type.'_title'])) {
				$hot['hotitle'] = $hotlink[$type.'_title'];
			} else if($hotlink[$type.'_content']) {
				$hot['hotitle'] = $hotlink[$type.'_content'];
			}
			
			$hots_result[] = $hot;
		}
		//$hotlinks['others'] = $others;
		//var_dump($hots_result);
		
		return $hots_result;
	}
	
	public function getuserrelationship($user_id) {
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
}
?>