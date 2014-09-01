<?php

require_once "sdk.class.php";
	
class Oss_Adapter {
	/**
     * Oss object
     * @var Oss
     */
    public $_oss;
	
	public function __construct() {
        $this->_oss = new ALIOSS();

    }
	
	public function getOss() {
        return $this->_oss;
    }
}
?>