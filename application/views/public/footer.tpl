		</div>
		<div class="clearfix">
		</div>
		<div id="footer " style="color: #778087; margin-top: 30px; padding-top:10px; border-top: 3px solid #286BA7;text-align:center;" >
			<div class="container" >
				<p class="copyright">Copyright © 2013 <a href="{{$smarty.const.DOMAIN}}">i比熊</a> · <a>关于我们</a> · <a>免责声明</a> · <a href="{{$smarty.const.DOMAIN}}/about">如何获取邀请码</a> · <a href="http://www.miibeian.gov.cn/">京ICP备13019430号</a>
				<script src="http://s15.cnzz.com/stat.php?id=5524648&web_id=5524648&show=pic1" language="JavaScript"></script>
				</p>
			</div>
		</div>
		
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/holder.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery_plugins.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery.event.swipe.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/unslider.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/sco.modal.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/spin.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
				{{if isset($login) and $login == 1}}
					$("#usermenu").menu({ position: { my: "left top", at: "center-60 bottom+5" } });
				{{/if}}
		
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
		</script>
		
		
	</body>
</html>