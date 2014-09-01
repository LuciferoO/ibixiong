{{include file="admin/header.tpl"}}
	<script>
		$(document).ready(function(){
			$('#create_activekey_submit').click(function(){
				var $number = $('select[name="number"]').val();
				$.post(	
					"{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/createkeys",	
					{number:$number},
					function (data){
						//alert(data);
						$.each(data, function(index, item){
							if (index == 0) {
								$("#newactivekeys").text(item.activekey_owner+'||'+item.activekey_value);
							} else {
								$("#newactivekeys").text($("#newactivekeys").text()+'\n'+item.activekey_owner+'||'+item.activekey_value);
							}
						});
					}
					,"json"
				);
			});
		});
	</script>
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#create_activekey" data-toggle="tab">生成邀请码</a>
					</li>
					<li>
						<a href="#activekey" data-toggle="tab">未使用邀请码</a>
					</li>
					<li>
						<a href="#used_activekey" data-toggle="tab">已使用邀请码</a>
					</li>
					<li>
						<a href="#dispatched_activekey" data-toggle="tab">已发出邀请码</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="create_activekey">
						<form class="form-horizontal" id="create_activekey_form" action="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/createkeys" method="post" onsubmit="return false;">
						  <div class="control-group">
							<label class="control-label" for="number">数量：</label>
							<div class="controls">
								<select  name="number" id="number" >
									<option selected value="5">5</option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="newactivekeys">邀请码：</label>
							<div class="controls">
							  <textarea class="input-block-level" cols="40" rows="15" name="newactivekeys" id="newactivekeys"  placeholder="新生成的邀请码" tabindex="1" ></textarea>
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls">
							  <button type="submit" id="create_activekey_submit" class="btn btn-primary" data-loading-text="生成中...">生成</button>
							  <!--button type="submit" class="btn">重置</button-->
							</div>
						  </div>
						</form>	
					</div>
					<div class="tab-pane" id="activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=activekey loop=$activekey_array}}
								<tr>
									<td>
										{{$activekey_array[activekey].activekey_id}}
									</td>
									<td>
										{{$activekey_array[activekey].activekey_owner}}
									</td>
									<td>
										{{$activekey_array[activekey].activekey_owner}}||{{$activekey_array[activekey].activekey_value}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$activekey_array[activekey].activekey_id}}/status/1" class="btn-mini btn-link">标记为已使用</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$activekey_array[activekey].activekey_id}}/status/2" class="btn-mini btn-link">标记为已发出</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					
					<div class="tab-pane" id="used_activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=used_activekey loop=$used_activekey_array}}
								<tr>
									<td>
										{{$used_activekey_array[used_activekey].activekey_id}}
									</td>
									<td>
										{{$used_activekey_array[used_activekey].activekey_owner}}
									</td>
									<td>
										{{$used_activekey_array[used_activekey].activekey_owner}}||{{$used_activekey_array[used_activekey].activekey_value}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$used_activekey_array[used_activekey].activekey_id}}/status/0" class="btn-mini btn-link">标记为未使用</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$used_activekey_array[used_activekey].activekey_id}}/status/2" class="btn-mini btn-link">标记为已发出</a>
									</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="dispatched_activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								{{section name=dispatched_activekey loop=$dispatched_activekey_array}}
								<tr>
									<td>
										{{$dispatched_activekey_array[dispatched_activekey].activekey_id}}
									</td>
									<td>
										{{$dispatched_activekey_array[dispatched_activekey].activekey_owner}}
									</td>
									<td>
										{{$dispatched_activekey_array[dispatched_activekey].activekey_owner}}||{{$dispatched_activekey_array[dispatched_activekey].activekey_value}}
									</td>
									<td>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$dispatched_activekey_array[dispatched_activekey].activekey_id}}/status/1" class="btn-mini btn-link">标记为已使用</a>
										<a href="{{$smarty.const.DOMAIN}}/Ibixiong_Activekey/status/id/{{$dispatched_activekey_array[dispatched_activekey].activekey_id}}/status/0" class="btn-mini btn-link">标记为未使用</a>
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