<?php
/**
 * Check_Login.php
 * 
 * @author  Lucifer_0
 * @date    2013-05-03 22:03
 * @version $Id$ 
*/	
class Antihack_Check_Login {
	
	//private static $instance;
	protected $_db;
	protected $user_info = array();
	protected $request;
	//protected $response;
	protected $session;
	protected $data = array();
	
	public function __construct () {
		$this->session = Yaf_Session::getInstance();
		$this->request = new Yaf_Request_Http();
	}
	
	/*private function __clone () {
	}
	
	public static function getInstance(){
		if (self::$instance == null) {
			self::$instance = new Antihack_Check_Login();
		}
		return self::$instance;
	}*/
	
	public function checklogin($space='') {
		
		$user_id = $this->request->getCookie('userid','');

		if ($this->session->get('login') == 1) {
			$this->data['login'] = 1;
			$this->data['user_id'] = $this->session->get('userid');
			$this->data['username'] = $this->session->get('username');
			$user_info = $this->getuserinfo($this->data['user_id']);
			$this->data['user_photo'] = $user_info['user_photo'];
			
		} else if (!empty($user_id)) {
			
			$username = $this->request->getCookie('username');
			$password = $this->request->getCookie('password');
			$user_info = $this->checkcookie($user_id,$username,$password);
			if ($user_info) {
				$this->data['login'] = 1;
				$this->data['user_id'] = $user_id;
				//$this->data['username'] = $username;
				$this->data['username'] = $user_info['user_nickname'];
				$this->data['password'] = $password;
				$this->data['user_photo'] = $user_info['user_photo'];
				$this->session->set('login',1);
				$this->session->set('userid',$user_id);
				//$this->session->set('username',$username);
				$this->session->set('username',$user_info['user_nickname']);
				$this->session->set('password',$password);
			}
		} else {
			$this->data['login'] = 0;
		}
		
		return $this->data;
	}
	
	protected function checkcookie($user_id,$user_name,$password) {
		
		$user_info = $this->getuserinfo($user_id);
		
		if ($password ==  $user_info['user_password'] && $user_name = $user_info['user_login']) {
			return $user_info;
		}
	}
	
	protected function getuserinfo($id) {
		$Adapter = new Zend_Db_Table();
		$this->_db = $Adapter->getAdapter();
  		$select = $this->_db->select();
  		$select->from('users','*')
			->where('user_id = ?',$id);	
		
		return $this->_db->fetchRow($select);
	}
	public function test() {
		//$this->response = new Yaf_Response_Abstract();
		//Yaf_Response_Abstract::setRedirect("http://www.ibixiong.com/content/view/id/1");
	}

}