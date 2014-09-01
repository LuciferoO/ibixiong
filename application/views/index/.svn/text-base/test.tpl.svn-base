<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title> i比熊 </title>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/self.css"/>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/jquery/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.validate.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/message_cn.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#loginbutton').click(function(event){
					$("#loginmodal").modal({
							"backdrop" : "static",
							"keyboard" : true,
							"show" : true // this parameter ensures the modal is shown immediately
							}
							)
				});	
				$('#registerbutton').click(function(event){
					$("#registermodal").modal({
						"backdrop" : "static",
						"keyboard" : true,
						"show" : true // this parameter ensures the modal is shown immediately
					}
					)
				});
				$('#shareEmail').hover(function(){
					$(this).tooltip('show');
				});
				jQuery.validator.addMethod("usernameReg", function(value, element) { 
					var reg = /^[a-zA-Z0-9-_.]{3,12}$/;
					if(reg.test(value)){
						return true;
					}else{
						return false;
					}
					}, "只能由数字、字母、下划线组成，3-32个字符"
				);
				jQuery.validator.addMethod("nickname", function(value, element) { 
					var reg = /^[\u4e00-\u9fa5]+$/;
					if(reg.test(value)){
						return true;
					}else{
						return false;
					}
					}, "只能输入中文"
				);
				jQuery.validator.addMethod("byteRangeLength", function(value, element, param) {  
					var length = value.length;  
					for (var i = 0; i < value.length; i++) {  
						if (value.charCodeAt(i) > 127) {  
							length++;  
						}  
					}  
					return this.optional(element) || (length >= param[0] && length <= param[1]);  
				}, $.validator.format("请确保输入的值在{0}-{1}个字节之间(一个中文字算2个字节)"));  
				$('#login-form').validate({
						rules: {
							username:{
									required: true,
									usernameReg:true,
									rangelength: [4,12],
									remote: {
										type: "post",
										url: "http://www.ibixiong.com/test/check",
										data: {
											username:function() {
												return $("#username").val();
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
								},
							email:{
									required: true,
									email: true
								},
							nickname:{
									required: true,
									nickname: true,
									byteRangeLength:[4,12]
								},
							url:{
									required: true,
									url:true
								},
							password:{
									required: true,
									rangelength: [6,18]
								},
							captcha:{
									required: true
								}
						},
						success: function(label) {
							//正确时的样式
							label.text(" ").addClass("success");
						},
						messages: {
							username: {
								required:"* 请输入用户名",
								rangelength:"* 用户名必须为3-16个字符（字母、数字、下划线）,注册后不能更改",
								remote: "* 用户名不可用"
							},
							password: {
								required:"* 请输入密码",
								rangelength:"* 密码长度必须为4-18个字符"
							},
							email:{
									required: "* 请输入邮箱"
							},
							nickname:{
									required: "* 请输入昵称"
							},
							url: {
								required:"* 请输入来源链接",
								url: "* 请输入合法url链接"
							},
							captcha:{
									required: "* 请输入验证码"
							}
						},
						highlight: function(element) {
							$(element).closest('.control-group').removeClass('success').addClass('error');
						},
						success: function(element) {
							element
							.text('OK!').addClass('valid')
							.closest('.control-group').removeClass('error').addClass('success');
						}
						
				});
			});
		
			function change_captcha()
			{
				 var codeurl = '{{$smarty.const.DOMAIN}}/captcha?r=' + Math.ceil(Math.random() * 10000);
				 $('#imgauth_reg').get(0).src = codeurl;
				 $('#captcha').get(0).focus(); 
			} 
		</script>
	</head>
	<body>
		<div class="navbar  navbar-fixed-top navbar-inner">
				<div class="container">
					<ul class="nav nav-pills ">

							<li class="login"><a href="#" id="loginbutton" data-toggle="loginmodal" data-target="#loginmodal">登录</a></li>
							<li ><a href="#" id="registerbutton" data-toggle="registermodal">注册</a></li>

							
					</ul>

				</div>
		</div>
		<div class="modal  hide fade " id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>登录</h4>
					</div>
					<form id="modal-loginform" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/login/login" method="post">
						<div class="modal-body">
							
							  <div class="control-group">
								<label class="control-label"  for="inputEmail">用户名</label>
								<div class="controls">
								  <input type="text" name="username" id="inputEmail" placeholder="用户名或注册邮箱">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="inputPassword">密码</label>
								<div class="controls">
								  <input type="password" name="password" id="inputPassword" placeholder="密码">
								</div>
							  </div>
							  <div class="control-group">
								<div class="controls">
								  <label class="checkbox">
									<input type="checkbox" name="rememberme" id="rememberMe"> 记住密码
								  </label>
								</div>
							  </div>
							
						</div>	
						<div class="modal-footer">
							<button type="submit" id="modal-loginform-submit" class="btn btn-primary" data-loading-text="登录中...">登录</button>
							<button type="submit" class="btn btn-primary" data-toggle="registermodal" onclick="window.location='register.html'">注册</button>
							<!--button type="submit" class="btn">重置</button-->							
						</div>
					</form>
				
		</div>
		<div class="modal  hide fade " id="registermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>注册新用户</h4>
					</div>
					<div class="modal-body">
						<form id="modal-registerform" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/register/register" method="post">
						  <div class="control-group">
							<label class="control-label" for="inputEmail">用户名</label>
							<div class="controls">
							  <input type="text" id="inputUsername" name="username" placeholder="用户名">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="inputEmail" >邮箱</label>
							
							<div class="controls">
							  <input type="text" id="inputEmail"  name="email" placeholder="邮箱">
							  <input type="checkbox" id="shareEmail" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="公开邮箱，所有人访问您的主页将能看见您的邮箱"> 公开邮箱
							</div>
							<script>
								$(document).ready(function() {
									$('#shareEmail').hover(function(){
										$(this).tooltip('show');
									});
								});
							</script>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="inputPassword">密码</label>
							<div class="controls">
							  <input type="password" id="inputPassword" name="password" placeholder="密码">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="repeatPassword">确认密码</label>
							<div class="controls">
							  <input type="password" id="repeatPassword" name="repeatpassword" placeholder="确认密码">
							</div>
						  </div>
						  {{if isset($activekey) and $activekey == 1}}
						  <div class="control-group">
							<label class="control-label" for="inputActivekey">邀请码</label>
							<div class="controls">
							  <input type="text" id="inputActivekey" name="key" placeholder="邀请码">
							</div>
						  </div>
							{{/if}}
							<div class="modal-footer">  
								  <button type="submit" id="modal-registerform-submit" class="btn btn-primary" data-loading-text="注册中...">注册</button>
							</div>  
						</form>	
					</div>
				
		</div>
		<form id="login-form" class="form-horizontal">
		  <div class="control-group">
			<label class="control-label" for="username">用户名</label>
			<div class="controls">
			  <input type="text" id="username" name="username" placeholder="用户名">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="email">邮箱</label>
			<div class="controls">
			    <input type="text" id="email" name="email" placeholder="邮箱">
				<input type="checkbox" id="shareEmail" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="公开邮箱，所有人访问您的主页将能看见您的邮箱"> 公开邮箱
			</div>


									

		  </div>
		  <div class="control-group">
			<label class="control-label" for="nickname">昵称</label>
			<div class="controls">
			  <input type="text" id="nickname" name="nickname" placeholder="昵称">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="url">来源链接</label>
			<div class="controls">
			  <input type="text" id="url" name="url" placeholder="来源链接">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="password">密码</label>
			<div class="controls">
			  <input type="password" id="password" name="password" placeholder="密码">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="captcha">验证码</label>
			<div class="controls">
			  <input type="text" id="captcha" placeholder="验证码">
			  <img src="/captcha" id="imgauth_reg" onclick="change_captcha();"  title="看不清楚？点击换一张！" style="vertical-align: middle;"/>
			</div>
		  </div>
		  <div class="control-group">
				<div class="controls">
					<button type="submit" id="registerbutton" class="btn btn-primary" data-loading-text="登录中...">登录</button>
					<!--button type="submit" class="btn">重置</button-->
				</div>
			</div>
		</form>
	</body>
</html>