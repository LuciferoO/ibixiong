{{include file="admin/header.tpl"}}	
<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-tagmanager.js"></script>
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form class="form-horizontal" action="{{$smarty.const.DOMAIN}}/Ibixiong_Comment/update" method="post">
							<div class="control-group">
								<label class="control-label" style="width:80px;" >文章标题：</label>
								<div class="controls" style="margin-left:100px;">
									<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post.post_id}}">
									{{$post.post_title}}
									</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" >发表者：</label>
								<div class="controls" style="margin-left:100px;">
									<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$author_info.user_nickname}}">
									<small>@{{$author_info.user_nickname}}</small>
									</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" >评论内容：</label>
								<div class="controls" style="margin-left:100px;">
									<textarea class="input-block-level" cols="40" rows="3" name="comment_content" id="comment_content" tabindex="1" >{{$comment.comment_content}}</textarea>
								</div>
							</div>	
							<div class="control-group">
								<div class="controls" style="margin-left:100px;">
									<input type="hidden" name="comment_id"  value="{{$comment.comment_id}}"/><br />
									<button type="submit" class="btn btn-primary">保存</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="span1">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
{{include file="admin/footer.tpl"}}	