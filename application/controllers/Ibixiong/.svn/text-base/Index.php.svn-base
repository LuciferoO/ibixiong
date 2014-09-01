<?php
/**
*	用户登录页面
**/

class Ibixiong_IndexController  extends Yaf_Controller_Abstract {
	protected $session ;
	public function indexAction() {
		//echo __METHOD__ ." called";
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		
		$approved_posts_array = $managemodel->get_posts_by_status_and_original(1,0);//approved_posts  status 1
		$unapproved_posts_array = $managemodel->get_posts_by_status_and_original(0,0);
		$approved_original_posts_array = $managemodel->get_posts_by_status_and_original(1,1);//approved_posts  status 1
		$unapproved_original_posts_array = $managemodel->get_posts_by_status_and_original(0,1);
		$illegal_posts_array = $managemodel->get_posts_by_status(2);
		$rubblish_posts_array = $managemodel->get_posts_by_status(3);
		
		$this->getView()->assign("approved_posts_array",$approved_posts_array);
		$this->getView()->assign("unapproved_posts_array",$unapproved_posts_array);
		$this->getView()->assign("approved_original_posts_array",$approved_original_posts_array);
		$this->getView()->assign("unapproved_original_posts_array",$unapproved_original_posts_array);
		$this->getView()->assign("illegal_posts_array",$illegal_posts_array);
		$this->getView()->assign("rubblish_posts_array",$rubblish_posts_array);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/index.tpl");
		//echo $this->session->get('captcha');
	}
	

}