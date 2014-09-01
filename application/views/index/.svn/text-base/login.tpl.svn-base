{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
<script>
	$(document).ready(function(){
		$('#login-form').validate({
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
				pagelogin();
			}
			
			
		});
		
		function pagelogin() {
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
						//alert('登陆成功');
							//alert(1);
							window.parent.location.reload(); 
							break;
						case '101':
							//alert(101);
							classInfo = 'box box-error';
							$('#box-info-login-page').show();
							$('#box-info-login-page').html(info);
							$('#box-info-login-page').attr('class',classInfo);
							$('#loginusername').select();
							break;
						default:
							//alert(201);
							classInfo = 'box box-error';
							$('#box-info-login-page').show();
							$('#box-info-login-page').html(info);
							$('#box-info-login-page').attr('class',classInfo);
							$('#loginusername').select();
							break;
					}
				});
		}
		
		$('#box-info-login-page').hide();
	});
</script>
			<div class="row-fluid">
				<div class="span2">
					
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>登陆</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
					<div class="box box-info" id="box-info-login-page" style="margin-top:15px">用户名或密码错误</div>
					<form class="form-horizontal" id="login-form" action="{{$smarty.const.DOMAIN}}/login/login" method="post" onsubmit="return false;">
					  <div class="control-group">
						<label class="control-label" for="username">用户名</label>
						<div class="controls">
						  <input type="text" name="username" id="username" placeholder="用户名"/>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="password">密码</label>
						<div class="controls">
						  <input type="password" name="password" id="password" placeholder="密码"/>
						</div>
					  </div>
					  <div class="control-group">
							<div class="controls">
							  <label class="checkbox">
								<input type="checkbox" name="rememberme" id="rememberMe"> 记住密码
							  </label>
							</div>
					 </div>
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" id="registerbutton" class="btn btn-primary" data-loading-text="登录中...">登录</button>
						  <!--button type="submit" class="btn">重置</button-->
						</div>
					  </div>
					</form>	
					</div>
				</div>
				<div class="span3 content">
					{{section name=rightbars loop=$rightbar}}
						<div class="row-fluid">
							<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<ul class="unstyled">
								{{section name=hotlink loop=$rightbar[rightbars].hotlinks}}
									<li class="shadow-box"><a  href="{{$rightbar[rightbars].hotlinks[hotlink].url}}">{{$rightbar[rightbars].hotlinks[hotlink].title}}</a></li>
								{{/section}}
							</ul>
						</div>
					{{/section}}
						<!--div class="row-fluid">
							<h6 class="sidebar_title">开放平台登录</h6>
							<ul class="unstyled">
									<li class="shadow-box"><wb:login-button type="3,2" onlogin="login" onlogout="logout">登录按钮</wb:login-button></li>
							</ul>
						</div-->
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
{{include file="../public/footer.tpl"}}		