{{include file="../public/header.tpl"}}
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/bootstrap-tagmanager.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/bootstrap-formhelpers.css"/>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-tagmanager.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/bootstrap-formhelpers-selectbox.js"></script>
		<script>
		$(document).ready(function(){
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
					<div class="row-fluid" style="height:80px;">
						<ul id="rollsItem" class="rollsItemContent unstyled">
							{{section name=quotes loop=$quote}}
							<li>{{$quote[quotes].option_value}}</li>
							{{/section}}
						</ul>
				
					</div>
					<div class="row-fluid">
						<button type="submit" class="btn  btn-small btn-danger" onclick="location.href='{{$smarty.const.DOMAIN}}/share/original'">分享原创</button><br /><br />
						<form action="{{$smarty.const.DOMAIN}}/share/post" method="post">
							标题： <input type="text" name="post_title" placeholder="分享的文章标题" style="width:412px;"/><br />
							来源： <input type="text" name="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:412px;"/><br />
							{{if isset($category)}}
							分类： <div class="bfh-selectbox">
								<input type="hidden" name="selectbox_category" value="">
									<div class="bfh-selectbox-options">
										<div role="listbox">
											<ul role="option">
												{{section name=select_category loop=$category}}
												<li><a tabindex="-1" href="#" data-option="{{$category[select_category].category_id}}">{{$category[select_category].category_name}}</a></li>
												{{/section}}
											</ul>
										</div>
								  </div>
							</div>
							{{/if}}
							推荐首页缩略图： <input type="text" name="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:412px;"/><br />
							<br />
							标签：<small>使用半角",""."或"Enter"提交</small> 
							<br />
							<input type="text" autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
							<br />
							<input type="hidden" name="type" value="0"/><br />
							<button type="submit" class="btn btn-primary">保存</button>
							<!--button type="button" class="btn">取消</button-->
						</form>	
					</div>
				</div>
				<div class="span3">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		
{{include file="../public/footer.tpl"}}		
		