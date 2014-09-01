<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 11:18:02
         compiled from "/var/www/ibixiong/application/views/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19211449695187aa859c3f10-93869897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2718685451261ff01c00d8969a0607b4f3d71e02' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/index.tpl',
      1 => 1370315879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19211449695187aa859c3f10-93869897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5187aa85a4c040_78682407',
  'variables' => 
  array (
    'unapproved_original_posts_array' => 0,
    'approved_original_posts_array' => 0,
    'unapproved_posts_array' => 0,
    'approved_posts_array' => 0,
    'illegal_posts_array' => 0,
    'rubblish_posts_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5187aa85a4c040_78682407')) {function content_5187aa85a4c040_78682407($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#unaprroved_original" data-toggle="tab">原创未审核</a>
					</li>
					<li>
						<a href="#approved_original" data-toggle="tab">原创已审核</a>
					</li>
					<li>
						<a href="#unaprroved" data-toggle="tab">转载未审核</a>
					</li>
					<li>
						<a href="#approved" data-toggle="tab">转载已审核</a>
					</li>
					<li>
						<a href="#violation" data-toggle="tab">违规文章</a>
					</li>
					<li>
						<a href="#rubbish" data-toggle="tab">垃圾文章</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="unaprroved_original">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['name'] = 'unapproved_original_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_original_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approved_original">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['name'] = 'approved_original_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['approved_original_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_original_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['approved_original_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_original_post']['index']]['post_id'];?>
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
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['name'] = 'unapproved_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['unapproved_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['unapproved_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['unapproved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['unapproved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">删除</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approved">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['name'] = 'approved_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['approved_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['approved_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['approved_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approved_post']['index']]['post_id'];?>
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
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['name'] = 'illegal_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['illegal_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['illegal_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['illegal_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['illegal_post']['index']]['post_id'];?>
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
										文章编号
									</th>
									<th>
										文章题目
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['name'] = 'rubblish_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rubblish_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rubblish_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/1/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>
" class="btn-mini btn-link">审核通过</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/2/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>
" class="btn-mini btn-link">违规</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/dispose/type/3/id/<?php echo $_smarty_tpl->tpl_vars['rubblish_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rubblish_post']['index']]['post_id'];?>
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