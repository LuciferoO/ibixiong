{{include file="../public/header.tpl"}}	
{{include file="../public/headnavbar.tpl"}}
				<div class="modal  hide fade " id="messagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>发送消息</h4>
					</div>
					<form id="modal-messageform" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/message/post" method="post" onsubmit="return false;">
						<div class="box box-info" id="box-info-message" style="margin-top:15px">消息信息错误，请按照系统提示填写正确格式</div>
						<div class="modal-body">
							<div class="control-group">
								<label class="control-label" style="width:80px;"  for="receiver">收信人：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="receiver" id="receiver" placeholder="分享的文章标题"  />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="messagecontent">内容：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="messagecontent" name="messagecontent" placeholder="您要发送的消息" style="width:400px;"/>
								</div>
							</div>							  
						</div>	
						<div class="modal-footer">
							<button type="submit" id="modal-shareform-submit" class="btn btn-primary" data-loading-text="提交中...">提交</button>
							<!--button type="submit" class="btn">重置</button-->							
						</div>
					</form>
			</div>	
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.autogrowtextarea.js"></script>
		
		<script>
		$(document).ready(function(){
			{{if $answerbox == 1}}
			$('#comment_form').validate({
					rules: {
						commentinput:{
							required:true
						},
					},
					messages: {
						commentinput: {
							required:"* 您还没有输入评论内容",
						},
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						comment();
					}	
				});
			function comment() {
				var commentinput = $('#commentinput').val();
				$.post(
					"{{$smarty.const.DOMAIN}}/content/comment",
					{comment:commentinput,id:{{$post.post_id}} },
					function (data){
						if (data) {
							var insert_comment = "<div class=\"row-fluid comment\" id=\""+data.comment_id+"\">";
							insert_comment += "<div class=\"line_dashed\"></div>";
							insert_comment += "<div class=\"row-fluid\" >";
							insert_comment += "<div class=\"span1\">";
							insert_comment += "<img data-src=\"{{$smarty.const.DOMAIN}}/assets/js/holder.js/45x45\" style=\"width:45px;height:45px;\" src=\"{{$smarty.const.OSSDOMAIN}}/{{$user_photo}}\" />";
							insert_comment += "</div>";
							insert_comment += "<div class=\"span11  comment\">";
							insert_comment += "<div class=\"row-fluid\">";
							insert_comment += "<div class=\"span10\">";
							insert_comment += "<a href=\"{{$smarty.const.DOMAIN}}/center/space/name/{{$username}}\" data-name=\"{{$username}}\">{{$username}}</a>";
							insert_comment += "您的回复, <abbr class=\"timeago\" title=\""+data.comment_date+"\">"+data.comment_date+"</abbr>";
							insert_comment += "</div>";
							insert_comment += "<div class=\"span2\">";
							insert_comment += "<button id=\"comment_like\" class=\"btn-mini btn-link\" type=\"button\" title=\"喜欢\"><i class=\"icon-heart\"></i></button>";
							insert_comment += "<button id=\"comment_replay\" class=\"btn-mini btn-link\" type=\"button\" title=\"回复\"><i class=\"icon-share\"></i></button>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "<div class=\"row-fluid\">";
							insert_comment += data.comment_content;
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							//alert(insert_comment);
							$("#comment_list").append(insert_comment);
							$("#commentinput").val("");
						} else {
							
						}
					},"json"
				);
			}
			{{/if}}
			$('#messagebutton').click(function(event){
				
				{{if $answerbox == 1}}
				$("#messagemodal").modal({
						"backdrop" : "static",
						"keyboard" : true,
						"show" : true // this parameter ensures the modal is shown immediately
						}
				);
				$receiver = $(this).parent().parent().children('div:first').children('a').children('small:first').text();
				$receiver = $receiver.substr(1);
				$('#receiver').val($receiver);
				{{else}}
				alert('未登录不能发送消息');
				{{/if}}
			});	
			$('#box-info-message').hide();
			$('#messagecontent').autoGrow();
			$('#modal-messageform').validate({
				rules: {
					receiver:{
						required:true
					},
					messagecontent:{
						required:true
					},
				},
				messages: {
					receiver: {
						required:"* 收信人不能为空",
					},
					messagecontent: {
						required:"* 消息内容不能为空",
					},
				},
				highlight: function(element) {
					$(element).closest('.control-group').removeClass('success').addClass('error');
				},
				success: function(element) {
					element
					.closest('.control-group').removeClass('error');
				},
				submitHandler: function() {
					message();
				}	
			});
			function message() {
				receiver = $('#receiver').val();
				messagecontent = $('#messagecontent').val();
				$.post(
					"{{$smarty.const.DOMAIN}}/message/post",
					{receiver:receiver,messagecontent:messagecontent},
					function (data){
						data = data.split(':');
						switch(data[0]){
						//switch(data){
							case '1':
								alert('提交成功');
								break;
							case '101':
								alert('提交失败');
								break;
							default:
								messageBox('系统错误，请重新尝试','error','share');
								$('#post_title').select();
								break;
						}
					}
				);
			}
		});	
		</script>
		
		
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">
						<!--li><img src="assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li-->
						<li><img src="{{$smarty.const.OSSDOMAIN}}/ibixiong-logo.png" class="img-rounded" alt="ibixiong"/></li>
						<hr class="hr">
						
						<div class="accordion" id="accordion">
						{{section name=categorys loop=$category}}
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$smarty.section.categorys.index}}">
											{{$category[categorys].category_name}}
										</a>
									</div>
									{{if $smarty.section.categorys.first}}
									<div id="collapse{{$smarty.section.categorys.index}}" class="accordion-body collapse in">
									{{else}}
									<div id="collapse{{$smarty.section.categorys.index}}" class="accordion-body collapse">
									{{/if}}
									{{if isset($category[categorys].children)}}
										{{section name=child loop=$category[categorys].children}}
											<div class="accordion-inner">
												<a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$category[categorys].children[child].category_id}}/name/{{$category[categorys].children[child].category_name}}">{{$category[categorys].children[child].category_name}}</a>
											</div>
										{{/section}}
									{{/if}}	
									</div>
								</div>
						{{/section}}
						</div>
					</ul>
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">分类<span class="divider">|</span></li>
								{{section name=categorys loop=$category}}
								<li><a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$category[categorys].category_id}}">{{$category[categorys].category_name}}</a><span class="divider">|</span></li>
								{{/section}}
								<li class="pull-right"><i class="icon-leaf"></i><a href="{{$smarty.const.DOMAIN}}/rss">RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<h2>{{$post.post_title}}</h2>
					</div>
					<div class="row-fluid">
						<div class="span7">
							<div class="row-fluid">
								<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$post.user_info.user_nickname}}">{{$post.user_info.user_nickname}}</a>
								发表于 {{$post.post_date}} 
								
							</div>
							<div class="row-fluid">
							{{section name=tags loop=$tag}}
								<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tag[tags].tag_id}}/name/{{$tag[tags].tag_name}}"><span class="label label-info">{{$tag[tags].tag_name}}</span></a>
							{{/section}}
							</div>
						</div>
						<div class="span5 onebutton-share">
							<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right;">
							<a class="bds_tsina"></a>
							<a class="bds_tqq"></a>
							<a class="bds_qzone"></a>
							<a class="bds_renren"></a>
							<a class="bds_t163"></a>
							<span class="bds_more">更多</span>
							<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6605421" ></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
							</script>
							<!-- Baidu Button END -->
						</div>
					</div>
					<span style="padding:10px"></span>
					{{if $post.post_original}}
					<h5>原创文章</h5>
					{{else}}
					<h5>来源于：<a href="{{$post.post_from_url}}">{{if $post.post_from_site}}{{$post.post_from_site}}{{else}}{{$post.post_from_url}}{{/if}}</a></h5>
					{{/if}}
					
					<div class="row-fluid reading-contetnt">
						<!--p><img src="{{$smarty.const.DOMAIN}}/{{$post.post_img}}"></img></p-->
						{{$post.post_content}}
					</div>
					<div class="row-fluid">
						<div class="span8">
						</div>	
						<div class="span4 bookmark">
						{{if isset($login) and $login == 1}}	
							<button id="focus" class="btn btn-small btn-primary" type="button"><i class="icon-bookmark icon-white"></i>关注</button>
							<button id="love" class="btn btn-small btn-primary" type="button"><i class="icon-heart icon-white"></i>喜欢</button>
							<button id="collect" class="btn btn-small btn-primary" type="button"><i class="icon-star icon-white"></i>收藏</button>
						{{/if}}
						</div>
						{{if isset($login) and $login == 1}}	
						<script>
						$(document).ready(function(){
							$('#focus').click(function(){
								$.post(
									'{{$smarty.const.DOMAIN}}/content/button',
									{username: '{{$username}}',id: {{$post.post_id}}, type: 'focus' },
									function (data) {
										switch(data){
											case '0':
												$('#focus').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#focus').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$('#love').click(function(){
								$.post(
									'{{$smarty.const.DOMAIN}}/content/button',
									{username: '{{$username}}',id: {{$post.post_id}}, type: 'love' },
									function (data) {
										switch(data){
											case '0':
												$('#love').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#love').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$('#collect').click(function(){
								$.post(
									'{{$smarty.const.DOMAIN}}/content/button',
									{username: '{{$username}}',id: {{$post.post_id}}, type: 'collect' },
									function (data) {
										switch(data){
											case '0':
												$('#collect').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#collect').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$(".comment_replay").click(function(){
								var $id = $(this).closest(".comment").attr('id');
								var $floor = $(this).parent().parent().children('div:first').children('small:first').text();
								var $nickname = $(this).parent().parent().children('div:first').children('a:first').text();
								//alert($floor+' '+$nickname+' ');
								$("#commentinput").val('回复 '+$floor+' @'+$nickname+' ');
								$("#commentinput").select();
							});
							$(".comment_like").click(function(){
								var $id = $(this).closest(".comment").attr('id');
								var $commentlike = $(this);
								$.post(
									'{{$smarty.const.DOMAIN}}/content/commentlike',
									{id: $id},
									function (data) {
										switch(data){
											case '1':
												//alert('成功');
												$commentlike.children('i:first').removeClass('icon-heart').addClass('icon-glass');
												break;
											default: alert('操作失败');break;
										}
									}
								);
							});
						});
						</script>
						{{/if}}
					</div>
					<hr>
					<div class="row-fluid">
						<small>凡本网注明转载自其他媒体的作品，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如涉及作品内容、版权和其它问题，请在30日内与本网联系，我们将在第一时间删除内容！</small><br />
						<small>本站文章版权归原作者所有 内容为作者个人观点 本站只提供参考并不构成任何投资及应用建议。本站拥有对此声明的最终解释权。</small>
					</div>
					<hr>
					<div id="preview" ></div>
					<h4>文章评论：</h4>
					<div class="row-fluid" id="comment_list">
						{{section name=comment_user loop=$comment}}
						<div class="row-fluid comment" id="{{$comment[comment_user].comment_id}}">
							<div class="line_dashed"></div>
							<div class="row-fluid" >
								<div class="span1">
									<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/45x45" style="width:45px;height:45px;" src="{{$smarty.const.OSSDOMAIN}}/{{$comment[comment_user].author_info.user_photo}}" />
								</div>
								<div class="span11">
									<div class="row-fluid">
										<div class="span10">
											<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$comment[comment_user].author_info.user_nickname}}" data-name="{{$comment[comment_user].comment_author}}">{{$comment[comment_user].author_info.user_nickname}}</a>
												<small>{{$smarty.section.comment_user.index + 1}}楼,</small> <abbr class="timeago" title="{{$comment[comment_user].comment_date}}">{{$comment[comment_user].timebefore}}</abbr>
										</div>
										<div class="span2">
											<button class="comment_like btn-mini btn-link" type="button" title="喜欢"><i class="icon-heart"></i></button>
											<button class="comment_replay btn-mini btn-link" type="button" title="回复"><i class="icon-share"></i></button>
										</div>
									</div>
									<div class="row-fluid">
									{{$comment[comment_user].comment_content}}
									</div>
								</div>
							</div>
						</div>		
						{{/section}}
					</div>
					<div class="line_dashed"></div>
					<div id="preview" ></div>
					{{if $answerbox == 1}}
					<div class="row-fluid shadow-answerbox">
						<div class="comments ">
							<div class="span1">
								<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/45x45" style="width:45px;height:45px;" src="{{$smarty.const.OSSDOMAIN}}/{{$user.user_photo}}" />
							</div>
							<div class="span11  comment">
								<div class="row-fluid">
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$user.user_nickname}}" data-name="{{$user.user_nickname}}">{{$user.user_nickname}}</a>
										<span class="opt gray">{{$user.now}}</span>
									</div>
									<div class="row-fluid">
										<form id="comment_form" action="{{$smarty.const.DOMAIN}}/content/comment/id/{{$post.post_id}}" method="post" submit="return false;">
											<textarea class="topic_editor span10" cols="40" id="commentinput" name="comment" placeholder="你怎么看..." rows="4" tabindex="1"></textarea>
											<button type="submit" id="btn_reply" class="btn btn-primary btn-answer" tabindex="2">提交回复</button>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
					<script>
					  $(document).ready(function(){
						$("#commentinput").autoGrow();
					  });
					</script>
					{{else}}
					<div class="inset-margin">
						<div style="padding:20px;">
							请 <a href="{{$smarty.const.DOMAIN}}/login">登录</a> 后发表评论。 还没有帐号 <a href="{{$smarty.const.DOMAIN}}/register" class="btn btn-mini btn-danger">现在注册</a> 
						</div>
					</div>
					<div class="row-fluid shadow-answerbox">
						<div class="comments ">
							<div class="span1">
								<img class="img-rounded" src="{{$smarty.const.OSSDOMAIN}}/ibixiong.ico" style="width:48px;height:48px;margin-left:10px;"/>
							</div>
							<div class="span11  comment">
								<div class="row-fluid">
									<div class="row-fluid">
										匿名用户
										<span class="opt gray">{{$now}}</span>
									</div>
									<div class="row-fluid">
										<form action="{{$smarty.const.DOMAIN}}/content/comment/id/{{$post.post_id}}" method="post">
											<textarea class="topic_editor span10" cols="40" id="commentInput" name="comment" placeholder="登陆后发表您的观点" rows="4" tabindex="1" disabled="disabled"></textarea>
											<button disabled="disabled" id="btn_reply" class="btn btn-primary btn-answer disabled" tabindex="2">提交回复</button>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
					{{/if}}
					
				</div>
				<div class="span3">
					{{section name=rightbars loop=$rightbar}}
						{{if $rightbar[rightbars].option_name == 'userlike'}}
						<div class="row-fluid">
							<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<ul class="unstyled">
								{{section name=userlike loop=$rightbar[rightbars].userlikes}}
									<li class="shadow-box"><a  href="{{$smarty.const.DOMAIN}}/content/view/id/{{$rightbar[rightbars].userlikes[userlike].post_id}}">{{$rightbar[rightbars].userlikes[userlike].post_title}}</a></li>
								{{/section}}
							</ul>
						</div>
						{{else if $rightbar[rightbars].option_name == 'author'}}
							
						<div class="row-fluid">
							<h5 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<div class="line_dashed"></div>
							<div class="row-fluid">
								<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$rightbar[rightbars].author.user_nickname}}">
									<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/180x180" style="width: 180px; height: 180px;" class="img-polaroid" src="{{$smarty.const.OSSDOMAIN}}/{{$rightbar[rightbars].author.user_photo}}"/>
								</a>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$rightbar[rightbars].author.user_nickname}}" data-name="{{$rightbar[rightbars].author.user_nickname}}"><small>@{{$rightbar[rightbars].author.user_nickname}}</small></a>
								</div>
								<div class="span6">
									<a class="btn-mini btn-link" id="messagebutton" data-toggle="messagemodal" data-title="发送消息">发送消息</a>
								</div>
							</div>
						</div>
							{{if $rightbar[rightbars].recent_posts}}
							<div class="row-fluid">
								<h6 class="sidebar_title">作者最新的分享</h6>
								<ul class="unstyled">
									{{section name=recent_post loop=$rightbar[rightbars].recent_posts}}
										<li class="shadow-box"><a  href="{{$smarty.const.DOMAIN}}/content/view/id/{{$rightbar[rightbars].recent_posts[recent_post].post_id}}">{{$rightbar[rightbars].recent_posts[recent_post].post_title}}</a></li>
									{{/section}}
								</ul>
							</div>	
							{{/if}}
						{{/if}}
					{{/section}}
					
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		
		
{{include file="../public/footer.tpl"}}			