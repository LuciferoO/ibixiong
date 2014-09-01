		<div class="row-fluid">
			<div class="span2">
				<div class="row-fluid">
					<img data-src="holder.js/180x180"  style="width: 180px; height: 180px;"class="img-polaroid" src="{{$smarty.const.OSSDOMAIN}}/{{$user_info.user_photo}}" alt="{{$user_info.user_nickname}}"/>
				</div>
				<div class="userhot row-fluid">
					<div class="span4">
						<a href="#">{{$user_relationships.masters}}<br>关注</a>
					</div>
					<div class="span4">
						<a href="#">{{$user_relationships.followers}}<br>粉丝</a>
					</div>
					<div class="span4">
						<a href="#">{{$user_relationships.shares}}<br>分享</a>
					</div>
				
				</div>
				<hr class="hr">
				<div class="row-fluid">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">

						<div class="accordion" id="accordion">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse0">基本资料</a>
								</div>
								<div id="collapse0" class="accordion-body collapse in">
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_photo">头像设置</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_info">个人资料</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_account">修改密码</a>
									</div>
								</div>
							</div>
							<!--div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">i分享</a>
								</div>
								<div id="collapse1" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_browsecontribute">阅读贡献</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_sharecontribute">分享贡献</a>
									</div>
								</div>
							</div-->
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">足迹</a>
								</div>
								<div id="collapse2" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_browse">最近浏览</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_comment">最近评论</a>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">我的比熊</a>
								</div>
								<div id="collapse3" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_message">我的消息</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_focus">我的关注</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_share">我的分享</a>
									</div>
									<div class="accordion-inner">
										<a href="{{$smarty.const.DOMAIN}}/user_collect">我的收藏</a>
									</div>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</div>
