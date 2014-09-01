<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 22:40:38
         compiled from "/var/www/ibixiong/application/views/index/book_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128524426752197efc5562b0-36418384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96019adff4cd9896c4e94836dbf87dd72e823ce8' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/book_view.tpl',
      1 => 1377441618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128524426752197efc5562b0-36418384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52197efc828200_52761799',
  'variables' => 
  array (
    'category' => 0,
    'book' => 0,
    'tags' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52197efc828200_52761799')) {function content_52197efc828200_52761799($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<style>
		.book-menu{
			height:300px;
			overflow: hidden;
		}

		.book-open{
			display: block;

		}
		.book-close{
			display: none;
		}
		.book-rank{
		    border: 1px solid #DDDDDD;
		    border-radius: 4px 4px 4px 4px;
		    color: #778087;
		    margin-bottom: 5px;
		    margin-left: 10px;
		    padding: 4px 5px;
		}
		.book-rank:hover,
		.book-rank:focus{
			text-decoration: none;
		}


	</style>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/css/rateit.css"/>	
<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery.rateit.min.js"></script>	
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
" class="accordion-body collapse">
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
				<div id="book" class="span7 content">
					<div class="row-fluid">
					<div class="breadcrumb_div">
						<ul class="breadcrumb menu clearfix ">
							<li class="first">图书<span class="divider">/</span></li>
							<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['book']->value['book_title'];?>
</a><span class="divider"></span></li>
						</ul>
					</div>
					</div>
					<div class="span11">
						<div class="span4">
						<img src="<?php echo $_smarty_tpl->tpl_vars['book']->value['book_image'];?>
" class="img-polaroid img-book">
						</div>
						<div class="span7 offset1">
							<small>
								<ul class="unstyled">
									<li><strong>作者:  </strong><a href="#"><?php echo $_smarty_tpl->tpl_vars['book']->value['book_author'];?>
</a></li>
									<li><strong>出版社:  </strong> <?php echo $_smarty_tpl->tpl_vars['book']->value['book_publisher'];?>
</li>
									<li><strong>出版年:  </strong><?php echo $_smarty_tpl->tpl_vars['book']->value['book_pubdate'];?>
</li>
									<li><strong>页数:  </strong><?php echo $_smarty_tpl->tpl_vars['book']->value['book_pages'];?>
</li>
									</li><strong>定价:  </strong><?php if (isset($_smarty_tpl->tpl_vars['book']->value['book_price'])){?><?php echo $_smarty_tpl->tpl_vars['book']->value['book_price'];?>
<?php }else{ ?>暂无<?php }?></li>
									<li><strong>ISBN:  </strong><?php echo $_smarty_tpl->tpl_vars['book']->value['book_isbn13'];?>
</li>
								</ul>
								<br>
							</small>	
								<strong>评价：（<?php echo $_smarty_tpl->tpl_vars['book']->value['book_rating_num'];?>
人评价,<?php echo $_smarty_tpl->tpl_vars['book']->value['book_rating_average'];?>
分）</strong><br><br>
								<div id="rateit" data-productid="<?php echo $_smarty_tpl->tpl_vars['book']->value['book_id'];?>
" class="rateit"></div>
						</div>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">标签：</h5>
						<div class="line_dashed"></div>
						<small>
						<?php if (isset($_smarty_tpl->tpl_vars['tags']->value)){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total']);
?>
							<?php if (($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration'])%5==0){?>
							<span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['book_tag_name'];?>
</span>
							<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration'])%5==1){?>
							<span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['book_tag_name'];?>
</span>
							<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration'])%5==2){?>
							<span class="label "><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['book_tag_name'];?>
</span>
							<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration'])%5==3){?>
							<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['book_tag_name'];?>
</span>
							<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['tag']['iteration'])%5==4){?>
							<span class="label warning"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['book_tag_name'];?>
</span>
							<?php }?>
						<?php endfor; endif; ?>
						<?php }?>
						</small>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">内容简介：</h5>				
						<div class="line_dashed"></div>
						<small>
						<p><?php echo $_smarty_tpl->tpl_vars['book']->value['book_summary'];?>
</p>
						</small>
						<a href="javascript:void(0)" class="pull-right"><small>展开[...]</small></a>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">作者简介：</h5>				
						<div class="line_dashed"></div>
						<small>
						<p><?php echo $_smarty_tpl->tpl_vars['book']->value['book_author_intro'];?>
</p>
						</small>
						<a href="javascript:void(0)" class="pull-right">
						<small>展开[...]</small>
						</a>
					</div>
					<div class="span11">
						<h5 class="sidebar_title">本书目录：</h5>				
						<div class="line_dashed"></div>
						<div class="book-menu">
							<?php echo $_smarty_tpl->tpl_vars['book']->value['book_catalog'];?>

						</div>
						<p class="book-open">......
						<a class="pull-right" href="javascript:void(0)"><small>展开[...]</small></a>
						</p>
						<br>
						<a class="book-close pull-right" href="javascript:void(0)"><small>收起^</small></a>
					</div>
				</div>
			</div>	

			<script>
				$('#rateit').bind('rated reset', function (e) {
					var ri = $(this);
					var value = ri.rateit('value');
					var productID = ri.data('productid');
					ri.rateit('readonly', true);
					$.ajax({
						url: '<?php echo @constant('DOMAIN');?>
/book/rate', //your server side script
						data: { id: productID, value: value }, //our data
						type: 'POST',
						success: function (data) {
							//$('#response').append('<li>' + data + '</li>');
			 
						},
						error: function (jxhr, msg, err) {
							//$('#response').append('<li style="color:red">' + msg + '</li>');
						}
					});
				});
				$(".book-open").click(function(){
					$(this).css('display','none')
					$(".book-menu").css('height','auto')
					$(".book-close").css('display','block')
				});
				$(".book-close").click(function(){
					$(this).css('display','none')
					$(".book-menu").css('height','300px')
					$(".book-open").css('display','block')
				});
			</script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
			<?php }} ?>