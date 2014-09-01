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
						<h3>文章分类浏览导航</h3>
						<hr class="hr">
						<ul class="unstyled">
							{{section name=categoryswithtags loop=$categoryswithtag}}
								<li>
									<a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$categoryswithtag[categoryswithtags].category_id}}/name/{{$categoryswithtag[categoryswithtags].category_name}}">
										<label>{{$categoryswithtag[categoryswithtags].category_name}}</label>
									</a>
									<ul class="inline">
									{{if isset($categoryswithtag[categoryswithtags].tags)}}
										{{section name=tag loop=$categoryswithtag[categoryswithtags].tags}}
										{{assign var=random value=10|mt_rand:50}}
											<li style="padding-right:0px;padding-left:0px;">
											<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$categoryswithtag[categoryswithtags].tags[tag].tag_id}}/name/{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}">
												{{if ($smarty.section.tag.iteration+$random) % 5 == 0}}
												<span class="label label-info">{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}</span>
												{{else if ($smarty.section.tag.iteration+$random) % 5 == 1}}
												<span class="label label-important">{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}</span>
												{{else if ($smarty.section.tag.iteration+$random) % 5 == 2}}
												<span class="label ">{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}</span>
												{{else if ($smarty.section.tag.iteration+$random) % 5 == 3}}
												<span class="label label-success">{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}</span>
												{{else if ($smarty.section.tag.iteration+$random) % 5 == 4}}
												<span class="label warning">{{$categoryswithtag[categoryswithtags].tags[tag].tag_name}}</span>
												{{/if}}
											</a>
											</li>
										{{/section}}
									{{/if}}
									</ul>
								</li>
							{{/section}}
						</ul>
					</div>
				</div>
				<div class="span3">
					{{section name=rightbars loop=$rightbar}}
						{{if $rightbar[rightbars].option_name == 'comment'}}
						<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
						<ul class="unstyled">
							{{section name=hotlink loop=$rightbar[rightbars].hotlinks}}
							<li class="shadow-box">
								<div class="row-fluid">
								<div class="span4">
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$rightbar[rightbars].hotlinks[hotlink].author_name}}">
											<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/50x50" style="width: 50px; height: 50px;"class="img-polaroid" src="{{$smarty.const.OSSDOMAIN}}/{{$rightbar[rightbars].hotlinks[hotlink].author_photo}}"/>
										</a>
									</div>
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/center/space/name/{{$rightbar[rightbars].hotlinks[hotlink].author_name}}">
										<small>@{{$rightbar[rightbars].hotlinks[hotlink].author_name}}</small>
										</a>
									</div>
								</div>
								<div class="span8">
									<div class="row-fluid">
										<small>{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</small><a href="http://ibixiong.com/content/view/id/{{$rightbar[rightbars].hotlinks[hotlink].post_id}}">#{{$rightbar[rightbars].hotlinks[hotlink].post_title}}</a>
									</div>
								</div>
								</div>
							</li>
							{{/section}}
						</ul>
						{{else if $rightbar[rightbars].option_name == 'post'}}
						<div class="row-fluid">
							<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<ul class="unstyled">
								{{section name=hotlink loop=$rightbar[rightbars].hotlinks}}
									<li class="shadow-box"><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$rightbar[rightbars].hotlinks[hotlink].hotid}}">{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</a></li>
								{{/section}}
							</ul>
						</div>
						{{/if}}
					{{/section}}
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
{{include file="../public/footer.tpl"}}	
