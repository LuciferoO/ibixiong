<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 01:30:48
         compiled from "/var/www/ibixiong/application/views/admin/content_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150136607351890d95be7ce6-05305508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696f1318769a780b570347e7c59430dfcd96580c' => 
    array (
      0 => '/var/www/ibixiong/application/views/admin/content_editor.tpl',
      1 => 1375290872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150136607351890d95be7ce6-05305508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51890d95cec103_27214410',
  'variables' => 
  array (
    'tag' => 0,
    'post' => 0,
    'categorys' => 0,
    'category' => 0,
    'parent_category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51890d95cec103_27214410')) {function content_51890d95cec103_27214410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/bootstrap-tagmanager.js"></script>
<script >
									
	$(document).ready(function(){
		var editor = new UE.ui.Editor();
		editor.render("post_content");
		//1.2.4以后可以使用一下代码实例化编辑器
		//UE.getEditor('myEditor')
		jQuery(".tagManager").tagsManager({
			<?php if (isset($_smarty_tpl->tpl_vars['tag']->value)){?>
			prefilled: [
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
						"<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
",
						<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['tags']['last']){?>
						"<?php echo $_smarty_tpl->tpl_vars['tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['tag_name'];?>
"
						<?php }?>
						<?php endfor; endif; ?>
						],
			<?php }?>
			CapitalizeFirstLetter: true,
			preventSubmitOnEnter: null,
			typeahead: true,
			typeaheadAjaxSource: '/share/tagsahead',
			typeaheadAjaxPolling: true,
			delimeters: [44, 188, 13, 190],
			backspace: [8],
			blinkBGColor_1: '#FFFF9C',
			blinkBGColor_2: '#CDE69C',
			hiddenTagListName: 'hidden_tags',
			//hiddenTagListId: 'hidden_tags',
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
		//getSelectVal(); 
		$("#category").change(function(){ 
			getSelectVal(); 
		}); 	
		$('#post-form').validate({
			rules: {
				post_title:{
					required:true
				},
			<?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']!=1){?>
				post_from_site:{
					required:true
				},
				post_url:{
					required:true
				},
			<?php }?>	
				post_img:{
					required:true
				},
				post_original:{
					required:true
				},
				post_content:{
					required:true
				},
			},
			messages: {
				post_title:{
					required:"* 请输入文章标题",
				},
			<?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']!=1){?>	
				post_from_site:{
					required:"* 请输入文章来源站名",
				},
				post_url:{
					required:"* 请输入文章来源链接",
				},
			<?php }?>		
				post_img:{
					required:"* 请输入文章缩略图",
				},
				post_original:{
					required:"* 请选择文章是否为原创",
				},
				post_content:{
					required:"* 请输入文章内容",
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
				postupdate();
			}
		});
		function postupdate() {
			var post_title = $('#post_title').val();
			//var password = $('#password').val();
			var post_from_site = $('#post_from_site').val();
			var post_url = $('#post_url').val();
			var post_img = $('#post_img').val();
			var category = $('#category').val();
			var post_original = $('#post_original').val();
			var childcategory = $('#childcategory').val();
			var post_content = UE.getEditor('post_content').getContent();
			var hidden_tags = $("input[name='hidden_tags']").val();
			var post_id = $('#post_id').val();
			//alert(hidden_tags);
			$.post(
				"<?php echo @constant('DOMAIN');?>
/Ibixiong_content/editupdate",
				{post_title: post_title,post_from_site:post_from_site,post_original:post_original,post_url:post_url,post_img:post_img,category:category,childcategory:childcategory,post_content:post_content,hidden_tags:hidden_tags,post_id:post_id},
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
		<div class="container">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10 content">
					<div class="row-fluid">
						<form id="post-form" class="form-horizontal" action="<?php echo @constant('DOMAIN');?>
/Ibixiong_content/editupdate" method="post" onsubmit="return false;">
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_title">标题：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_title" name="post_title" placeholder="分享的文章标题" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_from_site">来源站点：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_from_site" name="post_from_site" placeholder="文章来源的网站名" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_site'];?>
"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_url">来源：</label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_url" name="post_url" placeholder="文章完整链接 如：http://www.ibixiong.com/content/view/id/1" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_from_url'];?>
"/>
								</div>
							</div>	
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_img">缩略图： </label>
								<div class="controls" style="margin-left:100px;">
									<input type="text" id="post_img" name="post_img" placeholder="缩略图片地址 编辑文章处上传后，查看html内容 如：13703330664644.jpg" style="width:412px;" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="post_original">原创：</label>
								<div class="controls" style="margin-left:100px;">
									<label class="radio inline">
										<input type="radio" name="post_original" id="post_original" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']==0){?>checked<?php }?>>非原创
									</label>	
									<label class="radio inline">
										<input type="radio" name="post_original" id="post_original" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['post_original']==1){?>checked<?php }?>>原创
									</label>
								</div>
						    </div>
							<?php if (isset($_smarty_tpl->tpl_vars['categorys']->value)){?>
							<div class="control-group">
								<label class="control-label" style="width:80px;" for="inputcategory">分类： </label>
								<div class="controls" style="margin-left:100px;">	
									<?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value['category_parent']==0){?>
									<select class="1" name="category" id="category">
										<option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['name'] = 'parent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<?php if ($_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id']!=$_smarty_tpl->tpl_vars['category']->value['category_id']){?>
											<option  value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_name'];?>
</option>
											<?php }?>
										<?php endfor; endif; ?>
									</select>	
									<select class="1" name="childcategory" id="childcategory">
										<option selected value=""></option>
									</select>
									<?php }elseif(isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value['category_parent']!=0){?>
									<select  class="2" name="category" id="category">
										<option  selected value="<?php echo $_smarty_tpl->tpl_vars['parent_category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent_category']->value['category_name'];?>
</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['name'] = 'parent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<?php if ($_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id']!=$_smarty_tpl->tpl_vars['parent_category']->value['category_id']){?>
											<option  value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_name'];?>
</option>
											<?php }?>
										<?php endfor; endif; ?>
									</select>
									<select class="2" name="childcategory" id="childcategory">
										<option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
									</select>
									<?php }else{ ?>
									<select  class="3" name="category" id="category">
										<option selected value=""></option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['parent']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['name'] = 'parent';
$_smarty_tpl->tpl_vars['smarty']->value['section']['parent']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categorys']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option  value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorys']->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent']['index']]['category_name'];?>
</option>
										<?php endfor; endif; ?>
									</select>
									<select class="3" name="childcategory" id="childcategory">
										<option  value=""></option>
									</select>
									<?php }?>
									
								</div>
							</div>	
							<?php }?>	
								<textarea name="post_content" id="post_content" >
									<?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>

								</textarea>
								
								<br/><br/>
								<div class="control-group">
									<label class="control-label" style="width:200px;" for="tags">标签：<small>使用半角",""."或"Enter"提交</small></label>
									<div class="controls" style="margin-left:100px;">
										<input type="text"  autocomplete="off" data-items="6" data-provide="typeahead" id="tags" name="tags" placeholder="Tags" style="width:9em;" class="input-medium tagManager" data-original-title="">
									</div>
								</div>
								
								<div class="control-group">
									<div class="controls" style="margin-left:100px;">
										<input type="hidden" id="post_id" name="post_id"  value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"/><br />
										<button type="submit" class="btn btn-primary">保存</button>
									</div>
								</div>
						</form>
					</div>
				</div>
				<div class="span1">
					<p id="back-to-top"><a href="#top"><span></span>回到顶部</a></p>
				</div>
			</div>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	<?php }} ?>