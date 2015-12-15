<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP Comment</title>
	<link rel="stylesheet" type="text/css" href="/ThinkPHP_APP/TP_Message/Public/Home/css/index.css" />
	<script type="text/javascript" src="/ThinkPHP_APP/TP_Message/Public/Home/js/jQuery-v1.11.3.js"></script>
	<script type="text/javascript" src="/ThinkPHP_APP/TP_Message/Public/Home/js/json2.js"></script>
	<script type="text/javascript" src="/ThinkPHP_APP/TP_Message/Public/Home/js/index.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="comment">
			<hr />
			<p>你好，<span id="username"><?php echo ($username); ?></span><span id="loginUserName"></span><a id="logout" href="<?php echo U('Index/logout');?>">退出登陆</a></p>
			<p>最近留言</p>
			<form method='POST' action="<?php echo U('Index/submit');?>">
				<textarea id="commentContent" name="comment" wrap="soft" maxlength=100></textarea>
				<br />
				<a id="submit">提 交</a>
				<span id="submitURL" style="display:none;"><?php echo U('Index/submit');?></span>
				<span id="refreshURL" style="display:none;"><?php echo U('Index/refresh');?></span>
				<span id="deleteURL" style="display:none;"><?php echo U('Index/delete');?></span>
			</form>
		</div>
		<div id="content">
			<!-- <div id="c1" class="cX">
				<img class="img" id="c1Img" src="/ThinkPHP_APP/TP_Message/Public/Home/img/1.jpg" />
				<a class="userName" id="c1UserName" href="">米卡</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="date" id="c1Date">2015-11-16 21:22:29</span>
				<p clasa="text" id="c1Text">这是评论</p>
				<a class="delete" id="c1Delete" href="">删除</a>
			</div> -->
		</div>
	</div>
</body>
</html>