{{include file="../public/header.tpl"}}
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
				var upload_url = "{{$smarty.const.DOMAIN}}/user_photo/upload";
				return upload_url;
			}
		</script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/swf/swfobject.js"></script>
        <script type="text/javascript">
            // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
            var swfVersionStr = "11.1.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string. 
            var xiSwfUrlStr = "{{$smarty.const.DOMAIN}}/assets/swf/playerProductInstall.swf";
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
                "{{$smarty.const.DOMAIN}}/assets/swf/takephoto.swf", "flashContent", 
                "580", "560", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
{{include file="../public/headnavbar.tpl"}}
{{include file="../public/user_leftbar.tpl"}}
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
							<param name="movie" value="{{$smarty.const.DOMAIN}}/assets/swf/takephoto.swf" />
							<param name="quality" value="high" />
							<param name="bgcolor" value="#ffffff" />
							<param name="allowScriptAccess" value="sameDomain" />
							<param name="allowFullScreen" value="true" />
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="{{$smarty.const.DOMAIN}}/assets/swf/takephoto.swf" width="580" height="560">
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
{{include file="../public/user_rightbar.tpl"}}
{{include file="../public/footer.tpl"}}	
