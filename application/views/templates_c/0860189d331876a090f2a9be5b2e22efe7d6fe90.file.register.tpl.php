<?php /* Smarty version Smarty-3.1.13, created on 2013-07-14 14:30:08
         compiled from "/var/www/ibixiong/application/views/index/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151938633518504b68584b5-35259484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0860189d331876a090f2a9be5b2e22efe7d6fe90' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/register.tpl',
      1 => 1373783396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151938633518504b68584b5-35259484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518504b69583a2_03641387',
  'variables' => 
  array (
    'key' => 0,
    'rightbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518504b69583a2_03641387')) {function content_518504b69583a2_03641387($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	$(document).ready(function(){
		jQuery.validator.addMethod("nicknameCheck", function(value, element) {       
			return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);       
		});	
		jQuery.validator.addMethod("usernameCheck", function(value, element) {       
			return this.optional(element) || /^[a-zA-Z0-9_]{3,16}$/.test(value);       
		});	
		$('#register_form').validate({
			rules: {
				register_username:{
						required: true,
						usernameCheck: true,
						remote: {
							type: "post",
							url: "<?php echo @constant('DOMAIN');?>
/Register/checkname",
							data: {
									regusername:function(){
										return $("#register_username").val();
									}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
								return false;
							}
							
						}
					},
				register_nickname:{
						required: true,
						nicknameCheck: true,
						remote: {
							type: "post",
							url: "<?php echo @constant('DOMAIN');?>
/Register/checknickname",
							data: {
									regusernickname:function(){
										return $("#register_nickname").val();
									}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
									return false;
							}
						}
					},	
				register_email: {
						required: true,
						email: true,
						remote: {
							type: "post",
							url: "<?php echo @constant('DOMAIN');?>
/Register/checkemail",
							data: {
								regemail:function(){
								return $("#register_email").val();
						}
								},
							dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
									return false;
							}
						}
					},
				register_password:{
						required: true,
					},
				register_repeatpassword:{
						required: true,
						equalTo: "#register_password"
						
					},
				register_key:{
						required: true,
						remote: {
							type: "post",	
							url: "<?php echo @constant('DOMAIN');?>
/Register/keys",
							data: {
									regkey:function() {
									return $("#register_key").val();
								}
							},
							dataType: "json",
							//dataType: "json",
							dataFilter: function(data,type){
								if (data == 1)
									return true;
								else 
									return false;
							}
						}
					}
			},
			success: function(label) {
				//正确时的样式
				label.text(" ").addClass("success");
			},
			messages: {
				register_username: {
					required:"* 请输入用户名",
					usernameCheck: "* 只能包括[3-16位]英文字母、数字和下划线",
					remote: "* 用户名已经存在"
				},
				register_nickname: {
					required:"* 请输入昵称",
					nicknameCheck: "* 只能包括中文字、英文字母、数字和下划线",
					remote: "* 昵称已经存在"
				},
				register_password: {
					required:"* 请输入密码",
					
				},
				register_email: {
					required:"* 请输入邮箱",
					email: "* 请输入正确的邮箱格式",
					remote: "* 邮箱已经被使用"
				},
				register_repeatpassword: {
					required:"* 请输入确认密码",
					equalTo:"* 两次输入的密码不一致"
				},
				register_key:{
						required: "* 请输入邀请码",
						remote: "* 邀请码错误或已被使用"
				}
			},
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			},
			submitHandler: function() {
				register_page();
			}	
		});
		function register_page(){
			//alert('register has been called');
			var username = $('#register_username').val();
			var usernickname = $('#register_nickname').val();
			var email = $('#register_email').val();
			var emailstatus = $('#register_emailstatus').val();
			//var captcha = $('#captcha').val();
			var password = $('#register_password').val();
			var repeatpassword = $('#register_repeatpassword').val();
			var key = $('#register_key').val();
				//alert(username+' '+usernickname+' '+email+' '+password+' '+repeatpassword+' '+key);
				$.post(	
					"<?php echo @constant('DOMAIN');?>
/register/register",			
					{username: username, usernickname: usernickname,email: email,emailstatus:emailstatus,password:password,repeatpassword:repeatpassword,key:key},
					function (data){
						data = data.split(':');
						switch(data[0]){
							case '1':
								alert('注册成功!请到您邮箱激活信息');
								window.parent.location.reload(); 
								//messageBox(data[1],'success');
								break;
							case '101':
								//change_captcha();
								$('#register_key').val('请重新输入邀请码');
								$('#register_key').closest('.control-group').removeClass('success').addClass('error');
								$('#register_key').select();
								alert(data[1]);
								messageBox(data[1],'error',2);
								break;
							default:
								//change_captcha();
								messageBox('系统错误，请重新尝试','error',2);
									$('#regusername').select();
								break;
						}
					}
				);
		}
	});
</script>	
<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="row-fluid">
				<div class="span2">
					
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>注册新用户</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
					<form id="register_form" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/register/register" method="post">
					  <div class="control-group">
						<label class="control-label" for="register_username">用户名</label>
						<div class="controls">
						  <input type="text" name="register_username" id="register_username" placeholder="用户名"/>
						</div>
					  </div>
					  <div class="control-group">
							<label class="control-label" for="register_nickname">昵称</label>
							<div class="controls">
							  <input type="text" id="register_nickname" name="register_nickname" placeholder="用户名">
							</div>
						  </div>
					  <div class="control-group">
						<label class="control-label" for="register_email">邮箱</label>
						<div class="controls">
						  <input type="text" name="register_email" id="register_email" placeholder="邮箱"/>
							<input type="checkbox" name="register_emailstatus" id="register_emailstatus" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="公开邮箱，所有人访问您的主页将能看见您的邮箱"/> 公开邮箱
							<script>
								$(document).ready(function() {
									$('#register_emailstatus').hover(function(){
										$(this).tooltip('show');
									});
								});
							</script>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="register_password">密码</label>
						<div class="controls">
						  <input type="password" name="register_password" id="register_password" placeholder="密码"/>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="register_repeatpassword">确认密码</label>
						<div class="controls">
						  <input type="password" name="register_repeatpassword" id="register_repeatpassword" placeholder="确认密码"/>
						</div>
					  </div>
					  <?php if (isset($_smarty_tpl->tpl_vars['key']->value)){?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>
						<div class="control-group">
							<label class="control-label" for="register_key">邀请码</label>
							<div class="controls">
							  <input type="text" id="register_key" name="register_key" placeholder="邀请码">
							  <small><a href="<?php echo @constant('DOMAIN');?>
/about">如何获取邀请码？</a></small>
							</div>
						  </div>
						<?php }else{ ?>
						<input type="hidden" id="register_key" name="register_key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
						<?php }?>
					  <?php }?>
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" id="registerbutton" class="btn btn-primary" data-loading-text="注册中...">注册</button>
						  <!--button type="submit" class="btn">重置</button-->
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
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	<?php }} ?>