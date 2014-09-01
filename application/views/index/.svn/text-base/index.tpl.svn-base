<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>  i比熊 - 精品阅读分享  </title>
	<link type="image/x-icon" href="{{$smarty.const.DOMAIN}}/ibixiong.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
		body {
			background: url({{$smarty.const.OSSDOMAIN}}/home/background.jpg) no-repeat center center fixed;
			background-size: cover;
		}
		
		body .container{
			background: url({{$smarty.const.OSSDOMAIN}}/home/background-large.png) no-repeat center;
			width: 1080px;
			height: 800px;
		}

		.header{
			height:150px;
		}

		@media (max-height: 800px) {
			body .container{
				background: url({{$smarty.const.OSSDOMAIN}}/home/background-middle.png) no-repeat center;
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
    <link href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="{{$smarty.const.DOMAIN}}/assets/js/jquery-1.9.1.min.js "></script>
</head>

<body>
	<div class="container" >
		<div class="row-fluid header" >
		</div>
		<div class="row-fluid">
			<div class="tabbable">
				<div class="content">
					<div class="tab-content">
					{{section name=post loop=$posts}}
						{{if $smarty.section.post.first}}
						<div id="tab{{$posts[post].post_id}}" class="tab-pane fade active in">
						{{else}}
						<div id="tab{{$posts[post].post_id}}" class="tab-pane fade">
						{{/if}}
							<div class="content-text">
								<div class="row-fluid content-title">
									<h4 align="center">{{$posts[post].post_title}}</h4>
								</div>
								<div class="row-fluid">
									<p class="content-article"><img style="margin-right:10px" src="{{$posts[post].post_img}}" width="50%" align="left">
									{{$posts[post].post_content}}	
								</div>
							</div>
							<div class="row-fluid">
								......
								<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$posts[post].post_id}}" class="pull-right"><img src="{{$smarty.const.OSSDOMAIN}}/home/readmore.jpg"></a>
							</div>
						</div>
					{{/section}}	
					</div>
				</div>
				<div class="comment">
					<ul style="list-style:none;margin:0">
						{{section name=comment loop=$comments}}
						<li>
							<div class="row-fluid">
								<div class="span4">
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$comments[comment].author_name}}">
											<img  src="{{$smarty.const.OSSDOMAIN}}/{{$comments[comment].author_photo}}"   class="img-polaroid"/>
										</a>
									</div>
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$comments[comment].author_name}}">
										<small>@{{$comments[comment].author_name}}</small>
										</a>
									</div>
								</div>
								<div class="span8">
									<div class="row-fluid">
										<small>{{$comments[comment].comment_content|escape:"html"}}<a data-toggle="tab" href="#tab{{$comments[comment].comment_post_id}}">#{{$comments[comment].post_title}}</a></small>
									</div>
								</div>
							</div>
							<hr class="hr">
						</li>
						{{/section}}
					</ul>
				</div>
			
				<div class="login">
					<div class="row-fluid logo" >
					</div>
					<div class="row-fluid login-form" >
						{{if isset($login) and $login == 1}}
						<div class="span4">
							<div class="row-fluid">
								<a href="#">
									<img  src="{{$smarty.const.OSSDOMAIN}}/{{$user_photo}}" class="img-polaroid" />
								</a>
								欢迎，<br>{{$username}}
							</div>
						</div>
						<div class="span8">
							<div class="row-fluid">
								    <ul class="nav nav-tabs nav-stacked pull-right">
								    	<li>
								    		<a href="{{$smarty.const.DOMAIN}}/user_index"><small>个人中心</small></a>
								    	</li>
								    	<li>
								    		<a href="{{$smarty.const.DOMAIN}}/user_message"><span class="newinfo">{{$message_count}}</span><small>我的消息</small></a>
								    	</li>
								    	<li>
								    		<a href="{{$smarty.const.DOMAIN}}/user_focus"><small>我的关注</small></a>
								    	</li>
								    	<li>
								    		<a href="{{$smarty.const.DOMAIN}}/login/logout"><small>退出登录</small></a>
								    	</li>

								    </ul>
								
							</div>
						</div>
						{{else}}
						<form id="login_form" action="{{$smarty.const.DOMAIN}}/login/ajaxlogin" method="post" onsubmit="return false">
							<input type="text" class="login-input" id="username" name="username" placeholder="用户名">
							<input type="password" class="login-input" id="password" name="password" placeholder="密码">
							<button type="submit" class="btn">立即登录</button>
						</form>
						{{/if}}
					</div>
					<div class="row-fluid">
						<a href="{{$smarty.const.DOMAIN}}/main" class="pull-right">
							<img src="{{$smarty.const.OSSDOMAIN}}/home/gohome.png">
						</a>

					</div>
				</div>
			</div>
			{{if !isset($login) or $login == 0}}
			<div class="reg">
				<a href="{{$smarty.const.DOMAIN}}/register/">
					<img src="{{$smarty.const.OSSDOMAIN}}/home/reg.png">
				</a>
			</div>
			{{/if}}
		</div>
		<div class="row-fluid footer">
				Copyright © 2013 <a href="{{$smarty.const.DOMAIN}}">i比熊</a> · <a>关于我们</a> · <a>免责声明</a> · <a href="{{$smarty.const.DOMAIN}}/about">如何获取邀请码</a> · 京ICP备13019430号 
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
					"{{$smarty.const.DOMAIN}}/login/ajaxlogin",
					{username: username,password:password},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								window.location.href='{{$smarty.const.DOMAIN}}';
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
	
	<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/message_cn.js"></script>
	<script src="{{$smarty.const.DOMAIN}}/assets/js/holder.js"></script>
    <script src="{{$smarty.const.DOMAIN}}/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
	
</html>