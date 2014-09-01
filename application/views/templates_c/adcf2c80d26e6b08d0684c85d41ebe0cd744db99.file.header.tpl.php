<?php /* Smarty version Smarty-3.1.13, created on 2013-06-05 18:20:25
         compiled from "/var/www/ibixiong/application/views/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115255195651840383500834-56579951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adcf2c80d26e6b08d0684c85d41ebe0cd744db99' => 
    array (
      0 => '/var/www/ibixiong/application/views/public/header.tpl',
      1 => 1370427624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115255195651840383500834-56579951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518403838c9165_13693490',
  'variables' => 
  array (
    'title' => 0,
    'weibolike' => 0,
    'post' => 0,
    'post_modified' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518403838c9165_13693490')) {function content_518403838c9165_13693490($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:wb="http://open.weibo.com/wb">
	<head>
		<meta charset="utf-8" />
		<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
		<?php if (isset($_smarty_tpl->tpl_vars['weibolike']->value)&&$_smarty_tpl->tpl_vars['weibolike']->value>0){?>
			<!--必填-->
				<meta property="og:type" content="article" />
				<meta property="og:url" content="http://<?php echo @constant('DOMAIN');?>
/content/view/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
				<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
				<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>
" />
				<!--选填-->
				<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
" />
				<meta name="weibo: article:create_at" content="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
" />
				<meta name="weibo: article:update_at" content="<?php echo $_smarty_tpl->tpl_vars['post_modified']->value;?>
" />
		<?php }?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="<?php echo @constant('DOMAIN');?>
/ibixiong.ico"  type="image/x-icon" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/css/bootstrap-responsive.min.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/css/jquery.ias.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo @constant('DOMAIN');?>
/assets/css/main.css"/>
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
			.banner {
				background: none repeat scroll 0 0 #5B4D3D;
				box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
				color: rgba(255, 255, 255, 0.6);
				font-size: 18px;
				line-height: 24px;
				overflow: auto;
				position: relative;
				text-align: center;
				text-shadow: 0 0 1px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.3);
				width: 100%;
			}

			.banner h1, .banner h2 {
				color: #FFFFFF;
				font-size: 25px;
				line-height: 0px;
				text-align:left;
			}
			.banner ul li {
				height: 300px;
			}
			.banner .inner {
				padding-bottom: 50px;
				padding-left: 10%;
				padding-top: 220px;
			}
			.banner p {
				font-size: 15px;
				width: 80%;
				text-align:left;
			}

			.banner .dots {
				bottom: 250px;
				left: 0;
				position: absolute;
				right: 0;
			}
			.banner .dots li {
				border: 2px solid #FFFFFF;
				border-radius: 50% 50% 50% 50%;
				cursor: pointer;
				display: inline-block;
				height: 7px;
				margin: 0 4px;
				opacity: 0.4;
				text-indent: -999em;
				transition: background 0.5s ease 0s, opacity 0.5s ease 0s;
				width: 7px;
			}
			.banner .dots li.active {
				background: none repeat scroll 0 0 #FFFFFF;
				opacity: 1;
			}
		</style>
		<!--[if lt IE 9]>
			<script src="<?php echo @constant('DOMAIN');?>
/assets/js/html5shiv.js"></script>
		<![endif]-->
		
		
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=1507085133" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-migrate-1.1.1.js"></script>
		
		

<?php }} ?>