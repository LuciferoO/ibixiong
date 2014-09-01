{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
				<div class="span7 content">
					<div class="row-fluid">
						<h3>最新消息</h3>
						<hr class="hr">
						{{if $flag}}
						<h4>{{$message.message_title}}</h4>
						<div class="row-fluid">
							<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$message.sender_name}}">{{$message.sender_name}}</a>
							发送于 {{$message.message_date}} 				
						</div>
						<div class="row-fluid">
							{{$message.message_content}}
						</div>
						{{else}}
						<div class="row-fluid">
							阅读消息错误
						</div>
						{{/if}}
					</div>
				</div>
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
