<?php
class ManageModel extends Zend_Db_Table {
 
    protected $_db;
	//get manager_info
	public function get_manager_info($value,$type="manager_id") {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('managers','*')
			->where($type.' = ?',$value);
		return $this->_db->fetchRow($select);
	}
	
	
	//check and get manager_info
	public function checkAndget_manager_info($manager_name,$manager_password) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('managers','*')
			->where('manager_name = ?',$manager_name)
			->where('manager_password = ?',$manager_password);
		return $this->_db->fetchRow($select);
	}
	
	/******************************************
						posts
	******************************************/
	public function get_posts_by_status($status) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('posts','*')
			->where('post_approved = ?',$status)
			->order('post_date desc');
		return $this->_db->fetchAll($select);
	}
	
	public function get_posts_by_status_and_original($status,$original) {
		$select = $this->_db->select();
		$select->from('posts','*')
			->where('post_approved = ?',$status)
			->where('post_original = ?',$original)
			->order('post_date desc');
		return $this->_db->fetchAll($select);
	}
	
	public function get_posts_by_status_month($status,$days) {
		$select = $this->_db->select();
		$select->from('posts','*')
			->where('post_approved = ?',$status)
			->where('post_date >= date_sub(now(),INTERVAL ? DAY)',$days)
			->where('post_carousel_status = 0')
			->order('post_browe_count desc');
		return $this->_db->fetchAll($select);
	}
	
	public function get_carousel($status) {
		$select = $this->_db->select();
		$select->from('options','*')
			->where('option_status = ?',$status)
			->where('option_type = ? ','index')
			->where('option_position = ? ','carousel');
		return $this->_db->fetchAll($select);
	}
	
	public function get_carousel_by_id($id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','carousel')
			->where('option_id = ?',$id);		
  		return $this->_db->fetchRow($select);
	}
	
	public function update_carousel_by_id($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('option_id = ?',$id);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function get_category($status) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('categorys','*')
			->where('category_status = ?',$status);
		return $this->_db->fetchAll($select);
	}
	
	public function get_parent_category($status) {
		$select = $this->_db->select();
		$select->from('categorys','*')
			->where('category_status = ?',$status)
			->where('category_parent = ?',0);
		return $this->_db->fetchAll($select);
	}
	
	public function get_parent_category_by_id($id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('categorys','*')
			->where('category_id = ?',$id)
			->where('category_parent = ?',0);
		return $this->_db->fetchRow($select);
	}
	
	public function get_category_by_id($id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('categorys','*')
			->where('category_id = ?',$id);
		return $this->_db->fetchRow($select);
	}
	

	
	
	public function get_category_tagids($category_id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tag_relationships','tag_relationship_tag_id')
			->where('tag_relationship_mixid = ?',$category_id)
			->where('tag_relationship_type = ?','category');
		return $this->_db->fetchAll($select);
	}
	
	/********************************
		Content
	*********************************/
	public function get_post($id)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('posts','*')
			->where('post_id = ?',$id);
		return $this->_db->fetchRow($select);
	}
	
	public function get_userinfo($userid)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('users','*')
			->where('user_id = ?',$userid);
		return $this->_db->fetchRow($select);
	}
	public function check_tag($tag_name) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_name = ?',$tag_name);
		return $this->_db->fetchRow($select);	
	}
	
	public function insert_tag($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("tags",$data);
        return $this->_db->lastInsertId();
	}
	
	public function get_tag($tag_id)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_id = ?',$tag_id);
		return $this->_db->fetchRow($select);	
	}
	
	public function get_tags($tag_ids)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_id in (?)',$tag_ids);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_tagids_from_relationship($type='',$postid)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tag_relationships','tag_relationship_tag_id')
			->where('tag_relationship_type = ?',$type)
			->where('tag_relationship_mixid = ?',$postid)
			->where('tag_relationship_status = 1');
		//var_dump($select);
		return $this->_db->fetchAll($select);		
	}
	
	public function update_tag_relationship($table,$data=array(),$ids) {
		$this->_db = $this->getAdapter();
		$where[] = $this->_db->quoteInto('tag_relationship_tag_id = ?',$ids['tag_id']);
		$where[] = $this->_db->quoteInto('tag_relationship_mixid = ?',$ids['post_id']);
		$where[] = $this->_db->quoteInto('tag_relationship_type = ?','post');
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function update_tag_relationships($table,$data=array(),$ids) {
		$this->_db = $this->getAdapter();
		$where[] = $this->_db->quoteInto('tag_relationship_tag_id in (?)',$ids['tag_ids']);
		$where[] = $this->_db->quoteInto('tag_relationship_mixid = ?',$ids['post_id']);
		$where[] = $this->_db->quoteInto('tag_relationship_type = ?','post');
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function check_post_tag_relationship($post_id,$tag_id) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tag_relationships','*')
			->where('tag_relationship_type = ?','post')
			->where('tag_relationship_mixid = ?',$post_id)
			->where('tag_relationship_tag_id = ?',$tag_id);
		//var_dump($select);
		return $this->_db->fetchRow($select);
	}
	
	public function insert_tag_relationships($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("tag_relationships",$data);
        return $this->_db->lastInsertId();
	}
	
	public function update_post($table,$data=array(),$id) 
	{
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('post_id = ?',$id);
		//print_r($data);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function add_carousel_post($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("options",$data);
        return $this->_db->lastInsertId();
	}
	
	/***************************************************************
		category relationship
	***************************************************************/
	public function get_category_from_relationship($type,$id,$status) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('category_relationships','*')
			->where('category_relationship_type = ?',$type)
			->where('category_relationship_mixid = ?',$id)
			->where('category_relationship_status = ?',$status);
		//print_r($select);
		return $this->_db->fetchRow($select);	
	}
	
	public function get_category_from_relationship_by_category($id,$category_id,$type) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('category_relationships','category_relationship_id')
			->where('category_relationship_type = ?',$type)
			->where('category_relationship_mixid = ?',$id)
			->where('category_relationship_category_id = ?',$category_id);
		return $this->_db->fetchRow($select);	
	}
	
	public function update_category_from_relationship($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('category_relationship_id = ?',$id);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function insert_category_relationship($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("category_relationships",$data);
        return $this->_db->lastInsertId();
	}
	
	/**********************
		category
	**********************/
	public function insert_category($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("categorys",$data);
        return $this->_db->lastInsertId();
	}
	
	public function update_category($table,$data=array(),$ids) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('category_id in (?)',$ids);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function update_categorys($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('category_id = ?',$id);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	/*********************
		comments
	*********************/
	public function get_comments_by_status($status) {
		$select = $this->_db->select();
		$select->from('comments','*')
			->where('comment_approved = ?',$status)
			->order('comment_date desc');
		return $this->_db->fetchAll($select);
	}
	
	public function get_comment_by_id($id) {
		$select = $this->_db->select();
		$select->from('comments','*')
			->where('comment_id = ?',$id);
		return $this->_db->fetchRow($select);
	}
	
	public function update_comment($table,$data=array(),$id) 
	{
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('comment_id = ?',$id);
		//print_r($data);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	/*******************************
		active_key
	*******************************/
	public function get_activekeys_by_status ($status) {
		$select = $this->_db->select();
		$select->from('activekey','*')
			->where('activekey_status = ?',$status);
		return $this->_db->fetchAll($select);
	}
	
	public function insert_activekey($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("activekey",$data);
        return $this->_db->lastInsertId();
	}
	
	public function update_activekey($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('activekey_id = ?',$id);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	
	
}