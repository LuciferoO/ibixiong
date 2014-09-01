{{include file="../public/header.tpl"}}
{{include file="../public/headnavbar.tpl"}}

		<div class="row-fluid">
			<div class="span2">
				<ul class="nav nav-pills nav-stacked pull-right sidebar full">
					<li><img src="{{$smarty.const.OSSDOMAIN}}/about/ibixiong-logo.png" class="img-rounded" alt="ibixiong"/></li>
					<hr class="hr">
					<div class="accordion" id="accordion">
						<div class="accordion-group">
							<div id="collapse0" class="accordion-body collapse in">
								<div class="accordion-inner">
									<a href="#">关于我们</a>
								</div>
								<div class="accordion-inner">
									<a href="#">免责声明</a>
								</div>
								<div class="accordion-inner">
									<a href="#">如何获得邀请码</a>
								</div>
								<div class="accordion-inner">
									<a href="#">联系我们</a>
								</div>
							</div>
						</div>
					</div>
				</ul>
			</div>

			<div id="content" class="span10 content">
				<h2>如何获得邀请码</h2>
				<div class="line_dashed"></div>
				<div class="row-fluid">
					<div class="span4">
						<a href="http://weibo.com/ibixiong" title="点击进入官方微博" id="weibo-ibixiong" data-placement="top" data-toggle="tooltip" ><img src="{{$smarty.const.OSSDOMAIN}}/about/weibo.png"></a><br><br>
					</div>
					<div class="span4">
						<a title="点击查看大图" id="weixin-ibixiong" data-placement="top" data-toggle="tooltip" href="{{$smarty.const.OSSDOMAIN}}/about/weixin-ibixiong.jpg">
							<img src="{{$smarty.const.OSSDOMAIN}}/about/weixin.png">
						</a>
					</div>
					<div class="span4">
						<a href="mailto:ibixiong@ibixiong.com" title="点击发送邮件" id="email-ibixiong" data-placement="top" data-toggle="tooltip"><img src="{{$smarty.const.OSSDOMAIN}}/about/email.png"></a>
					</div>

				</div>
		
			</div>

			


		</div>



	<script>
	$(document).ready(function(){
		if(window.chrome) {
			$('.banner li').css('background-size', '100% 100%');
		}
		$('.banner').unslider({
			keys: true,
			fluid: true,
			dots: true
		}); 

		var slides = jQuery('.slides'),
	    i = 0;

		slides
		.on('swipeleft', function(e) {
			slides.eq(i + 1).addClass('active');
		})
		.on('swiperight', function(e) {
			slides.eq(i - 1).addClass('active');
		});
		$('#weibo-ibixiong').tooltip();
		$('#weixin-ibixiong').tooltip();
		$('#email-ibixiong').tooltip();
	});	
	</script>
{{include file="../public/footer.tpl"}}	
