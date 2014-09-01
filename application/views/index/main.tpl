{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}
			
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">
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
								<li class="first">分类<span class="divider">|</span></li>
								{{section name=categorys loop=$category}}
								<li><a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$category[categorys].category_id}}/name/{{$category[categorys].category_name}}">{{$category[categorys].category_name}}</a><span class="divider">|</span></li>
								{{/section}}
								<li class="pull-right"><i class="icon-leaf"></i><a href="{{$smarty.const.DOMAIN}}/rss">RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid thumbnails">
						<div class="banner">
							<ul class="unstyled">
								{{section name=carousels loop=$carousel}}
								
								<li style="background-image: url('{{$carousel[carousels].post_img}}');">
									<a href="{{$carousel[carousels].option_value}}">
									<div class="inner">
									</div>
									</a>
								</li>
								
								{{/section}} 									
							</ul> 		
						</div>
					</div>
					
					<hr class="hr" tyle="margin:auto">
					<h4>最新分享</h4>
					<div class="line_dashed"></div>
					<div class="listing">
					{{section name=newshares loop=$newshare}}
						<div class="post post_{{$newshare[newshares].post_id}}" id="{{$newshare[newshares].post_id}}">
							<div class="row-fluid thumbnails " >
								<div class="span4">
									<div class="row-fluid">
										<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$newshare[newshares].post_id}}" class="thumbnail">
											<img data-src="{{$smarty.const.DOMAIN}}/assets/js/holder.js/180x180" style="width: 180px; height: 180px;" src="{{$newshare[newshares].post_img}}" class="img-polaroid"/>
										</a>
									</div>
									<div class="share" style="text-align:center;padding-top:6px;">
										<wb:publish toolbar="face,image,topic" button_type="red" button_size="middle" button_text="分享到微博" default_text="#{{$newshare[newshares].post_title}}#@i比熊 {{$smarty.const.DOMAIN}}/content/view/id/{{$newshare[newshares].post_id}}" default_image="{{$newshare[newshares].post_img}}"></wb:publish>
									</div>
								</div>
								<div class="span8 ">
									<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$newshare[newshares].post_id}}" >
										<h4>{{$newshare[newshares].post_title|escape:"htmlall"}}</h4>
									</a>
									<p><small>来自:{{if $newshare[newshares].post_from_site}}{{$newshare[newshares].post_from_site|escape:"htmlall"}}{{else}}i比熊{{/if}} | 发表时间:{{$newshare[newshares].post_date}} | {{if isset($newshare[newshares].category)}}分类:<a href="{{$smarty.const.DOMAIN}}/category/category/id/{{$newshare[newshares].category.category_id}}">{{$newshare[newshares].category.category_name}}{{/if}}</a></small></p>
									<div style="height: 100px;">
										<a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$newshare[newshares].post_id}}" style="color:#111">
											<p>
												{{$newshare[newshares].post_content}}
											</p>
										</a>
									</div>
									<div class="pull-right">
										<small><i class="icon-user"></i>[{{$newshare[newshares].post_browe_count}}] <i class="icon-heart"></i>[{{$newshare[newshares].post_like_count}}] <i class="icon-comment"></i>[{{$newshare[newshares].post_comment_count}}]</small>
									</div>							
								</div>
							</div>
							<div class="line_dashed"></div>
						</div>
					{{/section}}
					</div>
					<div class="navigation">
						<div class="previous-posts alignright"><a href="{{$smarty.const.DOMAIN}}/{{if $page <= 1}}Main{{elseif $page > $allpage}}Main/index/page/{{$allpage}}{{else}}Main/index/page/{{$page-1}}{{/if}}">更新内容 »</a></div>
						<div class="next-posts alignleft"><a href="{{if $page >= $allpage}}{{else}}{{$smarty.const.DOMAIN}}/Main/index/page/{{$page+1}}{{/if}}">« 较旧内容</a></div>
					</div>
					<div class="more" id="more" style="display: block;text-align:center;">下拉获取更多内容</div>
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
										<small>{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</small><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$rightbar[rightbars].hotlinks[hotlink].post_id}}">#{{$rightbar[rightbars].hotlinks[hotlink].post_title}}</a>
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
		
		<script>
			$(document).ready(function(){
				jQuery.ias({
					container : ".listing",
					item: '.post',
					pagination: '#content .navigation',
					next: '.next-posts a',
					loader: '<img src="{{$smarty.const.OSSDOMAIN}}/loader.gif" />',
					triggerPageThreshold: 10,
					onPageChange: function(pageNum, pageUrl, scrollOffset) {
						path = jQuery('<a/>').attr('href',pageUrl)[0].pathname.replace(/^[^\/]/,'/');
						//_gaq.push(['_trackPageview', path]);
					}
					
				});
				
			});
		</script>
{{include file="../public/footer.tpl"}}		