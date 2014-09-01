<?php /* Smarty version Smarty-3.1.13, created on 2013-06-24 22:30:30
         compiled from "/var/www/ibixiong/application/views/index/resetpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68127702651af05bab82771-07262082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccde9d14cb9fea776b42d06b67d16cc99bab849e' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/resetpassword.tpl',
      1 => 1372084229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68127702651af05bab82771-07262082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51af05bbe55be3_68253277',
  'variables' => 
  array (
    'sign' => 0,
    'id' => 0,
    'rightbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51af05bbe55be3_68253277')) {function content_51af05bbe55be3_68253277($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	$(document).ready(function(){
		$('#setpassword_form').validate({
					rules: {
						newpassword:{
							required:true,
						},
						newrepeatpassword:{
							required:true,
							equalTo: "#newpassword"
						}
					},
					messages: {
						newpassword: {
							required:"* 请输入密码",
						},
						newrepeatpassword: {
							required:"* 请输入确认密码",
							equalTo:"* 两次输入的密码不一致"
						}
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						resetpasswords();
					}	
				});
		function resetpasswords() {
				var id = $(":hidden[name='id']").val();
				var sign = $(":hidden[name='sign']").attr('value');
				var newpassword = $('#newpassword').val();
				var newrepeatpassword = $('#newrepeatpassword').val();
				//alert(id+''+sign);
				$.post(
					"<?php echo @constant('DOMAIN');?>
/Reset/password",
					{id: id,sign: sign,newpassword:newpassword,newrepeatpassword:newrepeatpassword},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								alert('提交成功，请去邮箱查看邮件');
								//alert(1);
								window.parent.location.reload(); 
								break;
							case '101':
								alert('提交失败，邮箱不存在');
								messageBox(data[1],'error',1);
								$('#newpassword').select();
								break;
							default:
								//alert(201);
								messageBox('系统错误，请重新尝试','error',1);
								$('#newpassword').select();
								break;
						}
					}
				);
		}
	});			
</script>
			<div class="row-fluid">
				<div class="span2">
					
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>设置新密码</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
						<form class="form-horizontal" id="setpassword_form" action="<?php echo @constant('DOMAIN');?>
/Reset/password" method="post" onsubmit="return false;">
						  <div class="control-group">
							<label class="control-label" for="newpassword">新密码：</label>
							<div class="controls">
							  <input type="password" name="newpassword" id="newpassword" placeholder="新密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label" for="newrepeatpassword">确认密码：</label>
							<div class="controls">
							  <input type="password" name="newrepeatpassword" id="newrepeatpassword" placeholder="确认密码">
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls"> 
								<input type="hidden" name="sign" value="<?php echo $_smarty_tpl->tpl_vars['sign']->value;?>
" />
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
								<button type="submit" class="btn btn-primary" data-loading-text="保存中...">保存</button>
							</div>
						  </div>
						</form>	
					</div>
				</div>
				<div class="span3 content">
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
									<li class="shadow-box"><a  href="<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['hotlinks'][$_smarty_tpl->getVariable('smarty')->value['section']['hotlink']['index']]['title'];?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						</div>
					<?php endfor; endif; ?>
						<div class="row-fluid">
							<h6 class="sidebar_title">开放平台登录</h6>
							<ul class="unstyled">
									<li class="shadow-box"><wb:login-button type="3,2" onlogin="login" onlogout="logout">登录按钮</wb:login-button></li>
							</ul>
						</div>
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		<?php }} ?>