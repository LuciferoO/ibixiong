{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h4>修改密码</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" action="{{$smarty.const.DOMAIN}}/user_account/post" method="post">
						  <div class="control-group">
							<label class="control-label" for="inputPassword">原始密码</label>
							<div class="controls">
							  <input type="password" name="password" id="inputPassword" placeholder="原始密码">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="inputNewpassword">新密码：</label>
							<div class="controls">
							  <input type="password" name="newpassword" id="inputNewpassword" placeholder="新密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label" for="repeatPassword">确认密码：</label>
							<div class="controls">
							  <input type="password" name="repeatpassword" id="repeatPassword" placeholder="确认密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls"> 
							  <button type="submit" class="btn btn-primary" data-loading-text="保存中...">保存</button>
							  <!--button type="submit" class="btn">重置</button-->
							</div>
						  </div>
						</form>	
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
		<script type="text/javascript" src="assets/js/morecity.js"></script>
{{include file="../public/footer.tpl"}}	
