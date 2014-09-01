<?php
class CenterModel extends Zend_Db_Table {
	protected $_db;


    public function get_navbars($type) {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','navbar')
			->where('option_type = ?','index')	
			->where('option_status = ?',1);				
  		return $this->_db->fetchAll($select);
    }
	
	public function get_users($user_ids) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('users','*')
			->where('user_id in (?)',$user_ids);
		return $this->_db->fetchAll($select);
	}
	
	public function get_userinfo($nickname) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('users','*')
			->where('user_nickname = ?',$nickname);
		return $this->_db->fetchRow($select);
	}
	
	public function get_user_relationship($master,$follower) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('user_relationship','*')
			->where('user_relationship_master_id = ?',$master)
			->where('user_relationship_follow_id = ?',$follower);
		return $this->_db->fetchRow($select);
	}
	
	public function get_user_relationship_users($user_id,$type) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$colunmn = '';
		switch ($type) {
			case 'master':$colunmn='follow';break;
			case 'follow':$colunmn='master';break;
		}
		
		$select->from('user_relationship','user_relationship_'.$colunmn.'_id')
			->where('user_relationship_'.$type.'_id = ?',$user_id)
			->where('user_relationship_status = 1');
		return $this->_db->fetchAll($select);
	}
	
	public function get_user_relationships_count($user_id,$type='') {
		$this->_db = $this->getAdapter();
		return $this->_db->fetchOne('select count(*) from user_relationship where user_relationship_'.$type.'_id = '.$user_id.' and user_relationship_status=1');
	}
	
	public function get_user_post_relationships_posts($user_id,$type='') {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('user_post_relationships','*')
			->where('user_post_relationship_user_id = ?',$user_id)
			->where('user_post_relationship_type = ?',$type)
			->order('user_post_relationship_time desc')
			->limit(10,0);
		//print_r($select);	
		return $this->_db->fetchAll($select);
	}
	
	public function get_post($post_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id = ?',$post_id)
			->where('post_approved = 1');
		return $this->_db->fetchRow($select);
	}
	
	public function get_posts($post_ids) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id in (?)',$post_ids)
			->where('post_approved = 1');
		return $this->_db->fetchAll($select);
	}
	
	
	public function get_user_regional($id=0,$type='c') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('regionals','regional_name')
			->where('regional_id = ?',$id)
			->where('regional_type = ?',$type);	
		//print_r($select);	
		return $this->_db->fetchRow($select);
	}
	
	public function update_user_relationship($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('user_relationship_id = ?',$id);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function insert_user_relationship($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("user_relationship",$data);
        return $this->_db->lastInsertId();
	}
	
	public function get_user_comment_postids($user_id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
  		$select->from('comments','comment_post_id')
			->where('comment_author = ?',$user_id)
			->order('comment_date desc')
			->limit(10,0);	
		//print_r($select);	
		return $this->_db->fetchRow($select);
	}
	
}
?>