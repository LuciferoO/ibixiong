<?php
/**
*	分享投稿页面
**/

class RegisterController  extends Yaf_Controller_Abstract {
	protected $session ;
	protected $activekey;
	
	public function indexAction() {
		$this->session = Yaf_Session::getInstance();
		if ($this->session->get('login') == 1) {
			echo "<script>alert('您已经登录了')</script>";
			//sleep(3);
			$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/Main");
		} 
		
		//echo "<pre>";
		if (Yaf_Registry::get('register') == 1) {
			$user_id = $this->getRequest()->getParam("id");
			$user_activation_key = $this->getRequest()->getParam("key");
			//print_r($user_id);
			//print_r($user_activation_key);
			if (!$user_activation_key) {
				$this->getView()->assign("key",0);
			} else { 
			
				$activekey = $this->checkkey($user_id,$user_activation_key);
				//print_r($checkkey);
				if ($activekey) {
					switch ($activekey) {
					
						case 1:	echo "邀请码已经被使用了";exit(0);break;
						case 0:
						case 2:
							$this->getView()->assign("key",$user_id."||".$user_activation_key);
							break;
						default:echo "邀请码错误";exit(0);break;
					}
				} else {
					echo "邀请码错误";exit(0);
				}
			}
		} else if (Yaf_Registry::get('register') > 0 ) {
			echo "论坛停止注册";
			exit();
		} 
		
		if (Yaf_Registry::get("register")) {
			$this->getView()->assign("activekey",Yaf_Registry::get("register"));
		}
		//print_r($navbars);
		$this->getView()->assign("title"," 注册帐号 - i比熊 ");
		$navbars = $this->getnavbar("register");
		$rightbars = $this->getrightbar("register");
		$this->getView()->assign("navbar",$navbars);
		$this->getView()->assign("rightbar",$rightbars);		
		$this->getView()->display(Yaf_Application::app()->getConfig()->smarty->template_dir . "index/register.tpl");
		//echo "</pre>";
	}	
	public function registerAction() {
		if ($this->getRequest()->isPost()) {
		
			$this->session = Yaf_Session::getInstance();
			if ($this->session->get('login') == 1) {
				echo "<script>alert('您已经登录了')</script>";
				//sleep(3);
				$this->redirect(Yaf_Application::app()->getConfig()->domain->name."/");
			} 
			
			if (Yaf_Registry::get('register') == 0) {
				echo "论坛停止注册";
				exit();
			} else if (Yaf_Registry::get('register') == 2) { 
				if ($this->getRequest()->getPost("key",'') != "") {
					echo "今日开放注册，邀请码可保存至下次使用。";
				} 
			} else {
				$data['user_activation_key'] = $this->getRequest()->getPost("key",'');
				//echo $data['user_activation_key'];
				$pos = strpos($data['user_activation_key'],"||");
				if ($pos === false) {
					echo "邀请码错误";
					exit();
				} else {
					$key_parts = explode("||",$data['user_activation_key']);
					$user_id = $key_parts[0];
					$user_activation_key = $key_parts[1];
					//print_r($key_parts);
					//print_r($user_id);
					//print_r($user_activation_key);
					$this->activekey = $this->checkkey($user_id,$user_activation_key);
					//print_r($this->activekey);
					if ($this->activekey) {
						switch ($this->activekey['activekey_status']) {
						
							//case -1: exit(0);break;
							case 0:break;
							case 2:break;
							case 1:	echo "邀请码已经被使用了";exit(0);break;
							
							default:echo "邀请码错误";exit(0);break;
								
						}
					} else {

						echo "邀请码错误";exit(0);

					}
				}
			}
			
			$registermodel = new RegisterModel();
			//echo __METHOD__ ."has been called";
			$data['user_login'] = $this->getRequest()->getPost("username");
			$data['user_email']	= $this->getRequest()->getPost("email");
			$data['user_nickname']	= $this->getRequest()->getPost("usernickname");
			$data['user_password'] = $this->getRequest()->getPost("password");
			$data['user_emailstatus'] = $this->getRequest()->getPost("emailstatus",0);
			$data_repeat['repeatpassword'] = $this->getRequest()->getPost("repeatpassword");
			
			$flag = $this->checkdata($data,$data_repeat);
			//echo "<pre>";
			if ($flag) {
				$data['user_salt'] = substr(md5(time().$data['user_login'].$data['user_email']),7,15);
				$data['user_password'] = md5($data['user_password'].$data['user_salt']);
				$data['user_registered_time'] = date("Y-m-d H:i:s");
				$data['user_registered_time_gmt'] = date("e");
				//print_r($data);
				
				
				$user_id = $registermodel->insert_user($data);
				if ($user_id) {
					//$this->session->set('login',1);
					//$this->session->set('userid',$user_id);
					//$this->session->set('username',$data['user_login']);
					//print_r($this->activekey);
					$this->activekey['activekey_status'] = 1;
					
					$rows_affected = $registermodel->update_activekey('activekey',$this->activekey,$this->activekey['activekey_id']);
					
					if (!$rows_affected) {
						exit();
					}
					
					$this->getView()->assign("login",1);
					$this->getView()->assign("user_id",$user_id);
					$this->getView()->assign("username",$data['user_login']);
					
					
					$smtp = "smtp.ym.163.com";
					$smtpport=25;
					$title="激活帐号 - i比熊";     //邮件标题
					$mailfrom="<ibixiong@ibixiong.com>"; //发送人
					$username = "ibixiong@ibixiong.com";//"qiuyanjie";
					$passwd="i@bixiong";   //SMTP密码
					$mailsend="ibixiong@ibixiong.com"; //对方显示的发送人
					$replyto="<ibixiong@ibixiong.com>";//回复邮件人
					$sendto="<".$data['user_email'].">"; //收件人
					$mail='
						<span style="color:#000;">欢迎使用i比熊 - 专注于精品阅读/span>
						
						<span style="color:#000;"><a href="http://www.ibixiong.com" target="_blank">i 比熊</a> 专注于精品阅读</span>
						<br />
						<strong><span style="color:#000;">帐号激活链接如下：</span></strong>
						<a href="'. DOMAIN .'/Register/active/id/'.$user_id.'/sign/'.$data['user_salt'].'" target="_blank">'.DOMAIN.'/Register/active/id/'.$user_id.'/sign/'.$data['user_salt'].'</a>
						<br />
						<strong>
							<span style="color:#FF0000;">激活后才能正常登录</span>
						</strong>
					';
					$sendmail = new Mail_SendMail($smtp, $smtpport, $title, $username, $passwd, $mailfrom, $mailsend, $replyto, $sendto, $mail);
					$result = $sendmail->Send();
					/*if($result) {
						echo "success";
					}*/
					
					echo 1;
				}
			} else {
				echo 101;
				exit();
			}
			//print_r($post_title);
			//print_r($post_url);
			//print_r($post_content);
			//echo "</pre>";
		}
	}
	
