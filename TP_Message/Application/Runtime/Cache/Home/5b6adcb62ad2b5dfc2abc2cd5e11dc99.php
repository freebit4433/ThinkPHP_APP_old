<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login page</title>
	<link rel="stylesheet" href="/ThinkPHP_APP/TP_Message/Public/Home/css/login.css">
	<link rel="stylesheet" href="/ThinkPHP_APP/TP_Message/Public/Home/easyui/themes/default/easyui.css" />
	<script type="text/javascript" src="/ThinkPHP_APP/TP_Message/Public/Home/easyui/jquery.min.js"></script>
	<script type="text/javascript" src="/ThinkPHP_APP/TP_Message/Public/Home/easyui/jquery.easyui.min.js"></script>
</head>
<body>
	<!-- <h1><?php echo ((isset($str) && ($str !== ""))?($str):'NONE'); ?></h1> -->
	<div id="loginWrapper">
		<div id="loginPanel" class="easyui-panel" title="login">
			<form action="<?php echo U('Login/submit');?>" method="POST">
			<div class="inputBorder">
				<label class="inputLabel" for="userName"><img src="/ThinkPHP_APP/TP_Message/Public/Home/img/icons/0.png"></label>
				<input type="text" id="userName" name="username" class="textInput" placeholder="用户名" autofocus="autofocus">
			</div>
			<div class="inputBorder">
				<label class="inputLabel" for="password"><img src="/ThinkPHP_APP/TP_Message/Public/Home/img/icons/1.png"></label>
				<input type="password" id="password" name="password" class="textInput" placeholder="密码">
			</div>
			<div id="verifyCode" style="margin-left:50px; margin-bottom:20px;">
				请输入验证码：<br/><input type="text" id="vcode" name="vcode" placeholder="验证码" disabled="disabled"/>
				<!--<img id="vcodeimg" src="php/vcode.php"> -->
			</div>
			<div id="loginButton">
				<!-- <a id="login" style="cursor:pointer">登&nbsp;&nbsp;&nbsp;&nbsp;录</a> -->
				<input id="login" type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录">
			</div>
			<a id="register" href="<?php echo U('Login/registerClick');?>">立即注册</a>
			</form>
		</div>
	</div>



</body>
</html>