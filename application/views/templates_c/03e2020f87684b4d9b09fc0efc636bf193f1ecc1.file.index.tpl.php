<?php /* Smarty version Smarty-3.1.13, created on 2013-06-01 00:12:31
         compiled from "/var/www/ibixiong/application/views/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134363567451840382d69a34-55758607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e2020f87684b4d9b09fc0efc636bf193f1ecc1' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/index.tpl',
      1 => 1370016750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134363567451840382d69a34-55758607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5184038333a020_47840178',
  'variables' => 
  array (
    'user_info' => 0,
    'recentbrowses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184038333a020_47840178')) {function content_5184038333a020_47840178($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
					<h4>@<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</h4>
					<small><?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</small>
					<h3>基本资料</h3>
					<hr>
					<div class="row-fluid">
					<ul class="unstyled user-base">
						<li>姓名：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_realname'];?>
</li>
						<li>生日：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_birthday'];?>
</li>

						<li>昵称：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</li>
						<li>邮箱：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_email'];?>
</li>
						<li>地域：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['province_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['user_info']->value['city_name'];?>
</li>
						<li>个性签名：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_description'];?>
</li>
						

					</ul>
					<h3>最近足迹</h3>
					<hr>

					<div class="row-fluid">
						<ul class="unstyled">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['name'] = 'recentbrowse';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentbrowses']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recentbrowse']['total']);
?>
							<li><a href="http://ibixiong.com/content/view/id/<?php echo $_smarty_tpl->tpl_vars['recentbrowses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentbrowse']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recentbrowses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentbrowse']['index']]['post_title'];?>
</a></li>
						<?php endfor; endif; ?>	
						</ul>
					</div>
				</div>	
				</div>	
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/user_rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>