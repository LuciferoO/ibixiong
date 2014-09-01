<?php
/*
*	用户信息中心
*/	
class User_InfoController extends Yaf_Controller_Abstract {
	
	protected $session;
	protected $user_id;
	protected $check ;
	
	public function IndexAction() {
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
		$rightbars = $this->getrightbar();
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($user_info);
		//echo "</pre>";
		$this->getView()->assign("title"," 个人资料 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("user_relationships",$user_relationships);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/info.tpl");
	}
	
	public function PostAction() {
		if ($this->getRequest()->isPost()) {
			//echo __METHOD__ ."has been called";
			$this->session = Yaf_Session::getInstance();
			if ($this->session->get('login') == 1) {
				$login = 1;
				$user_id = $this->session->get('userid');
				$username = $this->session->get('username');
				$this->getView()->assign("login",$login);
				$this->getView()->assign("user_id",$user_id);
				$this->getView()->assign("username",$username);
			} else {
				$login = 0;
				$this->getView()->assign("login",$login);
				$this->redirect(DOMAIN ."/login");
			}
			
			$data['user_nickname'] = $this->getRequest()->getPost("nickname");
			$data['user_sex'] = $this->getRequest()->getPost("radiosSex");
			$province = $this->getRequest()->getPost("ddlProvince");
			$city = $this->getRequest()->getPost("ddlCity");
			$data['user_sexual_orientation'] = $this->getRequest()->getPost("checkboxSexMale") + $this->getRequest()->getPost("checkboxSexFemale");
			$data['user_qq'] = intval($this->getRequest()->getPost("QQ"));
			$data['user_weibo'] = $this->getRequest()->getPost("weibo");
			$data['user_description'] = $this->getRequest()->getPost("pesentation");
			//echo "<pre>";
			//print_r($province);
			//print_r($city);
			$regionals = $this->getregionals($province,$city);
			
			$data['user_province'] = $regionals['province']['regional_id'];
			$data['user_city'] = $regionals['city']['regional_id'];
			
			//print_r($data);
			//$this->checkdata($data);
			$rowaffected = $this->updatedata($data);
			//echo "</pre>";
			if ($rowaffected) {
				$this->session->set('username',$data['user_nickname']);
			}
			$this->redirect(DOMAIN ."/user_info");
		} else {
			$this->redirect(DOMAIN ."/user_index");
		}
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
	
	public function getrightbar() {
		$rightbar_result = array();
		$usermodel = new UserModel();

		$rightbars = $usermodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			
			$hotlinks = $this->gethotlink($rightbar);
			$rightbar['hotlinks'] = $hotlinks;
			$rightbar_result[] = $rightbar;
		}
		
		return $rightbar_result;
	}
	
	public function gethotlink($rightbar='') {
		$usermodel = new UserModel();
		$hots_result = array();

		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);

		if (isset($others['days'])) {
			$days = intval($others['days']);
		}
		
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

		return $hots_result;
	}
	
	public function checkdata($data=array()){
		$usermodel = new UserModel();
		
		$nickname_info = $usermodel->check_data($data['user_nickname'],'user_nickname','users');
		
		if ($nickname_info) {
			echo "用户昵称已存在";
			$this->redirect(DOMAIN ."/user_info");
		}
		
		
		if (!empty($data['city'])) {
			$city_info = $usermodel->check_data($data['city'],'regional_name','regionals');
			$parent_info = $usermodel->check_data($city_info['regional_parent'],'regional_id','regionals');
			
			if(!$parent_info) {
				echo "居住地信息错误";
				$this->redirect(DOMAIN ."/user_info");
			}
		} else if (!empty($data['province'])) {
			$province_info = $usermodel->check_data($data['province'],'regional_name','regionals');
		}
	}
	
	public function updatedata($data) {//$where='') {
		$usermodel = new UserModel();
		
		//$where = array('user_id = ?' => $this->user_id);
		//$where = $this->_db->quoteInto('user_id = ?',$this->user_id);
		//print_r($data);
		$this->user_id = $this->session->get('userid');
		//print_r($this->user_id);
		$rows_affected =  $usermodel->update_data("users",$data,$this->user_id);
		
		return $rows_affected;
	}
	
	public function getregionals($province,$city) {
		$regionals = array();
		$usermodel = new UserModel();
		
		$regionals['province'] = $usermodel->get_regional($province,'p');
		$regionals['city'] = $usermodel->get_regional($city,'c');
		
		return $regionals;
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