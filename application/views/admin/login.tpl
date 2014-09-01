<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title> i比熊 </title>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/self.css"/>				
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-migrate-1.1.1.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.validate.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/message_cn.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/bootstrap/js/bootstrap.js"></script>
		{{literal}}
		<script>
			$(document).ready(function(){
				$('#login-form').validate({
						rules: {
							username:{
									required: true
								},
							password:{
									required: true,
								},
							captcha:{
									required: true,
									remote: {
										type: "post",
		{{/literal}}							
										url: "{{$smarty.const.DOMAIN}}/Ibixiong_login/captcha",
		{{literal}}
									data: {
											captcha:function() {
												return $("#captcha").val();
											}
										},
										dataType: "json",
										//dataType: "json",
										dataFilter: function(data,type){
											if (data == 1)
												return true;
											else 
												return false;
										}
									}
								}
						},
						messages: {
							username: {
								required:"* 请输入用户名",
							},
							password: {
								required:"* 请输入密码",
							},
							captcha:{
									required: "* 请输入验证码",
									remote: "* 验证码错误"
							}
						},
						highlight: function(element) {
							$(element).closest('.control-group').removeClass('success').addClass('error');
						},
						success: function(element) {
							element
							.text('OK!').addClass('valid')
							.closest('.control-group').removeClass('error').addClass('success');
						},
						submitHandler: function() {
							login();
						}	
				});
			});
			function change_captcha()
			{
				 var codeurl = 'captcha?r=' + Math.ceil(Math.random() * 10000);
				 $('#imgauth_reg').get(0).src = codeurl;
				 $('#captcha').get(0).focus(); 
			} 
			function messageBox(info,type){
				var classInfo = '';
				if (type=='error')
				{
					classInfo = 'box box-error';
				}
				$('#box-info').html(info);
				$('#box-info').attr('class',classInfo);
			}
			function login(){
				//alert('login has been called');
				var username = $('#username').val();
				var captcha = $('#captcha').val();
				var password = $('#password').val();
				$.post(
		{{/literal}}		
						'{{$smarty.const.DOMAIN}}/Ibixiong_login/login',
		{{literal}}				
						{username: username, captcha: captcha,password:password},
						function (data){
							data = data.split(':');
							switch(data[0]){
								case '1':
									window.location.reload();
									//messageBox(data[1],'success');
									break;
								case '101':
									change_captcha();
									$('#captcha').val('请重新输入验证码');
									$('#captcha').closest('.control-group').removeClass('success').addClass('error');
									messageBox(data[1],'error');
									break;
								default:
									change_captcha();
									messageBox('系统错误，请重新尝试','error');
									$('#username').select();
									break;
							}
						}
					);
			}
		</script>
		{{/literal}}
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="box box-info" id="box-info" style="margin-top:15px;text-align:center;">用户登录</div>
			</div>
			<div class="row">
				<div class="span3">
				</div>
				<div class="span9">		
					<form class="form-horizontal" id="login-form" action="{{$smarty.const.DOMAIN}}/ibixiong_login/login" method="post" onsubmit="return false;">
					  <div class="control-group">
						<label class="control-label" for="username">用户名</label>
						<div class="controls">
						  <input type="text" id="username" name="username" placeholder="用户名">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="password">密码</label>
						<div class="controls">
						  <input type="password" name="password" id="password" placeholder="密码">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="captcha">验证码</label>
						<div class="controls">
						  <input type="text" name="captcha" id="captcha" placeholder="验证码">
						  <img src="{{$smarty.const.DOMAIN}}/captcha" id="imgauth_reg" onclick="change_captcha();"  title="看不清楚？点击换一张！" style="vertical-align: middle;"/>
						</div>
					  </div>
					  <div class="control-group">
							<div class="controls">
								<button type="submit" id="loginbutton" class="btn btn-primary" data-loading-text="登录中...">登录</button>
							</div>
					   </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>