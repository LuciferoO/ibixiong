<?php /* Smarty version Smarty-3.1.13, created on 2013-07-14 11:10:55
         compiled from "/var/www/ibixiong/application/views/admin/activekey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181509319351c9c8a98fe5d7-59196874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31522eddd5906ae9bb40771e4bd3dc007cc6e10' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/activekey.tpl',
      1 => 1373771452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181509319351c9c8a98fe5d7-59196874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c9c8a9bd91a3_87376554',
  'variables' => 
  array (
    'activekey_array' => 0,
    'used_activekey_array' => 0,
    'dispatched_activekey_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c9c8a9bd91a3_87376554')) {function content_51c9c8a9bd91a3_87376554($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<script>
		$(document).ready(function(){
			$('#create_activekey_submit').click(function(){
				var $number = $('select[name="number"]').val();
				$.post(	
					"<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/createkeys",	
					{number:$number},
					function (data){
						//alert(data);
						$.each(data, function(index, item){
							if (index == 0) {
								$("#newactivekeys").text(item.activekey_owner+'||'+item.activekey_value);
							} else {
								$("#newactivekeys").text($("#newactivekeys").text()+'\n'+item.activekey_owner+'||'+item.activekey_value);
							}
						});
					}
					,"json"
				);
			});
		});
	</script>
	<div class="row">
		<div class="span12">
			<div class="tabbable" id="tabs-810674">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#create_activekey" data-toggle="tab">生成邀请码</a>
					</li>
					<li>
						<a href="#activekey" data-toggle="tab">未使用邀请码</a>
					</li>
					<li>
						<a href="#used_activekey" data-toggle="tab">已使用邀请码</a>
					</li>
					<li>
						<a href="#dispatched_activekey" data-toggle="tab">已发出邀请码</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="create_activekey">
						<form class="form-horizontal" id="create_activekey_form" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/createkeys" method="post" onsubmit="return false;">
						  <div class="control-group">
							<label class="control-label" for="number">数量：</label>
							<div class="controls">
								<select  name="number" id="number" >
									<option selected value="5">5</option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label" for="newactivekeys">邀请码：</label>
							<div class="controls">
							  <textarea class="input-block-level" cols="40" rows="15" name="newactivekeys" id="newactivekeys"  placeholder="新生成的邀请码" tabindex="1" ></textarea>
							</div>
						  </div>
						  
						  <div class="control-group">
							<div class="controls">
							  <button type="submit" id="create_activekey_submit" class="btn btn-primary" data-loading-text="生成中...">生成</button>
							  <!--button type="submit" class="btn">重置</button-->
							</div>
						  </div>
						</form>	
					</div>
					<div class="tab-pane" id="activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['name'] = 'activekey';
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['activekey_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['activekey']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_owner'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_owner'];?>
||<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_value'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_id'];?>
/status/1" class="btn-mini btn-link">标记为已使用</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['activekey']['index']]['activekey_id'];?>
/status/2" class="btn-mini btn-link">标记为已发出</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					
					<div class="tab-pane" id="used_activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['name'] = 'used_activekey';
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['used_activekey_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['used_activekey']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_owner'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_owner'];?>
||<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_value'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_id'];?>
/status/0" class="btn-mini btn-link">标记为未使用</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['used_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['used_activekey']['index']]['activekey_id'];?>
/status/2" class="btn-mini btn-link">标记为已发出</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="dispatched_activekey">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										所有者
									</th>
									<th>
										邀请码
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['name'] = 'dispatched_activekey';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dispatched_activekey_array']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dispatched_activekey']['total']);
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_id'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_owner'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_owner'];?>
||<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_value'];?>

									</td>
									<td>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_id'];?>
/status/1" class="btn-mini btn-link">标记为已使用</a>
										<a href="<?php echo @constant('DOMAIN');?>
/Ibixiong_Activekey/status/id/<?php echo $_smarty_tpl->tpl_vars['dispatched_activekey_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dispatched_activekey']['index']]['activekey_id'];?>
/status/0" class="btn-mini btn-link">标记为未使用</a>
									</td>
								</tr>
								<?php endfor; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>