<?php
class IndexModel extends Zend_Db_Table {
 
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
	
	public function get_category_by_id ($category_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('categorys','*')
			->where('category_status = 1')
			->where('category_id = ?',$category_id);		
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
	
	public function get_category_id_from_category_relationships($post_id)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('category_relationships','category_relationship_category_id')
			->where('category_relationship_mixid = ?',$post_id)
			->where('category_relationship_type = ?','post')
			->where('category_relationship_status = ?',1);
  		return $this->_db->fetchRow($select);
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
	
	public function get_message_count($user_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('message','*')
			->where('message_status = 0')
			->where('message_receptor = ?',$user_id);
		//print_r($select);	
		return $this->_db->fetchAll($select);	
	}
	
	public function get_carousels()
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('options','*')
			->where('option_position = ?','carousel')
			->where('option_status = ?',1);		
  		return $this->_db->fetchAll($select);
	}
	
	public function get_newshares($page,$num=12)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_approved = 1')
			->order('post_date desc')
			->limit($num,($page-1)*$num);		
  		return $this->_db->fetchAll($select);
	}
	

	
	public function get_post($postid)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id = ? ', $postid)
			->where('post_approved = 1');		
  		return $this->_db->fetchRow($select);
	}
	
	public function get_posts($postids)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id in (?)', $postids)
			->where('post_approved = 1');		
  		return $this->_db->fetchAll($select);
	}
	
	public function get_allshares($num=12)
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','count(post_id)');		
  		return $this->_db->fetchOne($select);
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
		if ($type=='post') {
			$select->from($type."s",'*')
				->where($type."_approved = 1")
				->where($type.'_date >= date_sub(now(),INTERVAL ? DAY)',$days)
				->order($type.'_browe_count desc')
				->limit(10,0);
		} else {
			$select->from($type."s",'*')
				->where($type."_approved = 1")
				->where($type.'_date >= date_sub(now(),INTERVAL ? DAY)',$days)
				->order($type.'_date desc')
				->limit(10,0);
		}	
		//var_dump($select);	
			//->where(substr($type, 0, -1).'_date >= ?',"date_format(date_sub(date_sub(now(),INTERVAL $days DAY), '%Y-%m-%d')");			
  		return $this->_db->fetchAll($select);
	}
	
	public function get_comment_author($author) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('users','*')
			->where('user_id = ?',$author);	
		return $this->_db->fetchRow($select);
	}
	
	public function get_comment_post($post_id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_id = ?',$post_id)
			->where('post_approved = 1');	
		return $this->_db->fetchRow($select);
	}
	
	public function get_new_comments() {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('comments','*')
			->where('comment_approved = 1')
			->order('comment_date desc')
			->limit(10,0);
		return $this->_db->fetchAll($select);
	}
}