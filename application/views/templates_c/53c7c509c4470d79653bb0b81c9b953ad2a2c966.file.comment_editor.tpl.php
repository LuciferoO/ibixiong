<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 22:12:06
         compiled from "/var/www/ibixiong/application/views/admin/comment_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58457668551bb23039d0539-66087035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c7c509c4470d79653bb0b81c9b953ad2a2c966' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/comment_editor.tpl',
      1 => 1371218835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58457668551bb23039d0539-66087035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bb2303ad3233_15890448',
  'variables' => 
  array (
    'post' => 0,
    'author_info' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb2303ad3233_15890448')) {function content_51bb2303ad3233_15890448($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/bootstrap-tagmanager.js"></script>
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_Comment/update" method="post">
							<div class="control-group">
								<label class="control-label" style="width:80px;" >文章标题：</label>
								<div class="controls" style="margin-left:100px;">
									<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>

									</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" >发表者：</label>
								<div class="controls" style="margin-left:100px;">
									<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['author_info']->value['user_nickname'];?>
">
									<small>@<?php echo $_smarty_tpl->tpl_vars['author_info']->value['user_nickname'];?>
</small>
									</a>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" >评论内容：</label>
								<div class="controls" style="margin-left:100px;">
									<textarea class="input-block-level" cols="40" rows="3" name="comment_content" id="comment_content" tabindex="1" ><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_content'];?>
</textarea>
								</div>
							</div>	
							<div class="control-group">
								<div class="controls" style="margin-left:100px;">
									<input type="hidden" name="comment_id"  value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
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