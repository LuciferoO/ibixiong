<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 09:52:05
         compiled from "/var/www/ibixiong/application/views/index/share_original.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1791229578518fabdcdbb456-12244338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35433c78690acf256ae5132701d2d8315366a1eb' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/share_original.tpl',
      1 => 1375321907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1791229578518fabdcdbb456-12244338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518fabdd0030d3_77089334',
  'variables' => 
  array (
    'login' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518fabdd0030d3_77089334')) {function content_518fabdd0030d3_77089334($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/css/bootstrap-tagmanager.css"/>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/ueditor/editor_config.js"></script>
        <script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/ueditor/editor_all.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/bootstrap-tagmanager.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-ui.min.js"></script>
		<script>
		$(document).ready(function(){
			var editor = new UE.ui.Editor();
			editor.render("post_content");
			$('#getactivekey_page').mousedown(function(){
				if ($(this).is(':checked')) {
					$('#getactivekey_mail_group_page').css({ "display": "none"});
					$('#getactivekey_page').val(0);
				} else {
					$('#getactivekey_mail_group_page').css({ "display": "block"});
					$('#getactivekey_page').val(1);
				}
			});

			jQuery(".tagManager").tagsManager({
				CapitalizeFirstLetter: true,
				preventSubmitOnEnter: null,
				typeahead: true,
				typeaheadAjaxSource: '/share/tagsahead',
				typeaheadAjaxPolling: true,
				//typeaheadSource: ["Pisa", "Rome", "Milan", "Florence", "New York", "Paris", "Berlin", "London", "Madrid"],
				delimeters: [44, 188, 13, 190],
				backspace: [8],
				blinkBGColor_1: '#FFFF9C',
				blinkBGColor_2: '#CDE69C',
				//hiddenTagListName: 'hiddenTagList'
				//validator: checktag				
			});
			function getSelectVal(){ 
				$.post(
					"<?php echo @constant('DOMAIN');?>
/share/childcategory",{
						category:   $("#category").val()
					},function(data,state){
						var childcategory = $("#childcategory"); 
						$("option",childcategory).remove(); //清空原有的选项 
						$.each(data,function(index,array){ 
							var option = "<option value='"+array['category_id']+"'>"+array['category_name']+"</option>"; 
							childcategory.append(option); 
						}); 
					},
					"json"
				);
			}
			getSelectVal(); 
			$("#category").change(function(){ 
				getSelectVal(); 
			}); 

		$('#postAction').validate({
			rules: {
				post_title:{
					required:true
				},
				post_img:{
					required:true
				},
				post_content:{
					required:true
				},
				getactivekey_mail_page:{
					email: true
				}
			},
			messages: {
				post_title:{
					required:"* 请输入文章标题",
				},
				post_img:{
					required:"* 请输入文章缩略图",
				},
				post_content:{
					required:"* 请输入文章内容",
				},
				getactivekey_mail_page: {
					email: "* 请输入正确的邮箱格式",
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
				postAction();
			}
		});
		function postAction() {
			var post_title_original = $('#post_title_original').val();
			<?php if (!isset($_smarty_tpl->tpl_vars['login']->value)||$_smarty_tpl->tpl_vars['login']->value==0){?>
			var getactivekey_page = $('#getactivekey_page').val();
			var getactivekey_mail_page = $('#getactivekey_mail_page').val();
			<?php }?>
			var post_img = $('#post_img').val();
			var category = $('#category').val();
			var childcategory = $('#childcategory').val();
			var post_content = UE.getEditor('post_content').getContent();
			var hidden_tags = $("input[name='hidden-tags']").val();
			$.post(
				"<?php echo @constant('DOMAIN');?>
/share/post",
			<?php if (!isset($_smarty_tpl->tpl_vars['login']->value)||$_smarty_tpl->tpl_vars['login']->value==0){?>	
				{post_title: post_title_original,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags,getactivekey_page:getactivekey_page,getactivekey_mail_page:getactivekey_mail_page},
			<?php }else{ ?>
				{post_title: post_title_original,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags},
			<?php }?>
				function (data){
					data = data.split(':');
					switch(data[0]) {
						case '1':
							alert(data[1]);
							window.location.reload(); 
							break;
						case '101':
							alert(data[1]);
							break;
						default:
							alert('系统错误');
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
						<form id="postAction" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/share/post" method="post" onsubmit='return false'>
							<?php if (!isset($_smarty_tpl->tpl_vars['login']->value)||$_smarty_tpl->tpl_vars['login']->value==0){?>
							  <div class="control-group">
								<label class="control-label" style="width:90px;" for="getactivekey">获取邀请码：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="checkbox" id="getactivekey_page" name="getactivekey_page" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="选择获取邀请码,文章审核通过后将会把邀请码发送至您的邮箱" value='0'> 
								</div>
							  </div>
							  <div class="control-group" id="getactivekey_mail_group_page" style="display: none">
								<label class="control-label" style="width:80px;" for="getactivekey_mail">邮箱：</label>
								<div class="controls" style="margin-left:100px;">
								  <input type="text" name="getactivekey_mail_page" id="getactivekey_mail_page" placeholder="请填写您的邮箱地址" style="width:400px;">
								</div>
							  </div>
							<?php }?>  
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputtitle">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_title_original" name="post_title_original" placeholder="分享的文章标题" style="width:412px;"/>
								</div>
							</div>		
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputimage">缩略图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_img" name="post_img" placeholder="缩略图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;"/>
								</div>
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputcategory">分类： </label>
								<div class="controls" style="margin-left:100px;">
									<select  name="category" id="category">
										<option selected value=""></option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['name'] = 'parent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['total']);
?>
										<option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_name'];?>
</option>
										<?php endfor; endif; ?>
									</select>
									<select name="childcategory" id="childcategory">
										<option selected value=""></option>
									</select>
								</div>
							</div>	
							<?php }?>
							<textarea name="post_content" id="post_content" ></textarea>
							<script >
								
								//1.2.4以后可以使用一下代码实例化编辑器
								//UE.getEditor('myEditor')
							</script>
							<div class="control-group">
								<label class="control-label" style="width:200px;" for="inputtag">标签：<small>使用半角",""."或"Enter"提交</small></label>
							</div>
							<div class="control-group">
								<div class="controls" style="margin-left:0px;">
									<input type="text" id="inputtag" autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
								</div>
							</div>
							<div class="control-group">
								<div class="controls" style="margin-left:0px;">
									<input type="hidden" name="type" value="1"/><br />
									<button type="submit" class="btn btn-primary">提交</button>
							<!--button type="button" class="btn">取消</button-->
								</div>
							</div>
						</form>	
					</div>
				</div>
				<div class="span3">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
		<?php }} ?>