<?php
/**
*	消息页面
**/

class User_MessageController extends Yaf_Controller_Abstract {

	protected $session ;
	protected $check ;
	
	public function indexAction() {
		//echo __METHOD__ ." has been called";
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
		$messages = $this->getmessages($this->user_id);
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($leftbars);
		//print_r($messages);
		//echo "</pre>";
		$this->getView()->assign("title"," 我的消息 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		//$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("message",$messages);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/message.tpl");
		
	}
	
	public function viewAction() {
		//echo __METHOD__ ." has been called";
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
		
		$message_id = $this->getRequest()->getParam("id");
		$type = $this->getRequest()->getParam("type");
		$this->user_id = $render_login_data['user_id'];
		//判断消息是否属于用户
		$flag = $this->message_auth($message_id,$this->user_id);	
			
		if ($flag) {
		
			$message = $this->getmessageby_id($message_id);
			//更新消息状态为已读
			$this->update_messageStatus($message_id);
			$this->getView()->assign("message",$message);
			$this->getView()->assign("flag",$flag);

		} else {
			$this->getView()->assign("flag",$flag);
		}
		
		$navbars = $this->getnavbar("index");
		$leftbars = $this->getleftbar("user");
		//$rightbars = $this->getrightbar();
			
		$user_info = $this->getuserinfo($this->user_id);
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		
		$this->getView()->assign("title"," 我的消息 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/message_view.tpl");
	}
	
	public function message_auth($message_id,$user_id) {
		if ($message_id) {
			$usermodel = new UserModel();
			$message_info = $usermodel->get_message($message_id);
			if ($user_id == $message_info['message_receptor']) {
				return true;
			}
		} 
		return false;
	}
	
	public function getmessageby_id($message_id) {
		if ($message_id) {
			$usermodel = new UserModel();
			$message_info = $usermodel->get_message($message_id);
			$sender = $usermodel->get_user($message_info['message_sender']);
			
			$message_info['sender_name'] = $sender['user_nickname'];
			
			return $message_info;
		} else {
			return false;
		}
	}
	
	public function getmessages($user_id = 0) {
		$usermodel = new UserModel();
		$message_infos = array();
		
		$messages = $usermodel->get_messages($user_id);
		
		//print_r($messages);
		foreach ($messages as $message) {
			$sender = $usermodel->get_user($message['message_sender']);
			
			//print_r($sender);
			
			if (!empty($sender['user_nickname'])) {
				$name = $sender['user_nickname'];
			} else {
				$name = $sender['user_login'];
			}
			
			$message['sender_name'] = $name;//
			$message_infos[] = $message;
		}
		return $message_infos;
	}
	
	public function update_messageStatus($message_id) {
		$usermodel = new UserModel();
		$data['message_status'] = 1;
		$usermodel->update_messageStatus('message',$data,$message_id);
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
