<?php /* Smarty version Smarty-3.1.13, created on 2013-07-20 19:54:43
         compiled from "/var/www/ibixiong/application/views/index/center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44640543951a4c6cbf3a568-49704841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a986fe057351f798cb6952fac3a563a916c084' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/center.tpl',
      1 => 1374320245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44640543951a4c6cbf3a568-49704841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a4c6cc1b37e0_80654849',
  'variables' => 
  array (
    'user_id' => 0,
    'user_info' => 0,
    'user_relationships' => 0,
    'username' => 0,
    'followed' => 0,
    'recentparticipate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a4c6cc1b37e0_80654849')) {function content_51a4c6cc1b37e0_80654849($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<script>
			$(document).ready(function() {
				$('#follow').click(function(){
					$.post(
							'<?php echo @constant('DOMAIN');?>
/center/follow',
							<?php if (isset($_smarty_tpl->tpl_vars['user_id']->value)){?>
							{user_id: '<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
',follow: '<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
' },
							<?php }?>
							function (data) {
							switch(data){
								case '0':
									$('#follow').addClass('btn-danger');
									<?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==0||$_smarty_tpl->tpl_vars['user_info']->value['user_sex']==1){?>
										$('#follow').val("关注他");
									<?php }elseif($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==2){?>
										$('#follow').val("关注她");
									<?php }?>
									break;
								case '1':
									$('#follow').removeClass('btn-danger');
									$('#follow').val("已关注");
									break;	
								default:
									alert('您未登陆或登录已失效');
									break;
							}
						}
					);
				});
			});
		</script>
		<div class="row-fluid">
				<div class="span2">
					<div class="row-fluid">
						<img data-src="holder.js/180x180"  style="width: 180px; height: 180px;" class="img-polaroid" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
"/>
					</div>
					<div class="userhot row-fluid">
						<div class="span4">
							<a href="<?php echo @constant('DOMAIN');?>
/center/focus/name/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['masters'];?>
<br>关注</a>
						</div>
						<div class="span4">
							<a href="<?php echo @constant('DOMAIN');?>
/center/follower/name/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['followers'];?>
<br>粉丝</a>
						</div>
						<div class="span4">
							<a href="<?php echo @constant('DOMAIN');?>
/center/share/name/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_relationships']->value['shares'];?>
<br>分享</a>
						</div>
					
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['username']->value)&&$_smarty_tpl->tpl_vars['user_info']->value['user_nickname']==$_smarty_tpl->tpl_vars['username']->value){?>
					<?php }else{ ?>
					<div class="row-fluid" style="text-align:center;">
						<?php if (isset($_smarty_tpl->tpl_vars['followed']->value)){?>
							<input id="follow" class="btn btn" type="button" value="取消关注">
						<?php }else{ ?>
							<?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==0||$_smarty_tpl->tpl_vars['user_info']->value['user_sex']==1){?>
								<input id="follow" class="btn btn btn-danger" type="button" value="关注他">
							<?php }elseif($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==2){?>
								<input id="follow" class="btn btn btn-danger" type="button" value="关注她">
							<?php }?>
						<?php }?>
					</div>
					<?php }?>
					<hr class="hr">
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<h4>@<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</h4>
						<small><?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</small>
						<h3>基本资料</h3>
						<hr>
						<div class="row-fluid">
							<ul class="unstyled user-base">
								<li>姓名：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_realname'];?>
</li>
								<li>生日：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_birthday'];?>
</li>

								<li>昵称：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
</li>
								<?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_email']==1){?>
								<li>邮箱：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_email'];?>
</li>
								<?php }?>
								<li>地域：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['province_name'];?>
</li>
								<li>个性签名：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_description'];?>
</li>
								

							</ul>
							<h3>最近参与的主题</h3>
							<hr>

							<div class="row-fluid">
								<ul class="unstyled">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['name'] = 'recent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentparticipate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recent']['total']);
?>
									<li><a href="http://ibixiong.com/content/view/id/<?php echo $_smarty_tpl->tpl_vars['recentparticipate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recentparticipate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recent']['index']]['post_title'];?>
</a></li>
								<?php endfor; endif; ?>	
								</ul>
							</div>
						</div>	
					</div>	
				</div>
			</div>	
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>