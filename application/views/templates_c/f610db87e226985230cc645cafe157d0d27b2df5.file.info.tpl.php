<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 21:29:42
         compiled from "/var/www/ibixiong/application/views/user/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19385106955193a776e77c85-92225539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f610db87e226985230cc645cafe157d0d27b2df5' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/info.tpl',
      1 => 1371043772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19385106955193a776e77c85-92225539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5193a7772d7e88_91869005',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5193a7772d7e88_91869005')) {function content_5193a7772d7e88_91869005($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/morecity.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
					<div class="row-fluid">
						<h4>个人资料</h4>
						<hr class="hr">
					</div>
					<div class="row-fluid">
					<form class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/user_info/post" method="post">
						<div class="control-group">
						<label class="control-label" for="nickname">昵称：</label>
						<div class="controls">
						  <input type="text" name="nickname" id="inputNickname" placeholder="昵称" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_nickname'];?>
">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputSex">性别：</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="radiosSex" id="male" value="1" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==1||$_smarty_tpl->tpl_vars['user_info']->value['user_sex']==0){?>checked<?php }?>>男
							</label>	
							<label class="radio inline">
								<input type="radio" name="radiosSex" id="female" value="2" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sex']==2){?>checked<?php }?>>女
							</label>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputPassword">居住地：</label>
						<div class="controls">
							<select  name="ddlProvince" id="ddlProvince" onchange="selectMoreCity(this)">
								<option selected value="">省份</option>
							</select>
							<select name="ddlCity" id="ddlCity">
								<option selected value="">城市</option>
							</select>
							<script type="text/javascript" language ="javascript"><!--
								//BindProvince("<?php echo $_smarty_tpl->tpl_vars['user_info']->value['province_name'];?>
");//只初始化省份
								BindCity("<?php echo $_smarty_tpl->tpl_vars['user_info']->value['city_name'];?>
");//初始化，并选中洛阳市和洛阳市所在的省
							</script>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputSex">性取向：</label>
						<div class="controls">
							<label class="checkbox inline">
								<input type="checkbox" name="checkboxSexMale" id="male" value="1" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sexual_orientation']==1||$_smarty_tpl->tpl_vars['user_info']->value['user_sexual_orientation']==3){?>checked<?php }?>>男
							</label>	
							<label class="checkbox inline">
								<input type="checkbox" name="checkboxSexFemale" id="female" value="2" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_sexual_orientation']==2||$_smarty_tpl->tpl_vars['user_info']->value['user_sexual_orientation']==3){?>checked<?php }?>>女
							</label>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="QQ">QQ：</label>
						<div class="controls">
						  <input type="text" name="QQ" id="inputQQ" placeholder="QQ" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_qq'];?>
">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="WeiBo">微博：</label>
						<div class="controls">
						  <input type="text" name="weibo" id="WeiBo" placeholder="微博" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_weibo'];?>
">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputPresentation">一句话介绍：</label>
						<div class="controls">
						  <textarea class="input-block-level" cols="40" rows="3" name="pesentation" id="inputPresentation"  <?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_description']){?> <?php }else{ ?>placeholder="介绍自己的特长吧，亲"<?php }?> tabindex="1" ><?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_description']){?> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_description'];?>
<?php }?></textarea>
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

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>