<?php
/**
*	Rss生成页面
**/

class RssModel extends Zend_Db_Table {
	public function get_posts()
	{
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
  		$select->from('posts','*')
			->where('post_approved = 1')
			->order('post_date desc')
			->limit(100,0);		
  		return $this->_db->fetchAll($select);
	}
	
}

?>