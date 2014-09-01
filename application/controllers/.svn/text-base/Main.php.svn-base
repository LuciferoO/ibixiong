<?php
/**
*	首页展示
**/

class MainController  extends Yaf_Controller_Abstract {

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
		} else {
			$this->getView()->assign("login",0);
		}
		
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
		//echo "<pre>";
		$page = $this->getRequest()->getParam("page",1);
		$allpage = ceil($this->getallshare() / 12);
		
		$navbars = $this->getnavbar("index");
		$categorys = $this->getcategory();
		$carousels = $this->getcarousel();
		$newshares = $this->getnewshare($page,$allpage);
		$rightbars = $this->getrightbar();
		//$hotposts = $this->gethotposts();
		//$hotcomments = $this->gethotcomments();
		//echo "</pre>";
		$this->getView()->assign("title"," 精品阅读分享 - i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("page",$page);
		$this->getView()->assign("allpage",$allpage);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("carousel",$carousels);
		$this->getView()->assign("newshare",$newshares);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/main.tpl");
		
	}

	
	public function getnavbar($type="index") {
		$indexmodel = new IndexModel();
		
		$allnavbars = $indexmodel->get_navbars($type);
		
		/*foreach ($allnavbars as $navbar) {
			if ($navbar['option_type'] === 'navbar' && $navbar['option_status'] === 1) {
				$navbars[] = $navbar;
			} 
		}*/
		
		return $allnavbars;
	}
	
	/*public function getcategory($type="index") {
		$indexmodel = new IndexModel();
		$category_result = array();	
		$categorys = $indexmodel->get_categorys($type);
		//echo "<pre>";
		//var_dump($categorys);
		foreach ($categorys as $category) {
			
			$inners = array();
			$innerids = $indexmodel->get_category_relationships($category['category_id']);
			//var_dump($innerids);
			foreach ($innerids as $category_relationship_mixid) {
				$post_id = $category_relationship_mixid['category_relationship_mixid'];
				//var_dump($post_id);
				$inner_post_info = $indexmodel->get_category_inner_post_info($post_id);
				//var_dump($innertitle);
				//$inner['post_id'] = $post_id;
				//$inner['post_title'] = $innertitle[0]['post_title'];
				if ($inner_post_info) {
					$inners[] = $inner_post_info;
				}	
			}
			//var_dump($inners);
			//print_r($inners);
			usort($inners, array("IndexController", "sort_inners"));
			//print_r($inners_sort);
			$category['inners'] =  array_slice($inners, 0, 5);
			//print_r($inners);
			//var_dump($category);
			$category_result[] = $category;
		}
		//var_dump($category_result);
		//echo "</pre>";		
		return $category_result;
	}
	
	public function sort_inners($a,$b) {
		if ($a['post_browe_count'] == $b['post_browe_count']) {
			return 0;
		}
		return ($a['post_browe_count'] > $b['post_browe_count']) ? -1 : 1;
	}*/
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
	
	public function getcarousel() {
		$carousel_result = array();
		$indexmodel = new IndexModel();
			
		$carousels = $indexmodel->get_carousels();
		
		foreach ($carousels as $carousel) {
			$others = unserialize($carousel['option_others']);
			$carousel['post_id'] = $others['post_id'];
			$carousel['post_img'] = $others['post_img'];
			$carousel_result[] = $carousel;
		}
		//echo "<pre>";
		//var_dump($carousel_result);
		//echo "</pre>";
		return $carousel_result;
	}
	
	public function getnewshare($page,$allpage) {
		$indexmodel = new IndexModel();
		$newshares = array();
		
		$newshares_without_safe = $indexmodel->get_newshares($page);
		
		foreach($newshares_without_safe as $newshare) {
			$newshare['post_content'] = strip_tags($newshare['post_content']);
			$newshare['post_content'] = mb_strcut($newshare['post_content'],0,200,'utf-8');
			$category_id = $indexmodel->get_category_id_from_category_relationships($newshare['post_id']);
			if ($category_id) {
				$category_result = $indexmodel->get_category_by_id($category_id);
				$newshare['category'] = $category_result[0];
				//echo "<pre>";
				//print_r($newshare);
				//echo "</pre>";
			}
		//	$tags = $this->gettags($newshare['post_id']);
		//	$newshare['tags'] = $tags;
			$newshares[] = $newshare;
		}
		
		return $newshares;
	}
	
	public function getallshare() {
		$indexmodel = new IndexModel();
		
		$allshares = $indexmodel->get_allshares();
		
		return $allshares;
	}
	
	public function gettags($postid) {
		
		$indexmodel = new IndexModel();
		$tags = array();
		
		$tag_ids = $this->gettagids($postid);
		//print_r($tag_ids);
		foreach ($tag_ids as $tag_id){
		
			$tags[] = $indexmodel->get_tag($tag_id);
		
		}
		return $tags;
	}
	
	public function gettagids($postid) {
		$indexmodel = new IndexModel();
		
		$tag_ids = $indexmodel->get_tagids('post',$postid);
		
		return $tag_ids;
	}
	
	public function getrightbar() {
		$rightbar_result = array();
		$indexmodel = new IndexModel();
		//echo "<pre>";
		$rightbars = $indexmodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			switch($rightbar['option_name']) {
				case 'post':
					$hotlinks = $this->gethotlink($rightbar);
					$rightbar['hotlinks'] = $hotlinks;
					$rightbar_result[] = $rightbar;
					break;
				case 'comment':
					$comments = $this->gethotlink($rightbar);
					$rightbar['hotlinks'] = $comments;
					$rightbar_result[] = $rightbar;
					break;
				default:break;
			}
			
		}
		
		//$rightbar = $rightbars;
		//print_r($rightbar_result);
		//echo "</pre>";
		return $rightbar_result;
	}
	
	public function gethotlink($rightbar='') {
		$indexmodel = new IndexModel();
		$hots_result = array();

		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);

		if (isset($others['days'])) {
			$days = intval($others['days']);
		}

		$hotlinks = $indexmodel->get_hotlinks($type,$days);
		
		foreach($hotlinks as $hotlink)
		{
			$hot = array();
			$hot['hotid'] = $hotlink[$type.'_id'];
			//echo $type;
			switch($type) {
				case 'post':
					$hot['hotitle'] = $hotlink[$type.'_title'];
					break;
				case 'comment':
					//echo $hotlink['comment_author']."<br />";
					$hot['hotitle'] = $hotlink[$type.'_content'];
					$author =  $indexmodel->get_comment_author($hotlink['comment_author']);
					if($author['user_nickname']) {
						$hot['author_name'] = $author['user_nickname'];
					}else {
						$hot['author_name'] = $author['user_login'];
					}
					$hot['author_id'] = $author['user_id']; 
					$hot['author_photo'] = $author['user_photo'];
					$hot['post_id'] = $hotlink['comment_post_id'];
					$post = $indexmodel->get_comment_post($hotlink['comment_post_id']);
					$hot['post_title'] = $post['post_title'];
					//echo "<pre>";
					//print_r($hot);
					//echo "</pre>";
					break;
				default:break;
			}
			
			$hots_result[] = $hot;
		}
		
		return $hots_result;
	}
}
