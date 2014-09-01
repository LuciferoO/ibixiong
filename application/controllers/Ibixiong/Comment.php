<?php
class Ibixiong_CommentController  extends Yaf_Controller_Abstract {

	public function indexAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		
		$managemodel = new ManageModel();
		
		$approved_comments_array = $managemodel->get_comments_by_status(1);
		$unapproved_comments_array = $managemodel->get_comments_by_status(0);;
		$illegal_comments_array = $managemodel->get_comments_by_status(2);
		$rubblish_comments_array = $managemodel->get_comments_by_status(3);
		
		$this->getView()->assign("approved_comments_array",$approved_comments_array);
		$this->getView()->assign("unapproved_comments_array",$unapproved_comments_array);
		$this->getView()->assign("illegal_comments_array",$illegal_comments_array);
		$this->getView()->assign("rubblish_comments_array",$rubblish_comments_array);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/comment.tpl");
	}
	
	public function disposeAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
	
		$managemodel = new ManageModel();
		$data = array();
		$id = intval($this->getRequest()->getParam('id'));
		$type = intval($this->getRequest()->getParam('type'));
		
		$data['comment_approved'] = $type;
		//print_r($data);
		$rows_affected = $managemodel->update_comment('comments',$data,$id);
		
		if ($rows_affected) {
			echo "success";
			$this->redirect(DOMAIN . '/Ibixiong_Comment');
		}
	}
	
	public function editAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
	
		$managemodel = new ManageModel();

		$id = intval($this->getRequest()->getParam('id'));
		$comment = $managemodel->get_comment_by_id($id);
		$post = $managemodel->get_post($comment['comment_post_id']);
		$author_info = $managemodel->get_userinfo($comment['comment_author']);
		
		$this->getView()->assign("comment",$comment);
		$this->getView()->assign("post",$post);
		$this->getView()->assign("author_info",$author_info);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "admin/comment_editor.tpl");
	}
	
	public function updateAction() {
		$this->session = Yaf_Session::getInstance();
		$this->session->start();
		if (!$this->session->has('manager_login') && $this->session->get('manager_login') != 1) {
			$this->redirect(DOMAIN .'/Ibixiong_login');
		}
		$comment_id = $this->getRequest()->getPost("comment_id");
		$comment_content = $this->getRequest()->getPost("comment_content");
	
		$managemodel = new ManageModel();
		$data = array();
		$data['comment_content'] = $comment_content;
		//echo "<pre>";
		//print_r($data);
		//print_r($comment_id);
		$rows_affected = $managemodel->update_comment('comments',$data,$comment_id);
		
		//print_r($rows_affected);
		//echo "</pre>";
		if ($rows_affected) {
			echo "success";
			$this->redirect(DOMAIN . '/Ibixiong_Comment');
		}
		
	}
}