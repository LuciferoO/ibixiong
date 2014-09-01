<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 00:48:24
         compiled from "/var/www/ibixiong/application/views/user/message_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29403485651f93ae35ced40-38490885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aac47e40b67aea2af92a99ae2d2ee49c0157f66d' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/message_view.tpl',
      1 => 1375289300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29403485651f93ae35ced40-38490885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51f93ae36923a6_85168020',
  'variables' => 
  array (
    'flag' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f93ae36923a6_85168020')) {function content_51f93ae36923a6_85168020($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h3>最新消息</h3>
						<hr class="hr">
						<?php if ($_smarty_tpl->tpl_vars['flag']->value){?>
						<h4><?php echo $_smarty_tpl->tpl_vars['message']->value['message_title'];?>
</h4>
						<div class="row-fluid">
							<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['message']->value['sender_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['sender_name'];?>
</a>
							发送于 <?php echo $_smarty_tpl->tpl_vars['message']->value['message_date'];?>
 				
						</div>
						<div class="row-fluid">
							<?php echo $_smarty_tpl->tpl_vars['message']->value['message_content'];?>

						</div>
						<?php }else{ ?>
						<div class="row-fluid">
							阅读消息错误
						</div>
						<?php }?>
					</div>
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/user_rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>