<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 21:30:25
         compiled from "/var/www/ibixiong/application/views/user/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45846590251ac046dd5f340-95142858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df36889f9c859b7b00041fd26418373249631b3b' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/comment.tpl',
      1 => 1370228580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45846590251ac046dd5f340-95142858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ac046de3ff12_32214568',
  'variables' => 
  array (
    'recentcomments' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac046de3ff12_32214568')) {function content_51ac046de3ff12_32214568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h3>最近评论</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发表时间</th>
								<th width="40%">标题</th>	
								<th width="45%">回复内容</th>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['name'] = 'recent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentcomments']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total']);
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['comment_date'];?>
</td>
									<td><a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['post_info']['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['post_info']['post_title'];?>
</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['comment_content'];?>
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