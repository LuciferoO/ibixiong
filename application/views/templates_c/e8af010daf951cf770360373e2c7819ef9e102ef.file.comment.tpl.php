<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 21:15:57
         compiled from "/var/www/ibixiong/application/views/admin/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52695738251bb1581552d60-91054261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8af010daf951cf770360373e2c7819ef9e102ef' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/comment.tpl',
      1 => 1371215756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52695738251bb1581552d60-91054261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bb1582273309_32452578',
  'variables' => 
  array (
    'approved_comments_array' => 0,
    'unapproved_comments_array' => 0,
    'illegal_comments_array' => 0,
    'rubblish_comments_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb1582273309_32452578')) {function content_51bb1582273309_32452578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#approved" data-toggle="tab">评论已审核</a>
					</li>
					<li>
						<a href="#unaprroved" data-toggle="tab">评论未审核</a>
					</li>
					<li>
						<a href="#violation" data-toggle="tab">违规评论</a>
					</li>
					<li>
						<a href="#rubbish" data-toggle="tab">垃圾评论</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="approved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['name'] = 'approved_comment';
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['approved_comments_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_comment']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_content'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/edit/id/<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['approved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="unaprroved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['name'] = 'unapproved_comment';
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['unapproved_comments_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_comment']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_content'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/edit/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="violation">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['name'] = 'illegal_comment';
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['illegal_comments_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_comment']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_content'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/edit/id/<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['illegal_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="rubbish">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										评论编号
									</th>
									<th>
										评论内容
									</th>
									<th>
										所属文章
									</th>
									<th>
										提交时间
									</th>
									<th>
										作者编号
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['name'] = 'rubblish_comment';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rubblish_comments_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_comment']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_content'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/edit/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_comments_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_comment']['index']]['comment_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>