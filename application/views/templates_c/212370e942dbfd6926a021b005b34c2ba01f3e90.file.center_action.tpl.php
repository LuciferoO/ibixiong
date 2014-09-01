<?php /* Smarty version Smarty-3.1.13, created on 2013-07-27 14:50:54
         compiled from "/var/www/ibixiong/application/views/index/center_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126754421651ea7462901b33-85885046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212370e942dbfd6926a021b005b34c2ba01f3e90' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/center_action.tpl',
      1 => 1374907850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126754421651ea7462901b33-85885046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ea7462a63f91_09121374',
  'variables' => 
  array (
    'user_id' => 0,
    'user_info' => 0,
    'user_relationships' => 0,
    'username' => 0,
    'followed' => 0,
    'users' => 0,
    'user_shares' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ea7462a63f91_09121374')) {function content_51ea7462a63f91_09121374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
					<?php if (isset($_smarty_tpl->tpl_vars['users']->value)){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
						<div class="media">
							<a class="pull-left" href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_nickname'];?>
">
								<img src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_photo'];?>
" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;">
							</a>
							<div class="media-body">
								<h4 class="media-heading">个人信息</h4>
								<p>昵称：<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_nickname'];?>
</p>
								<p>个人简介:<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_description'];?>
</p>
							</div>
						</div>
						<?php endfor; endif; ?>
					<?php }elseif(isset($_smarty_tpl->tpl_vars['user_shares']->value)){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['name'] = 'user_share';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_shares']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user_share']['total']);
?>
						<div class="media">
							<a class="pull-left" href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_id'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_img'];?>
" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;">
							</a>
							<div class="media-body">
								<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_id'];?>
">
								<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_title'];?>
</h4>
								</a>
								<a href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['user_shares']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user_share']['index']]['post_content'];?>

								</a>
							</div>
						</div>
						<?php endfor; endif; ?>
					<?php }?>
					</div>	
				</div>
			</div>	

		
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
			<?php }} ?>