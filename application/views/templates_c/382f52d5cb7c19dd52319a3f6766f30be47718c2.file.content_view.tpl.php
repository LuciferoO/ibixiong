<?php /* Smarty version Smarty-3.1.13, created on 2013-09-15 22:06:09
         compiled from "/var/www/ibixiong/application/views/admin/content_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015272347518900f0962531-10694595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382f52d5cb7c19dd52319a3f6766f30be47718c2' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/content_view.tpl',
      1 => 1371220824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015272347518900f0962531-10694595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518900f0a93ad1_10381423',
  'variables' => 
  array (
    'post' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518900f0a93ad1_10381423')) {function content_518900f0a93ad1_10381423($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div class="container">
			<div class="row-fluid">
				<div class="span2">
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h2><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</h2>
					</div>
					<div class="row-fluid">
						<div class="span7">
							<a href="user/<?php echo $_smarty_tpl->tpl_vars['post']->value['user_info']['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['user_info']['user_nickname'];?>
</a>
							发表于 <?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>

							<?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']){?>
								<br/>
								<strong>原创文章</strong>
							<?php }else{ ?>
								<br/>
								来源于：<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_url'];?>
"><?php if ($_smarty_tpl->tpl_vars['post']->value['post_from_site']){?><?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_site'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_url'];?>
<?php }?></a>
							<?php }?>							
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['name'] = 'tags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total']);
?>
							<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
</span></a>
							<?php endfor; endif; ?>
						</div>
						<div class="span5 onebutton-share">
							<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right;">
							<a class="bds_tsina"></a>
							<a class="bds_tqq"></a>
							<a class="bds_qzone"></a>
							<a class="bds_renren"></a>
							<a class="bds_t163"></a>
							<span class="bds_more">更多</span>
							<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6605421" ></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
							</script>
							<!-- Baidu Button END -->
						</div>
					</div>
					<div class="row-fluid reading-contetnt">
						<!--p><img src="<?php echo @constant('DOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
"></img></p-->
						<?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>

					</div>
					<div class="line_dashed"></div>
						
				</div>
				<div class="span3 content">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	<?php }} ?>