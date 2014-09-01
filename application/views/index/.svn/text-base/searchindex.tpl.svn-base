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
						<hr class="hr">
						<form style="margin:0 0 0 0" method="post" action="{{$smarty.const.DOMAIN}}/search/search">
							<div class="input-append span6" style="padding-top:5px;margin-bottom:0px;display:block;">
								<input class="span10" id="appendedInputButton" name="word" type="text">
								<button class="btn" type="submit"><i class="icon-search"></i></button>
							</div>
						</form>
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="70%">标题</th>	
								<th width="15%">回复/分享</th>
							</thead>
							<tbody>
							{{if isset($post)}}
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
				<div class="span3 content">
					<div class="row-fluid">						
						<form class="form-search" method="post">
								<input type="text" class="input-medium search-query" placeholder="搜索">
								<button type="submit" class="btn btn-search btn-info"><i class="icon-search"></i></button>
						</form>
					</div>
					{{section name=rightbars loop=$rightbar}}
						<div class="row-fluid">
							<h6 class="sidebar_title">{{$rightbar[rightbars].option_value}}</h6>
							<ul class="unstyled">
								{{section name=hotlink loop=$rightbar[rightbars].hotlinks}}
									<li class="shadow-box"><a  href="{{$rightbar[rightbars].option_name}}/{{$rightbar[rightbars].hotlinks[hotlink].hotid}}">{{$rightbar[rightbars].hotlinks[hotlink].hotitle}}</a></li>
								{{/section}}
							</ul>
						</div>
					{{/section}}
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
{{include file="../public/footer.tpl"}}	
