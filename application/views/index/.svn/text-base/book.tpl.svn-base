{{include file="../public/header.tpl"}}	
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
									<div id="collapse{{$smarty.section.categorys.index}}" class="accordion-body collapse">
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
				<div id="book" class="span7 content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">图书<span class="divider">/</span></li>
								<li><a href="#">热门图书</a><span class="divider"></span></li>
							</ul>
						</div>
						<div class="span11">
							{{section name=hot loop=$hotBooks}}
							{{if $smarty.section.hot.iteration % 4 == 1}}
							<div class="row-fluid">
							{{/if}}
							<div class="span3 spanbook">
							<img src="{{$hotBooks[hot].book_image}}" class="img-polaroid img-book" />
								<div class="book-text">
								<a href="{{$smarty.const.DOMAIN}}/Book/view/id/{{$hotBooks[hot].book_id}}">{{$hotBooks[hot].book_title}}</a>
								</div>
							</div>
							{{if $smarty.section.hot.iteration % 4 == 0}}
							</div>
							{{/if}}
							{{/section}}
						</div>
					</div>
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">图书<span class="divider">/</span></li>
								<li><a href="#">最新图书</a><span class="divider"></span></li>
							</ul>
						</div>
						<div class="span11">
							{{section name=new loop=$newBooks}}
							{{if $smarty.section.new.iteration % 4 == 1}}
							<div class="row-fluid">
							{{/if}}
							<div class="span3 spanbook">
							<img src="{{$newBooks[new].book_image}}" class="img-polaroid img-book" />
								<div class="book-text">
								<a href="{{$smarty.const.DOMAIN}}/Book/view/id/{{$newBooks[new].book_id}}">{{$newBooks[new].book_title}}</a>
								</div>
							</div>
							{{if $smarty.section.new.iteration % 4 == 0}}
							</div>
							{{/if}}
							{{/section}}
						</div>
					</div>
				</div>
			</div>	

{{include file="../public/footer.tpl"}}		