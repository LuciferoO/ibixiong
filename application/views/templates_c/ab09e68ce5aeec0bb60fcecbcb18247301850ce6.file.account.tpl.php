<?php /* Smarty version Smarty-3.1.13, created on 2013-06-05 16:11:36
         compiled from "/var/www/ibixiong/application/views/user/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110737513251aef2b80e8952-91778020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab09e68ce5aeec0bb60fcecbcb18247301850ce6' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/account.tpl',
      1 => 1370419842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110737513251aef2b80e8952-91778020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51aef2b81493d4_05964963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aef2b81493d4_05964963')) {function content_51aef2b81493d4_05964963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h4>修改密码</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/user_account/post" method="post">
						  <div class="control-group">
							<label class="control-label" for="inputPassword">原始密码</label>
							<div class="controls">
							  <input type="password" name="password" id="inputPassword" placeholder="昵称">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="inputNewpassword">新密码：</label>
							<div class="controls">
							  <input type="password" name="newpassword" id="inputNewpassword" placeholder="新密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label" for="repeatPassword">确认密码：</label>
							<div class="controls">
							  <input type="password" name="repeatpassword" id="repeatPassword" placeholder="确认密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls"> 
							  <button type="submit" class="btn btn-primary" data-loading-text="保存中...">保存</button>
							  <!--button type="submit" class="btn">重置</button-->
							</div>
						  </div>
						</form>	
					</div>
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/user_rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<script type="text/javascript" src="assets/js/morecity.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>