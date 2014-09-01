<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 22:52:20
         compiled from "/var/www/ibixiong/application/views/index/book.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867143661521a178d170667-06159840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d05de498628785e6d410218d8eb8e1cc6670de' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/book.tpl',
      1 => 1377442338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1867143661521a178d170667-06159840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521a178d3dd655_50638074',
  'variables' => 
  array (
    'category' => 0,
    'hotBooks' => 0,
    'newBooks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521a178d3dd655_50638074')) {function content_521a178d3dd655_50638074($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
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
" class="accordion-body collapse">
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
				<div id="book" class="span7 content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">图书<span class="divider">/</span></li>
								<li><a href="#">热门图书</a><span class="divider"></span></li>
							</ul>
						</div>
						<div class="span11">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hot'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['name'] = 'hot';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hotBooks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total']);
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['hot']['iteration']%4==1){?>
							<div class="row-fluid">
							<?php }?>
							<div class="span3 spanbook">
							<img src="<?php echo $_smarty_tpl->tpl_vars['hotBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['book_image'];?>
" class="img-polaroid img-book" />
								<div class="book-text">
								<a href="<?php echo @constant('DOMAIN');?>
/Book/view/id/<?php echo $_smarty_tpl->tpl_vars['hotBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['book_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['book_title'];?>
</a>
								</div>
							</div>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['hot']['iteration']%4==0){?>
							</div>
							<?php }?>
							<?php endfor; endif; ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">图书<span class="divider">/</span></li>
								<li><a href="#">最新图书</a><span class="divider"></span></li>
							</ul>
						</div>
						<div class="span11">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['new'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['new']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['name'] = 'new';
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newBooks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total']);
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['new']['iteration']%4==1){?>
							<div class="row-fluid">
							<?php }?>
							<div class="span3 spanbook">
							<img src="<?php echo $_smarty_tpl->tpl_vars['newBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['book_image'];?>
" class="img-polaroid img-book" />
								<div class="book-text">
								<a href="<?php echo @constant('DOMAIN');?>
/Book/view/id/<?php echo $_smarty_tpl->tpl_vars['newBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['book_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['newBooks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['book_title'];?>
</a>
								</div>
							</div>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['new']['iteration']%4==0){?>
							</div>
							<?php }?>
							<?php endfor; endif; ?>
						</div>
					</div>
				</div>
			</div>	

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		<?php }} ?>