<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 00:35:21
         compiled from "/var/www/ibixiong/application/views/index/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285211860518403a761ac35-64693811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf49bd3b6a31e193dff9450039ec23464b54fb32' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/content.tpl',
      1 => 1375000067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285211860518403a761ac35-64693811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518403a79c5f37_58026397',
  'variables' => 
  array (
    'answerbox' => 0,
    'post' => 0,
    'user_photo' => 0,
    'username' => 0,
    'category' => 0,
    'tag' => 0,
    'login' => 0,
    'comment' => 0,
    'user' => 0,
    'now' => 0,
    'rightbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518403a79c5f37_58026397')) {function content_518403a79c5f37_58026397($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="modal  hide fade " id="messagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>发送消息</h4>
					</div>
					<form id="modal-messageform" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/message/post" method="post" onsubmit="return false;">
						<div class="box box-info" id="box-info-message" style="margin-top:15px">消息信息错误，请按照系统提示填写正确格式</div>
						<div class="modal-body">
							<div class="control-group">
								<label class="control-label" style="width:80px;"  for="receiver">收信人：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="receiver" id="receiver" placeholder="分享的文章标题"  />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="messagecontent">内容：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="messagecontent" name="messagecontent" placeholder="您要发送的消息" style="width:400px;"/>
								</div>
							</div>							  
						</div>	
						<div class="modal-footer">
							<button type="submit" id="modal-shareform-submit" class="btn btn-primary" data-loading-text="提交中...">提交</button>
							<!--button type="submit" class="btn">重置</button-->							
						</div>
					</form>
			</div>	
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery.autogrowtextarea.js"></script>
		
		<script>
		$(document).ready(function(){
			<?php if ($_smarty_tpl->tpl_vars['answerbox']->value==1){?>
			$('#comment_form').validate({
					rules: {
						commentinput:{
							required:true
						},
					},
					messages: {
						commentinput: {
							required:"* 您还没有输入评论内容",
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
						comment();
					}	
				});
			function comment() {
				var commentinput = $('#commentinput').val();
				$.post(
					"<?php echo @constant('DOMAIN');?>
/content/comment",
					{comment:commentinput,id:<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
 },
					function (data){
						if (data) {
							var insert_comment = "<div class=\"row-fluid comment\" id=\""+data.comment_id+"\">";
							insert_comment += "<div class=\"line_dashed\"></div>";
							insert_comment += "<div class=\"row-fluid\" >";
							insert_comment += "<div class=\"span1\">";
							insert_comment += "<img data-src=\"<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/45x45\" style=\"width:45px;height:45px;\" src=\"<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
\" />";
							insert_comment += "</div>";
							insert_comment += "<div class=\"span11  comment\">";
							insert_comment += "<div class=\"row-fluid\">";
							insert_comment += "<div class=\"span10\">";
							insert_comment += "<a href=\"<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
\" data-name=\"<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
\"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>";
							insert_comment += "您的回复, <abbr class=\"timeago\" title=\""+data.comment_date+"\">"+data.comment_date+"</abbr>";
							insert_comment += "</div>";
							insert_comment += "<div class=\"span2\">";
							insert_comment += "<button id=\"comment_like\" class=\"btn-mini btn-link\" type=\"button\" title=\"喜欢\"><i class=\"icon-heart\"></i></button>";
							insert_comment += "<button id=\"comment_replay\" class=\"btn-mini btn-link\" type=\"button\" title=\"回复\"><i class=\"icon-share\"></i></button>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "<div class=\"row-fluid\">";
							insert_comment += data.comment_content;
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							insert_comment += "</div>";
							//alert(insert_comment);
							$("#comment_list").append(insert_comment);
							$("#commentinput").val("");
						} else {
							
						}
					},"json"
				);
			}
			<?php }?>
			$('#messagebutton').click(function(event){
				
				<?php if ($_smarty_tpl->tpl_vars['answerbox']->value==1){?>
				$("#messagemodal").modal({
						"backdrop" : "static",
						"keyboard" : true,
						"show" : true // this parameter ensures the modal is shown immediately
						}
				);
				$receiver = $(this).parent().parent().children('div:first').children('a').children('small:first').text();
				$receiver = $receiver.substr(1);
				$('#receiver').val($receiver);
				<?php }else{ ?>
				alert('未登录不能发送消息');
				<?php }?>
			});	
			$('#box-info-message').hide();
			$('#messagecontent').autoGrow();
			$('#modal-messageform').validate({
				rules: {
					receiver:{
						required:true
					},
					messagecontent:{
						required:true
					},
				},
				messages: {
					receiver: {
						required:"* 收信人不能为空",
					},
					messagecontent: {
						required:"* 消息内容不能为空",
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
					message();
				}	
			});
			function message() {
				receiver = $('#receiver').val();
				messagecontent = $('#messagecontent').val();
				$.post(
					"<?php echo @constant('DOMAIN');?>
/message/post",
					{receiver:receiver,messagecontent:messagecontent},
					function (data){
						data = data.split(':');
						switch(data[0]){
						//switch(data){
							case '1':
								alert('提交成功');
								break;
							case '101':
								alert('提交失败');
								break;
							default:
								messageBox('系统错误，请重新尝试','error','share');
								$('#post_title').select();
								break;
						}
					}
				);
			}
		});	
		</script>
		
		
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked pull-right sidebar full">
						<!--li><img src="assets/img/ibixiong-1.2.png" class="img-rounded" alt="ibixiong"/></li-->
						<li><img src="<?php echo @constant('OSSDOMAIN');?>
/ibixiong-logo.png" class="img-rounded" alt="ibixiong"/></li>
						<hr class="hr">
						
						<div class="accordion" id="accordion">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['name'] = 'categorys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total']);
?>
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>

										</a>
									</div>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['categorys']['first']){?>
									<div id="collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
" class="accordion-body collapse in">
									<?php }else{ ?>
									<div id="collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index'];?>
" class="accordion-body collapse">
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['categorys']['index']]['children'])){?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['child'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['child']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['name'] = 'child';
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['child']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['child']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['child']['total']);
?>
											<div class="accordion-inner">
												<a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['child']['index']]['category_name'];?>
