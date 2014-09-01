{{include file="admin/header.tpl"}}	
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-tagmanager.js"></script>
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form class="form-horizontal" action="{{$smarty.const.DOMAIN}}/Ibixiong_homepage/editupdate" method="post">
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputtitle">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputtitle" name="option_name" placeholder="分享的文章标题" style="width:412px;" value="{{$carousel.option_name}}"/>
								</div>
							</div>		
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">滚动图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputimage" name="post_img" placeholder="图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;" value="{{$carousel.post_img}}"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">所属链接： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputurl" name="option_value" placeholder="点击后跳转到的链接" style="width:412px;" value="{{$carousel.option_value|escape:'html'}}"/>
								</div>
							</div>
								<textarea name="" id="myEditor" >
									<img src="{{$carousel.post_img}}" />
								</textarea>
								<script >
									var editor = new UE.ui.Editor();
									editor.render("myEditor");
									//1.2.4以后可以使用一下代码实例化编辑器
									//UE.getEditor('myEditor')
								</script>

								
								<div class="control-group">
									<div class="controls" style="margin-left:100px;">
										<input type="hidden" name="post_id"  value="{{$carousel.post_id}}"/><br />
										<input type="hidden" name="option_id"  value="{{$carousel.option_id}}"/><br />
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