{{include file="admin/header.tpl"}}	
<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-tagmanager.js"></script>
<script >
									
	$(document).ready(function(){
		var editor = new UE.ui.Editor();
		editor.render("post_content");
		//1.2.4以后可以使用一下代码实例化编辑器
		//UE.getEditor('myEditor')
		jQuery(".tagManager").tagsManager({
			{{if isset($tag)}}
			prefilled: [
						{{section name=tags loop=$tag}}
						"{{$tag[tags].tag_name}}",
						{{if $smarty.section.tags.last}}
						"{{$tag[tags].tag_name}}"
						{{/if}}
						{{/section}}
						],
			{{/if}}
			CapitalizeFirstLetter: true,
			preventSubmitOnEnter: null,
			typeahead: true,
			typeaheadAjaxSource: '/share/tagsahead',
			typeaheadAjaxPolling: true,
			delimeters: [44, 188, 13, 190],
			backspace: [8],
			blinkBGColor_1: '#FFFF9C',
			blinkBGColor_2: '#CDE69C',
			hiddenTagListName: 'hidden_tags',
			//hiddenTagListId: 'hidden_tags',
			//validator: checktag				
		});
		function getSelectVal(){ 
			$.post(
				"{{$smarty.const.DOMAIN}}/share/childcategory",{
					category:   $("#category").val()
				},function(data,state){
					var childcategory = $("#childcategory"); 
					$("option",childcategory).remove(); //清空原有的选项 
					$.each(data,function(index,array){ 
						var option = "<option value='"+array['category_id']+"'>"+array['category_name']+"</option>"; 
						childcategory.append(option); 
					}); 
				},
				"json"
			);
		}
		//getSelectVal(); 
		$("#category").change(function(){ 
			getSelectVal(); 
		}); 	
		$('#post-form').validate({
			rules: {
				post_title:{
					required:true
				},
			{{if $post.post_original != 1 }}
				post_from_site:{
					required:true
				},
				post_url:{
					required:true
				},
			{{/if}}	
				post_img:{
					required:true
				},
				post_original:{
					required:true
				},
				post_content:{
					required:true
				},
			},
			messages: {
				post_title:{
					required:"* 请输入文章标题",
				},
			{{if $post.post_original != 1 }}	
				post_from_site:{
					required:"* 请输入文章来源站名",
				},
				post_url:{
					required:"* 请输入文章来源链接",
				},
			{{/if}}		
				post_img:{
					required:"* 请输入文章缩略图",
				},
				post_original:{
					required:"* 请选择文章是否为原创",
				},
				post_content:{
					required:"* 请输入文章内容",
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
				postupdate();
			}
		});
		function postupdate() {
			var post_title = $('#post_title').val();
			//var password = $('#password').val();
			var post_from_site = $('#post_from_site').val();
			var post_url = $('#post_url').val();
			var post_img = $('#post_img').val();
			var category = $('#category').val();
			var post_original = $('#post_original').val();
			var childcategory = $('#childcategory').val();
			var post_content = UE.getEditor('post_content').getContent();
			var hidden_tags = $("input[name='hidden_tags']").val();
			var post_id = $('#post_id').val();
			//alert(hidden_tags);
			$.post(
				"{{$smarty.const.DOMAIN}}/Ibixiong_content/editupdate",
				{post_title: post_title,post_from_site:post_from_site,post_original:post_original,post_url:post_url,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags,post_id:post_id},
				function (data){
					data = data.split(':');
					switch(data[0]) {
						case '1':
							alert(data[1]);
							window.location.reload(); 
							break;
						case '101':
							alert(data[1]);
							break;
						default:
							alert('系统错误');
							break;
					}	
				}
			);	
		}
});	
</script>
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form id="post-form" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/Ibixiong_content/editupdate" method="post" onsubmit="return false;">
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_title">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_title" name="post_title" placeholder="分享的文章标题" style="width:412px;" value="{{$post.post_title}}"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_from_site">来源站点：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_from_site" name="post_from_site" placeholder="文章来源的网站名" style="width:412px;" value="{{$post.post_from_site}}"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_url">来源：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_url" name="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:412px;" value="{{$post.post_from_url}}"/>
								</div>
							</div>	
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_img">缩略图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_img" name="post_img" placeholder="缩略图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;" value="{{$post.post_img}}"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_original">原创：</label>
								<div class="controls" style="margin-left:100px;">
									<label class="radio inline">
										<input type="radio" name="post_original" id="post_original" value="0" {{if $post.post_original == 0 }}checked{{/if}}>非原创
									</label>	
									<label class="radio inline">
										<input type="radio" name="post_original" id="post_original" value="1" {{if $post.post_original == 1}}checked{{/if}}>原创
									</label>
								</div>
						    </div>
							{{if isset($categorys)}}
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputcategory">分类： </label>
								<div class="controls" style="margin-left:100px;">	
									{{if isset($category) and $category.category_parent == 0}}
									<select class="1" name="category" id="category">
										<option selected value="{{$category.category_id}}">{{$category.category_name}}</option>
										{{section name=parent loop=$categorys}}
											{{if $categorys[parent].category_id != $category.category_id}}
											<option  value="{{$categorys[parent].category_id}}">{{$categorys[parent].category_name}}</option>
											{{/if}}
										{{/section}}
									</select>	
									<select class="1" name="childcategory" id="childcategory">
										<option selected value=""></option>
									</select>
									{{else if isset($category) and $category.category_parent != 0}}
									<select  class="2" name="category" id="category">
										<option  selected value="{{$parent_category.category_id}}">{{$parent_category.category_name}}</option>
										{{section name=parent loop=$categorys}}
											{{if $categorys[parent].category_id != $parent_category.category_id}}
											<option  value="{{$categorys[parent].category_id}}">{{$categorys[parent].category_name}}</option>
											{{/if}}
										{{/section}}
									</select>
									<select class="2" name="childcategory" id="childcategory">
										<option selected value="{{$category.category_id}}">{{$category.category_name}}</option>
									</select>
									{{else}}
									<select  class="3" name="category" id="category">
										<option selected value=""></option>
										{{section name=parent loop=$categorys}}
											<option  value="{{$categorys[parent].category_id}}">{{$categorys[parent].category_name}}</option>
										{{/section}}
									</select>
									<select class="3" name="childcategory" id="childcategory">
										<option  value=""></option>
									</select>
									{{/if}}
									
								</div>
							</div>	
							{{/if}}	
								<textarea name="post_content" id="post_content" >
									{{$post.post_content}}
								</textarea>
								
								<br/><br/>
								<div class="control-group">
									<label class="control-label" style="width:200px;" for="tags">标签：<small>使用半角",""."或"Enter"提交</small></label>
									<div class="controls" style="margin-left:100px;">
										<input type="text"  autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
									</div>
								</div>
								
								<div class="control-group">
									<div class="controls" style="margin-left:100px;">
										<input type="hidden" id="post_id" name="post_id"  value="{{$post.post_id}}"/><br />
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