<?php
class MessageModel extends Zend_Db_Table {
 
    protected $_db;

	public function get_userinfo($nickname) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('users','*')
			->where('user_nickname = ?',$nickname);
		//print_r($select);
		return $this->_db->fetchRow($select);
	} 
	
	public function insert_message($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("message",$data);
        return $this->_db->lastInsertId();
	}
	
	public function get_posts($word) 
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_author like ? or post_title like ? or post_content like ?',"%$word%","%$word%","%$word%")
			->where('post_approved = 1');
		//print_r($select);
		return $this->_db->fetchAll($select);
	}
	
   
}