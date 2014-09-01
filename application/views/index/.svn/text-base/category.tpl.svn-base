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
				<div class="span7 content" id="content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								{{if isset($current_parent)}}
								<li ><a href="{{$smarty.const.DOMAIN}}">首页</a><span class="divider">/</span></li>
								<li ><a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$current_parent.category_id}}/name/{{$current_parent.category_name}}">{{$current_parent.category_name}}</a><span class="divider">/</span></li>
								<li class="active">{{$current_category.category_name}}<span class="divider"></span></li>
								{{else if isset($current_category) and $current_category.category_parent == 0}}
								<li class="active">{{$current_category.category_name}}<span class="divider">|</span></li>
								{{section name=current loop=$current_category.children}}
								<li><a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$current_category.children[current].category_id}}/name/{{$current_category.children[current].category_name}}">{{$current_category.children[current].category_name}}</a><span class="divider">|</span></li>
								{{/section}}
								{{/if}}
								<li class="pull-right"><i class="icon-leaf"></i><a href="{{$smarty.const.DOMAIN}}/rss"">RSS</a></li>
							</ul>
						</div>
					</div>
					<h3>{{$current_category.category_name}}</h3>
					<div class="line_dashed"></div>
					{{if $post}}
					<div class="listing">
					{{section name=posts loop=$post}}
						<div class="post post_{{$post[posts].post_id}}" id="{{$post[posts].post_id}}">
							<div class="row-fluid thumbnails " >
								<div class="span4">
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}" class="thumbnail">
											<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/180x180" style="width: 180px; height: 180px;" src="{{$post[posts].post_img}}" class="img-polaroid"/>
										</a>
									</div>
									<div class="share" style="text-align:center;padding-top:6px;">
										<wb:publish toolbar="face,image,topic" button_type="red" button_size="middle" button_text="分享到微博" default_text="#{{$post[posts].post_title}}#@i比熊 {{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}" default_image="{{$post[posts].post_img}}"></wb:publish>
									</div>
								</div>
								<div class="span8 ">
									<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}" >
										<h4>{{$post[posts].post_title|escape:"htmlall"}}</h4>
									</a>
									<p><small>来自:{{if $post[posts].post_from_site}}{{$post[posts].post_from_site}}{{else}}i比熊{{/if}} | 发表时间:{{$post[posts].post_date}} </small></p>
									<div style="height: 100px;">
										<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}" style="color:#111">
											<p>
												{{$post[posts].post_content|truncate:150:"..."}}
											</p>
										</a>
									</div>
									<div class="pull-right">
										<small><i class="icon-heart"></i>[{{$post[posts].post_like_count}}] <i class="icon-comment"></i>[{{$post[posts].post_comment_count}}]</small>
									</div>							
								</div>
							</div>
							<div class="line_dashed"></div>
						</div>
					{{/section}}
					
					</div>
					<div class="navigation">
						<div class="previous-posts alignright"><a href="{{$smarty.const.DOMAIN}}/{{if $page <= 1}}category/category/id/{{$current_category.category_id}}{{elseif $page > $allpage}}category/category/id/{{$current_category.category_id}}/page/{{$allpage}}{{else}}category/category/id/{{$current_category.category_id}}/page/{{$page-1}}{{/if}}">更新内容 »</a></div>
						<div class="next-posts alignleft"><a href="{{if $page >= $allpage}}{{else}}{{$smarty.const.DOMAIN}}/category/category/id/{{$current_category.category_id}}/page/{{$page+1}}{{/if}}">« 较旧内容</a></div>
					</div>
					<div class="more" id="more" style="display: block;">下拉获取更多内容</div>
					{{/if}}
				</div>
				<div class="span3">
					{{if isset($current_category) and $current_category.category_parent != 0}}
						<h5 class="sidebar_title">热门标签</h6>
						<div class="line_dashed"></div>
						{{section name=tag loop=$tags}}
							{{if $smarty.section.tag.iteration % 5 == 0}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tags[tag].tag_id}}/name/{{$tags[tag].tag_name}}"><span class="label label-info">{{$tags[tag].tag_name}}</span></a>
							{{else if $smarty.section.tag.iteration % 5 == 1}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tags[tag].tag_id}}/name/{{$tags[tag].tag_name}}"><span class="label label-important">{{$tags[tag].tag_name}}</span></a>
							{{else if $smarty.section.tag.iteration % 5 == 2}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tags[tag].tag_id}}/name/{{$tags[tag].tag_name}}"><span class="label">{{$tags[tag].tag_name}}</span></a>
							{{else if $smarty.section.tag.iteration % 5 == 3}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tags[tag].tag_id}}/name/{{$tags[tag].tag_name}}"><span class="label label-success">{{$tags[tag].tag_name}}</span></a>
							{{else if $smarty.section.tag.iteration % 5 == 4}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tags[tag].tag_id}}/name/{{$tags[tag].tag_name}}"><span class="label warning">{{$tags[tag].tag_name}}</span></a>
							{{/if}}
						{{/section}}
					{{/if}}
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
					<script>
					$(document).ready(function(){
						jQuery.ias({
							container : ".listing",
							item: '.post',
							pagination: '#content .navigation',
							next: '.next-posts a',
							loader: '<img src="{{$smarty.const.OSSDOMAIN}}/loader.gif" />',
							triggerPageThreshold: 3,
							onPageChange: function(pageNum, pageUrl, scrollOffset) {
								path = jQuery('<a/>').attr('href',pageUrl)[0].pathname.replace(/^[^\/]/,'/');
								//_gaq.push(['_trackPageview', path]);
							}
							
						});
						
					});
				</script>
				</div>
			</div>
{{include file="../public/footer.tpl"}}	
