<?php /* Smarty version Smarty-3.1.13, created on 2013-06-23 23:00:38
         compiled from "/var/www/ibixiong/application/views/public/user_leftbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32988573951925c8cedb404-90977718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9628c9fc9b3a94b7cfb5fbf6c986109bbeb6f079' => 
    array (
      0 => '/var/www/ibixiong/application/views/public/user_leftbar.tpl',
      1 => 1371651830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32988573951925c8cedb404-90977718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51925c8d08f111_54196532',
  'variables' => 
  array (
    'user_info' => 0,
    'user_relationships' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51925c8d08f111_54196532')) {function content_51925c8d08f111_54196532($_smarty_tpl) {?>		<div class="row-fluid">
			<div class="span2">
				<div class="row-fluid">
					<img data-src="holder.js/180x180"  style="width: 180px; height: 180px;"class="img-polaroid" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
"/>
				</div>
				<div class="userhot row-fluid">
					<div class="span4">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['masters'];?>
<br>关注</a>
					</div>
					<div class="span4">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['followers'];?>
<br>粉丝</a>
					</div>
					<div class="span4">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['shares'];?>
<br>分享</a>
					</div>
				
				</div>
				<hr class="hr">
				<div class="row-fluid">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">

						<div class="accordion" id="accordion">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse0">基本资料</a>
								</div>
								<div id="collapse0" class="accordion-body collapse in">
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_photo">头像设置</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_info">个人资料</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_account">修改密码</a>
									</div>
								</div>
							</div>
							<!--div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">i分享</a>
								</div>
								<div id="collapse1" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_browsecontribute">阅读贡献</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_sharecontribute">分享贡献</a>
									</div>
								</div>
							</div-->
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">足迹</a>
								</div>
								<div id="collapse2" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_browse">最近浏览</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_comment">最近评论</a>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">我的比熊</a>
								</div>
								<div id="collapse3" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_message">我的消息</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_focus">我的关注</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_share">我的分享</a>
									</div>
									<div class="accordion-inner">
										<a href="<?php echo @constant('DOMAIN');?>
/user_collect">我的收藏</a>
									</div>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</div>
<?php }} ?>