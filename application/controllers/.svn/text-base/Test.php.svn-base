<?php
class testController extends Yaf_Controller_Abstract {
	protected $check;
	protected $session ;
	public function indexAction () {
		//echo __METHOD__ ."has been called <br />";
		/*$this->check = new Antihack_Check_Login();
		$this->check->test ();*/
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/test.tpl");
	}
	
	public function checkAction() {
		$name = $this->getRequest()->getPost('username');
		if ($name == "snow")
		{
			$result = 1;
		} else {
			$result = 0;
		}
		echo $result;
	}
}
?>