</a>
											</div>
										<?php endfor; endif; ?>
									<?php }?>	
									</div>
								</div>
						<?php endfor; endif; ?>
						</div>
					</ul>
				</div>
				<div class="span7 content">
					<div class="row-fluid">
						<div class="breadcrumb_div">
							<ul class="breadcrumb menu clearfix ">
								<li class="first">分类<span class="divider">|</span></li>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['name'] = 'categorys';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categorys']['total']);
?>
								<li><a href="<?php echo @constant('DOMAIN');?>
/category/category/id/<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categorys']['index']]['category_name'];?>
</a><span class="divider">|</span></li>
								<?php endfor; endif; ?>
								<li class="pull-right"><i class="icon-leaf"></i><a href="<?php echo @constant('DOMAIN');?>
/rss">RSS</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<h2><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</h2>
					</div>
					<div class="row-fluid">
						<div class="span7">
							<div class="row-fluid">
								<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['post']->value['user_info']['user_nickname'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['user_info']['user_nickname'];?>
</a>
								发表于 <?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
 
								
							</div>
							<div class="row-fluid">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['name'] = 'tags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total']);
?>
								<a href="<?php echo @constant('DOMAIN');?>
/category/tag/id/<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_id'];?>
/name/<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
</span></a>
							<?php endfor; endif; ?>
							</div>
						</div>
						<div class="span5 onebutton-share">
							<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right;">
							<a class="bds_tsina"></a>
							<a class="bds_tqq"></a>
							<a class="bds_qzone"></a>
							<a class="bds_renren"></a>
							<a class="bds_t163"></a>
							<span class="bds_more">更多</span>
							<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6605421" ></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
							document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
							</script>
							<!-- Baidu Button END -->
						</div>
					</div>
					<span style="padding:10px"></span>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']){?>
					<h5>原创文章</h5>
					<?php }else{ ?>
					<h5>来源于：<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_url'];?>
"><?php if ($_smarty_tpl->tpl_vars['post']->value['post_from_site']){?><?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_site'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_url'];?>
<?php }?></a></h5>
					<?php }?>
					
					<div class="row-fluid reading-contetnt">
						<!--p><img src="<?php echo @constant('DOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
