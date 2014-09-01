<?php
class ShareModel extends Zend_Db_Table {
	
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
	
	public function get_category_relationships($category_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('category_relationships','category_relationship_mixid')
			->where('category_relationship_category_id = ?',$category_id)
			->where('category_relationship_type = ?','post')
			->where('category_relationship_status = ?',1);
  		return $this->_db->fetchAll($select);
	}
	
	public function get_category_tagids($category_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('tag_relationships','tag_relationship_tag_id')
			->where('tag_relationship_mixid = ?',$category_id)
			->where('tag_relationship_type = ?','category');
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
	}
	
	public function get_quotes() {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
		$select->from('options','*')
			->where('option_type = ?','share')
			->where('option_position = ?','rollquote');
		return $this->_db->fetchAll($select);	
	}
	
	public function insert_post($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("posts",$data);
        return $this->_db->lastInsertId();
	}
	
	public function insert_user_post_relationships($data) {
		$this->_db = $this->getAdapter();
<<<<<<< .mine
		print_r($data);
        $this->_db->insert("user_post_relationships",$data);
        return $this->_db->lastInsertId();
=======
		try {
			$this->_db->insert("user_post_relationships",$data);
        } catch(Exception $e) {
		   // when it fails to insert
		   // how can i run this echo
		   echo  $e->getMessage(); //??
		}
		return $this->_db->lastInsertId();
>>>>>>> .r2448
	}
	
	public function insert_tag($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("tags",$data);
        return $this->_db->lastInsertId();
	}
	
	public function insert_tag_relationships($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("tag_relationships",$data);
        return $this->_db->lastInsertId();
	}
	
	public function insert_category_relationships($data) {
		$this->_db = $this->getAdapter();
        $this->_db->insert("category_relationships",$data);
        return $this->_db->lastInsertId();
	}
	
	public function check_tag($tag_name) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_name = ?',$tag_name);
		return $this->_db->fetchRow($select);	
	}
	
	
	
	public function get_tags($tagahead) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
		$select->from('tags','*')
			->where('tag_name like ?',"%$tagahead%");
		return $this->_db->fetchAll($select);	
	}
}