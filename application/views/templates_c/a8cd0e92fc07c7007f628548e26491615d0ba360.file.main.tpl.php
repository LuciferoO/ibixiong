<?php /* Smarty version Smarty-3.1.13, created on 2013-07-28 17:00:14
         compiled from "/var/www/ibixiong/application/views/index/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140305344251d4367f3c6cf6-73073700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8cd0e92fc07c7007f628548e26491615d0ba360' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/main.tpl',
      1 => 1375000067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140305344251d4367f3c6cf6-73073700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d4367fe389d8_54637867',
  'variables' => 
  array (
    'category' => 0,
    'carousel' => 0,
    'newshare' => 0,
    'page' => 0,
    'allpage' => 0,
    'rightbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4367fe389d8_54637867')) {function content_51d4367fe389d8_54637867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">
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
				<div class="span7 content" id="content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">分类<span class="divider">|</span></li>
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
								<li><a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>
</a><span class="divider">|</span></li>
								<?php endfor; endif; ?>
								<li class="pull-right"><i class="icon-leaf"></i><a href="<?php echo @constant('DOMAIN');?>
/rss">RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid thumbnails">
						<div class="banner">
							<ul class="unstyled">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['name'] = 'carousels';
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['carousel']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['carousels']['total']);
?>
								
								<li style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['carousel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousels']['index']]['post_img'];?>
');">
									<a href="<?php echo $_smarty_tpl->tpl_vars['carousel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['carousels']['index']]['option_value'];?>
">
									<div class="inner">
									</div>
									</a>
								</li>
								
								<?php endfor; endif; ?> 									
							</ul> 		
						</div>
					</div>
					
					<hr class="hr" tyle="margin:auto">
					<h4>最新分享</h4>
					<div class="line_dashed"></div>
					<div class="listing">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['name'] = 'newshares';
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newshare']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['newshares']['total']);
?>
						<div class="post post_<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
">
							<div class="row-fluid thumbnails " >
								<div class="span4">
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
" class="thumbnail">
											<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/180x180" style="width: 180px; height: 180px;" src="<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_img'];?>
" class="img-polaroid"/>
										</a>
									</div>
									<div class="share" style="text-align:center;padding-top:6px;">
										<wb:publish toolbar="face,image,topic" button_type="red" button_size="middle" button_text="分享到微博" default_text="#<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_title'];?>
#@i比熊 <?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
" default_image="<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_img'];?>
"></wb:publish>
									</div>
								</div>
								<div class="span8 ">
									<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
" >
										<h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4>
									</a>
									<p><small>来自:<?php if ($_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_from_site']){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_from_site'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }else{ ?>i比熊<?php }?> | 发表时间:<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_date'];?>
 | <?php if (isset($_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['newshares']['index']]['category'])){?>分类:<a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['category']['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['category']['category_name'];?>
<?php }?></a></small></p>
									<div style="height: 100px;">
										<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_id'];?>
" style="color:#111">
											<p>
												<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_content'];?>

											</p>
										</a>
									</div>
									<div class="pull-right">
										<small><i class="icon-user"></i>[<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_browe_count'];?>
] <i class="icon-heart"></i>[<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_like_count'];?>
] <i class="icon-comment"></i>[<?php echo $_smarty_tpl->tpl_vars['newshare']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newshares']['index']]['post_comment_count'];?>
]</small>
									</div>							
								</div>
							</div>
							<div class="line_dashed"></div>
						</div>
					<?php endfor; endif; ?>
					</div>
					<div class="navigation">
						<div class="previous-posts alignright"><a href="<?php echo @constant('DOMAIN');?>
/<?php if ($_smarty_tpl->tpl_vars['page']->value<=1){?>Main<?php }elseif($_smarty_tpl->tpl_vars['page']->value>$_smarty_tpl->tpl_vars['allpage']->value){?>Main/index/page/<?php echo $_smarty_tpl->tpl_vars['allpage']->value;?>
<?php }else{ ?>Main/index/page/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
<?php }?>">更新内容 »</a></div>
						<div class="next-posts alignleft"><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value>=$_smarty_tpl->tpl_vars['allpage']->value){?><?php }else{ ?><?php echo @constant('DOMAIN');?>
/Main/index/page/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
<?php }?>">« 较旧内容</a></div>
					</div>
					<div class="more" id="more" style="display: block;text-align:center;">下拉获取更多内容</div>
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
</small><a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['post_id'];?>
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
		
		<script>
			$(document).ready(function(){
				jQuery.ias({
					container : ".listing",
					item: '.post',
					pagination: '#content .navigation',
					next: '.next-posts a',
					loader: '<img src="<?php echo @constant('OSSDOMAIN');?>
/loader.gif" />',
					triggerPageThreshold: 10,
					onPageChange: function(pageNum, pageUrl, scrollOffset) {
						path = jQuery('<a/>').attr('href',pageUrl)[0].pathname.replace(/^[^\/]/,'/');
						//_gaq.push(['_trackPageview', path]);
					}
					
				});
				
			});
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		<?php }} ?>