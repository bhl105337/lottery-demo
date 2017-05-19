<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- End of Meta -->
		
		<!-- Page title -->
	<title>我的后台 - 登陆</title>
		<!-- End of Page title -->
		
		<!-- Libraries -->
		<link type="text/css" href="/lcvip/Public/admincss/css/login.css" rel="stylesheet" />	
		<link type="text/css" href="/lcvip/Public/admincss/css/smoothness/jquery-ui-1.7.2.custom.html" rel="stylesheet" />	
		
		<script type="text/javascript" src="/lcvip/Public/admincss/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="/lcvip/Public/admincss/_js/easyTooltip.js"></script>
		<script type="text/javascript" src="/lcvip/Public/admincss/js/jquery-ui-1.7.2.custom.min.js"></script>
		<!-- End of Libraries -->	
	</head>
	<body>
	<div id="container">
		<div class="logo">
			<a href="#记得改这里"><img src="/lcvip/Public/admincss/assets/logo.png" alt="" /></a>
		</div>
		<div id="box">
			<form action="index.html" method="POST">
			<p class="main">
				<label>用户名: </label>
				<input type="text" name="username" value="username" /> 
				<label>密码: </label>
				<input type="password" name="password" value="asdf1234">	
			</p>

			<p class="space">
				<span><input type="checkbox" />记住我</span>
				<input type="submit" value="登陆" class="login" />
			</p>
			</form>
		</div>
	</div>

	</body>
</html>