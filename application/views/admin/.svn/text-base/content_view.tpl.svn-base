{{include file="admin/header.tpl"}}	
		<div class="container">
			<div class="row-fluid">
				<div class="span2">
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h2>{{$post.post_title}}</h2>
					</div>
					<div class="row-fluid">
						<div class="span7">
							<a href="user/{{$post.user_info.user_id}}">{{$post.user_info.user_nickname}}</a>
							发表于 {{$post.post_date}}
							{{if $post.post_original}}
								<br/>
								<strong>原创文章</strong>
							{{else}}
								<br/>
								来源于：<a href="{{$post.post_from_url}}">{{if $post.post_from_site}}{{$post.post_from_site}}{{else}}{{$post.post_from_url}}{{/if}}</a>
							{{/if}}							
							{{section name=tags loop=$tag}}
							<a href="{{$smarty.const.DOMAIN}}/category/tag/id/{{$tag[tags].tag_id}}/name/{{$tag[tags].tag_name}}"><span class="label label-info">{{$tag[tags].tag_name}}</span></a>
							{{/section}}
						</div>
						<div class="span5 onebutton-share">
							<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right;">
							<a class="bds_tsina"></a>
							<a class="bds_tqq"></a>
							<a class="bds_qzone"></a>
							<a class="bds_renren"></a>
							<a class="bds_t163"></a>
							<span class="bds_more">更多</span>
							<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6605421" ></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
							</script>
							<!-- Baidu Button END -->
						</div>
					</div>
					<div class="row-fluid reading-contetnt">
						<!--p><img src="{{$smarty.const.DOMAIN}}/{{$post.post_img}}"></img></p-->
						{{$post.post_content}}
					</div>
					<div class="line_dashed"></div>
						
				</div>
				<div class="span3 content">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
{{include file="admin/footer.tpl"}}	