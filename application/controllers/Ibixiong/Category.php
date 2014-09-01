<?php
/**
*	用户登录页面
**/

class Ibixiong_CategoryController  extends Yaf_Controller_Abstract {
	protected $session ;
	public function indexAction() {
		//echo __METHOD__ ." called";
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		//echo "<pre>";
		$categorys_history_array = $this->getcategory(0);
		$categorys_preview_array = $this->getcategory(2);
		$categorys_array = $this->getcategory(1);
		$parent_category = $managemodel->get_parent_category(1);
		//print_r($categorys_history_array);
		//print_r($categorys_preview_array);
		//echo "</pre>";
		$this->getView()->assign("categorys_history_array",$categorys_history_array);
		$this->getView()->assign("categorys_preview_array",$categorys_preview_array);
		$this->getView()->assign("categorys_array",$categorys_array);
		$this->getView()->assign("parent_category",$parent_category);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/category.tpl");
		//echo $this->session->get('captcha');
	}
	
	public function updatecategoryAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		$managemodel = new ManageModel();
		if ($this->getRequest()->isPost()) {
			$data = array();
			$category_ids = $this->getRequest()->getPost("category_id");
			$status = $this->getRequest()->getParam("status");
			$data['category_status'] = $status;
			/*$lastid = $managemodel->update_categorys('categorys',$data,$category_ids);
			if ($lastid) {
				echo "success";
			}*/
			foreach($category_ids as $id) {
				$lastid = $managemodel->update_category('categorys',$data,$id);
				if ($lastid) {
					echo $id;
				}
			}
			
		} else {
			$status = $this->getRequest()->getParam("status");
			$id = $this->getRequest()->getParam("id");
			$data = array();
			$data['category_id'] = $id;
			$data['category_status'] = $status;
			$managemodel->update_category('categorys',$data,$id);
		}
	}
	
	public function addcategoryAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		if ($this->getRequest()->isPost()) {
			//echo "<pre>";
			$managemodel = new ManageModel();
			$data = array();
			$parent_id = $this->getRequest()->getPost("parentcategory");
			
			$data['category_name'] = urldecode($this->getRequest()->getPost("category"));
			$data['category_slug'] = urlencode($data['category_name']);
			$data['category_status'] = 2;
			$data['category_date'] = date("Y-m-d H:i:s");
			$data['category_dategmt'] = date("e");
			if (!empty($parent_id)) {
				$data['category_parent'] = $parent_id;
			}
			//print_r($data);
			$lastid = $managemodel->insert_category($data);
			//print_r($lastid);
			if ($lastid) {
				echo "Success";
			}
			//echo "</pre>";
		}
	}
	
	public function getcategory($status) {
		$managemodel = new ManageModel();

		$categorys = $managemodel->get_category($status);
		$categorys_result = array();
		
		foreach($categorys as $category) {
			$tagids = array();
			$tag_relationships = $managemodel->get_category_tagids($category['category_id']);
			if ($tag_relationships) {
				foreach($tag_relationships as $relationship) {
					$tagids[] = $relationship['tag_relationship_tag_id'];
				}
				$tags = $managemodel->get_tags($tagids);
				$category['tags'] = $tags;
				
			}
			$categorys_result[] = $category;
		}
		
		return $categorys_result;
	}
	

}