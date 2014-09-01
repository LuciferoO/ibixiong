<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>  {{$title}}  </title>
	<link type="image/x-icon" href="{{$smarty.const.OSSDOMAIN}}/ibixiong.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$smarty.const.DOMAIN}}/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="{{$smarty.const.DOMAIN}}/assets/css/main.css" rel="stylesheet">
    <link href="{{$smarty.const.DOMAIN}}/assets/css/font-awesome.css" rel="stylesheet">

	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}

	</style>
</head>

<body>
	<div class="container">
	
		<div class="row-fluid">
			<a href="{{$referer}}">
				<img src="{{$smarty.const.OSSDOMAIN}}/404.png">
			</a>
		</div>
		<div class="row-fluid">
			<a class="pull-right" style="margin-top:-200px" href="{{$referer}}">
				<img width="70%" src="{{$smarty.const.OSSDOMAIN}}/404-back.png">
			</a>
		</div>



	</div>

	<script src="{{$smarty.const.DOMAIN}}/assets/js/jquery-1.9.1.js"></script>
    <script src="{{$smarty.const.DOMAIN}}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{$smarty.const.DOMAIN}}/assets/js/sco.modal.js"></script>
    <script src="{{$smarty.const.DOMAIN}}/assets/js/spin.js"></script>
    <script src="{{$smarty.const.DOMAIN}}/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
</body>
	
</html>