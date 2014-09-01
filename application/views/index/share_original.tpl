{{include file="../public/header.tpl"}}
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/bootstrap-tagmanager.css"/>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/ueditor/editor_config.js"></script>
        <script type="text/javascript" src="{{$smarty.const.DOMAIN}}/ueditor/editor_all.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-tagmanager.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-ui.min.js"></script>
		<script>
		$(document).ready(function(){
			var editor = new UE.ui.Editor();
			editor.render("post_content");
			$('#getactivekey_page').mousedown(function(){
				if ($(this).is(':checked')) {
					$('#getactivekey_mail_group_page').css({ "display": "none"});
					$('#getactivekey_page').val(0);
				} else {
					$('#getactivekey_mail_group_page').css({ "display": "block"});
					$('#getactivekey_page').val(1);
				}
			});

			jQuery(".tagManager").tagsManager({
				CapitalizeFirstLetter: true,
				preventSubmitOnEnter: null,
				typeahead: true,
				typeaheadAjaxSource: '/share/tagsahead',
				typeaheadAjaxPolling: true,
				//typeaheadSource: ["Pisa", "Rome", "Milan", "Florence", "New York", "Paris", "Berlin", "London", "Madrid"],
				delimeters: [44, 188, 13, 190],
				backspace: [8],
				blinkBGColor_1: '#FFFF9C',
				blinkBGColor_2: '#CDE69C',
				//hiddenTagListName: 'hiddenTagList'
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
			getSelectVal(); 
			$("#category").change(function(){ 
				getSelectVal(); 
			}); 

		$('#postAction').validate({
			rules: {
				post_title:{
					required:true
				},
				post_img:{
					required:true
				},
				post_content:{
					required:true
				},
				getactivekey_mail_page:{
					email: true
				}
			},
			messages: {
				post_title:{
					required:"* 请输入文章标题",
				},
				post_img:{
					required:"* 请输入文章缩略图",
				},
				post_content:{
					required:"* 请输入文章内容",
				},
				getactivekey_mail_page: {
					email: "* 请输入正确的邮箱格式",
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
				postAction();
			}
		});
		function postAction() {
			var post_title_original = $('#post_title_original').val();
			{{if !isset($login) || $login == 0}}
			var getactivekey_page = $('#getactivekey_page').val();
			var getactivekey_mail_page = $('#getactivekey_mail_page').val();
			{{/if}}
			var post_img = $('#post_img').val();
			var category = $('#category').val();
			var childcategory = $('#childcategory').val();
			var post_content = UE.getEditor('post_content').getContent();
			var hidden_tags = $("input[name='hidden-tags']").val();
			$.post(
				"{{$smarty.const.DOMAIN}}/share/post",
			{{if !isset($login) || $login == 0}}	
				{post_title: post_title_original,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags,getactivekey_page:getactivekey_page,getactivekey_mail_page:getactivekey_mail_page},
			{{else}}
				{post_title: post_title_original,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags},
			{{/if}}
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
{{include file="../public/headnavbar.tpl"}}
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
						<form id="postAction" class="form-horizontal" action="{{$smarty.const.DOMAIN}}/share/post" method="post" onsubmit='return false'>
							{{if !isset($login) || $login == 0}}
							  <div class="control-group">
								<label class="control-label" style="width:90px;" for="getactivekey">获取邀请码：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="checkbox" id="getactivekey_page" name="getactivekey_page" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="选择获取邀请码,文章审核通过后将会把邀请码发送至您的邮箱" value='0'> 
								</div>
							  </div>
							  <div class="control-group" id="getactivekey_mail_group_page" style="display: none">
								<label class="control-label" style="width:80px;" for="getactivekey_mail">邮箱：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="getactivekey_mail_page" id="getactivekey_mail_page" placeholder="请填写您的邮箱地址" style="width:400px;">
								</div>
							  </div>
							{{/if}}  
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputtitle">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_title_original" name="post_title_original" placeholder="分享的文章标题" style="width:412px;"/>
								</div>
							</div>		
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">缩略图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_img" name="post_img" placeholder="缩略图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;"/>
								</div>
							</div>
							{{if isset($category)}}
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputcategory">分类： </label>
								<div class="controls" style="margin-left:100px;">
									<select  name="category" id="category">
										<option selected value=""></option>
										{{section name=parent loop=$category}}
										<option selected value="{{$category[parent].category_id}}">{{$category[parent].category_name}}</option>
										{{/section}}
									</select>
									<select name="childcategory" id="childcategory">
										<option selected value=""></option>
									</select>
								</div>
							</div>	
							{{/if}}
							<textarea name="post_content" id="post_content" ></textarea>
							<script >
								
								//1.2.4以后可以使用一下代码实例化编辑器
								//UE.getEditor('myEditor')
							</script>
							<div class="control-group">
								<label class="control-label" style="width:200px;" for="inputtag">标签：<small>使用半角",""."或"Enter"提交</small></label>
							</div>
							<div class="control-group">
								<div class="controls" style="margin-left:0px;">
									<input type="text" id="inputtag" autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
								</div>
							</div>
							<div class="control-group">
								<div class="controls" style="margin-left:0px;">
									<input type="hidden" name="type" value="1"/><br />
									<button type="submit" class="btn btn-primary">提交</button>
							<!--button type="button" class="btn">取消</button-->
								</div>
							</div>
						</form>	
					</div>
				</div>
				<div class="span3">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		
{{include file="../public/footer.tpl"}}		
		