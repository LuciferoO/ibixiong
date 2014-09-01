<?php /* Smarty version Smarty-3.1.13, created on 2013-05-12 22:54:59
         compiled from "/var/www/ibixiong/application/views/index/share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6731550205184b66ec76b68-29487225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081ce339834ddcbae9acf0f8e0a0f9f6cb3f4766' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/share.tpl',
      1 => 1368370298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6731550205184b66ec76b68-29487225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5184b66ee0c221_04714613',
  'variables' => 
  array (
    'category' => 0,
    'quote' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184b66ee0c221_04714613')) {function content_5184b66ee0c221_04714613($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/css/bootstrap-tagmanager.css"/>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/bootstrap-tagmanager.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
		$(document).ready(function(){
			jQuery(".tagManager").tagsManager({
				CapitalizeFirstLetter: true,
				preventSubmitOnEnter: null,
				typeahead: true,
				typeaheadAjaxSource: '/share/tagsahead',
				typeaheadAjaxPolling: true,
				//typeaheadSource: ["Pisa", "Rome", "Milan", "Florence", "New York", "Paris", "Berlin", "London", "Madrid"],
				delimeters: [44, 188, 13, 190],
				backspace: [8],
				blinkBGColor_1: '#FFFF9C',
				blinkBGColor_2: '#CDE69C',
				//hiddenTagListName: 'hiddenTagList'
				//validator: checktag				
			});
		});	
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="container">
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar">
						<!--li><img src="assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li-->
						<li><img src="<?php echo @constant('DOMAIN');?>
/assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li>
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
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['inner'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['name'] = 'inner';
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['inners']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['inner']['total']);
?>
											<div class="accordion-inner">
												<a href="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['inners'][$_smarty_tpl->getVariable('smarty')->value['section']['inner']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['inners'][$_smarty_tpl->getVariable('smarty')->value['section']['inner']['index']]['post_title'];?>
</a>
											</div>
										<?php endfor; endif; ?>
									</div>
								</div>
						<?php endfor; endif; ?>
						</div>
					</ul>
				</div>
				<div class="span7 content">
					<div class="row-fluid" style="height:80px;">
						<ul id="rollsItem" class="rollsItemContent unstyled">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['name'] = 'quotes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['quote']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['quotes']['total']);
?>
							<li><?php echo $_smarty_tpl->tpl_vars['quote']->value[$_smarty_tpl->getVariable('smarty')->value['section']['quotes']['index']]['option_value'];?>
</li>
							<?php endfor; endif; ?>
						</ul>
				
					</div>
					<div class="row-fluid">
						<button type="submit" class="btn  btn-small btn-danger" onclick="location.href='<?php echo @constant('DOMAIN');?>
/share/original'">分享原创</button><br /><br />
						<form action="<?php echo @constant('DOMAIN');?>
/share/post" method="post">
							标题： <input type="text" name="post_title" placeholder="分享的文章标题" style="width:412px;"/><br />
							来源： <input type="text" name="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:412px;"/><br />
							<br />
							标签：<small>使用半角",""."或"Enter"提交</small> 
							<br />
							<input type="text" autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
							<br />
							<input type="hidden" name="type" value="0"/><br />
							<button type="submit" class="btn btn-primary">保存</button>
							<!--button type="button" class="btn">取消</button-->
						</form>	
					</div>
				</div>
				<div class="span3">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
		<?php }} ?>