{{include file="admin/header.tpl"}}
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#aprrovedmonth" data-toggle="tab">最近一个月审核</a>
					</li>
					<li>
						<a href="#approvedmonths" data-toggle="tab">最近三个月已审核</a>
					</li>
					<li>
						<a href="#carouselhistory" data-toggle="tab">历史滚动展示页</a>
					</li>
					<li>
						<a href="#carouselpreview" data-toggle="tab">待确认滚动页</a>
					</li>
					<li>
						<a href="#carousel" data-toggle="tab">滚动展示页now</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="aprrovedmonth">
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
								{{section name=aprrovedmonth_post loop=$aprrovedmonth_posts_array}}
								<tr>
									<td>
										{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_id}}
									</td>
									<td>
										{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_title}}
									</td>
									<td>
										{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_date}}
									</td>
									<td>
										{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/post/status/2/id/{{$aprrovedmonth_posts_array[aprrovedmonth_post].post_id}}" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approvedmonths">
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
								{{section name=approvedmonths_post loop=$approvedmonths_posts_array}}
								<tr>
									<td>
										{{$approvedmonths_posts_array[approvedmonths_post].post_id}}
									</td>
									<td>
										{{$approvedmonths_posts_array[approvedmonths_post].post_title}}
									</td>
									<td>
										{{$approvedmonths_posts_array[approvedmonths_post].post_date}}
									</td>
									<td>
										{{$approvedmonths_posts_array[approvedmonths_post].post_author}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$approvedmonths_posts_array[approvedmonths_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$approvedmonths_posts_array[approvedmonths_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/post/status/2/id/{{$approvedmonths_posts_array[approvedmonths_post].post_id}}" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="carouselhistory">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="40%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=carouselhistory_post loop=$carouselhistory_posts_array}}
								<tr>
									<td>
										{{$carouselhistory_posts_array[carouselhistory_post].option_id}}
									</td>
									<td>
										{{$carouselhistory_posts_array[carouselhistory_post].option_name}}
									</td>
									<td>
										{{$carouselhistory_posts_array[carouselhistory_post].option_value|truncate:200:"..."}}
									</td>
									<td>
										<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="{{$carouselhistory_posts_array[carouselhistory_post].post_img}}" class="img-polaroid"/>
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$carouselhistory_posts_array[carouselhistory_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$carouselhistory_posts_array[carouselhistory_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/carousel/status/2/id/{{$carouselhistory_posts_array[carouselhistory_post].option_id}}" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="carouselpreview">
						<form method="post" action="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/option">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="30%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="30%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=carouselpreview_post loop=$carouselpreview_posts_array}}
								<tr>
									<td>
										{{$carouselpreview_posts_array[carouselpreview_post].option_id}}
									</td>
									<td>
										{{$carouselpreview_posts_array[carouselpreview_post].option_name}}
									</td>
									<td>
										{{$carouselpreview_posts_array[carouselpreview_post].option_value|truncate:200:"..."}}
									</td>
									<td>
										<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="{{$carouselpreview_posts_array[carouselpreview_post].post_img}}" class="img-polaroid"/>
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/view/id/{{$carouselpreview_posts_array[carouselpreview_post].post_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_content/edit/id/{{$carouselpreview_posts_array[carouselpreview_post].post_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/carousel/status/0/id/{{$carouselpreview_posts_array[carouselpreview_post].option_id}}" class="btn-mini btn-link">删除</a>
										<input type="hidden" name="option_id[]" value="{{$carouselpreview_posts_array[carouselpreview_post].option_id}}">
									</td>
								</tr>
								{{/section}}
								
							</tbody>
						</table>
							<button type="submit" class="btn btn-primary">提交</button>
						
						</form>
					</div>
					
					<div class="tab-pane" id="carousel">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="40%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="30%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=carousel_post loop=$carousel_posts_array}}
								<tr>
									<td>
										{{$carousel_posts_array[carousel_post].option_id}}
									</td>
									<td>
										{{$carousel_posts_array[carousel_post].option_name}}
									</td>
									<td>
										{{$carousel_posts_array[carousel_post].option_value|truncate:200:"..."}}
									</td>
									<td>
										<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="{{$carousel_posts_array[carousel_post].post_img}}" class="img-polaroid"/>
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/view/id/{{$carousel_posts_array[carousel_post].option_id}}" class="btn-mini btn-link">查看</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/edit/id/{{$carousel_posts_array[carousel_post].option_id}}" class="btn-mini btn-link">编辑</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/carousel/type/carousel/status/0/id/{{$carousel_posts_array[carousel_post].option_id}}" class="btn-mini btn-link">删除</a>
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