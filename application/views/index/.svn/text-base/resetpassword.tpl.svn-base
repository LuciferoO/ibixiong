{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
<script>
	$(document).ready(function(){
		$('#setpassword_form').validate({
					rules: {
						newpassword:{
							required:true,
						},
						newrepeatpassword:{
							required:true,
							equalTo: "#newpassword"
						}
					},
					messages: {
						newpassword: {
							required:"* 请输入密码",
						},
						newrepeatpassword: {
							required:"* 请输入确认密码",
							equalTo:"* 两次输入的密码不一致"
						}
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						resetpasswords();
					}	
				});
		function resetpasswords() {
				var id = $(":hidden[name='id']").val();
				var sign = $(":hidden[name='sign']").attr('value');
				var newpassword = $('#newpassword').val();
				var newrepeatpassword = $('#newrepeatpassword').val();
				//alert(id+''+sign);
				$.post(
					"{{$smarty.const.DOMAIN}}/Reset/password",
					{id: id,sign: sign,newpassword:newpassword,newrepeatpassword:newrepeatpassword},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								alert('修改成功');
								//alert(1);
								window.parent.location.reload(); 
								break;
							case '101':
								alert('提交失败');
								messageBox(data[1],'error',1);
								$('#newpassword').select();
								break;
							default:
								//alert(201);
								messageBox('系统错误，请重新尝试','error',1);
								$('#newpassword').select();
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
						<h4>设置新密码</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" id="setpassword_form" action="{{$smarty.const.DOMAIN}}/Reset/password" method="post" onsubmit="return false;">
						  <div class="control-group">
							<label class="control-label" for="newpassword">新密码：</label>
							<div class="controls">
							  <input type="password" name="newpassword" id="newpassword" placeholder="新密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label" for="newrepeatpassword">确认密码：</label>
							<div class="controls">
							  <input type="password" name="newrepeatpassword" id="newrepeatpassword" placeholder="确认密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls"> 
								<input type="hidden" name="sign" value="{{$sign}}" />
								<input type="hidden" name="id" value="{{$id}}" />
								<button type="submit" class="btn btn-primary" data-loading-text="保存中...">保存</button>
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