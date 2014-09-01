{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
		<script>
			$(document).ready(function() {
				$('#follow').click(function(){
					$.post(
							'{{$smarty.const.DOMAIN}}/center/follow',
							{{if isset($user_id)}}
							{user_id: '{{$user_id}}',follow: '{{$user_info.user_nickname}}' },
							{{/if}}
							function (data) {
							switch(data){
								case '0':
									$('#follow').addClass('btn-danger');
									{{if $user_info.user_sex == 0 or $user_info.user_sex == 1}}
										$('#follow').val("关注他");
									{{else if $user_info.user_sex == 2}}
										$('#follow').val("关注她");
									{{/if}}
									break;
								case '1':
									$('#follow').removeClass('btn-danger');
									$('#follow').val("已关注");
									break;	
								default:
									alert('您未登陆或登录已失效');
									break;
							}
						}
					);
				});
			});
		</script>
		<div class="row-fluid">
				<div class="span2">
					<div class="row-fluid">
						<img data-src="holder.js/180x180"  style="width: 180px; height: 180px;" class="img-polaroid" src="{{$smarty.const.OSSDOMAIN}}/{{$user_info.user_photo}}" alt="{{$user_info.user_nickname}}"/>
					</div>
					<div class="userhot row-fluid">
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/focus/name/{{$user_info.user_nickname}}">{{$user_relationships.masters}}<br>关注</a>
						</div>
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/follower/name/{{$user_info.user_nickname}}">{{$user_relationships.followers}}<br>粉丝</a>
						</div>
						<div class="span4">
							<a href="{{$smarty.const.DOMAIN}}/center/share/name/{{$user_info.user_nickname}}">{{$user_relationships.shares}}<br>分享</a>
						</div>
					
					</div>
					{{if isset($username) and $user_info.user_nickname == $username}}
					{{else}}
					<div class="row-fluid" style="text-align:center;">
						{{if isset($followed)}}
							<input id="follow" class="btn btn" type="button" value="取消关注">
						{{else}}
							{{if $user_info.user_sex == 0 or $user_info.user_sex == 1}}
								<input id="follow" class="btn btn btn-danger" type="button" value="关注他">
							{{else if $user_info.user_sex == 2}}
								<input id="follow" class="btn btn btn-danger" type="button" value="关注她">
							{{/if}}
						{{/if}}
					</div>
					{{/if}}
					<hr class="hr">
				</div>
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
								{{if $user_info.user_email == 1}}
								<li>邮箱：{{$user_info.user_email}}</li>
								{{/if}}
								<li>地域：{{$user_info.province_name}}</li>
								<li>个性签名：{{$user_info.user_description}}</li>
								

							</ul>
							<h3>最近参与的主题</h3>
							<hr>

							<div class="row-fluid">
								<ul class="unstyled">
								{{section name=recent loop=$recentparticipate}}
									<li><a href="http://ibixiong.com/content/view/id/{{$recentparticipate[recent].post_id}}">{{$recentparticipate[recent].post_title}}</a></li>
								{{/section}}	
								</ul>
							</div>
						</div>	
					</div>	
				</div>
			</div>	
{{include file="../public/footer.tpl"}}	
