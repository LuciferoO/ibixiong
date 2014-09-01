{{include file="../public/header.tpl"}}
<script>
	$(document).ready(function(){
		jQuery.validator.addMethod("nicknameCheck", function(value, element) {       
			return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);       
		});	
		jQuery.validator.addMethod("usernameCheck", function(value, element) {       
			return this.optional(element) || /^[a-zA-Z0-9_]{3,16}$/.test(value);       
		});	
		$('#register_form').validate({
			rules: {
				register_username:{
						required: true,
						usernameCheck: true,
						remote: {
							type: "post",
							url: "{{$smarty.const.DOMAIN}}/Register/checkname",
							data: {
									regusername:function(){
										return $("#register_username").val();
									}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
								return false;
							}
							
						}
					},
				register_nickname:{
						required: true,
						nicknameCheck: true,
						remote: {
							type: "post",
							url: "{{$smarty.const.DOMAIN}}/Register/checknickname",
							data: {
									regusernickname:function(){
										return $("#register_nickname").val();
									}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
									return false;
							}
						}
					},	
				register_email: {
						required: true,
						email: true,
						remote: {
							type: "post",
							url: "{{$smarty.const.DOMAIN}}/Register/checkemail",
							data: {
								regemail:function(){
								return $("#register_email").val();
						}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
									return false;
							}
						}
					},
				register_password:{
						required: true,
					},
				register_repeatpassword:{
						required: true,
						equalTo: "#register_password"
						
					},
				register_key:{
						required: true,
						remote: {
							type: "post",	
							url: "{{$smarty.const.DOMAIN}}/Register/keys",
							data: {
									regkey:function() {
									return $("#register_key").val();
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
			success: function(label) {
				//正确时的样式
				label.text(" ").addClass("success");
			},
			messages: {
				register_username: {
					required:"* 请输入用户名",
					usernameCheck: "* 只能包括[3-16位]英文字母、数字和下划线",
					remote: "* 用户名已经存在"
				},
				register_nickname: {
					required:"* 请输入昵称",
					nicknameCheck: "* 只能包括中文字、英文字母、数字和下划线",
					remote: "* 昵称已经存在"
				},
				register_password: {
					required:"* 请输入密码",
					
				},
				register_email: {
					required:"* 请输入邮箱",
					email: "* 请输入正确的邮箱格式",
					remote: "* 邮箱已经被使用"
				},
				register_repeatpassword: {
					required:"* 请输入确认密码",
					equalTo:"* 两次输入的密码不一致"
				},
				register_key:{
						required: "* 请输入邀请码",
						remote: "* 邀请码错误或已被使用"
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
				register_page();
			}	
		});
		function register_page(){
			//alert('register has been called');
			var username = $('#register_username').val();
			var usernickname = $('#register_nickname').val();
			var email = $('#register_email').val();
			var emailstatus = $('#register_emailstatus').val();
			//var captcha = $('#captcha').val();
			var password = $('#register_password').val();
			var repeatpassword = $('#register_repeatpassword').val();
			var key = $('#register_key').val();
				//alert(username+' '+usernickname+' '+email+' '+password+' '+repeatpassword+' '+key);
				$.post(	
					"{{$smarty.const.DOMAIN}}/register/register",			
					{username: username, usernickname: usernickname,email: email,emailstatus:emailstatus,password:password,repeatpassword:repeatpassword,key:key},
					function (data){
						data = data.split(':');
						switch(data[0]){
							case '1':
								alert('注册成功!请到您邮箱激活信息');
								window.parent.location.reload(); 
								//messageBox(data[1],'success');
								break;
							case '101':
								//change_captcha();
								$('#register_key').val('请重新输入邀请码');
								$('#register_key').closest('.control-group').removeClass('success').addClass('error');
								$('#register_key').select();
								alert(data[1]);
								messageBox(data[1],'error',2);
								break;
							default:
								//change_captcha();
								messageBox('系统错误，请重新尝试','error',2);
									$('#regusername').select();
								break;
						}
					}
				);
		}
	});
</script>	
{{include file="../public/headnavbar.tpl"}}
			<div class="row-fluid">
				<div class="span2">
					
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>注册新用户</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
					<form id="register_form" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/register/register" method="post">
					  <div class="control-group">
						<label class="control-label" for="register_username">用户名</label>
						<div class="controls">
						  <input type="text" name="register_username" id="register_username" placeholder="用户名"/>
						</div>
					  </div>
					  <div class="control-group">
							<label class="control-label" for="register_nickname">昵称</label>
							<div class="controls">
							  <input type="text" id="register_nickname" name="register_nickname" placeholder="用户名">
							</div>
						  </div>
					  <div class="control-group">
						<label class="control-label" for="register_email">邮箱</label>
						<div class="controls">
						  <input type="text" name="register_email" id="register_email" placeholder="邮箱"/>
							<input type="checkbox" name="register_emailstatus" id="register_emailstatus" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="公开邮箱，所有人访问您的主页将能看见您的邮箱"/> 公开邮箱
							<script>
								$(document).ready(function() {
									$('#register_emailstatus').hover(function(){
										$(this).tooltip('show');
									});
								});
							</script>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="register_password">密码</label>
						<div class="controls">
						  <input type="password" name="register_password" id="register_password" placeholder="密码"/>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="register_repeatpassword">确认密码</label>
						<div class="controls">
						  <input type="password" name="register_repeatpassword" id="register_repeatpassword" placeholder="确认密码"/>
						</div>
					  </div>
					  {{if isset($key) }}
						{{if $key == 0}}
						<div class="control-group">
							<label class="control-label" for="register_key">邀请码</label>
							<div class="controls">
							  <input type="text" id="register_key" name="register_key" placeholder="邀请码">
							  <small><a href="{{$smarty.const.DOMAIN}}/about">如何获取邀请码？</a></small>
							</div>
						  </div>
						{{else}}
						<input type="hidden" id="register_key" name="register_key" value="{{$key}}" />
						{{/if}}
					  {{/if}}
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" id="registerbutton" class="btn btn-primary" data-loading-text="注册中...">注册</button>
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
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
{{include file="../public/footer.tpl"}}	