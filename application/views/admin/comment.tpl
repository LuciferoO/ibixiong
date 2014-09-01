{{include file="admin/header.tpl"}}
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#approved" data-toggle="tab">评论已审核</a>
					</li>
					<li>
						<a href="#unaprroved" data-toggle="tab">评论未审核</a>
					</li>
					<li>
						<a href="#violation" data-toggle="tab">违规评论</a>
					</li>
					<li>
						<a href="#rubbish" data-toggle="tab">垃圾评论</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="approved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=approved_comment loop=$approved_comments_array}}
								<tr>
									<td>
										{{$approved_comments_array[approved_comment].comment_id}}
									</td>
									<td>
										{{$approved_comments_array[approved_comment].comment_content}}
									</td>
									<td>
										{{$approved_comments_array[approved_comment].comment_post_id}}
									</td>
									<td>
										{{$approved_comments_array[approved_comment].comment_date}}
									</td>
									<td>
										{{$approved_comments_array[approved_comment].comment_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/edit/id/{{$approved_comments_array[approved_comment].comment_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/1/id/{{$approved_comments_array[approved_comment].comment_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/2/id/{{$approved_comments_array[approved_comment].comment_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/3/id/{{$approved_comments_array[approved_comment].comment_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="unaprroved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=unapproved_comment loop=$unapproved_comments_array}}
								<tr>
									<td>
										{{$unapproved_comments_array[unapproved_comment].comment_id}}
									</td>
									<td>
										{{$unapproved_comments_array[unapproved_comment].comment_content}}
									</td>
									<td>
										{{$unapproved_comments_array[unapproved_comment].comment_post_id}}
									</td>
									<td>
										{{$unapproved_comments_array[unapproved_comment].comment_date}}
									</td>
									<td>
										{{$unapproved_comments_array[unapproved_comment].comment_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/edit/id/{{$unapproved_comments_array[unapproved_comment].comment_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/1/id/{{$unapproved_comments_array[unapproved_comment].comment_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/2/id/{{$unapproved_comments_array[unapproved_comment].comment_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/3/id/{{$unapproved_comments_array[unapproved_comment].comment_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="violation">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=illegal_comment loop=$illegal_comments_array}}
								<tr>
									<td>
										{{$illegal_comments_array[illegal_comment].comment_id}}
									</td>
									<td>
										{{$illegal_comments_array[illegal_comment].comment_content}}
									</td>
									<td>
										{{$illegal_comments_array[illegal_comment].comment_post_id}}
									</td>
									<td>
										{{$illegal_comments_array[illegal_comment].comment_date}}
									</td>
									<td>
										{{$illegal_comments_array[illegal_comment].comment_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/edit/id/{{$illegal_comments_array[illegal_comment].comment_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/1/id/{{$illegal_comments_array[illegal_comment].comment_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/2/id/{{$illegal_comments_array[illegal_comment].comment_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/3/id/{{$illegal_comments_array[illegal_comment].comment_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="rubbish">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=rubblish_comment loop=$rubblish_comments_array}}
								<tr>
									<td>
										{{$rubblish_comments_array[rubblish_comment].comment_id}}
									</td>
									<td>
										{{$rubblish_comments_array[rubblish_comment].comment_content}}
									</td>
									<td>
										{{$rubblish_comments_array[rubblish_comment].comment_post_id}}
									</td>
									<td>
										{{$rubblish_comments_array[rubblish_comment].comment_date}}
									</td>
									<td>
										{{$rubblish_comments_array[rubblish_comment].comment_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/edit/id/{{$rubblish_comments_array[rubblish_comment].comment_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/1/id/{{$rubblish_comments_array[rubblish_comment].comment_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/2/id/{{$rubblish_comments_array[rubblish_comment].comment_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/dispose/type/3/id/{{$rubblish_comments_array[rubblish_comment].comment_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
{{include file="admin/footer.tpl"}}