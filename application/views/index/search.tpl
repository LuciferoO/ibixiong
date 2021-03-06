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
						<h3>搜索结果</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="70%">标题</th>	
								<th width="15%">回复/分享</th>
							</thead>
							<tbody>
								{{if $post}}
								{{section name=posts loop=$post}}
								<tr>
									<td>{{$post[posts].post_date}}</td>
									<td><a href="{{$smarty.const.DOMAIN}}/content/view/id/{{$post[posts].post_id}}">{{$post[posts].post_title}}</a></td>
									<td>{{$post[posts].post_comment_count}}/{{$post[posts].post_share_count}}</td>
								</tr>
								{{/section}}
								{{/if}}
							</tbody>
						</table>
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
										<a href="">
											<img data-src="holder.js/50x50" src="" class="img-polaroid"/>
										</a>
									</div>
									<div class="row-fluid">
										<small>@pinqy520</small>
									</div>
								</div>
								<div class="span8">
									<div class="row-fluid">
										<small>{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</small><a href="http://ibixiong.com/content/view/id/6">#Yaf用户手册</a>
									</div>
								</div>
								</div>
							</li>
							{{/section}}
						</ul>
						{{else}}
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
