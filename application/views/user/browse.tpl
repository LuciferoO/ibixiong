{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h3>最近浏览</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="70%">标题</th>	
								<th width="15%">浏览次数</th>
							</thead>
							<tbody>
								{{section name=posts loop=$user_browses}}
								<tr>
									<td>{{$user_browses[posts].post_date}}</td>
									<td><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$user_browses[posts].post_id}}">{{$user_browses[posts].post_title}}</a></td>
									<td>{{$user_browses[posts].browse_count}}</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
