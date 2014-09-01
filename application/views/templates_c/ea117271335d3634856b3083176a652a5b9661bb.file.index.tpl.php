<?php /* Smarty version Smarty-3.1.13, created on 2013-07-28 16:28:39
         compiled from "/var/www/ibixiong/application/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123454336251840388d632c6-64675253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea117271335d3634856b3083176a652a5b9661bb' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/index.tpl',
      1 => 1375000113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123454336251840388d632c6-64675253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51840389374084_34234579',
  'variables' => 
  array (
    'posts' => 0,
    'comments' => 0,
    'login' => 0,
    'user_photo' => 0,
    'username' => 0,
    'message_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51840389374084_34234579')) {function content_51840389374084_34234579($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>  i比熊 - 精品阅读分享  </title>
	<link type="image/x-icon" href="<?php echo @constant('DOMAIN');?>
/ibixiong.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
		body {
			background: url(<?php echo @constant('OSSDOMAIN');?>
/home/background.jpg) no-repeat center center fixed;
			background-size: cover;
		}
		
		body .container{
			background: url(<?php echo @constant('OSSDOMAIN');?>
/home/background-large.png) no-repeat center;
			width: 1080px;
			height: 800px;
		}

		.header{
			height:150px;
		}

		@media (max-height: 800px) {
			body .container{
				background: url(<?php echo @constant('OSSDOMAIN');?>
/home/background-middle.png) no-repeat center;
				width: 945px;
				height: 700px;
			}
			.header{
				height:130px;
			}
			
			.container .comment{
				height: 481px;
			}

			.container .content .content-text{
				height: 437px;
			}

			.container .footer{
				margin-top: 61px;
			}

			.container .login .logo{
				height: 192px;
			}

			.container .login .login-form{
				height:245px;
			}
			.container .reg{
				float: right;
				margin-right: -10px;
				margin-top: -505px;
			}
			
			.container .img-polaroid{
				width: 43px;
				height: 43px;
			}
			
			.comment .img-polaroid{
				width: 43px;
				height: 43px;
			}

		}
		
		.newinfo {
		    background-color: #EE5F5B;
		    border: 1px none #999999;
		    border-radius: 50% 50% 50% 50%;
		    color: #DDDDDD;
		    float: right;
		    font-size: 9px;
		    height: 16px;
		    line-height: 16px;
		    margin-right: -17px;
		    margin-top: -15px;
		    text-align: center;
		    width: 16px;
		}
		
		.content{
			margin-left: 4.62%;
			-moz-box-sizing: border-box;
			 display: block;
			 float: left;
			 min-height: 30px;
			 width: 39%;
		}

		.img-polaroid{
			width: 50px;
			height: 50px;
		}
		
		.comment{
			margin-left: 5.56%;
			-moz-box-sizing: border-box;
			 display: block;
			 float: left;
			 min-height: 30px;
			 width: 20.5%;
			 height: 550px;
			 overflow-x:hidden;
		}

		.login{
			margin-left: 8.33%;
			-moz-box-sizing: border-box;
			 display: block;
			 float: left;
			 min-height: 30px;
			 width: 17.6%;
		}

		.reg{
			float: right;
			margin-right: -10px;
			margin-top: -560px;
		}

		.login .logo{
			height: 220px;
		}

		.login .login-form{
			height:280px;
		}
		
		.login .login-input{
			margin-bottom: 20px;
			width: 93%;
		}

		.login button.btn {
			background-color: #0088cc;
			background-image: none;
			width: 100%;
			color: #EEEEEE;
		}

		.login button.btn:hover, 
		.login button.btn:focus {
			background-color: #1994de;
		}

		.content .content-text{
			height: 500px;
			overflow-y:hidden;
			margin-bottom: 30px;
		}

		.content .content-title{
			margin-bottom: 6px;
		}

		.content .content-article{
			line-height: 25px;
			font-size: 12px;
		}

		.content .arrow{
			float: right;
		}

		.footer{
			margin-top: 70px;
			text-align: center;
			color: #ffffff;
		}

		.footer a{
			color: #ffffff;
		}
		.footer a:focus, 
		.footer a:hover{
			color: #aaaaaa;
		}


	</style>

    <!-- Le styles -->
    <link href="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-1.9.1.min.js "></script>
</head>

<body>
	<div class="container" >
		<div class="row-fluid header" >
		</div>
		<div class="row-fluid">
			<div class="tabbable">
				<div class="content">
					<div class="tab-content">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['name'] = 'post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total']);
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['post']['first']){?>
						<div id="tab<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_id'];?>
" class="tab-pane fade active in">
						<?php }else{ ?>
						<div id="tab<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_id'];?>
" class="tab-pane fade">
						<?php }?>
							<div class="content-text">
								<div class="row-fluid content-title">
									<h4 align="center"><?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_title'];?>
</h4>
								</div>
								<div class="row-fluid">
									<p class="content-article"><img style="margin-right:10px" src="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_img'];?>
" width="50%" align="left">
									<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_content'];?>
	
								</div>
							</div>
							<div class="row-fluid">
								......
								<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_id'];?>
" class="pull-right"><img src="<?php echo @constant('OSSDOMAIN');?>
/home/readmore.jpg"></a>
							</div>
						</div>
					<?php endfor; endif; ?>	
					</div>
				</div>
				<div class="comment">
					<ul style="list-style:none;margin:0">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['comment'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['name'] = 'comment';
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['comment']['total']);
?>
						<li>
							<div class="row-fluid">
								<div class="span4">
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['author_name'];?>
">
											<img  src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['author_photo'];?>
"   class="img-polaroid"/>
										</a>
									</div>
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['author_name'];?>
">
										<small>@<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['author_name'];?>
</small>
										</a>
									</div>
								</div>
								<div class="span8">
									<div class="row-fluid">
										<small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['comment_content'], ENT_QUOTES, 'UTF-8', true);?>
<a data-toggle="tab" href="#tab<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['comment_post_id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment']['index']]['post_title'];?>
</a></small>
									</div>
								</div>
							</div>
							<hr class="hr">
						</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			
				<div class="login">
					<div class="row-fluid logo" >
					</div>
					<div class="row-fluid login-form" >
						<?php if (isset($_smarty_tpl->tpl_vars['login']->value)&&$_smarty_tpl->tpl_vars['login']->value==1){?>
						<div class="span4">
							<div class="row-fluid">
								<a href="#">
									<img  src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" class="img-polaroid" />
								</a>
								欢迎，<br><?php echo $_smarty_tpl->tpl_vars['username']->value;?>

							</div>
						</div>
						<div class="span8">
							<div class="row-fluid">
								    <ul class="nav nav-tabs nav-stacked pull-right">
								    	<li>
								    		<a href="<?php echo @constant('DOMAIN');?>
/user_index"><small>个人中心</small></a>
								    	</li>
								    	<li>
								    		<a href="<?php echo @constant('DOMAIN');?>
/user_message"><span class="newinfo"><?php echo $_smarty_tpl->tpl_vars['message_count']->value;?>
</span><small>我的消息</small></a>
								    	</li>
								    	<li>
								    		<a href="<?php echo @constant('DOMAIN');?>
/user_focus"><small>我的关注</small></a>
								    	</li>
								    	<li>
								    		<a href="<?php echo @constant('DOMAIN');?>
/login/logout"><small>退出登录</small></a>
								    	</li>

								    </ul>
								
							</div>
						</div>
						<?php }else{ ?>
						<form id="login_form" action="<?php echo @constant('DOMAIN');?>
/login/ajaxlogin" method="post" onsubmit="return false">
							<input type="text" class="login-input" id="username" name="username" placeholder="用户名">
							<input type="password" class="login-input" id="password" name="password" placeholder="密码">
							<button type="submit" class="btn">立即登录</button>
						</form>
						<?php }?>
					</div>
					<div class="row-fluid">
						<a href="<?php echo @constant('DOMAIN');?>
/main" class="pull-right">
							<img src="<?php echo @constant('OSSDOMAIN');?>
/home/gohome.png">
						</a>

					</div>
				</div>
			</div>
			<?php if (!isset($_smarty_tpl->tpl_vars['login']->value)||$_smarty_tpl->tpl_vars['login']->value==0){?>
			<div class="reg">
				<a href="<?php echo @constant('DOMAIN');?>
/register/">
					<img src="<?php echo @constant('OSSDOMAIN');?>
/home/reg.png">
				</a>
			</div>
			<?php }?>
		</div>
		<div class="row-fluid footer">
				Copyright © 2013 <a href="<?php echo @constant('DOMAIN');?>
">i比熊</a> · <a>关于我们</a> · <a>免责声明</a> · <a href="<?php echo @constant('DOMAIN');?>
/about">如何获取邀请码</a> · 京ICP备13019430号 
				<script src="http://s15.cnzz.com/stat.php?id=5524648&web_id=5524648&show=pic1" language="JavaScript"></script>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#login_form').validate({
					rules: {
						username:{
							required:true
						},
						password:{
							required:true
						},
					},
					messages: {
						username: {
							required:"* 请输入用户名",
						},
						password: {
							required:"* 请输入密码",
						},
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						login();
					}	
				});
			function login() {
				var username = $('#username').val();
				var password = $('#password').val();
				$.post(
					"<?php echo @constant('DOMAIN');?>
/login/ajaxlogin",
					{username: username,password:password},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								window.location.href='<?php echo @constant('DOMAIN');?>
';
								break;
							case '101':
								//messageBox(data[1],'error','login');
								$('#username').select();
								break;
							default:
								//messageBox('系统错误，请重新尝试','error','login');
								$('#username').select();
								break;
						}
					}
				);
			}	
		});
	</script>
	
	<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/message_cn.js"></script>
	<script src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js"></script>
    <script src="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
	
</html><?php }} ?>