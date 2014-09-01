<?php
/*
*	用户账号管理
*/	
class User_AccountController extends Yaf_Controller_Abstract {
	
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
		//echo __METHOD__ ." has been called.";
		$navbars = $this->getnavbar("index");
		$leftbars = $this->getleftbar("user");
		$rightbars = $this->getrightbar();
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($user_info);
		//echo "</pre>";
		$this->getView()->assign("title"," 修改密码 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/account.tpl");
	}
	
	public function PostAction() {
		if ($this->getRequest()->isPost()) {
			//echo __METHOD__ ."has been called";
			$this->session = Yaf_Session::getInstance();
			if ($this->session->get('login') == 1) {
				$login = 1;
				$this->user_id = $this->session->get('userid');
				$this->username = $this->session->get('username');
				$this->getView()->assign("login",$login);
				$this->getView()->assign("user_id",$this->user_id);
				$this->getView()->assign("username",$this->username);
			} else {
				$login = 0;
				$this->getView()->assign("login",$login);
				$this->redirect(DOMAIN ."/login");
			}
			
			$password = $this->getRequest()->getPost("password");
			$newpassword = $this->getRequest()->getPost("newpassword");
			$repeatpassword = $this->getRequest()->getPost("repeatpassword");
			$user_info = $this->getuserinfo($this->user_id);
			$flag = $this->checkpassword($password,$newpassword,$repeatpassword,$user_info);
			if (!$flag) {
				$this->redirect(DOMAIN ."/user_info");
			}
			
			$data['user_password'] = md5($newpassword.$user_info['user_salt']);
			
			$this->updatedata($data);

			$this->redirect(DOMAIN ."/user_index");
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
		
		//print_r($user_id);
		$user_info = $usermodel->get_user($user_id);
			
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
	
	public function checkpassword($password,$newpassword,$repeatpassword,$user_info) {
		$usermodel = new UserModel();
	
		$real_password = md5($password.$user_info['user_salt']);
	
		if ($newpassword != $repeatpassword) {
			echo "两次输入密码不匹配";
			return false;
		}
	
		if ($real_password != $user_info['user_password']) {
			echo "原始密码错误！";
			return false;
		}
		
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