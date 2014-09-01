{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h3>最近评论</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="40%">标题</th>	
								<th width="45%">回复内容</th>
							</thead>
							<tbody>
								{{section name=recent loop=$recentcomments}}
								<tr>
									<td>{{$recentcomments[recent].comment_date}}</td>
									<td><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$recentcomments[recent].post_info.post_id}}">{{$recentcomments[recent].post_info.post_title}}</a></td>
									<td>{{$recentcomments[recent].comment_content}}</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
