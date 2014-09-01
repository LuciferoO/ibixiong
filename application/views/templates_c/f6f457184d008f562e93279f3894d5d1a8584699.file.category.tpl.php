<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 20:07:32
         compiled from "/var/www/ibixiong/application/views/admin/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185549741451aca30b659af2-56546253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f457184d008f562e93279f3894d5d1a8584699' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/category.tpl',
      1 => 1371211639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185549741451aca30b659af2-56546253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51aca30b9a1dc7_94159238',
  'variables' => 
  array (
    'parent_category' => 0,
    'categorys_history_array' => 0,
    'categorys_preview_array' => 0,
    'categorys_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aca30b9a1dc7_94159238')) {function content_51aca30b9a1dc7_94159238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#addcategory" data-toggle="tab">新增分类</a>
					</li>
					<li>
						<a href="#categoryhistory" data-toggle="tab">曾使用过的分类</a>
					</li>
					<li>
						<a href="#categorypreview" data-toggle="tab">待确认的分类</a>
					</li>
					<li >
						<a href="#category" data-toggle="tab">现在使用的分类</a>
					</li>
				</ul>
				
					

				<div class="tab-content">
					<div class="tab-pane active" id="addcategory">
						<thead>
							<tr>
								<th>
								新的分类将被加入到待使用组
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<form id="addcategory_form" class="form-horizontal" method="post" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_Category/addcategory">
										<div class="control-group">
											<label class="control-label" for="parentcategory">父类：</label>
											<div class="controls">
												<select  name="parentcategory" id="parentcategory">
													<option selected value="">无</option>
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['name'] = 'categorys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['parent_category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total']);
?>	
													<option value="<?php echo $_smarty_tpl->tpl_vars['parent_category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent_category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>
</option> 
												<?php endfor; endif; ?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputcategory">分类名称</label>
											<div class="controls">
												<input type="text" id="inputcategory" name="category" placeholder="请填入分类名称">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-primary">提交</button>
											</div>
										</div>
									</form>
								</td>
							</tr>
						</tbody>
					</div>
					<div class="tab-pane" id="categoryhistory">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['name'] = 'categoryhistory';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_history_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['category_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['category_name'];?>

									</td>
									<td>
										<?php if (isset($_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['categoryhistory']['index']]['tags'])){?>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['name'] = 'categoryhistory_tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryhistory_tag']['total']);
?>
												<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory_tag']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory_tag']['index']]['tag_name'];?>
"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory_tag']['index']]['tag_name'];?>
</span></a>
											<?php endfor; endif; ?>
										<?php }else{ ?>
											无
										<?php }?>	
									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['category_date'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_category/updatecategory/status/2/id/<?php echo $_smarty_tpl->tpl_vars['categorys_history_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryhistory']['index']]['category_id'];?>
" class="btn-mini btn-link">添加到待确认页</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="categorypreview">
						<form method="post" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_category/updatecategory/status/1">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['name'] = 'categorypreview';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_preview_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['category_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['category_name'];?>

									</td>
									<td>
										<?php if (isset($_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['categorypreview']['index']]['tags'])){?>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['name'] = 'categorypreview_tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categorypreview_tag']['total']);
?>
												<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview_tag']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview_tag']['index']]['tag_name'];?>
"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview_tag']['index']]['tag_name'];?>
</span></a>
											<?php endfor; endif; ?>
										<?php }else{ ?>
											无
										<?php }?>	
									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['category_date'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_category/updatecategory/status/0/id/<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['category_id'];?>
" class="btn-mini btn-link">删除</a>
										<input type="hidden" name="category_id[]" value="<?php echo $_smarty_tpl->tpl_vars['categorys_preview_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorypreview']['index']]['category_id'];?>
">
									</td>
								</tr>
								<?php endfor; endif; ?>
								
							</tbody>
						</table>
							<button type="submit" class="btn btn-primary">提交</button>
						
						</form>
					</div>
					
					<div class="tab-pane" id="category">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="5%">
										编号
									</th>
									<th width="10%">
										分类名称
									</th>
									<th width="50%">
										分类标签
									</th>
									<th width="15%">
										添加时间
									</th>
									<th width="20%">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['category'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['name'] = 'category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_name'];?>

									</td>
									<td>
										<?php if (isset($_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['category']['index']]['tags'])){?>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['name'] = 'category_tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['category_tag']['total']);
?>
												<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['category_tag']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['category_tag']['index']]['tag_name'];?>
"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['category_tag']['index']]['tag_name'];?>
</span></a>
											<?php endfor; endif; ?>
										<?php }else{ ?>
											无
										<?php }?>	
									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_date'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_category/updatecategory/status/0/id/<?php echo $_smarty_tpl->tpl_vars['categorys_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category_id'];?>
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