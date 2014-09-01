<?php /* Smarty version Smarty-3.1.13, created on 2013-07-28 15:35:01
         compiled from "/var/www/ibixiong/application/views/public/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95201603851840383914496-04417367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60e91b870b4253fcd26753aae649fdadf3b3c785' => 
    array (
      0 => '/var/www/ibixiong/application/views/public/footer.tpl',
      1 => 1374996894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95201603851840383914496-04417367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51840383924bd0_45649234',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51840383924bd0_45649234')) {function content_51840383924bd0_45649234($_smarty_tpl) {?>		</div>
		<div class="clearfix">
		</div>
		<div id="footer " style="color: #778087; margin-top: 30px; padding-top:10px; border-top: 3px solid #286BA7;text-align:center;" >
			<div class="container" >
				<p class="copyright">Copyright © 2013 <a href="<?php echo @constant('DOMAIN');?>
">i比熊</a> · <a>关于我们</a> · <a>免责声明</a> · <a href="<?php echo @constant('DOMAIN');?>
/about">如何获取邀请码</a> · <a href="http://www.miibeian.gov.cn/">京ICP备13019430号</a>
				<script src="http://s15.cnzz.com/stat.php?id=5524648&web_id=5524648&show=pic1" language="JavaScript"></script>
				</p>
			</div>
		</div>
		
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery_plugins.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery.event.swipe.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/unslider.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/sco.modal.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/spin.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
				<?php if (isset($_smarty_tpl->tpl_vars['login']->value)&&$_smarty_tpl->tpl_vars['login']->value==1){?>
					$("#usermenu").menu({ position: { my: "left top", at: "center-60 bottom+5" } });
				<?php }?>
		
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
</html><?php }} ?>