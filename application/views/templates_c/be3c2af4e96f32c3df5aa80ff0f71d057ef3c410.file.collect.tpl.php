<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 23:24:39
         compiled from "/var/www/ibixiong/application/views/user/collect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77763484851853d32d93d53-08839781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3c2af4e96f32c3df5aa80ff0f71d057ef3c410' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/collect.tpl',
      1 => 1368631452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77763484851853d32d93d53-08839781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51853d330f4083_94909658',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51853d330f4083_94909658')) {function content_51853d330f4083_94909658($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h3>我的收藏</h3>
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