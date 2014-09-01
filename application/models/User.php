<?php
class UserModel extends Zend_Db_Table {
 
    protected $_db;


    public function get_navbars($type)
    {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','navbar')
			->where('option_type = ?','index')	
			->where('option_status = ?',1);				
  		return $this->_db->fetchAll($select);
    }
	
	public function get_rightbars()
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','rightbar')
			->where('option_type = ?','index');			
  		return $this->_db->fetchAll($select);
	}
	
	public function get_leftbars($type,$position='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?',$position)
			->where('option_type = ?',$type);			
  		return $this->_db->fetchAll($select);
	}
	
	public function get_hotlinks($type='',$days=2)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from($type."s",'*')
			->where($type.'_date >= date_sub(now(),INTERVAL ? DAY)',$days);
		//var_dump($select);	
			//->where(substr($type, 0, -1).'_date >= ?',"date_format(date_sub(date_sub(now(),INTERVAL $days DAY), '%Y-%m-%d')");			
  		return $this->_db->fetchAll($select);
	}
	
	public function get_followids($user_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('user_relationship','user_relationship_follow_id')
			->where('user_relationship_master_id = ?',$user_id);		
  		return $this->_db->fetchAll($select);
	}
	
	public function user_post_relationships($user_ids=array(),$count=25,$offset=0) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('user_post_relationships','*')
			->where('user_post_relationship_user_id in (?)',$user_ids)
			->where('user_post_relationship_type in (?)',array('share','love','collect','zan'))
			->order('user_post_relationship_time')
			->limit($count,$offset);	
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
	
	public function get_commets($user_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('comments','*')
			->where('comment_author = ?',$user_id);
		//print_r($select);	
		return $this->_db->fetchAll($select);
	}
	
	public function get_user($user_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('users','*')
			->where('user_id = ?',$user_id);
		//print_r($select);	
		return $this->_db->fetchRow($select);
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
	
	public function check_data($data,$type,$table='users') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from($table,'*')
			->where($type.' = ?',$data);	
		return $this->_db->fetchRow($select);
	}
	
	public function update_data($table='users',$data,$condition) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('user_id = ?',$condition);
		//print_r($condition);
		//print_r($data);
		//print_r($where);
		$rows_affected = $this->_db->update($table, $data, $where);
		//$rows_affected = $db->update($table, $data, 'user_id = 1');
		//print_r($rows_affected);
		return $rows_affected;
	}
	
	/*public function update($data,$where) {
		$this->_db = $this->getAdapter();
		$rows_affected = $db->update($data, $where);
		return $rows_affected;
	}*/
	public function get_user_post_relationships_posts($user_id,$type='') {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('user_post_relationships','*')
			->where('user_post_relationship_user_id = ?',$user_id)
			->where('user_post_relationship_type = ?',$type)
			->order('user_post_relationship_time desc');
		//print_r($select);	
		return $this->_db->fetchAll($select);
	}
	
	public function get_user_relationships_count($user_id,$type='') {
		$this->_db = $this->getAdapter();
		return $this->_db->fetchOne('select count(*) from user_relationship where user_relationship_'.$type.'_id = '.$user_id);
	}
	
	public function get_regional($name,$type) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('regionals','regional_id')
			->where('regional_name = ?',$name)
			->where('regional_type = ?',$type);
		//print_r($select);
		return $this->_db->fetchRow($select);
	}
	
	public function get_message($id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('message','*')
			->where('message_id = ?',$id);
		//print_r($select);	
		return $this->_db->fetchRow($select);
	}
	
	public function get_messages($user_id = 0,$status = 0) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('message','*')
			->where('message_receptor = ?',$user_id);
		//print_r($select);	
		return $this->_db->fetchAll($select);
	}
	
	public function update_messageStatus($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('message_id = ?',$id);
		//print_r($data);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function get_postids($user_id = 0,$type='share') {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		if ($type=='browse') {
			$select->from('user_post_relationships','*')
				->where('user_post_relationship_user_id = ?',$user_id)
				->where('user_post_relationship_type = ?',$type)
				->order('user_post_relationship_time desc');
		} else {
			$select->from('user_post_relationships','user_post_relationship_post_id')
				->where('user_post_relationship_user_id = ?',$user_id)
				->where('user_post_relationship_type = ?',$type)
				->where('user_post_relationship_status = 1')
				->order('user_post_relationship_time desc');
		}
		return $this->_db->fetchAll($select);
	}
}