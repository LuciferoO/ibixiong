<?php /* Smarty version Smarty-3.1.13, created on 2013-07-17 20:25:11
         compiled from "/var/www/ibixiong/application/views/index/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184088331251e687db91c888-24165534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79bba875efc1fd79f68284149152f6acd052c81c' => 
    array (
      0 => '/var/www/ibixiong/application/views/index/404.tpl',
      1 => 1374063907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184088331251e687db91c888-24165534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e687dc14ae73_81058952',
  'variables' => 
  array (
    'title' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e687dc14ae73_81058952')) {function content_51e687dc14ae73_81058952($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>  <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
  </title>
	<link type="image/x-icon" href="<?php echo @constant('OSSDOMAIN');?>
/ibixiong.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo @constant('DOMAIN');?>
/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo @constant('DOMAIN');?>
/assets/css/font-awesome.css" rel="stylesheet">

	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}

	</style>
</head>

<body>
	<div class="container">
	
		<div class="row-fluid">
			<a href="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">
				<img src="<?php echo @constant('OSSDOMAIN');?>
/404.png">
			</a>
		</div>
		<div class="row-fluid">
			<a class="pull-right" style="margin-top:-200px" href="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">
				<img width="70%" src="<?php echo @constant('OSSDOMAIN');?>
/404-back.png">
			</a>
		</div>



	</div>

	<script src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-1.9.1.js"></script>
    <script src="<?php echo @constant('DOMAIN');?>
/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo @constant('DOMAIN');?>
/assets/js/sco.modal.js"></script>
    <script src="<?php echo @constant('DOMAIN');?>
/assets/js/spin.js"></script>
    <script src="<?php echo @constant('DOMAIN');?>
/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
</body>
	
</html><?php }} ?>