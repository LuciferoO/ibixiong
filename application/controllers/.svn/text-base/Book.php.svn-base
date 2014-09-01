<?php
/***************************
@author:lucifer
@funcion:读书功能
@date:2013/08/25
**************************/

class BookController  extends Yaf_Controller_Abstract {
	protected $session;
	
	public function indexAction() {
		/************************
			检查用户是否登录
		************************/
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}
		/****************************
			判断是否需要邀请码注册
		****************************/
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
		//$navbars = $this->getnavbar("book");
		//$categorys = $this->getcategory("book");
		$bookmodel = new BookModel();
		$hotBooks = $bookmodel->get_hot_books('book_rating_num',8);
		$newBooks = $bookmodel->get_new_books('book_pubdate',8);

		
		$navbars = $bookmodel->get_navbars("index");
		$categorys = $this->getcategory("book");
		//echo "</pre>";
		$this->getView()->assign("title","图书浏览 - i比熊");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		
		$this->getView()->assign("hotBooks",$hotBooks);
		$this->getView()->assign("newBooks",$newBooks);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/book.tpl");
	}
	
	public function viewAction() {
		/************************
			检查用户是否登录
		************************/
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
		} else {
			$this->getView()->assign("login",0);
		}
		/****************************
			判断是否需要邀请码注册
		****************************/
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
		//echo "<pre>";
		$id = $this->getRequest()->getParam('id');
		//print_r($id);
		$bookmodel = new BookModel();
		
		$book = $bookmodel->get_book($id);
		if (!empty($book['book_catalog'])) {
			$catalog = explode("\n", $book['book_catalog']);
			$book['book_catalog'] = "";
			foreach ($catalog as $v) {
				$book['book_catalog'] .= $v."<br/>";
			}
			
		}
		//echo "<pre>";
		$tagids_array = $bookmodel->get_book_tagids($id);
		//print_r($tagids_array);
		if ($tagids_array) {
			$tags = array();
			foreach ($tagids_array as $tag_id){
				$tags[] = $bookmodel->get_tag($tag_id);
			}
			//print_r($tags);
			$this->getView()->assign("tags",$tags);
		}
		
		//print_r($book);
		$navbars = $bookmodel->get_navbars("index");
		$categorys = $this->getcategory("book");
		//echo "</pre>";
		$this->getView()->assign("title",$book['book_title']." - i比熊");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		
		$this->getView()->assign("book",$book);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/book_view.tpl");
	}
	
	public function rateAction() { 
		$id = $this->getRequest()->getPost("id");
		$score = $this->getRequest()->getPost("value");
		$bookmodel = new BookModel();
		$book = $bookmodel->get_book($id);
		$total_score = $book['book_rating_average'] * $book['book_rating_num'] + $score*2;
		$book['book_rating_num'] += 1;
		
		$book['book_rating_average'] = round($total_score / $book['book_rating_num'],1);
		$rowaffected = $bookmodel->update_book('books',$book,$id);
	}
	
	protected function getcategory($type="share") {
		$indexmodel = new IndexModel();
		$category_result = array();	
		$categorys = $indexmodel->get_categorys($type);
		//print_r($categorys);
		foreach ($categorys as $category) {
			$children = array();
			$children = $indexmodel->get_child_category($category['category_id']);
			$category['children'] = $children;
			//print_r($category);
			$category_result[] = $category;
		}
		return $category_result;
	}
}
?>