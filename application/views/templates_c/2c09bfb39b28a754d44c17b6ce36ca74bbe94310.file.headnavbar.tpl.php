<?php /* Smarty version Smarty-3.1.13, created on 2013-07-20 19:17:09
         compiled from "/var/www/ibixiong/application/views/public/headnavbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402773141518a7042f15c21-40247671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c09bfb39b28a754d44c17b6ce36ca74bbe94310' => 
    array (
      0 => '/var/www/ibixiong/application/views/public/headnavbar.tpl',
      1 => 1374319025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402773141518a7042f15c21-40247671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518a7043142a74_06618983',
  'variables' => 
  array (
    'navbar' => 0,
    'login' => 0,
    'user_photo' => 0,
    'username' => 0,
    'activekey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518a7043142a74_06618983')) {function content_518a7043142a74_06618983($_smarty_tpl) {?>	<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-ias.js"></script>
	<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/message_cn.js"></script>
	<script>
			$(document).ready(function(){
				jQuery.validator.addMethod("nicknameCheck", function(value, element) {       
					return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);       
				});
				$('#getactivekey').mousedown(function(){
					if ($(this).is(':checked')) {
						$('#getactivekey_mail_group').css({ "display": "none"});
						$('#getactivekey').val(0);
					} else {
						$('#getactivekey_mail_group').css({ "display": "block"});
						$('#getactivekey').val(1);
						
					}
				});
				$('#shareemail').mousedown(function(){
					if ($(this).is(':checked')) {
						$('#shareemail').val(0);
					} else {
						$('#shareemail').val(1);
						
					}
				});
				$('#modal-shareform').validate({
					rules: {
						post_title:{
							required:true
						},
						post_url:{
							required:true,
							url:true
						},
					},
					messages: {
						post_title: {
							required:"* 请输入文章标题",
						},
						post_url: {
							required:"* 请输入文章来源链接",
							url:"* 请输入完整的文章链接地址"
						},
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						share();
					}	
				});
				$('#modal-loginform').validate({
					rules: {
						loginusername:{
							required:true
						},
						loginpassword:{
							required:true
						},
					},
					messages: {
						loginusername: {
							required:"* 请输入用户名",
						},
						loginpassword: {
							required:"* 请输入密码",
						},
					},
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.closest('.control-group').removeClass('error');
					},
					submitHandler: function() {
						login();
					}	
				});
				$('#modal-registerform').validate({
						rules: {
							regusername:{
									required: true,
									remote: {
										type: "post",
										url: "<?php echo @constant('DOMAIN');?>
/Register/checkname",
										data: {
												regusername:function(){
													return $("#regusername").val();
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
							regusernickname:{
									required: true,
									nicknameCheck: true,
									remote: {
										type: "post",
										url: "<?php echo @constant('DOMAIN');?>
/Register/checknickname",
										data: {
												regusername:function(){
													return $("#regusernickname").val();
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
							regemail: {
									required: true,
									email: true,
									remote: {
										type: "post",
										url: "<?php echo @constant('DOMAIN');?>
/Register/checkemail",
										data: {
												regemail:function(){
													return $("#regemail").val();
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
							regpassword:{
									required: true,
								},
							regrepeatpassword:{
									required: true,
									equalTo: "#regpassword"
									
								},
							regkey:{
									required: true,
									remote: {
										type: "post",						
										url: "<?php echo @constant('DOMAIN');?>
/Register/keys",
										data: {
											regkey:function() {
												return $("#regkey").val();
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
							regusername: {
								required:"* 请输入用户名",
								remote: "* 用户名已经存在"
							},
							regusernickname: {
								required:"* 请输入昵称",
								nicknameCheck: "* 只能包括中文字、英文字母、数字和下划线",
								remote: "* 昵称已经存在"
							},
							regpassword: {
								required:"* 请输入密码",
								
							},
							regemail: {
								required:"* 请输入邮箱",
								email: "* 请输入正确的邮箱格式",
								remote: "* 邮箱已经被使用"
							},
							regrepeatpassword: {
								required:"* 请输入确认密码",
								equalTo:"* 两次输入的密码不一致"
							},
							regkey:{
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
							register();
						}	
				});
				$('#box-info-share').hide();
				$('#box-info-login').hide();
				$('#box-info-register').hide();
			});
			function messageBox(info,type,id){
				var classInfo = '';
				if (type=='error')
				{
					classInfo = 'box box-error';
				}
				switch(id){
					case 'share':
						$('#box-info-share').show();
						$('#box-info-share').html(info);
						$('#box-info-share').attr('class',classInfo);
						break;
					case 'login':
						$('#box-info-login').show();
						$('#box-info-login').html(info);
						$('#box-info-login').attr('class',classInfo);
						break;
					case 'register':
						$('#box-info-register').show();
						$('#box-info-register').html(info);
						$('#box-info-register').attr('class',classInfo);
						break;
					default:break;	
				}
			}
			function share() {
				var post_title = $('#post_title').val();
				var post_url = $('#post_url').val();
				var getactivekey = $('#getactivekey').val();
				var getactivekey_mail = $('#getactivekey_mail').val();
				$.post(
					"<?php echo @constant('DOMAIN');?>
/share/ajaxpost",
					{post_title:post_title,post_url:post_url,getactivekey:getactivekey,getactivekey_mail:getactivekey_mail},
					function (data){
						data = data.split(':');
						switch(data[0]){
						//switch(data){
							case '1':
								//messageBox(data[1],'success',0);
								//alert('发表成功，等待管理员审核');
								alert(data[1]);
								window.parent.location.reload(); 
								$('#post_title').empty();
								$('#post_url').empty();
								break;
							case '101':
								messageBox(data[1],'success','share');
								$('#post_title').select();
								break;
							default:
								messageBox('系统错误，请重新尝试','error','share');
								$('#post_title').select();
								break;
						}
					}
				);
			}
			function login() {
				var username = $('#loginusername').val();
				var password = $('#loginpassword').val();
				$.post(
					"<?php echo @constant('DOMAIN');?>
/login/ajaxlogin",
					{username: username,password:password},
					function (data){
						data = data.split(':');
						//alert(data[0])
						switch(data[0]) {
							case '1':
								//alert('登陆成功');
								//alert(1);
								window.parent.location.reload(); 
								break;
							case '101':
								//alert(101);
								messageBox(data[1],'error','login');
								$('#loginusername').select();
								break;
							default:
								//alert(201);
								messageBox('系统错误，请重新尝试','error','login');
								$('#loginusername').select();
								break;
						}
					}
				);
			}
			function register(){
				//alert('register has been called');
				var username = $('#regusername').val();
				var usernickname = $('#regusernickname').val();
				var email = $('#regemail').val();
				var emailstatus = $('#shareemail').val();
				//var captcha = $('#captcha').val();
				var password = $('#regpassword').val();
				var repeatpassword = $('#regrepeatpassword').val();
				var key = $('#regkey').val();
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
									$('#regkey').val('请重新输入邀请码');
									$('#regkey').closest('.control-group').removeClass('success').addClass('error');
									$('#regkey').select();
									alert(data[1]);
									messageBox(data[1],'error','register');
									break;
								default:
									//change_captcha();
									messageBox('系统错误，请重新尝试','error','register');
									$('#regusername').select();
									break;
							}
						}
					);
			}
	</script>
		
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-fixed-top">
				<div class="blue navbar-inner">
					<div class="container">
						<div class="row-fluid">
							<div class="span2">
								<a class="whitefont brand" href="#"> i比熊 | 精品阅读 </a>
							</div>
							<div class="span7">
								<div class="nav-collapse collapse">
									<ul class="nav">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['name'] = 'navbars';
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['navbar']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['navbars']['total']);
?>
											<li >
												<a class="whitefont" href="<?php echo @constant('DOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['navbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['navbars']['index']]['option_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['navbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['navbars']['index']]['option_value'];?>
</a>
											</li>
										<?php endfor; endif; ?>
									</ul>
									<form style="margin:0 0 0 0" method="post" action="<?php echo @constant('DOMAIN');?>
/search/search">
										<div class="input-append span6" style="padding-top:5px;margin-bottom:0px;display:block;">
											<input class="span10" id="appendedInputButton" name="word" type="text">
											<button class="btn" type="submit"><i class="icon-search"></i></button>
										</div>
									</form>
									<ul class="nav pull-right">
										<li>
											<button class="btn btn-danger" id="sharebutton" data-toggle="sharemodal" type="button" > 快速分享</button>
										</li>
									</ul>
								</div>
							</div>
							<div class="span1">
								<ul class="nav" style="margin-top:10px">
									<li>
										<wb:follow-button uid="3231173010" type="red_2" width="136" height="24" ></wb:follow-button>
									</li>
								</ul>		
							</div>
							<div class="span2">
								<ul class="nav pull-right">
									<?php if (isset($_smarty_tpl->tpl_vars['login']->value)&&$_smarty_tpl->tpl_vars['login']->value==1){?>
									<ul id="usermenu" class="nav pull-right inline">
										<li>							
											<a class="whitefont"><img class="avatar" data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/25x25" style="width: 25px; height: 25px; padding-right: 10px;margin-top:-6px " src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" /><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
											<ul class="userlist dropdown-menu" style="top:0px">
												<li><a href="<?php echo @constant('DOMAIN');?>
/user_index">个人中心</a></li>
												<li><a href="<?php echo @constant('DOMAIN');?>
/user_message">我的消息</a></li>
												<li><a href="<?php echo @constant('DOMAIN');?>
/user_focus">我的关注</a></li>
												<li class="divider"></li>
												<li><a href="<?php echo @constant('DOMAIN');?>
/login/logout">退出登录</a></li>
											</ul>
										</li>
									</ul>
									<?php }else{ ?>
									<li class="login">
										<a class="whitefont" id="loginbutton" data-toggle="loginmodal" data-title="登录">登录</a>
									</li>
									<li>
										<a class="whitefont" id="registerbutton" data-toggle="registermodal" data-title="注册新用户">注册</a>
									</li>
									<?php }?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal  hide fade " id="sharemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>分享文章</h4>
					</div>
					<form id="modal-shareform" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/share/post" method="post" onsubmit="return false;">
						<div class="box box-info" id="box-info-share" style="margin-top:15px">分享信息错误，请按照系统提示填写正确格式</div>
						<div class="modal-body">
							  <div class="control-group">
								<label class="control-label" style="width:80px;"  for="post_title">标题：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="post_title" id="post_title" placeholder="分享的文章标题"  />
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" style="width:80px;" for="inputfrom_site">来源站点：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="inputfrom_site" name="post_from_site" placeholder="文章来源的网站名 非必填" style="width:400px;"/>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" style="width:80px;" for="post_url">文章链接：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="post_url" id="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:400px;">
								</div>
							  </div>
							<?php if (!isset($_smarty_tpl->tpl_vars['login']->value)||$_smarty_tpl->tpl_vars['login']->value==0){?>
							  <div class="control-group">
								<label class="control-label" style="width:90px;" for="getactivekey">获取邀请码：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="checkbox" id="getactivekey" name="getactivekey" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="选择获取邀请码,文章审核通过后将会把邀请码发送至您的邮箱"> 
								</div>
							  </div>
							  <div class="control-group" id="getactivekey_mail_group" style="display: none">
								<label class="control-label" style="width:80px;" for="getactivekey_mail">邮箱：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="getactivekey_mail" id="getactivekey_mail" placeholder="请填写您的邮箱地址" style="width:400px;">
								</div>
							  </div>
							<?php }?>  
							  <div class="control-group">
								<label class="control-label" style="width:80px;" for="original"></label>
								<div class="controls" style="margin-left:100px;">
									<button type="button" class="btn  btn-small btn-danger" onclick="location.href='<?php echo @constant('DOMAIN');?>
/share/original'">分享原创</button>
								</div>
							  </div>							  
						</div>	
						<div class="modal-footer">
							<button type="submit" id="modal-shareform-submit" class="btn btn-primary" data-loading-text="提交中...">提交</button>
							<!--button type="submit" class="btn">重置</button-->							
						</div>
					</form>
			</div>
			<div class="modal  hide fade " id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>登录</h4>
					</div>
					<div class="box box-info" id="box-info-login" style="margin-top:15px">用户名或密码错误</div>
					<form id="modal-loginform" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/login/login" method="post" onsubmit="return false;">
						<div class="modal-body">
							  <div class="control-group">
								<label class="control-label"  for="loginusername">用户名</label>
								<div class="controls">
								  <input type="text" name="loginusername" id="loginusername" placeholder="用户名或注册邮箱">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="loginpassword">密码</label>
								<div class="controls">
								  <input type="password" name="loginpassword" id="loginpassword" placeholder="密码">
								</div>
							  </div>
							  <div class="control-group">
								<div class="controls">
								  <label class="checkbox">
									<input type="checkbox" name="rememberme" id="rememberMe"> 记住密码  <button class="btn btn-mini btn-link" type="button" onclick="window.location='<?php echo @constant('DOMAIN');?>
/Reset'">忘记密码?</button>
								  </label>
								</div>
							  </div>
							
						</div>	
						<div class="modal-footer">
							<button type="submit" id="modal-loginform-submit" class="btn btn-primary" data-loading-text="登录中...">登录</button>
							<button type="button" class="btn btn-primary" id="registerbutton_inlogin" data-toggle="registermodal" onclick="location.href='<?php echo @constant('DOMAIN');?>
/register'">注册</button>						
						</div>
					</form>
				
			</div>
			<div class="modal  hide fade " id="registermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>注册新用户</h4>
					</div>
					<div class="box box-info" id="box-info-register" style="margin-top:15px">注册信息错误，请按照正确格式填写信息</div>
					<form id="modal-registerform" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/register/register" method="post"  onsubmit="return false;">
						<div class="modal-body">
						  <div class="control-group">
							<label class="control-label" for="regusername">用户名</label>
							<div class="controls">
							  <input type="text" id="regusername" name="regusername" placeholder="用户名">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="regusernickname">昵称</label>
							<div class="controls">
							  <input type="text" id="regusernickname" name="regusernickname" placeholder="用户名">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="regemail" >邮箱</label>
							
							<div class="controls">
							  <input type="text" id="regemail"  name="regemail" placeholder="邮箱">
							  <input type="checkbox" id="shareemail" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="公开邮箱，所有人访问您的主页将能看见您的邮箱"> 公开邮箱
							</div>
							<script>
								$(document).ready(function() {
									$('#shareemail').hover(function(){
										$(this).tooltip('show');
									});
								});
							</script>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="regpassword">密码</label>
							<div class="controls">
							  <input type="password" id="regpassword" name="regpassword" placeholder="密码">
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="regrepeatpassword">确认密码</label>
							<div class="controls">
							  <input type="password" id="regrepeatpassword" name="regrepeatpassword" placeholder="确认密码">
							</div>
						  </div>
						  <?php if (isset($_smarty_tpl->tpl_vars['activekey']->value)&&$_smarty_tpl->tpl_vars['activekey']->value==1){?>
						  <div class="control-group">
							<label class="control-label" for="regkey">邀请码</label>
							<div class="controls">
							  <input type="text" id="regkey" name="regkey" placeholder="邀请码">
							  <small><a href="<?php echo @constant('DOMAIN');?>
/about">如何获取邀请码？</a></small>
							</div>
						  </div>
							<?php }?>
						</div>	
						<div class="modal-footer">  
							 <button type="submit" id="modal-registerform-submit" class="btn btn-primary" data-loading-text="注册中...">注册</button>
						</div>  
					</form>	
							
			</div>
			<div class="container" style="min-height: 610px;"><?php }} ?>