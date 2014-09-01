<?php /* Smarty version Smarty-3.1.13, created on 2013-06-20 20:41:54
         compiled from "/var/www/ibixiong/application/views/admin/homepage_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192718751651b73b1ecf4f08-10146456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf08344e43162b62a6a3cac8c1b63a977ec16c1c' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/homepage_editor.tpl',
      1 => 1371732110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192718751651b73b1ecf4f08-10146456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b73b1ed96a64_32444839',
  'variables' => 
  array (
    'carousel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b73b1ed96a64_32444839')) {function content_51b73b1ed96a64_32444839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/bootstrap-tagmanager.js"></script>
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_homepage/editupdate" method="post">
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputtitle">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputtitle" name="option_name" placeholder="分享的文章标题" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['carousel']->value['option_name'];?>
"/>
								</div>
							</div>		
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">滚动图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputimage" name="post_img" placeholder="图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['carousel']->value['post_img'];?>
"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">所属链接： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputurl" name="option_value" placeholder="点击后跳转到的链接" style="width:412px;" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel']->value['option_value'], ENT_QUOTES, 'UTF-8', true);?>
"/>
								</div>
							</div>
								<textarea name="" id="myEditor" >
									<img src="<?php echo $_smarty_tpl->tpl_vars['carousel']->value['post_img'];?>
" />
								</textarea>
								<script >
									var editor = new UE.ui.Editor();
									editor.render("myEditor");
									//1.2.4以后可以使用一下代码实例化编辑器
									//UE.getEditor('myEditor')
								</script>

								
								<div class="control-group">
									<div class="controls" style="margin-left:100px;">
										<input type="hidden" name="post_id"  value="<?php echo $_smarty_tpl->tpl_vars['carousel']->value['post_id'];?>
"/><br />
										<input type="hidden" name="option_id"  value="<?php echo $_smarty_tpl->tpl_vars['carousel']->value['option_id'];?>
"/><br />
										<button type="submit" class="btn btn-primary">保存</button>
									</div>
								</div>
						</form>
					</div>
				</div>
				<div class="span1">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	<?php }} ?>