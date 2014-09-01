<?php
/**
*	用户登录页面
**/

class Ibixiong_HomepageController  extends Yaf_Controller_Abstract {
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
		$aprrovedmonth_posts_array = $managemodel->get_posts_by_status_month(1,30);
		$approvedmonths_posts_array = $managemodel->get_posts_by_status_month(1,30*3);
		$carouselhistory_posts_array = $this->getcarousel(0);
		$carouselpreview_posts_array = $this->getcarousel(2);
		$carousel_posts_array = $this->getcarousel(1);
		//print_r($carouselhistory_posts_array);
		//print_r($carouselpreview_posts_array);
		//echo "</pre>";
		$this->getView()->assign("aprrovedmonth_posts_array",$aprrovedmonth_posts_array);
		$this->getView()->assign("approvedmonths_posts_array",$approvedmonths_posts_array);
		$this->getView()->assign("carouselhistory_posts_array",$carouselhistory_posts_array);
		$this->getView()->assign("carouselpreview_posts_array",$carouselpreview_posts_array);
		$this->getView()->assign("carousel_posts_array",$carousel_posts_array);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/homepage.tpl");
		//echo $this->session->get('captcha');
	}
	
	public function carouselAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		//echo "<pre>";
		$type = $this->getRequest()->getParam("type");
		
		
		switch($type) {
			case 'post':
				$status = $this->getRequest()->getParam("status");
				$id = $this->getRequest()->getParam("id");
				$this->add_carousel_post($status,$id);
				break;
			case 'carousel':
				$status = $this->getRequest()->getParam("status");
				$id = $this->getRequest()->getParam("id");
				$this->update_carousel_status($status,$id);
				break;
			case 'option';
				$option_ids = $this->getRequest()->getPost("option_id");
				//print_r($option_ids);
				foreach ($option_ids as $option_id) {
					$this->update_carousel_status(1,$option_id);
				}
				break;
			default:break;	
		}
		//echo "</pre>";
	}
	
	public function viewAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		
	}
	
	public function editAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$option_id = $this->getRequest()->getParam("id");
		
		$managemodel = new ManageModel();
		$carousel = $managemodel->get_carousel_by_id($option_id);
		$others = unserialize($carousel['option_others']);
		$carousel['post_id'] = $others['post_id'];
		$carousel['post_img'] = $others['post_img'];
		
		$this->getView()->assign("carousel",$carousel);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/homepage_editor.tpl");
	}
	
	public function editupdateAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$data = array();
		$others = array();
		$others['post_img'] = $this->getRequest()->getPost("post_img");
		$others['post_id'] = $this->getRequest()->getPost("post_id");
		//$others['url'] = $this->getRequest()->getPost("url");
		$option_id = $this->getRequest()->getPost("option_id");
		$data['option_value'] = $this->getRequest()->getPost("option_value");
		$data['option_name'] = $this->getRequest()->getPost("option_name");
		$data['option_others'] = serialize($others);
		
		$managemodel = new ManageModel();
		$rows_affected = $managemodel->update_carousel_by_id('options',$data,$option_id);
		if ($rows_affected) {
			echo "<script>alert('提交成功');window.location.href='". DOMAIN ."/Ibixiong_homepage';</script>";
		}
	}
	
	public function add_carousel_post($status,$id) {
		$managemodel = new ManageModel();
		$data = array();
		$post_data = array();
		$post_info = array();
		$post_info = $managemodel->get_post($id);
		$data['option_name'] = $post_info['post_title'];
		//$data['option_value'] = strip_tags($post_info['post_content']);
		$data['option_value'] = "http://" . DOMAIN . "/content/view/id/".$post_info['post_id'];
		$data['option_position'] = 'carousel';
		$data['option_status'] = 2;
		$data['option_type'] = 'index';
		$others = array('post_id'=>$post_info['post_id'],'post_img'=>$post_info['post_img']);
		$data['option_others'] = serialize($others);
		//print_r($data);
		$lastid = $managemodel->add_carousel_post($data);
		if ($lastid) {
			echo "add post to carousel";
			$post_data['post_carousel_status'] = 2;
			$managemodel->update_post('posts',$post_data,$post_info['post_id']);
		}	
	}
	
	public function update_carousel_status($status,$id) {
		$managemodel = new ManageModel();
		$data = array();
		$data['option_status'] = $status;
		$rowaffected = $managemodel->update_carousel_by_id('options',$data,$id);
		//print($id);
		
	}
	
	public function getcarousel($status) {
		$managemodel = new ManageModel();

		$carousels = $managemodel->get_carousel($status);
		$carousels_result = array();
		foreach ($carousels as $carousel) {
			$others = array();
			//print_r($carousel);
			$others = unserialize($carousel['option_others']);
			$carousel['post_id'] = $others['post_id'];
			$carousel['post_img'] = $others['post_img'];
			//if ($carousel['post_id'] == 14) {
			//	print_r($carousel);
			//	print_r($others);
			//}
			$carousels_result[] = $carousel;
		}
		
		return $carousels_result;
	}
	

}