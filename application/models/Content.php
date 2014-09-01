<?php
class ContentModel extends Zend_Db_Table {
 
    protected $_db;


    public function get_navbars($type)
    {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','navbar')
			->where('option_type = ?',$type)	
			->where('option_status = ?',1);				
  		return $this->_db->fetchAll($select);
    }
	
	public function get_categorys($type)
    {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_status = 1')
			->where('category_parent = 0');		
  		return $this->_db->fetchAll($select);
    }
	
	public function get_child_category($category_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys',array('category_id','category_name','category_slug','category_parent'))
			->where('category_status = 1')
			->where('category_parent = ?',$category_id);		
  		return $this->_db->fetchAll($select);
	}
	/*public function get_categorys($type)
    {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_status = 1');		
  		return $this->_db->fetchAll($select);
    }
	
	public function get_category_inner_post_info($post_id)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id = ?',$post_id)
			->where('post_approved = ?',1);
		return $this->_db->fetchRow($select);	
	}*/
	
	public function get_rightbars()
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','rightbar')
			->where('option_type = ?','content');
			//->where('option_name != ?','userlike');			
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
	
	public function get_tag($tag_id)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_id = ?',$tag_id);
		return $this->_db->fetchRow($select);	
	}
	
	public function get_tagids($type='',$postid)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('tag_relationships','tag_relationship_tag_id')
			->where('tag_relationship_type = ?',$type)
			->where('tag_relationship_mixid = ?',$postid);
		//var_dump($select);
		return $this->_db->fetchAll($select);		
	}
	
	public function get_comments($postid)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('comments','*')
			->where('comment_post_id = ?',$postid);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_comment_author($user_id)
	{
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('users','*')
			->where('user_id = ?',$user_id);
		return $this->_db->fetchRow($select);
	}
	
	public function insert_comment($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("comments",$data);
        return $this->_db->lastInsertId();
	}
	
	public function insert_user_post_relationships($relationship_data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("user_post_relationships",$relationship_data);
        return $this->_db->lastInsertId();
	}
	
	public function insert_user_comment_relationship ($relationship_data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("user_comment_relationships",$relationship_data);
        return $this->_db->lastInsertId();
	}
	
	public function update_post($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('post_id = ?',$id);
		//print_r($data);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
	public function get_user_post_relationships($user_id,$post_id,$type) {
		$this->_db = $this->getAdapter();
		$select = $this->_db->select();
		$select->from('user_post_relationships','*')
			->where('user_post_relationship_user_id = ?',$user_id)
			->where('user_post_relationship_post_id = ?',$post_id)
			->where('user_post_relationship_type = ?',$type);
		return $this->_db->fetchRow($select);
	}
	
	public function update_user_post_relationships($table='',$relationship_data,$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('user_post_relationship_id = ?',$id);
		$rows_affected = $this->_db->update($table, $relationship_data, $where);
		return $rows_affected;
	}
	
	public function get_tag_relationships_postids($tag_id,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("tag_relationships",'tag_relationship_mixid')
			->where("tag_relationship_tag_id = ? ",$tag_id)
			->where("tag_relationship_type = ?",$type)
			->limit(30,0);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_posts($postids=array()) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("posts",'*')
			->where("post_id in (?)",$postids)
			->order('post_browe_count desc')
			->limit(20,0);
		//print_r($select);
		return $this->_db->fetchAll($select);		
	}
	
	public function get_posts_by_browse() {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("posts",'*')
			->order('post_browe_count desc')
			->limit(10,0);
		return $this->_db->fetchAll($select);	
	}
	
	public function getuser_recent_post($user_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("posts",'*')
			->where("post_author = ?",$user_id)
			->where("post_approved = 1")
			->order('post_date desc')
			->limit(5,0);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_category_id($id,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_category_id')
			->where("category_relationship_type = ?",$type)
			->where("category_relationship_mixid = ?",$id);
		//print_r($select);
		return $this->_db->fetchRow($select);	
	}
	
	public function get_category_relationships($category_id,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_mixid')
			->where("category_relationship_category_id = ? ",$category_id)
			->where("category_relationship_type = ?",$type)
			->where('category_relationship_status = ?',1);
		return $this->_db->fetchAll($select);	
	}
	
	public function update_post_comment_count() 
	{
		
	}
}