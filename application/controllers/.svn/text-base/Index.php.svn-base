<?php
/**
*	首页展示
**/

class IndexController  extends Yaf_Controller_Abstract {

	protected $session ;
	protected $check ;
	
	public function indexAction() {
		//echo DOMAIN . "/login";
		$this->check = new Antihack_Check_Login();
		$render_login_data = $this->check->checklogin();
		if ($render_login_data['login'] == 1) {
			$this->getView()->assign("login",1);
			$this->getView()->assign("user_id",$render_login_data['user_id']);
			$this->getView()->assign("username",$render_login_data['username']);
			$this->getView()->assign("user_photo",$render_login_data['user_photo']);
			$message_count = 0;
			$focus_count = 0;
			//echo "<pre>";
			$indexmodel = new IndexModel();
			$message_unread = $indexmodel->get_message_count($render_login_data['user_id']);
			if ($message_unread) {
				$message_count = count($message_unread);
			}
			//echo "</pre>";
			//$focus_unread = $indexmodel->get_focus($render_login_data['user_id']);
			
			$this->getView()->assign("message_count",$message_count);
			//$this->getView()->assign("focus_count",$focus_count);
		} else {
			$this->getView()->assign("login",0);
		}
		

		//$hotposts = $this->gethotposts();
		$comments = $this->getnewcomments();
		$postids = array();
		foreach($comments as $comment) {
			$postids[] = $comment['comment_post_id'];
		}
		$postids = array_unique($postids);
		$posts = $this->getposts($postids);
		//echo "</pre>";
		$this->getView()->assign("title"," 精品阅读分享 - i比熊 ");
		$this->getView()->assign("comments",$comments);
		$this->getView()->assign("posts",$posts);

		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/index.tpl");
		
	}

	public function getnewcomments() {
		$indexmodel = new IndexModel();
		$comments = $indexmodel->get_new_comments();
		
		foreach($comments as &$comment) {
			$author =  $indexmodel->get_comment_author($comment['comment_author']);
			$comment['author_name'] = $author['user_nickname'];
			$comment['author_id'] = $author['user_id']; 
			$comment['author_photo'] = $author['user_photo'];
			$post = $indexmodel->get_comment_post($comment['comment_post_id']);
			$comment['post_title'] = $post['post_title'];
		}
		
		return $comments;
	}
	
	public function getposts($postids) {
		$indexmodel = new IndexModel();
		$posts = array();
		//$posts = $indexmodel->get_posts();
		foreach ($postids as $id) {
			$post = $indexmodel->get_post($id);
			$post['post_content'] = strip_tags($post['post_content'], '<br>');
			$post['post_content'] = mb_strcut($post['post_content'],0,1350,'utf-8');
			$post['post_content'] = strip_tags($post['post_content'], '<br>');
			
			$posts[] = $post;
		}
		return $posts;
	}
	
}
