<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 00:38:13
         compiled from "/var/www/ibixiong/application/views/user/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2419314085184b292739985-04810658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '010913b4c398e2fb67d1fc44749f55e346aaf33e' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/message.tpl',
      1 => 1375288692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2419314085184b292739985-04810658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5184b292a7e078_51887967',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184b292a7e078_51887967')) {function content_5184b292a7e078_51887967($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h3>最新消息</h3>
						<hr class="hr">
						<table class="table table-hover">
							<thead>
								<th width="15%">发信人</th>
								<th width="55%">标题</th>	
								<th width="15%">状态</th>
								<th width="15%">时间</th>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['messages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['name'] = 'messages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['message']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['messages']['total']);
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['messages']['index']]['sender_name'];?>
</td>
									<td><a href="<?php echo @constant('DOMAIN');?>
/user_message/view/id/<?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['messages']['index']]['message_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['messages']['index']]['message_title'];?>
</a></td>
									<td><?php if ($_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['messages']['index']]['message_status']==0){?><span class="label label-important">未读</span><?php }else{ ?><span class="label label-success">已读<?php }?></td>
									<td><?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['messages']['index']]['message_date'];?>
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