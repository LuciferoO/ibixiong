<?php /* Smarty version Smarty-3.1.13, created on 2013-07-14 14:55:11
         compiled from "/var/www/ibixiong/application/views/index/categoryindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13660758951853573ebe593-92044142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfc89096843af5d8d8fef16720251470fef35618' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/categoryindex.tpl',
      1 => 1373784908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13660758951853573ebe593-92044142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51853574170353_69734674',
  'variables' => 
  array (
    'category' => 0,
    'categoryswithtag' => 0,
    'random' => 0,
    'rightbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51853574170353_69734674')) {function content_51853574170353_69734674($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">
						<!--li><img src="assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li-->
						<li><img src="<?php echo @constant('OSSDOMAIN');?>
/ibixiong-logo.png" class="img-rounded" alt="ibixiong"/></li>
						<hr class="hr">
						
						<div class="accordion" id="accordion">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['name'] = 'categorys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>

										</a>
									</div>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['categorys']['first']){?>
									<div id="collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
" class="accordion-body collapse in">
									<?php }else{ ?>
									<div id="collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
" class="accordion-body collapse">
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['categorys']['index']]['children'])){?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['child'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['child']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['name'] = 'child';
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total']);
?>
											<div class="accordion-inner">
												<a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_name'];?>
</a>
											</div>
										<?php endfor; endif; ?>
									<?php }?>	
									</div>
								</div>
						<?php endfor; endif; ?>
						</div>
					</ul>
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h3>文章分类浏览导航</h3>
						<hr class="hr">
						<ul class="unstyled">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['name'] = 'categoryswithtags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categoryswithtag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categoryswithtags']['total']);
?>
								<li>
									<a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['category_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['category_name'];?>
">
										<label><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['category_name'];?>
</label>
									</a>
									<ul class="inline">
									<?php if (isset($_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['categoryswithtags']['index']]['tags'])){?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total']);
?>
										<?php $_smarty_tpl->tpl_vars['random'] = new Smarty_variable(mt_rand(10,50), null, 0);?>
											<li style="padding-right:0px;padding-left:0px;">
											<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
">
												<?php if (($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration']+$_smarty_tpl->tpl_vars['random']->value)%5==0){?>
												<span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
</span>
												<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration']+$_smarty_tpl->tpl_vars['random']->value)%5==1){?>
												<span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
</span>
												<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration']+$_smarty_tpl->tpl_vars['random']->value)%5==2){?>
												<span class="label "><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
</span>
												<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration']+$_smarty_tpl->tpl_vars['random']->value)%5==3){?>
												<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
</span>
												<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration']+$_smarty_tpl->tpl_vars['random']->value)%5==4){?>
												<span class="label warning"><?php echo $_smarty_tpl->tpl_vars['categoryswithtag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categoryswithtags']['index']]['tags'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['tag_name'];?>
</span>
												<?php }?>
											</a>
											</li>
										<?php endfor; endif; ?>
									<?php }?>
									</ul>
								</li>
							<?php endfor; endif; ?>
						</ul>
					</div>
				</div>
				<div class="span3">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['name'] = 'rightbars';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rightbar']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rightbars']['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_name']=='comment'){?>
						<h6 class="sidebar_title"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_value'];?>
</h6>
						<ul class="unstyled">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['name'] = 'hotlink';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total']);
?>
							<li class="shadow-box">
								<div class="row-fluid">
								<div class="span4">
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['author_name'];?>
">
											<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/50x50" style="width: 50px; height: 50px;"class="img-polaroid" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['author_photo'];?>
"/>
										</a>
									</div>
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['author_name'];?>
">
										<small>@<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['author_name'];?>
</small>
										</a>
									</div>
								</div>
								<div class="span8">
									<div class="row-fluid">
										<small><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['hotitle'];?>
</small><a href="http://ibixiong.com/content/view/id/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['post_id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['post_title'];?>
</a>
									</div>
								</div>
								</div>
							</li>
							<?php endfor; endif; ?>
						</ul>
						<?php }elseif($_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_name']=='post'){?>
						<div class="row-fluid">
							<h6 class="sidebar_title"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_value'];?>
</h6>
							<ul class="unstyled">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['name'] = 'hotlink';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hotlink']['total']);
?>
									<li class="shadow-box"><a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['hotid'];?>
"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['hotitle'];?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						</div>
						<?php }?>
					<?php endfor; endif; ?>
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>