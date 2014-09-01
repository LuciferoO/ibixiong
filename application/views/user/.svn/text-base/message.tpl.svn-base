{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h3>最新消息</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发信人</th>
								<th width="55%">标题</th>	
								<th width="15%">状态</th>
								<th width="15%">时间</th>
							</thead>
							<tbody>
								{{section name=messages loop=$message}}
								<tr>
									<td>{{$message[messages].sender_name}}</td>
									<td><a href="{{$smarty.const.DOMAIN}}/user_message/view/id/{{$message[messages].message_id}}">{{$message[messages].message_title}}</a></td>
									<td>{{if $message[messages].message_status == 0}}<span class="label label-important">未读</span>{{else}}<span class="label label-success">已读{{/if}}</td>
									<td>{{$message[messages].message_date}}</td>
								</tr>
								{{/section}}
							</tbody>
						</table>
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
