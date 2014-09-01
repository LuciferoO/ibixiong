<?php

class Bootstrap extends Yaf_Bootstrap_Abstract{
	
	private $_config;
	private $_db;
	
	public function _initBootstrap(){
		$this->_config = Yaf_Application::app()->getConfig();
	}
	
	public function _initIncludePath(){
        set_include_path(get_include_path() . PATH_SEPARATOR . $this->_config->application->library);
    }
	
	public function _initLocalName() {
		Yaf_Loader::getInstance()->registerLocalNamespace(array(
			'Smarty','Zend','Antihack','Mail'
		));

	}

	public function _initSmarty(Yaf_Dispatcher $dispatcher) {
        /* init smarty view engine */
		//echo __METHOD__ ."called<br/>";
		Yaf_Loader::import("Smarty/Adapter.php");
		/*var_dump(Yaf_Application::app()->getConfig()->smarty);*/
		
		$smarty = new Smarty_Adapter(null, Yaf_Application::app()->getConfig()->smarty);
		$dispatcher->setView($smarty);
		$dispatcher->disableView();//½ûÖ¹yaf×Ô¶¯äÖÈ¾Ä£°å
		//echo __METHOD__ ."after called<br/>";
	}
	
	public function _initDefaultDbAdapter() {
		//echo __METHOD__ ."called<br/>";
		//Yaf_Loader::import("Zend/Adapter.php");
		$dbAdapter = new Zend_Db_Adapter_Pdo_Mysql(
			$this->_config->database->params->toArray()
		);
		
		Zend_Db_Table::setDefaultAdapter($dbAdapter);
		//echo __METHOD__ ."after called<br/>";
	}
	
	public function _initManageControl() {
		$Adapter = new Zend_Db_Table();
		$this->_db = $Adapter->getAdapter();
  		$select = $this->_db->select();
  		$select->from('manage_control','*');		
  		$result = $this->_db->fetchAll($select);
		foreach ( $result as $array ) {
			if ($array['manage_control_status'] > 0) {
				Yaf_Registry::set($array['manage_control_name'], $array['manage_control_status']);
			}
		}
	}
}
