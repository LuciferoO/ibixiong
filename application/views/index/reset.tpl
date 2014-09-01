{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
<script>
	$(document).ready(function(){
		$('#resetpassword_form').validate({
					rules: {
						inputemail:{
							required:true,
							email: true,
							remote: {
										type: "post",
										url: "{{$smarty.const.DOMAIN}}/Reset/check",
										data: {
												inputemail:function(){
													return $("#inputemail").val();
												},
												type: "email"
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
					},
					messages: {
						inputemail: {
							required:"* 请输入邮箱",
							email:"* 请输入正确的邮箱格式",
							remote: "* 邮箱不存在"
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
						sendmail();
					}	
				});
		function sendmail() {
				var inputemail = $('#inputemail').val();
				$.post(
					"{{$smarty.const.DOMAIN}}/Reset",
					{inputemail: inputemail},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								alert('提交成功，请去邮箱查看邮件');
								//alert(1);
								window.location.reload(); 
								break;
							case '101':
								alert('提交失败，邮箱不存在');
								messageBox(data[1],'error',1);
								$('#inputemail').select();
								break;
							default:
								alert('系统错误，请重新尝试');
								window.location.reload(); 
								messageBox('系统错误，请重新尝试','error',1);
								$('#inputemail').select();
								break;
						}
					}
				);
		}
	});			
</script>
			<div class="row-fluid">
				<div class="span2">
					
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>找回密码</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" id="resetpassword_form" action="{{$smarty.const.DOMAIN}}/Reset" method="post" onsubmit="return false;">
						  <div class="control-group">
							<label class="control-label" for="inputemail">邮箱</label>
							<div class="controls">
							  <input type="text" id="inputemail" name="inputemail" placeholder="邮箱">
							</div>
						  </div>
						  <div class="control-group">
							<div class="controls">
							此功能将会发送一个找回密码的特别链接到你的邮箱，通过改链接可以进入重置密码的页面。
							</div>
						  </div>
						  <div class="control-group">
							<div class="controls">
							  <button type="submit" class="btn btn-primary">找回密码</button>
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
						<div class="row-fluid">
							<h6 class="sidebar_title">开放平台登录</h6>
							<ul class="unstyled">
									<li class="shadow-box"><wb:login-button type="3,2" onlogin="login" onlogout="logout">登录按钮</wb:login-button></li>
							</ul>
						</div>
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
{{include file="../public/footer.tpl"}}		