<?php
class SearchModel extends Zend_Db_Table {
 
    protected $_db;

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
	
	/*public function get_categorys($type)
    {
  		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_status = 1');		
  		return $this->_db->fetchAll($select);
    }*/
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
	
	public function get_category_relationships($category_id)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('category_relationships','category_relationship_mixid')
			->where('category_relationship_category_id = ?',$category_id)
			->where('category_relationship_type = ?','post')
			->where('category_relationship_status = ?',1);
  		return $this->_db->fetchAll($select);
	}
	
	public function get_category_innertitle($post_id)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id = ?',$post_id)
			->where('post_approved = ?',1);
		return $this->_db->fetchRow($select);	
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
}