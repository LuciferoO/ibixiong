<?php
/**
*	用户登录页面
**/

class Ibixiong_LoginController  extends Yaf_Controller_Abstract {
	protected $session ;
	public function indexAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if ($this->session->get('manager_login') == 1) {
			$this->redirect(DOMAIN . '/Ibixiong_index');
		}
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/login.tpl");
		//echo $this->session->get('captcha');
	}
	
	public function loginAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		$username = $this->getRequest()->getPost('username');
		$password = $this->getRequest()->getPost('password');
		$captcha = $this->getRequest()->getPost('captcha');
		
		if (strtolower($this->session->get('captcha')) != strtolower($captcha)) {
			echo '101:验证码错误';
			exit;
		}
		
		$managemodel = new ManageModel();
		
		$manager_info = $managemodel->get_manager_info($username,'manager_name');
		//print_r($manager_info);
		if ($manager_info) {
			$salt = $manager_info['manager_salt'];
			
			$realpassword = md5($password.$salt);
			
			if ($realpassword == $manager_info['manager_password']) {
				$this->session->set('manager_login',1);
				$this->session->set('manager_info',$manager_info);
				//$this->session->set('manager_info',$manager_info);
				echo '1:登陆成功！';
				exit;
			} else {
				echo '101:用户名或密码错误';
				exit;
			}
		} else {
			echo '101:用户名或密码错误';
			exit;
		}
	}
	
	public function captchaAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		$captcha = $this->getRequest()->getPost('captcha');
		if(strtolower($this->session->get('captcha')) != strtolower($captcha))
		{
			echo 0;
			exit;
		} else {
			echo 1;
			exit;
		}
	}
}