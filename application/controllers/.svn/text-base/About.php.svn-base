<?php
class AboutController extends Yaf_Controller_Abstract {

	public function indexAction() {
		//echo __METHOD__ ."has been called <br />";
		/*$this->check = new Antihack_Check_Login();
		$this->check->test ();*/
		$navbars = $this->getnavbar("index");
		
		$this->getView()->assign("title"," 如何获取邀请码 - i比熊 ");	
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/about.tpl");
	}
	
	public function getnavbar($type="index") {
		$indexmodel = new IndexModel();
		
		$allnavbars = $indexmodel->get_navbars($type);
		
		/*foreach ($allnavbars as $navbar) {
			if ($navbar['option_type'] === 'navbar' && $navbar['option_status'] === 1) {
				$navbars[] = $navbar;
			} 
		}*/
		
		return $allnavbars;
	}
}
?>