"></img></p-->
						<?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>

					</div>
					<div class="row-fluid">
						<div class="span8">
						</div>	
						<div class="span4 bookmark">
						<?php if (isset($_smarty_tpl->tpl_vars['login']->value)&&$_smarty_tpl->tpl_vars['login']->value==1){?>	
							<button id="focus" class="btn btn-small btn-primary" type="button"><i class="icon-bookmark icon-white"></i>关注</button>
							<button id="love" class="btn btn-small btn-primary" type="button"><i class="icon-heart icon-white"></i>喜欢</button>
							<button id="collect" class="btn btn-small btn-primary" type="button"><i class="icon-star icon-white"></i>收藏</button>
						<?php }?>
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['login']->value)&&$_smarty_tpl->tpl_vars['login']->value==1){?>	
						<script>
						$(document).ready(function(){
							$('#focus').click(function(){
								$.post(
									'<?php echo @constant('DOMAIN');?>
/content/button',
									{username: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
',id: <?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
, type: 'focus' },
									function (data) {
										switch(data){
											case '0':
												$('#focus').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#focus').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$('#love').click(function(){
								$.post(
									'<?php echo @constant('DOMAIN');?>
/content/button',
									{username: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
',id: <?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
, type: 'love' },
									function (data) {
										switch(data){
											case '0':
												$('#love').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#love').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$('#collect').click(function(){
								$.post(
									'<?php echo @constant('DOMAIN');?>
/content/button',
									{username: '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
',id: <?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
, type: 'collect' },
									function (data) {
										switch(data){
											case '0':
												$('#collect').removeClass('btn-danger').addClass('btn-primary');break;
											case '1':
												$('#collect').removeClass('btn-primary').addClass('btn-danger');break;	
											default:break;
										}
									}
								);
							});
							$(".comment_replay").click(function(){
								var $id = $(this).closest(".comment").attr('id');
								var $floor = $(this).parent().parent().children('div:first').children('small:first').text();
								var $nickname = $(this).parent().parent().children('div:first').children('a:first').text();
								//alert($floor+' '+$nickname+' ');
								$("#commentinput").val('回复 '+$floor+' @'+$nickname+' ');
								$("#commentinput").select();
							});
							$(".comment_like").click(function(){
								var $id = $(this).closest(".comment").attr('id');
								var $commentlike = $(this);
								$.post(
									'<?php echo @constant('DOMAIN');?>
/content/commentlike',
									{id: $id},
									function (data) {
										switch(data){
											case '1':
												//alert('成功');
												$commentlike.children('i:first').removeClass('icon-heart').addClass('icon-glass');
												break;
											default: alert('操作失败');break;
										}
									}
								);
							});
						});
						</script>
						<?php }?>
					</div>
					<hr>
					<div class="row-fluid">
						<small>凡本网注明转载自其他媒体的作品，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如涉及作品内容、版权和其它问题，请在30日内与本网联系，我们将在第一时间删除内容！</small><br />
						<small>本站文章版权归原作者所有 内容为作者个人观点 本站只提供参考并不构成任何投资及应用建议。本站拥有对此声明的最终解释权。</small>
					</div>
					<hr>
					<div id="preview" ></div>
					<h4>文章评论：</h4>
					<div class="row-fluid" id="comment_list">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['name'] = 'comment_user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['comment_user']['total']);
?>
						<div class="row-fluid comment" id="<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['comment_id'];?>
">
							<div class="line_dashed"></div>
							<div class="row-fluid" >
								<div class="span1">
									<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/45x45" style="width:45px;height:45px;" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['author_info']['user_photo'];?>
" />
								</div>
								<div class="span11">
									<div class="row-fluid">
										<div class="span10">
											<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['author_info']['user_nickname'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['comment_author'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['author_info']['user_nickname'];?>
</a>
												<small><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']+1;?>
楼,</small> <abbr class="timeago" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['comment_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['timebefore'];?>
</abbr>
										</div>
										<div class="span2">
											<button class="comment_like btn-mini btn-link" type="button" title="喜欢"><i class="icon-heart"></i></button>
											<button class="comment_replay btn-mini btn-link" type="button" title="回复"><i class="icon-share"></i></button>
										</div>
									</div>
									<div class="row-fluid">
									<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['comment_user']['index']]['comment_content'];?>

									</div>
								</div>
							</div>
						</div>		
						<?php endfor; endif; ?>
					</div>
					<div class="line_dashed"></div>
					<div id="preview" ></div>
					<?php if ($_smarty_tpl->tpl_vars['answerbox']->value==1){?>
					<div class="row-fluid shadow-answerbox">
						<div class="comments ">
							<div class="span1">
								<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/45x45" style="width:45px;height:45px;" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_photo'];?>
" />
							</div>
							<div class="span11  comment">
								<div class="row-fluid">
									<div class="row-fluid">
										<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_nickname'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_nickname'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_nickname'];?>
</a>
										<span class="opt gray"><?php echo $_smarty_tpl->tpl_vars['user']->value['now'];?>
</span>
									</div>
									<div class="row-fluid">
										<form id="comment_form" action="<?php echo @constant('DOMAIN');?>
/content/comment/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" method="post" submit="return false;">
											<textarea class="topic_editor span10" cols="40" id="commentinput" name="comment" placeholder="你怎么看..." rows="4" tabindex="1"></textarea>
											<button type="submit" id="btn_reply" class="btn btn-primary btn-answer" tabindex="2">提交回复</button>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
					<script>
					  $(document).ready(function(){
						$("#commentinput").autoGrow();
					  });
					</script>
					<?php }else{ ?>
					<div class="inset-margin">
						<div style="padding:20px;">
							请 <a href="<?php echo @constant('DOMAIN');?>
/login">登录</a> 后发表评论。 还没有帐号 <a href="<?php echo @constant('DOMAIN');?>
/register" class="btn btn-mini btn-danger">现在注册</a> 
						</div>
					</div>
					<div class="row-fluid shadow-answerbox">
						<div class="comments ">
							<div class="span1">
								<img class="img-rounded" src="<?php echo @constant('OSSDOMAIN');?>
/ibixiong.ico" style="width:48px;height:48px;margin-left:10px;"/>
							</div>
							<div class="span11  comment">
								<div class="row-fluid">
									<div class="row-fluid">
										匿名用户
										<span class="opt gray"><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</span>
									</div>
									<div class="row-fluid">
										<form action="<?php echo @constant('DOMAIN');?>
/content/comment/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" method="post">
											<textarea class="topic_editor span10" cols="40" id="commentInput" name="comment" placeholder="登陆后发表您的观点" rows="4" tabindex="1" disabled="disabled"></textarea>
											<button disabled="disabled" id="btn_reply" class="btn btn-primary btn-answer disabled" tabindex="2">提交回复</button>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>	
					</div>
					<?php }?>
					
				</div>
				<div class="span3">
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
						<?php if ($_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_name']=='userlike'){?>
						<div class="row-fluid">
							<h6 class="sidebar_title"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_value'];?>
</h6>
							<ul class="unstyled">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['name'] = 'userlike';
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['userlikes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['userlike']['total']);
?>
									<li class="shadow-box"><a  href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['userlikes'][$_smarty_tpl->getVariable('smarty')->value['section']['userlike']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['userlikes'][$_smarty_tpl->getVariable('smarty')->value['section']['userlike']['index']]['post_title'];?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_name']=='author'){?>
							
						<div class="row-fluid">
							<h5 class="sidebar_title"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['option_value'];?>
</h6>
							<div class="line_dashed"></div>
							<div class="row-fluid">
								<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['author']['user_nickname'];?>
">
									<img data-src="<?php echo @constant('DOMAIN');?>
/assets/js/holder.js/180x180" style="width: 180px; height: 180px;" class="img-polaroid" src="<?php echo @constant('OSSDOMAIN');?>
/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['author']['user_photo'];?>
"/>
								</a>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<a href="<?php echo @constant('DOMAIN');?>
/center/space/name/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['author']['user_nickname'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['author']['user_nickname'];?>
"><small>@<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['author']['user_nickname'];?>
</small></a>
								</div>
								<div class="span6">
									<a class="btn-mini btn-link" id="messagebutton" data-toggle="messagemodal" data-title="发送消息">发送消息</a>
								</div>
							</div>
						</div>
							<?php if ($_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['recent_posts']){?>
							<div class="row-fluid">
								<h6 class="sidebar_title">作者最新的分享</h6>
								<ul class="unstyled">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['name'] = 'recent_post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['recent_posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recent_post']['total']);
?>
										<li class="shadow-box"><a  href="<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['recent_posts'][$_smarty_tpl->getVariable('smarty')->value['section']['recent_post']['index']]['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rightbar']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rightbars']['index']]['recent_posts'][$_smarty_tpl->getVariable('smarty')->value['section']['recent_post']['index']]['post_title'];?>
</a></li>
									<?php endfor; endif; ?>
								</ul>
							</div>	
							<?php }?>
						<?php }?>
					<?php endfor; endif; ?>
					
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		
		
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
			<?php }} ?>