	public function activeAction() {
		$this->session = Yaf_Session::getInstance();
		$user_id = $this->getRequest()->getParam("id");
		$user_salt = $this->getRequest()->getParam("sign");
		$registermodel = new RegisterModel();
		$user_info = $registermodel->get_user_info($user_id);
		if ($user_salt == $user_info['user_salt']) {
			$this->session->set('login',1);
			$this->session->set('userid',$user_info['user_id']);
			$this->session->set('username',$user_info['user_nickname']);
			$data = array();
			$data['user_status'] = 1;
			$rowaffected = $registermodel->update_user_status('users',$data,$user_id);
			if ($rowaffected) {
				echo '
					<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Loading</title> 
</head>

<body>

<form name="loading">

<p align="center">激活成功,正在跳转，请稍后...</p>

<p align="center"> 
<input type="text" name="bar" style="border-style:none; background-color:#D3E8D0; font-weight:bold" /> 
<input type="text" name="percentage"style="border-style:none; background-color:#FFFFFF; max-width:30px"/> 
</p>

<p align="center"> 
如果您的浏览器不支持跳转，请点击<a href="'. DOMAIN .'">这里</a>手动跳转 
</p>

<script language="javascript" type="text/javascript"> 
var percent=0; //百分比进度，显示在滚动条后面 
var element="||"; //滚动条单元竖线 
var elements="||"; //滚动条当前竖线 
count(); //开始调用循环

function count(){ 
percent=percent+10; //每次百分比加10 
elements =elements + element; //滚动条当前竖线增加一个滚动条单元竖线 
document.loading.bar.value=elements; //设置窗体loading表单中bar元素的当前值 
document.loading.percentage.value=percent+"%"; //设置窗体loading表单中percentage元素的当前值 
if (percent<99){ //percent小于99则继续循环 
setTimeout("count()",300); //每300ms进行一次count() 
} 
else{ 
window.location = "'. DOMAIN .'"; //percent达到100时跳转 
} 
} 
</script>

</form> 
</body> 
</html>
					';
			} else {
				echo "系统错误，请联系管理员 ibixiong@ibixiong";
			}	
		} else {
			echo "验证失败，请联系管理员 ibixiong@ibixiong";
		}
	}
	
	
	public function checknameAction() {
		//echo __METHOD__ ."has been called";
		$registermodel = new RegisterModel();
		$name = $this->getRequest()->getPost('regusername');
		$name = urldecode($name);
		//echo $name;
		$check_login = $registermodel->check_info('user_login',$name);
		if ($check_login) {
			echo 0;
			exit;
		} else {
			echo 1;
			exit;
		}
	}
	
