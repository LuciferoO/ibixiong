<?php
/**
*	个人中心首页
**/

class User_IndexController extends Yaf_Controller_Abstract {

	protected $session ;
	protected $user_id;
	protected $check ;
	
	public function indexAction() {
		//echo __METHOD__ ." has been called";
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
			$this->redirect(DOMAIN ."/login");
		}
		//print_r($render_login_data);
		//echo $render_login_data['user_id'];
		//echo "<pre>";
		$this->user_id = $render_login_data['user_id'];
		//print_r($user_id);
		$navbars = $this->getnavbar("index");
		//$leftbars = $this->getleftbar("user");
		$rightbars = $this->getrightbar();
		//$recentnews = $this->getrecentnews($this->user_id);
		$recentbrowses = $this->getrecentactions($this->user_id,'browse');
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($leftbars);
		//print_r($recentnews);
		//echo "</pre>";
		$this->getView()->assign("title"," 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		//$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		//$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		$this->getView()->assign("rightbar",$rightbars);
		//$this->getView()->assign("recentnews",$recentnews);
		$this->getView()->assign("recentbrowses",$recentbrowses);
		$this->getView()->assign("user_relationships",$user_relationships);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/index.tpl");
		
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
		
		$province = $usermodel->get_user_regional($user_info['user_province'],'p');
		$city = $usermodel->get_user_regional($user_info['user_city'],'c');
		
		$user_info['province_name'] = $province['regional_name'];
		$user_info['city_name'] = $city['regional_name'];
		
		return $user_info;
	}
	
	public function getrecentactions($user_id = 0, $type = '') {
		$usermodel = new UserModel();
		$recentbrowses = array();
		$post_ids = array();
		$post_ids_array = $usermodel->get_user_post_relationships_posts($user_id,$type);
		//print_r($post_ids_array);
		foreach($post_ids_array as $array) {
			//print_r($array);
			$post_ids[] = $array['user_post_relationship_post_id'];
		}
		//print_r($post_ids);
		foreach($post_ids as $post_id) {
			$post_info = $usermodel->get_post($post_id);
			$recentbrowses[] = $post_info;
		}
		
		return $recentbrowses;
	}
	
	public function getrecentnews($user_id=0) {
		$usermodel = new UserModel();
		$recentnews = array();
		$followids = array();
		$followids_array = $usermodel->get_followids($user_id);
		//print_r($followids_array);
		foreach($followids_array as $array) {
			//print_r($array);
			$followids[] = $array['user_relationship_follow_id'];
		}
		//print_r($followids);
		$result = $usermodel->user_post_relationships($followids);
		//print_r($result);
		foreach ($result as $v) {
			$post_info = $usermodel->get_post($v['user_post_relationship_post_id']);
			$user_info = $usermodel->get_user($v['user_post_relationship_user_id']);
			$recent_info['post_id'] = $post_info['post_id'];
			$recent_info['post_title'] = $post_info['post_title'];
			$recent_info['user_id'] = $user_info['user_id'];
			$recent_info['user_name'] = $user_info['user_login'];
			$recent_info['action_time'] = $v['user_post_relationship_time'];
			$recent_info['action'] = $v['user_post_relationship_type'];
			$recentnews[] = $recent_info;
		}
		
		return $recentnews;
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
