{{include file="admin/header.tpl"}}
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#unaprroved_original" data-toggle="tab">原创未审核</a>
					</li>
					<li>
						<a href="#approved_original" data-toggle="tab">原创已审核</a>
					</li>
					<li>
						<a href="#unaprroved" data-toggle="tab">转载未审核</a>
					</li>
					<li>
						<a href="#approved" data-toggle="tab">转载已审核</a>
					</li>
					<li>
						<a href="#violation" data-toggle="tab">违规文章</a>
					</li>
					<li>
						<a href="#rubbish" data-toggle="tab">垃圾文章</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="unaprroved_original">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=unapproved_original_post loop=$unapproved_original_posts_array}}
								<tr>
									<td>
										{{$unapproved_original_posts_array[unapproved_original_post].post_id}}
									</td>
									<td>
										{{$unapproved_original_posts_array[unapproved_original_post].post_title}}
									</td>
									<td>
										{{$unapproved_original_posts_array[unapproved_original_post].post_date}}
									</td>
									<td>
										{{$unapproved_original_posts_array[unapproved_original_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$unapproved_original_posts_array[unapproved_original_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$unapproved_original_posts_array[unapproved_original_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$unapproved_original_posts_array[unapproved_original_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$unapproved_original_posts_array[unapproved_original_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$unapproved_original_posts_array[unapproved_original_post].post_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approved_original">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=approved_original_post loop=$approved_original_posts_array}}
								<tr>
									<td>
										{{$approved_original_posts_array[approved_original_post].post_id}}
									</td>
									<td>
										{{$approved_original_posts_array[approved_original_post].post_title}}
									</td>
									<td>
										{{$approved_original_posts_array[approved_original_post].post_date}}
									</td>
									<td>
										{{$approved_original_posts_array[approved_original_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$approved_original_posts_array[approved_original_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$approved_original_posts_array[approved_original_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$approved_original_posts_array[approved_original_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$approved_original_posts_array[approved_original_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$approved_original_posts_array[approved_original_post].post_id}}" class="btn-mini btn-link">删除</a>
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
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=unapproved_post loop=$unapproved_posts_array}}
								<tr>
									<td>
										{{$unapproved_posts_array[unapproved_post].post_id}}
									</td>
									<td>
										{{$unapproved_posts_array[unapproved_post].post_title}}
									</td>
									<td>
										{{$unapproved_posts_array[unapproved_post].post_date}}
									</td>
									<td>
										{{$unapproved_posts_array[unapproved_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$unapproved_posts_array[unapproved_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$unapproved_posts_array[unapproved_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$unapproved_posts_array[unapproved_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$unapproved_posts_array[unapproved_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$unapproved_posts_array[unapproved_post].post_id}}" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=approved_post loop=$approved_posts_array}}
								<tr>
									<td>
										{{$approved_posts_array[approved_post].post_id}}
									</td>
									<td>
										{{$approved_posts_array[approved_post].post_title}}
									</td>
									<td>
										{{$approved_posts_array[approved_post].post_date}}
									</td>
									<td>
										{{$approved_posts_array[approved_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$approved_posts_array[approved_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$approved_posts_array[approved_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$approved_posts_array[approved_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$approved_posts_array[approved_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$approved_posts_array[approved_post].post_id}}" class="btn-mini btn-link">删除</a>
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
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=illegal_post loop=$illegal_posts_array}}
								<tr>
									<td>
										{{$illegal_posts_array[illegal_post].post_id}}
									</td>
									<td>
										{{$illegal_posts_array[illegal_post].post_title}}
									</td>
									<td>
										{{$illegal_posts_array[illegal_post].post_date}}
									</td>
									<td>
										{{$illegal_posts_array[illegal_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$illegal_posts_array[illegal_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$illegal_posts_array[illegal_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$illegal_posts_array[illegal_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$illegal_posts_array[illegal_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$illegal_posts_array[illegal_post].post_id}}" class="btn-mini btn-link">删除</a>
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
										文章编号
									</th>
									<th>
										文章题目
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
								{{section name=rubblish_post loop=$rubblish_posts_array}}
								<tr>
									<td>
										{{$rubblish_posts_array[rubblish_post].post_id}}
									</td>
									<td>
										{{$rubblish_posts_array[rubblish_post].post_title}}
									</td>
									<td>
										{{$rubblish_posts_array[rubblish_post].post_date}}
									</td>
									<td>
										{{$rubblish_posts_array[rubblish_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$rubblish_posts_array[rubblish_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$rubblish_posts_array[rubblish_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/1/id/{{$rubblish_posts_array[rubblish_post].post_id}}" class="btn-mini btn-link">审核通过</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/2/id/{{$rubblish_posts_array[rubblish_post].post_id}}" class="btn-mini btn-link">违规</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/dispose/type/3/id/{{$rubblish_posts_array[rubblish_post].post_id}}" class="btn-mini btn-link">删除</a>
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