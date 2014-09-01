<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:wb="http://open.weibo.com/wb">
	<head>
		<meta charset="utf-8" />
		<title> {{$title}} </title>
		{{if isset($weibolike) and $weibolike > 0}}
			<!--必填-->
				<meta property="og:type" content="article" />
				<meta property="og:url" content="http://{{$smarty.const.DOMAIN}}/content/view/id/{{$post.post_id}}" />
				<meta property="og:title" content="{{$title}}" />
				<meta property="og:description" content="{{$post.post_content}}" />
				<!--选填-->
				<meta property="og:image" content="{{$post.post_img}}" />
				<meta name="weibo: article:create_at" content="{{$post.post_date}}" />
				<meta name="weibo: article:update_at" content="{{$post_modified}}" />
		{{/if}}
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="{{$smarty.const.DOMAIN}}/ibixiong.ico"  type="image/x-icon" />
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap-responsive.min.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/jquery.ias.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="{{$smarty.const.DOMAIN}}/assets/css/main.css"/>
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
			<script src="{{$smarty.const.DOMAIN}}/assets/js/html5shiv.js"></script>
		<![endif]-->
		
		
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=1507085133" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="{{$smarty.const.DOMAIN}}/assets/js/jquery-migrate-1.1.1.js"></script>
		
		

