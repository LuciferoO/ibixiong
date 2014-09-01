<?php /* Smarty version Smarty-3.1.13, created on 2013-06-20 20:27:44
         compiled from "/var/www/ibixiong/application/views/admin/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14003108651a75e47bda223-23486435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d2f7aa815c5bfaf05299254417cb59f12f66b9' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/homepage.tpl',
      1 => 1371657340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14003108651a75e47bda223-23486435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a75e483692f4_92081105',
  'variables' => 
  array (
    'aprrovedmonth_posts_array' => 0,
    'approvedmonths_posts_array' => 0,
    'carouselhistory_posts_array' => 0,
    'carouselpreview_posts_array' => 0,
    'carousel_posts_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a75e483692f4_92081105')) {function content_51a75e483692f4_92081105($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/ibixiong/application/library/Smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#aprrovedmonth" data-toggle="tab">最近一个月审核</a>
					</li>
					<li>
						<a href="#approvedmonths" data-toggle="tab">最近三个月已审核</a>
					</li>
					<li>
						<a href="#carouselhistory" data-toggle="tab">历史滚动展示页</a>
					</li>
					<li>
						<a href="#carouselpreview" data-toggle="tab">待确认滚动页</a>
					</li>
					<li>
						<a href="#carousel" data-toggle="tab">滚动展示页now</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="aprrovedmonth">
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['name'] = 'aprrovedmonth_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aprrovedmonth_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/post/status/2/id/<?php echo $_smarty_tpl->tpl_vars['aprrovedmonth_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aprrovedmonth_post']['index']]['post_id'];?>
" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="approvedmonths">
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
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['name'] = 'approvedmonths_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['approvedmonths_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_title'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_date'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_author'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/post/status/2/id/<?php echo $_smarty_tpl->tpl_vars['approvedmonths_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['approvedmonths_post']['index']]['post_id'];?>
" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="carouselhistory">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="40%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['name'] = 'carouselhistory_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselhistory_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['option_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['option_name'];?>

									</td>
									<td>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['option_value'],200,"...");?>

									</td>
									<td>
										<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['post_img'];?>
" class="img-polaroid"/>
									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/carousel/status/2/id/<?php echo $_smarty_tpl->tpl_vars['carouselhistory_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselhistory_post']['index']]['option_id'];?>
" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="carouselpreview">
						<form method="post" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/option">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="30%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="30%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['name'] = 'carouselpreview_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['carouselpreview_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['option_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['option_name'];?>

									</td>
									<td>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['option_value'],200,"...");?>

									</td>
									<td>
										<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['post_img'];?>
" class="img-polaroid"/>
									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/view/id/<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['post_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/edit/id/<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['post_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/carousel/status/0/id/<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['option_id'];?>
" class="btn-mini btn-link">删除</a>
										<input type="hidden" name="option_id[]" value="<?php echo $_smarty_tpl->tpl_vars['carouselpreview_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carouselpreview_post']['index']]['option_id'];?>
">
									</td>
								</tr>
								<?php endfor; endif; ?>
								
							</tbody>
						</table>
							<button type="submit" class="btn btn-primary">提交</button>
						
						</form>
					</div>
					
					<div class="tab-pane" id="carousel">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="15%">
										文章题目
									</th>
									<th width="40%">
										文章链接
									</th>
									<th width="20%">
										图片展示
									</th>
									<th width="30%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['name'] = 'carousel_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['carousel_posts_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['carousel_post']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_name'];?>

									</td>
									<td>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_value'],200,"...");?>

									</td>
									<td>
										<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/310x100" style="width: 310px; height: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['post_img'];?>
" class="img-polaroid"/>
									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/view/id/<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_id'];?>
" class="btn-mini btn-link">查看</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/edit/id/<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_id'];?>
" class="btn-mini btn-link">编辑</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/carousel/type/carousel/status/0/id/<?php echo $_smarty_tpl->tpl_vars['carousel_posts_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousel_post']['index']]['option_id'];?>
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