{{include file="admin/header.tpl"}}
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#addcategory" data-toggle="tab">新增分类</a>
					</li>
					<li>
						<a href="#categoryhistory" data-toggle="tab">曾使用过的分类</a>
					</li>
					<li>
						<a href="#categorypreview" data-toggle="tab">待确认的分类</a>
					</li>
					<li >
						<a href="#category" data-toggle="tab">现在使用的分类</a>
					</li>
				</ul>
				
					

				<div class="tab-content">
					<div class="tab-pane active" id="addcategory">
						<thead>
							<tr>
								<th>
								新的分类将被加入到待使用组
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<form id="addcategory_form" class="form-horizontal" method="post" action="{{$smarty.const.DOMAIN}}/Ibixiong_Category/addcategory">
										<div class="control-group">
											<label class="control-label" for="parentcategory">父类：</label>
											<div class="controls">
												<select  name="parentcategory" id="parentcategory">
													<option selected value="">无</option>
												{{section name=categorys loop=$parent_category }}	
													<option value="{{$parent_category[categorys].category_id}}">{{$parent_category[categorys].category_name}}</option> 
												{{/section}}
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputcategory">分类名称</label>
											<div class="controls">
												<input type="text" id="inputcategory" name="category" placeholder="请填入分类名称">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-primary">提交</button>
											</div>
										</div>
									</form>
								</td>
							</tr>
						</tbody>
					</div>
					<div class="tab-pane" id="categoryhistory">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=categoryhistory loop=$categorys_history_array}}
								<tr>
									<td>
										{{$categorys_history_array[categoryhistory].category_id}}
									</td>
									<td>
										{{$categorys_history_array[categoryhistory].category_name}}
									</td>
									<td>
										{{if isset($categorys_history_array[categoryhistory].tags)}}
											{{section name=categoryhistory_tag loop=$categorys_history_array[categoryhistory].tags}}
												<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$categorys_history_array[categoryhistory].tags[categoryhistory_tag].tag_id}}/name/{{$categorys_history_array[categoryhistory].tags[categoryhistory_tag].tag_name}}"><span class="label label-info">{{$categorys_history_array[categoryhistory].tags[categoryhistory_tag].tag_name}}</span></a>
											{{/section}}
										{{else}}
											无
										{{/if}}	
									</td>
									<td>
										{{$categorys_history_array[categoryhistory].category_date}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_category/updatecategory/status/2/id/{{$categorys_history_array[categoryhistory].category_id}}" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="categorypreview">
						<form method="post" action="{{$smarty.const.DOMAIN}}/Ibixiong_category/updatecategory/status/1">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=categorypreview loop=$categorys_preview_array}}
								<tr>
									<td>
										{{$categorys_preview_array[categorypreview].category_id}}
									</td>
									<td>
										{{$categorys_preview_array[categorypreview].category_name}}
									</td>
									<td>
										{{if isset($categorys_preview_array[categorypreview].tags)}}
											{{section name=categorypreview_tag loop=$categorys_preview_array[categorypreview].tags}}
												<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$categorys_preview_array[categorypreview].tags[categorypreview_tag].tag_id}}/name/{{$categorys_preview_array[categorypreview].tags[categorypreview_tag].tag_name}}"><span class="label label-info">{{$categorys_preview_array[categorypreview].tags[categorypreview_tag].tag_name}}</span></a>
											{{/section}}
										{{else}}
											无
										{{/if}}	
									</td>
									<td>
										{{$categorys_preview_array[categorypreview].category_date}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_category/updatecategory/status/0/id/{{$categorys_preview_array[categorypreview].category_id}}" class="btn-mini btn-link">删除</a>
										<input type="hidden" name="category_id[]" value="{{$categorys_preview_array[categorypreview].category_id}}">
									</td>
								</tr>
								{{/section}}
								
							</tbody>
						</table>
							<button type="submit" class="btn btn-primary">提交</button>
						
						</form>
					</div>
					
					<div class="tab-pane" id="category">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=category loop=$categorys_array}}
								<tr>
									<td>
										{{$categorys_array[category].category_id}}
									</td>
									<td>
										{{$categorys_array[category].category_name}}
									</td>
									<td>
										{{if isset($categorys_array[category].tags)}}
											{{section name=category_tag loop=$categorys_array[category].tags}}
												<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$categorys_array[category].tags[category_tag].tag_id}}/name/{{$categorys_array[category].tags[category_tag].tag_name}}"><span class="label label-info">{{$categorys_array[category].tags[category_tag].tag_name}}</span></a>
											{{/section}}
										{{else}}
											无
										{{/if}}	
									</td>
									<td>
										{{$categorys_array[category].category_date}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_category/updatecategory/status/0/id/{{$categorys_array[category].category_id}}" class="btn-mini btn-link">删除</a>
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