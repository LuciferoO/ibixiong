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
					{{if isset($users)}}
						{{section name=user loop=$users}}
						<div class="media">
							<a class="pull-left" href="{{$smarty.const.DOMAIN}}/center/space/name/{{$users[user].user_nickname}}">
								<img src="{{$smarty.const.OSSDOMAIN}}/{{$users[user].user_photo}}" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;">
							</a>
							<div class="media-body">
								<h4 class="media-heading">个人信息</h4>
								<p>昵称：{{$users[user].user_nickname}}</p>
								<p>个人简介:{{$users[user].user_description}}</p>
							</div>
						</div>
						{{/section}}
					{{else if isset($user_shares)}}
						{{section name=user_share loop=$user_shares}}
						<div class="media">
							<a class="pull-left" href="{{$smarty.const.DOMAIN}}/content/view/id/{{$user_shares[user_share].post_id}}">
								<img src="{{$user_shares[user_share].post_img}}" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;">
							</a>
							<div class="media-body">
								<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$user_shares[user_share].post_id}}">
								<h4 class="media-heading">{{$user_shares[user_share].post_title}}</h4>
								</a>
								<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$user_shares[user_share].post_id}}">
								{{$user_shares[user_share].post_content}}
								</a>
							</div>
						</div>
						{{/section}}
					{{/if}}
					</div>	
				</div>
			</div>	

		
{{include file="../public/footer.tpl"}}			