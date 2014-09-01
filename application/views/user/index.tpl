{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
					<h4>@{{$user_info.user_nickname}}</h4>
					<small>{{$smarty.const.DOMAIN}}/center/space/name/{{$user_info.user_nickname}}</small>
					<h3>基本资料</h3>
					<hr>
					<div class="row-fluid">
					<ul class="unstyled user-base">
						<li>姓名：{{$user_info.user_realname}}</li>
						<li>生日：{{$user_info.user_birthday}}</li>

						<li>昵称：{{$user_info.user_nickname}}</li>
						<li>邮箱：{{$user_info.user_email}}</li>
						<li>地域：{{$user_info.province_name}}  {{$user_info.city_name}}</li>
						<li>个性签名：{{$user_info.user_description}}</li>
						

					</ul>
					<h3>最近足迹</h3>
					<hr>

					<div class="row-fluid">
						<ul class="unstyled">
						{{section name=recentbrowse loop=$recentbrowses}}
							<li><a href="http://ibixiong.com/content/view/id/{{$recentbrowses[recentbrowse].post_id}}">{{$recentbrowses[recentbrowse].post_title}}</a></li>
						{{/section}}	
						</ul>
					</div>
				</div>	
				</div>	
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
