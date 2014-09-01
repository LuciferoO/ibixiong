<?php
class CategoryModel extends Zend_Db_Table {
 
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
	
	public function get_child_category_ids($category_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','category_id')
			->where('category_status = 1')
			->where('category_parent = ?',$category_id);		
  		return $this->_db->fetchAll($select);
	}
	
	public function get_category_by_id($id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_id = ?',$id)
			->where('category_status = 1');		
  		return $this->_db->fetchRow($select);
	}
	
	public function get_category_by_name($name) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_name = ?',$name)
			->where('category_status = 1');			
  		return $this->_db->fetchRow($select);
	}
	
	public function get_tag_relationships_tagids($category_id)
	{
		#print_r($category_id);
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('tag_relationships','tag_relationship_tag_id')
			->where('tag_relationship_mixid = ?',$category_id)
			->where('tag_relationship_type = ?','category');
  		return $this->_db->fetchAll($select);
	}
	
	public function get_category_innertagname($tag_id)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('tags','*')
			->where('tag_id = ?',$tag_id);
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
	
	public function get_all_category_relationships($category_id,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_mixid')
			->where("category_relationship_category_id = ? ",$category_id)
			->where("category_relationship_type = ?",$type);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_all_categorys_relationships($category_ids,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_mixid')
			->where("category_relationship_category_id in (?) ",$category_ids)
			->where("category_relationship_type = ?",$type);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_category_relationships($category_id,$type='',$page,$num=12) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_mixid')
			->where("category_relationship_category_id = ? ",$category_id)
			->where("category_relationship_type = ?",$type)
			->where("category_relationship_status = 1")
			->order('category_relationship_id desc')
			->limit($num,($page-1)*$num);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_categorys_relationships($category_ids,$type='',$page,$num=12) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("category_relationships",'category_relationship_mixid')
			->where("category_relationship_category_id in (?) ",$category_ids)
			->where("category_relationship_type = ?",$type)
			->where("category_relationship_status = 1")
			->order('category_relationship_id desc')
			->limit($num,($page-1)*$num);
		return $this->_db->fetchAll($select);	
	}
	
	public function get_tag_relationships_postids($tag_id,$type='') {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("tag_relationships",'tag_relationship_mixid')
			->where("tag_relationship_tag_id = ? ",$tag_id)
			->where("tag_relationship_type = ?",$type);
		return $this->_db->fetchAll($select);	
	}
	
	
	public function get_tag($tagid) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("tags",'*')
			->where("tag_id = ?",$tagid)
			->where("tag_status = 1");
		//print_r($select);
		return $this->_db->fetchRow($select);		
	}
	
	public function get_posts($postids=array()) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("posts",'*')
			->where("post_id in (?)",$postids)
			->order('post_date desc');
		//print_r($select);
		return $this->_db->fetchAll($select);		
	}
	
	public function get_all_category_comments($postids=array()) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from("comments",'*')
			->where("comment_post_id in (?)",$postids)
			->order(array('comment_date desc','comment_likecount desc'));
		//print_r($select);
		return $this->_db->fetchAll($select);	
	}
}
