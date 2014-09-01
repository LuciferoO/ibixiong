{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
		<div class="container">
			<div class="row-fluid">
				<div class="span2">
					<div class="row-fluid">
						<img data-src="holder.js/160x160" class="img-polaroid" src="{{$smarty.const.DOMAIN}}/user_photos/{{$user_photo}}" alt="{{$username}}"/>
					</div>
					<div class="userhot row-fluid">
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/focus/name/光芒">30<br>关注</a>
						</div>
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/follower/name/光芒">30<br>粉丝</a>
						</div>
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/share/name/光芒">30<br>分享</a>
						</div>
					</div>
					<hr class="hr">
					<ul class="nav nav-pills nav-stacked pull-right sidebar category">
						<!--li><img src="assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li-->
						<li><img src="{{$smarty.const.DOMAIN}}/user_photos/{{$user_photo}}" class="img-rounded" alt="{{$username}}"/></li>
						<hr class="hr">
							{{section name=leftbar_ups loop=$leftbar_up}}
								<li><a href="{{$smarty.const.DOMAIN}}/{{$leftbar_up[leftbar_ups].option_others}}">{{$leftbar_up[leftbar_ups].option_value}}</a></li>
							{{/section}}
						<hr class="hr">
							{{section name=leftbar_downs loop=$leftbar_down}}
								<li><a href="{{$smarty.const.DOMAIN}}/{{$leftbar_down[leftbar_downs].option_others}}">{{$leftbar_down[leftbar_downs].option_value}}</a></li>
							{{/section}}
					</ul>
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>个人资料</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" action="{{$smarty.const.DOMAIN}}/user_account/post" method="post">
						  <div class="control-group">
							<label class="control-label" for="inputPassword">原始密码</label>
							<div class="controls">
							  <input type="password" name="password" id="inputPassword" placeholder="昵称">
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
				<div class="span3 content">
					<div class="row-fluid">						
						<form class="form-search" method="post">
								<input type="text" class="input-medium search-query" placeholder="搜索" action="{{$smarty.const.DOMAIN}}/search/search">
								<button type="submit" class="btn btn-search btn-info"><i class="icon-search"></i></button>
						</form>
					</div>
					{{section name=rightbars loop=$rightbar}}
						<div class="row-fluid">
							<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<ul class="unstyled">
								{{section name=hotlink loop=$rightbar[rightbars].hotlinks}}
									<li class="shadow-box"><a  href="{{$rightbar[rightbars].option_name}}/{{$rightbar[rightbars].hotlinks[hotlink].hotid}}">{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</a></li>
								{{/section}}
							</ul>
						</div>
					{{/section}}
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/morecity.js"></script>
{{include file="../public/footer.tpl"}}	
