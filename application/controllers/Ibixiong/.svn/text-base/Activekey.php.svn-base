<?php
/**
*	用户登录页面
**/

class Ibixiong_ActivekeyController  extends Yaf_Controller_Abstract {
	protected $session ;
	public function indexAction() {
		//echo __METHOD__ ." called";
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		
		$dispatched_activekey_array = $managemodel->get_activekeys_by_status(2);
		$used_activekey_array = $managemodel->get_activekeys_by_status(1);
		$activekey_array = $managemodel->get_activekeys_by_status(0);
		
		$this->getView()->assign("dispatched_activekey_array",$dispatched_activekey_array);
		$this->getView()->assign("used_activekey_array",$used_activekey_array);
		$this->getView()->assign("activekey_array",$activekey_array);

		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/activekey.tpl");
		//echo $this->session->get('captcha');
	}
	
	public function createkeysAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		if ($this->getRequest()->isPost()) {
			$number = $this->getRequest()->getPost("number");
			$managemodel = new ManageModel();
			$allkeys = array();
			for ($i = 0; $i < $number; $i++) {
				$activekey = array();
				$activekey['activekey_owner'] = 1;
				$activekey['activekey_value'] = md5('snow'.rand(1000,9999).'ibixiong');
				$activekey['activekey_status'] = 0;
				$lastid = $managemodel->insert_activekey($activekey);
				$allkeys[] = $activekey;
			}
			if ($allkeys) {
				echo json_encode($allkeys);
			}
		}
	}
	
	public function statusAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		$id = $this->getRequest()->getParam("id");
		$status = $this->getRequest()->getParam("status");
		
		$managemodel = new ManageModel();
		$activekey = array();
		$activekey['activekey_status'] =$status;
		$rows_affected = $managemodel->update_activekey('activekey',$activekey,$id);
		if ($rows_affected) {
			$url = $_SERVER['HTTP_REFERER'];
			echo "<script>alert('操作成功');window.location.href='$url';</script>";
			
			//$url_parts = explode('/', $url, 3);
			//$host = $url_parts[2];
			//if (preg_match('/.*\.ibixiong(\.com)$/i', $host)) {
			//$this->redirect($url);
			//} else {
			//	$this->redirect(DOMAIN);
			//}
		} else {
			$url = $_SERVER['HTTP_REFERER'];
			echo "<script>alert('执行不成功，请重试');window.location.href='$url';</script>";
			
			//$url_parts = explode('/', $url, 3);
			//$host = $url_parts[2];
			//if (preg_match('/.*\.ibixiong(\.com)$/i', $host)) {
			//$this->redirect($url);
			//} else {
			//	$this->redirect(DOMAIN);
			//}
		}
	}

}