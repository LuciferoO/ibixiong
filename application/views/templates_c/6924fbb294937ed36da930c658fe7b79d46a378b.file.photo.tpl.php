<?php /* Smarty version Smarty-3.1.13, created on 2013-05-15 23:14:17
         compiled from "/var/www/ibixiong/application/views/user/photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1921515188518403b38f7eb6-90450261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6924fbb294937ed36da930c658fe7b79d46a378b' => 
    array (
      0 => '/var/www/ibixiong/application/views/user/photo.tpl',
      1 => 1368630855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921515188518403b38f7eb6-90450261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518403b39af6f1_56022585',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518403b39af6f1_56022585')) {function content_518403b39af6f1_56022585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
			function thisMovie(movieName)
			{
				if (window.document[movieName])
				{  
					return window.document[movieName];  
				}
				else if (navigator.appName.indexOf("Microsoft")==-1)
				{  
					if (document.embeds && document.embeds[movieName])  
					return document.embeds[movieName];  
				}
				else
				{  
					return document.getElementById(movieName);  
				}
			}
				
			function callJS()
			{
				window.location.reload();
			}

			function setUploadURL()
			{
				//上传头像的url，给as3使用的
				var upload_url = "<?php echo @constant('DOMAIN');?>
/user_photo/upload";
				return upload_url;
			}
		</script>
		<script type="text/javascript" src="<?php echo @constant('DOMAIN');?>
/assets/swf/swfobject.js"></script>
        <script type="text/javascript">
            // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
            var swfVersionStr = "11.1.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string. 
            var xiSwfUrlStr = "<?php echo @constant('DOMAIN');?>
/assets/swf/playerProductInstall.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "true";
            var attributes = {};
            attributes.id = "takephoto";
            attributes.name = "takephoto";
            attributes.align = "middle";
            swfobject.embedSWF(
                "<?php echo @constant('DOMAIN');?>
/assets/swf/takephoto.swf", "flashContent", 
                "580", "560", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/headnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/user_leftbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div class="span7 content">
	
					<div id="flashContent">
						<p>
							To view this page ensure that Adobe Flash Player version 
							11.1.0 or greater is installed. 
						</p>
						<script type="text/javascript"> 
							var pageHost = ((document.location.protocol == "https:") ? "https://" : "http://"); 
							document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
											+ pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
						</script> 
					</div>
					
					<noscript>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="580" height="560" id="takephoto">
							<param name="movie" value="<?php echo @constant('DOMAIN');?>
/assets/swf/takephoto.swf" />
							<param name="quality" value="high" />
							<param name="bgcolor" value="#ffffff" />
							<param name="allowScriptAccess" value="sameDomain" />
							<param name="allowFullScreen" value="true" />
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="<?php echo @constant('DOMAIN');?>
/assets/swf/takephoto.swf" width="580" height="560">
								<param name="quality" value="high" />
								<param name="bgcolor" value="#ffffff" />
								<param name="allowScriptAccess" value="sameDomain" />
								<param name="allowFullScreen" value="true" />
							<!--<![endif]-->
							<!--[if gte IE 6]>-->
								<p> 
									Either scripts and active content are not permitted to run or Adobe Flash Player version
									11.1.0 or greater is not installed.
								</p>
							<!--<![endif]-->
								<a href="http://www.adobe.com/go/getflashplayer">
									<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
								</a>
							<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>
					</noscript>     
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/user_rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>