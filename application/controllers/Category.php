<?php
/**
*	分类浏览
**/

class CategoryController extends Yaf_Controller_Abstract {
	protected $session ;
	protected $check ;
	
	public function indexAction() {
	
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
		
		
		$navbars = $this->getnavbar("category");
		$categorys = $this->getcategory();
		$categoryswithtags = $this->getcategoryshow($categorys);
		$rightbars = $this->getrightbar();

		$this->getView()->assign("title"," 分类浏览 - i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("categoryswithtag",$categoryswithtags);
		#$script = Yaf_Application::app()->getConfig()->smarty->template_dir."index/category.tpl";
		#print_r($script);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/categoryindex.tpl");
	}

	public function categoryAction() {
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
	
		//echo "<pre>";
		$category_id = $this->getRequest()->getParam("id", 1);
		$category_id = is_numeric($category_id)?$category_id:intval($category_id);
		//$category_name = urldecode($this->getRequest()->getParam("name"));
		//$category_name = $category_name;
		//echo "<pre>";
		//print_r($category_name);
		
		$page = $this->getRequest()->getParam("page",1);
		//echo "$page";
		$navbars = $this->getnavbar("category");
		$categorys = $this->getcategory();
		//$posts = $this->getpost_category($category_id);
		//print_r($categorys);
		$category = $this->getcategory_by_id($category_id);
		//print_r($category);
		$rightbars = $this->getrightbar($category);
		//print_r($rightbars);
		
		
		$allpage = ceil($this->getpost_count($category) / 12);
		//print_r($allpage);
		//$posts = $this->getpost_category($category_id,$page,$allpage);
		$posts = $this->getpost_category($category,$page,$allpage);
		//print_r($posts);
		foreach ($posts as &$post) {
			$post['post_content'] = strip_tags($post['post_content']);
		}
		
		if ($category['category_parent'] != 0) {
			foreach ($categorys as $parent) {
				if ($parent['category_id'] == $category['category_parent']) {
					//print_r($parent);
					//获取属于该分类的标签
					$tags = $this->get_category_tags($category['category_id']);
					$this->getView()->assign("tags",$tags);
					$this->getView()->assign("current_parent",$parent);
					$this->getView()->assign("current_category",$category);
					break;
				}
			}
		} else {
			foreach ($categorys as $parent) {
				if ($parent['category_id'] == $category['category_id']) {
					
					$this->getView()->assign("current_category",$parent);
					//print_r($parent);
					break;
				}
			}
		}
		//print_r($category);
		
		//echo "<pre>";
		//$this->getView()->assign("title"," $category_name - i比熊 ");
		$this->getView()->assign("title",$category['category_name'] ."- i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		//$this->getView()->assign("category_name",htmlspecialchars($category_name));
		$this->getView()->assign("category_name",$category['category_name']);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("post",$posts);
		$this->getView()->assign("page",$page);
		$this->getView()->assign("allpage",$allpage);
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/category.tpl");
	}
	
	public function tagAction() {
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
	
		$tag_id = $this->getRequest()->getParam("id", 1);
		$tag_id = is_numeric($tag_id)?$tag_id:intval($tag_id);
		//$tag_name = urldecode($this->getRequest()->getParam("name"));
		//$tag_name = htmlspecialchars($tag_name);
		$tag = $this->get_tag($tag_id);
		$posts = $this->getpost_tag($tag_id);
		
		foreach ($posts as &$post) {
			$post['post_content'] = strip_tags($post['post_content']);
		}
		
		$navbars = $this->getnavbar("category");
		$categorys = $this->getcategory();
		$rightbars = $this->getrightbar();
		
		$this->getView()->assign("title",$tag['tag_name'] ." - i比熊 ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("tag",$tag);
		$this->getView()->assign("category",$categorys);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("post",$posts);

		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/tag.tpl");
	}
	
	
	public function getpost_category($category,$page,$allpage) {
		$categorymodel = new CategoryModel();
		$postids = array();
		$newposts = array();

		if ($category['category_parent'] == 0 ) {
			$category_ids = $categorymodel->get_child_category_ids($category['category_id']);
			$ids = $categorymodel->get_categorys_relationships($category_ids,'post',$page);
		} else {
			$ids = $categorymodel->get_category_relationships($category['category_id'],'post',$page);
		}
		//$ids = $categorymodel->get_category_relationships($category_id,'post',$page);
		if ($ids) {
			foreach($ids as $v) {
				$postids[] = $v['category_relationship_mixid'];
			}
			//print_r($ids);
			//$postids = substr($postids, 0, -1);  
			//print_r($postids);
			$posts = $categorymodel->get_posts($postids);
			
			foreach($posts as $post) {
				$post['post_content'] = strip_tags($post['post_content']);
			//	$tags = $this->gettags($newshare['post_id']);
			//	$newshare['tags'] = $tags;
				$newposts[] = $post;
			}
		}	
		return $newposts;
		
	}
	
	public function getpost_tag($tag_id) {
		$categorymodel = new CategoryModel();
		$postids = array();
		$ids = $categorymodel->get_tag_relationships_postids($tag_id,'post');
		foreach($ids as $v) {
			$postids[] = $v['tag_relationship_mixid'];
		}
		//print_r($ids);
		//$postids = substr($postids, 0, -1);  
		//print_r($postids);
		$posts = $categorymodel->get_posts($postids);
		
		return $posts;
	}
	
	public function getnavbar($type="category") {
		$categorymodel = new CategoryModel();
		
		$allnavbars = $categorymodel->get_navbars($type);
			
		return $allnavbars;
	}
	
	/*public function getcategory($type="category") {
		$categorymodel = new CategoryModel();
		$categorys = $categorymodel->get_categorys($type);
		return $categorys;
	}*/
	protected function getcategory_by_id($id) {
		$categorymodel = new CategoryModel();
		$category = $categorymodel->get_category_by_id($id);
		return $category;
	}
	
	protected function getcategory_by_name($name) {
		$categorymodel = new CategoryModel();
		$name = urldecode($name);
		$category = $categorymodel->get_category_by_name($name);
		return $category;
	}
	
	protected function getcategory($type="share") {
		$categorymodel = new CategoryModel();
		$category_result = array();	
		$categorys = $categorymodel->get_categorys($type);
		//print_r($categorys);
		foreach ($categorys as $category) {
			$children = array();
			$children = $categorymodel->get_child_category($category['category_id']);
			$category['children'] = $children;
			//print_r($category);
			$category_result[] = $category;
		}
		return $category_result;
	}
	
	protected function getpost_count($category) {
		$categorymodel = new CategoryModel();
		$postids = array();
		if ($category['category_parent'] == 0 ) {
			$category_ids = $categorymodel->get_child_category_ids($category['category_id']);
			$ids = $categorymodel->get_all_categorys_relationships($category_ids,'post');
		} else {
			$ids = $categorymodel->get_all_category_relationships($category['category_id'],'post');
		}
		//$ids = $categorymodel->get_all_category_relationships($category['category_id'],'post');
		return count($ids);
	}
	
	protected function get_tag($tag_id) {
		$categorymodel = new CategoryModel();
		
		$tag = $categorymodel->get_tag($tag_id);
		
		return $tag;
	}
	
	protected function get_category_tags($category_id) {
		$categorymodel = new CategoryModel();
		$tags = array();
		$tagids = array();
		$tagids = $categorymodel->get_tag_relationships_tagids($category_id);
		//print_r($tagids);
		foreach ($tagids as $tag_relationship_tag_id) {
			$tag_id = $tag_relationship_tag_id['tag_relationship_tag_id'];

			$innername = $categorymodel->get_category_innertagname($tag_id);

			$tag['tag_id'] = $tag_id;
			$tag['tag_name'] = $innername[0]['tag_name'];
			$tag['tag_slug'] = $innername[0]['tag_slug'];
			$tags[] = $tag;

		}
		
		return $tags;
	}
	
	public function getcategoryshow($categorys=array()) {
		$categoryswithtags = array();
		$categorymodel = new CategoryModel();
		foreach ($categorys as $category) {
			$inners = array();
			#print_r($category);
			$innertagids = $categorymodel->get_tag_relationships_tagids($category['category_id']);
			#print_r($innertagids);
			foreach ($innertagids as $tag_relationship_tag_id) {
				$tag_id = $tag_relationship_tag_id['tag_relationship_tag_id'];

				$innername = $categorymodel->get_category_innertagname($tag_id);

				$inner['tag_id'] = $tag_id;
				$inner['tag_name'] = $innername[0]['tag_name'];
				$inner['tag_slug'] = $innername[0]['tag_slug'];
				$inners[] = $inner;
				$category['tags'] = $inners;
			}
			$categoryswithtags[] = $category;
		}
		return $categoryswithtags;
	}
	
	public function getrightbar($category='') {
		$rightbar_result = array();
		$indexmodel = new IndexModel();
		//echo "<pre>";
		$rightbars = $indexmodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
		
			$hotlinks = $this->gethotlink($rightbar,$category);
			$rightbar['hotlinks'] = $hotlinks;
			$rightbar_result[] = $rightbar;
			
		}
		
		//$rightbar = $rightbars;
		//print_r($rightbar_result);
		//echo "</pre>";
		return $rightbar_result;
	}
	
	protected function sortposts($a,$b) {
		if ($a['post_browe_count'] == $b['post_browe_count']) {
			return 0;
		}
		return ($a['post_browe_count'] > $b['post_browe_count']) ? -1 : 1;
	}
	
	public function gethotlink($rightbar='',$category='') {
		$categorymodel = new CategoryModel();
		$hots_result = array();

		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);
		
		if (isset($others['days'])) {
			$days = intval($others['days']);
		}
		
		if ($category) {
			if ($type == 'post') {
				
				$postids = array();
				$posts = array();
				if ($category['category_parent'] == 0 ) {
					$category_ids = $categorymodel->get_child_category_ids($category['category_id']);
					$ids = $categorymodel->get_all_categorys_relationships($category_ids,'post');
				} else {
					$ids = $categorymodel->get_all_category_relationships($category['category_id'],'post');
				}
				if ($ids) {
					foreach($ids as $v) {
						$postids[] = $v['category_relationship_mixid'];
					}
					//print_r($ids);
					//$postids = substr($postids, 0, -1);  
					//print_r($postids);
					$posts = $categorymodel->get_posts($postids);
					//print_r($postids);
					usort($posts,array('CategoryController','sortposts'));
					$hot_posts = array_slice($posts,0,10);
					foreach($hot_posts as $hot_post) {
						$hot = array();
						$hot['hotid'] = $hot_post['post_id'];
						$hot['hotitle'] = htmlspecialchars($hot_post['post_title']);
						$hots_result[] = $hot;
					}
				}	
				
			} else if ($type == 'comment') {

				$postids = array();
				if ($category['category_parent'] == 0 ) {
					$category_ids = $categorymodel->get_child_category_ids($category['category_id']);
					$ids = $categorymodel->get_all_categorys_relationships($category_ids,'post');
				} else {
					$ids = $categorymodel->get_all_category_relationships($category['category_id'],'post');
				}
				if ($ids) {
					foreach($ids as $v) {
						$postids[] = $v['category_relationship_mixid'];
					}
					//print_r($postids);
					$comments = $categorymodel->get_all_category_comments($postids);
					//print_r($comments);
					$indexmodel = new IndexModel();
					foreach ($comments as $comment) {
						$hot = array();
						$author =  $indexmodel->get_comment_author($comment['comment_author']);
						$hot['hotitle'] = htmlspecialchars($comment['comment_content']);
						if($author['user_nickname']) {
								$hot['author_name'] = $author['user_nickname'];
						}else {
							$hot['author_name'] = $author['user_login'];
						}
						$hot['author_id'] = $author['user_id']; 
						$hot['author_photo'] = $author['user_photo'];
						$hot['post_id'] = $comment['comment_post_id'];
						$post = $indexmodel->get_comment_post($comment['comment_post_id']);
						$hot['post_title'] = $post['post_title'];
						$hots_result[] = $hot;
					}
				}
				
				
			}
			
		} else {
			$indexmodel = new IndexModel();
		
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
		}
		
		return $hots_result;
	}
	
	/*public function getrightbar() {
		$rightbar_result = array();
		$categorymodel = new CategoryModel();
		//echo "<pre>";
		$rightbars = $categorymodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			
			$hotlinks = $this->gethotlink($rightbar);
			$rightbar['hotlinks'] = $hotlinks;
			//var_dump($rightbar['hotlinks']);
			$rightbar_result[] = $rightbar;
		}
		
		//$rightbar = $rightbars;
		//var_dump($rightbar_result);
		//echo "</pre>";
		return $rightbar_result;
	}
	
	public function gethotlink($rightbar='') {
		$categorymodel = new CategoryModel();
		$hots_result = array();
		//var_dump($rightbar);
		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);
		//var_dump($others);
		if (isset($others['days'])) {
			$days = intval($others['days']);
		}
		//var_dump($days);
		$hotlinks = $categorymodel->get_hotlinks($type,$days);
		
		foreach($hotlinks as $hotlink)
		{
			$hot['hotid'] = $hotlink[$type.'_id'];
			if(isset($hotlink[$type.'_title'])) {
				$hot['hotitle'] = $hotlink[$type.'_title'];
			} else if($hotlink[$type.'_content']) {
				$hot['hotitle'] = $hotlink[$type.'_content'];
			}
			
			$hots_result[] = $hot;
		}
		//$hotlinks['others'] = $others;
		//var_dump($hots_result);
		
		return $hots_result;
	}*/
	
}
