<?php
/*
*	用户信息中心
*/	
class User_PhotoController extends Yaf_Controller_Abstract {
	
	protected $session;
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
			$this->redirect(DOMAIN ."/login");
		}
		
		$this->user_id = $render_login_data['user_id'];
		$user_info = $this->getuserinfo($this->user_id);
		
		$navbars = $this->getnavbar("index");
		$leftbars = $this->getleftbar("user");
		$rightbars = $this->getrightbar();
		$user_relationships = $this->getuserrelationship($user_info['user_id']);
		//print_r($user_info);
		//echo "</pre>";
		$this->getView()->assign("title"," 头像设置 - 个人中心 - i比熊  ");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("user_info",$user_info);
		$this->getView()->assign("leftbar_up",$leftbars['leftbar_up']);
		$this->getView()->assign("leftbar_down",$leftbars['leftbar_down']);
		$this->getView()->assign("rightbar",$rightbars);
		$this->getView()->assign("user_relationships",$user_relationships);
		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "user/photo.tpl");
	}
	
	public function uploadAction() {
		if ($this->getRequest()->isPost()) {
		
			$this->check = new Antihack_Check_Login();
			$render_login_data = $this->check->checklogin();
			if ($render_login_data['login'] == 1) {
				$this->getView()->assign("login",1);
				$this->getView()->assign("user_id",$render_login_data['user_id']);
				$this->getView()->assign("user_name",$render_login_data['username']);
			} else {
				$this->getView()->assign("login",0);
				$this->redirect(DOMAIN ."/login");
			}
			
			$this->user_id = $render_login_data['user_id'];
			$img_data = file_get_contents('php://input');
			
			$user_info = $this->getuserinfo($this->user_id);
			$hash = md5(time().$user_info['user_salt']);
			$path = 'user_photos';
			$filename = $this->user_id."_".$hash.".png";
			
			$oss_adapter = new Oss_Adapter();
			$oss = $oss_adapter->getOss();
			$bucket = UPLOAD_BUCKET;
			$object = $path;
			//检查目录是否存在
			$is_object_exist = $oss->is_object_exist($bucket, $object);
			if (!$is_object_exist) {
				$create_object_dir = $oss->create_object_dir($bucket,$object);
				if (!$create_object_dir) {
					echo "目录创建失败";
					return false;
				}
			}
			
			$object = $path."/".$filename;
			$data = $img_data;
			$length = strlen($img_data);
			$upload_file_options = array('content' => $data, 'length' => $length);
			$upload_flag = $oss->upload_file_by_content($bucket, $object, $upload_file_options);
			//file_put_contents('user_photos/'.$filename, $img_data);
			if ($upload_flag) {
				echo "upload success";
			}
			$usermodel = new UserModel();
			$data = array();
			$data['user_photo'] = $object;
			//print_r($data);
			$rows_affected =  $usermodel->update_data("users",$data,$this->user_id);
			
			if ($rews_affectd) {
				$code = 1;
				//echo $code;
			}
			//$this->redirect(DOMAIN ."/user_photo");
		} else {
			$this->redirect(DOMAIN ."/user_index");
		}
		

	}
	
	public function getnavbar($type="index") {
		$usermodel = new UserModel();
		
		$allnavbars = $usermodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	public function getleftbar($type="user") {
		$usermodel = new UserModel();
		$leftbars = array();
		
		$leftbar_up = $usermodel->get_leftbars($type,'leftbar_up');
		$leftbar_down = $usermodel->get_leftbars($type,'leftbar_down');
		
		$leftbars['leftbar_up'] = $leftbar_up;
		$leftbars['leftbar_down'] = $leftbar_down;
		
		return $leftbars;
	}
	
	public function getuserinfo($user_id=0) {
		$usermodel = new UserModel();
		
		$user_info = $usermodel->get_user($user_id);
		
		$province = $usermodel->get_user_regional($user_info['user_province'],'p');
		$city = $usermodel->get_user_regional($user_info['user_city'],'c');
		
		$user_info['province_name'] = $province['regional_name'];
		$user_info['city_name'] = $city['regional_name'];
		
		return $user_info;
	}
	
	public function getrightbar() {
		$rightbar_result = array();
		$usermodel = new UserModel();

		$rightbars = $usermodel->get_rightbars();
		
		foreach($rightbars as $rightbar) {
			
			$hotlinks = $this->gethotlink($rightbar);
			$rightbar['hotlinks'] = $hotlinks;
			$rightbar_result[] = $rightbar;
		}
		
		return $rightbar_result;
	}
	
	public function gethotlink($rightbar='') {
		$usermodel = new UserModel();
		$hots_result = array();

		$type = $rightbar['option_name'];
		$others = unserialize($rightbar['option_others']);

		if (isset($others['days'])) {
			$days = intval($others['days']);
		}
		
		$hotlinks = $usermodel->get_hotlinks($type,$days);
		
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

		return $hots_result;
	}
	
	public function checkdata($data=array()){
		$usermodel = new UserModel();
		
		$nickname_info = $usermodel->check_data($data['user_nickname'],'user_nickname','users');
		
		if ($nickname_info) {
			echo "用户昵称已存在";
			$this->redirect(DOMAIN ."/user_info");
		}
		
		
		if (!empty($data['city'])) {
			$city_info = $usermodel->check_data($data['city'],'regional_name','regionals');
			$parent_info = $usermodel->check_data($city_info['regional_parent'],'regional_id','regionals');
			
			if(!$parent_info) {
				echo "居住地信息错误";
				$this->redirect(DOMAIN ."/user_info");
			}
		} else if (!empty($data['province'])) {
			$province_info = $usermodel->check_data($data['province'],'regional_name','regionals');
		}
	}
	
	public function updatedata($data) {//$where='') {
		$usermodel = new UserModel();
		
		//$where = array('user_id = ?' => $this->user_id);
		//$where = $this->_db->quoteInto('user_id = ?',$this->user_id);
		//print_r($data);
		$this->user_id = $this->session->get('userid');
		//print_r($this->user_id);
		$rows_affected =  $usermodel->update_data("users",$data,$this->user_id);
		
		return $rows_affected;
	}
	
	public function getregionals($province,$city) {
		$regionals = array();
		$usermodel = new UserModel();
		
		$regionals['province'] = $usermodel->get_regional($province,'p');
		$regionals['city'] = $usermodel->get_regional($city,'c');
		
		return $regionals;
	}
	##########################################################################################################
	# IMAGE FUNCTIONS																						 #
	# You do not need to alter these functions																 #
	##########################################################################################################
	function resizeImage($image,$width,$height,$scale) {
		$image_data = getimagesize($image);
		$imageType = image_type_to_mime_type($image_data[2]);
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image); 
				break;
			case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image); 
				break;
		}
		imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
		
		switch($imageType) {
			case "image/gif":
				imagegif($newImage,$image); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				imagejpeg($newImage,$image,90); 
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage,$image);  
				break;
		}
		
		chmod($image, 0777);
		return $image;
	}
	//You do not need to alter these functions
	function resizeThumbnailImage($thumb_image_name, $image, $width, $height, $start_width, $start_height, $scale){
		list($imagewidth, $imageheight, $imageType) = getimagesize($image);
		$imageType = image_type_to_mime_type($imageType);
		
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image); 
				break;
			case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image); 
				break;
		}
		imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
		switch($imageType) {
			case "image/gif":
				imagegif($newImage,$thumb_image_name); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				imagejpeg($newImage,$thumb_image_name,90); 
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage,$thumb_image_name);  
				break;
		}
		chmod($thumb_image_name, 0777);
		return $thumb_image_name;
	}
	//You do not need to alter these functions
	function getHeight($image) {
		$size = getimagesize($image);
		$height = $size[1];
		return $height;
	}
	//You do not need to alter these functions
	function getWidth($image) {
		$size = getimagesize($image);
		$width = $size[0];
		return $width;
	}

	public function getuserrelationship($user_id) {
		$centermodel = new CenterModel();
		$followers = 0;
		$masters = 0;
		$result = array();
		$followers = $centermodel->get_user_relationships_count($user_id,'master');
		$masters = $centermodel->get_user_relationships_count($user_id,'follow');
		$shares = count($centermodel->get_user_post_relationships_posts($user_id,'share'));
		$result['followers'] = $followers;
		$result['masters'] = $masters;
		$result['shares'] = $shares;
		return $result;
	}

}
?>