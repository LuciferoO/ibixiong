{{include file="../public/header.tpl"}}	
<style>
		.book-menu{
			height:300px;
			overflow: hidden;
		}

		.book-open{
			display: block;

		}
		.book-close{
			display: none;
		}
		.book-rank{
		    border: 1px solid #DDDDDD;
		    border-radius: 4px 4px 4px 4px;
		    color: #778087;
		    margin-bottom: 5px;
		    margin-left: 10px;
		    padding: 4px 5px;
		}
		.book-rank:hover,
		.book-rank:focus{
			text-decoration: none;
		}


	</style>
<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/rateit.css"/>	
<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.rateit.min.js"></script>	
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
							<li><a href="#">{{$book.book_title}}</a><span class="divider"></span></li>
						</ul>
					</div>
					</div>
					<div class="span11">
						<div class="span4">
						<img src="{{$book.book_image}}" class="img-polaroid img-book">
						</div>
						<div class="span7 offset1">
							<small>
								<ul class="unstyled">
									<li><strong>作者:  </strong><a href="#">{{$book.book_author}}</a></li>
									<li><strong>出版社:  </strong> {{$book.book_publisher}}</li>
									<li><strong>出版年:  </strong>{{$book.book_pubdate}}</li>
									<li><strong>页数:  </strong>{{$book.book_pages}}</li>
									</li><strong>定价:  </strong>{{if isset($book.book_price)}}{{$book.book_price}}{{else}}暂无{{/if}}</li>
									<li><strong>ISBN:  </strong>{{$book.book_isbn13}}</li>
								</ul>
								<br>
							</small>	
								<strong>评价：（{{$book.book_rating_num}}人评价,{{$book.book_rating_average}}分）</strong><br><br>
								<div id="rateit" data-productid="{{$book.book_id}}" class="rateit"></div>
						</div>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">标签：</h5>
						<div class="line_dashed"></div>
						<small>
						{{if isset($tags)}}
						{{section name=tag loop=$tags}}
							{{if ($smarty.section.tag.iteration) % 5 == 0}}
							<span class="label label-info">{{$tags[tag].book_tag_name}}</span>
							{{else if ($smarty.section.tag.iteration) % 5 == 1}}
							<span class="label label-important">{{$tags[tag].book_tag_name}}</span>
							{{else if ($smarty.section.tag.iteration) % 5 == 2}}
							<span class="label ">{{$tags[tag].book_tag_name}}</span>
							{{else if ($smarty.section.tag.iteration) % 5 == 3}}
							<span class="label label-success">{{$tags[tag].book_tag_name}}</span>
							{{else if ($smarty.section.tag.iteration) % 5 == 4}}
							<span class="label warning">{{$tags[tag].book_tag_name}}</span>
							{{/if}}
						{{/section}}
						{{/if}}
						</small>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">内容简介：</h5>				
						<div class="line_dashed"></div>
						<small>
						<p>{{$book.book_summary}}</p>
						</small>
						<a href="javascript:void(0)" class="pull-right"><small>展开[...]</small></a>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">作者简介：</h5>				
						<div class="line_dashed"></div>
						<small>
						<p>{{$book.book_author_intro}}</p>
						</small>
						<a href="javascript:void(0)" class="pull-right">
						<small>展开[...]</small>
						</a>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">本书目录：</h5>				
						<div class="line_dashed"></div>
						<div class="book-menu">
							{{$book.book_catalog}}
						</div>
						<p class="book-open">......
						<a class="pull-right" href="javascript:void(0)"><small>展开[...]</small></a>
						</p>
						<br>
						<a class="book-close pull-right" href="javascript:void(0)"><small>收起^</small></a>
					</div>
				</div>
			</div>	

			<script>
				$('#rateit').bind('rated reset', function (e) {
					var ri = $(this);
					var value = ri.rateit('value');
					var productID = ri.data('productid');
					ri.rateit('readonly', true);
					$.ajax({
						url: '{{$smarty.const.DOMAIN}}/book/rate', //your server side script
						data: { id: productID, value: value }, //our data
						type: 'POST',
						success: function (data) {
							//$('#response').append('<li>' + data + '</li>');
			 
						},
						error: function (jxhr, msg, err) {
							//$('#response').append('<li style="color:red">' + msg + '</li>');
						}
					});
				});
				$(".book-open").click(function(){
					$(this).css('display','none')
					$(".book-menu").css('height','auto')
					$(".book-close").css('display','block')
				});
				$(".book-close").click(function(){
					$(this).css('display','none')
					$(".book-menu").css('height','300px')
					$(".book-open").css('display','block')
				});
			</script>
{{include file="../public/footer.tpl"}}			