<?php
class BookModel extends Zend_Db_Table {
 
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
	
	public function get_book($id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();
		//try {
  		$select->from('books','*')
			->where('book_id = ?',$id)
			->where('book_status = ?',1);	
		//print_r($select);	
  		return $this->_db->fetchRow($select);
		//} catch (Exception $e) {
		//	echo $e->getMessage();
		//}
	}
	
	public function get_book_tagids($id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();

  		$select->from('book_tag_relationship','book_tag_relationship_tagid')
			->where('book_tag_relationship_mixid = ?',$id);	

  		return $this->_db->fetchAll($select);
	}
	
	public function get_hot_books($condition,$num) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();

  		$select->from('books','*')
			->order($condition,' desc')
			->limit($num,0);	

  		return $this->_db->fetchAll($select);
	}
	
	public function get_new_books($condition,$num) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();

  		$select->from('books','*')
			->order('book_pubdate desc')
			->limit($num,0);	

  		return $this->_db->fetchAll($select);
	}
	
	public function get_tag($id) {
		$this->_db = $this->getAdapter();
  		$select = $this->_db->select();

  		$select->from('book_tags','*')
			->where('book_tag_id = ?',$id);	

  		return $this->_db->fetchRow($select);
	}
	
	public function update_book($table,$data=array(),$id) {
		$this->_db = $this->getAdapter();
		$where = $this->_db->quoteInto('book_id = ?',$id);
		//print_r($data);
		$rows_affected = $this->_db->update($table, $data, $where);
		return $rows_affected;
	}
	
}	
?>