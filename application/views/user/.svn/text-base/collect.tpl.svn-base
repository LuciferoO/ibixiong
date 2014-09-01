{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h3>我的收藏</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th >发表时间</th>
								<th >标题</th>	
							</thead>
							<tbody>
								{{section name=posts loop=$post}}
								<tr>
									<td>{{$post[posts].post_date}}</td>
									<td><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}">{{$post[posts].post_title}}</a></td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