	public function checkemailAction() {
		//echo __METHOD__ ."has been called";
		$registermodel = new RegisterModel();
		$email = $this->getRequest()->getPost('regemail');
		//echo $name;
		$check_login = $registermodel->check_info('user_email',$email);
		if ($check_login) {
			echo 0;
			exit;
		} else {
			echo 1;
			exit;
		}
	}
	
	public function checknicknameAction() {
		//echo __METHOD__ ."has been called";
		$registermodel = new RegisterModel();
		$nickname = $this->getRequest()->getPost('regusernickname');
		//echo $name;
		$check_login = $registermodel->check_info('user_nickname',$nickname);
		if ($check_login) {
			echo 0;
			exit;
		} else {
			echo 1;
			exit;
		}
	}
	
	public function keysAction() {
		if ($this->getRequest()->isPost()) {
			//echo __METHOD__ ."has been called";
			$key = $this->getRequest()->getPost('regkey');
			$key = urldecode($key);
			//echo $key;
			$pos = strpos($key,"||");
			if ($pos == false) {
				//echo "what the fuck";
				echo 0;
				exit();
			} else {
				$key_parts = explode("||",$key);
				$user_id = $key_parts[0];
				$user_activation_key = $key_parts[1];
				if (empty($user_activation_key)) {
					echo 0;
					exit();
				}
				$activekey = $this->checkkey($user_id,$user_activation_key);
				//echo $checkkey;
				//print_r($activekey);
				if ($activekey) {
					switch ($activekey['activekey_status']) {
							
						case 0: echo 1;break;
						case 1:	echo 0;break;
						case 2: echo 1;break;
						default:echo 0;break;
									
					}
				} else {
					echo 0;
				}
			}
		}
	}
	
	protected function getnavbar($type="register") {
		$registermodel = new RegisterModel();
		
		$allnavbars = $registermodel->get_navbars($type);
		
		return $allnavbars;
	}
	
	public function getrightbar() {
		$rightbar_result = array();
		$registermodel = new RegisterModel();
		//echo "<pre>";
		$rightbars = $registermodel->get_rightbars();
		//print_r($rightbars);
		foreach($rightbars as $rightbar) {
			
			$hotlinks = $rightbar['option_others'];
			$rightbar['hotlinks'] = unserialize($hotlinks);
			//echo "<pre>";
			//print_r($rightbar['hotlinks']);
			//echo "</pre>";
			foreach ($rightbar['hotlinks'] as $k => $hotlink) {
				//print_r($hotlink);
				//echo "<br />";
				$hotlink['title'] = base64_decode($hotlink['title']); 
				//print_r($hotlink);
				//echo "<br />";
				$rightbar['hotlinks'][$k] = $hotlink;
			}
			$rightbar_result[] = $rightbar;
		}
		
		//$rightbar = $rightbars;
		//var_dump($rightbar_result);
		//echo "</pre>";
		return $rightbar_result;
	}
	
	public function checkkey($user_id,$user_activation_key) {
		$registermodel = new RegisterModel();
		
		$activekey = $registermodel->get_keystatus($user_id,$user_activation_key);
		//print_r($activekey);
		if ($activekey) {
			$status = $activekey['activekey_status'];
			//echo $status;
			//print_r($activekey);
			if ($status == 0 || $status == 1 || $status == 2) {
				return $activekey;
			} /*else {
				return -1;
			}*/
		} else {
			return false;
		}
	}
	
	public function checkdata($data,$data_repeat) {
		//print_r($data);
		//print_r($data_repeat);
		if (!preg_match("/^[a-zA-Z0-9_]{3,16}$/i", $data['user_login'])) {
			echo "用户名不合法";
			return false;
		}
	
		if (!preg_match("/^[\w\d]+[\w\d-.]*@[\w\d-.]+\.[\w\d]{2,10}$/i", $data['user_email'])) {
			echo "邮件不合法";
			return false;
		}
		//print_r($matches);
		//print_r($matches[0][0]);
		//$data['user_email'] = $matches[0][0];
		if (strcmp($data['user_password'],$data_repeat['repeatpassword']) !== 0) {
			echo "输入的密码不一致";
			return false;
		}
		$registermodel = new RegisterModel();
		$check_login = $registermodel->check_info('user_login',$data['user_login']);
		if ($check_login) {
			echo "用户名已经存在";
			return false;
		}
		$check_nickname = $registermodel->check_info('user_nickname',$data['user_login']);
		if ($check_login) {
			echo "昵称已经存在";
			return false;
		}
		$check_email = $registermodel->check_info('user_email',$data['user_email']);
		if ($check_email) {
			echo "邮箱已经被使用";
			return false;
		}
		
		return true;
	}

}