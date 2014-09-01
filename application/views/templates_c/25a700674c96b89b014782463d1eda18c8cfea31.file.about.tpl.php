<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 00:57:31
         compiled from "/var/www/ibixiong/application/views/index/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62473179751d304f3f2bb75-03152313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a700674c96b89b014782463d1eda18c8cfea31' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/about.tpl',
      1 => 1372784250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62473179751d304f3f2bb75-03152313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d304f404a025_28784794',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d304f404a025_28784794')) {function content_51d304f404a025_28784794($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row-fluid">
			<div class="span2">
				<ul class="nav nav-pills nav-stacked pull-right sidebar full">
					<li><img src="<?php echo @constant('OSSDOMAIN');?>
/about/ibixiong-logo.png" class="img-rounded" alt="ibixiong"/></li>
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
						<a href="http://weibo.com/ibixiong" title="点击进入官方微博" id="weibo-ibixiong" data-placement="top" data-toggle="tooltip" ><img src="<?php echo @constant('OSSDOMAIN');?>
/about/weibo.png"></a><br><br>
					</div>
					<div class="span4">
						<a title="点击查看大图" id="weixin-ibixiong" data-placement="top" data-toggle="tooltip" href="<?php echo @constant('OSSDOMAIN');?>
/about/weixin-ibixiong.jpg">
							<img src="<?php echo @constant('OSSDOMAIN');?>
/about/weixin.png">
						</a>
					</div>
					<div class="span4">
						<a href="mailto:ibixiong@ibixiong.com" title="点击发送邮件" id="email-ibixiong" data-placement="top" data-toggle="tooltip"><img src="<?php echo @constant('OSSDOMAIN');?>
/about/email.png"></a>
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
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>