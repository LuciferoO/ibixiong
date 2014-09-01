<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 23:24:36
         compiled from "/var/www/ibixiong/application/views/user/share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193725322519263b7c28c22-62399936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fdfe2f8b8d48424213c0d5ce3b855d38bc5d92' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/share.tpl',
      1 => 1368631452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193725322519263b7c28c22-62399936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519263b7e95f90_79585303',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519263b7e95f90_79585303')) {function content_519263b7e95f90_79585303($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h3>我的分享</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="70%">标题</th>	
								<th width="15%">回复/分享</th>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['posts'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['name'] = 'posts';
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['post']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['posts']['total']);
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['post']->value[$_smarty_tpl->getVariable('smarty')->value['section']['posts']['index']]['post_date'];?>
</td>
									<td><a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['post']->value[$_smarty_tpl->getVariable('smarty')->value['section']['posts']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value[$_smarty_tpl->getVariable('smarty')->value['section']['posts']['index']]['post_title'];?>
</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['post']->value[$_smarty_tpl->getVariable('smarty')->value['section']['posts']['index']]['post_comment_count'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value[$_smarty_tpl->getVariable('smarty')->value['section']['posts']['index']]['post_share_count'];?>
</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/user_rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>