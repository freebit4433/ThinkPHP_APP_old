<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP Comment</title>
	<link rel="stylesheet" type="text/css" href="/thinkphp/1/Public/Home/css/comment.css" />
	<script type="text/javascript" src="js/jQuery-v1.11.3.js"></script>
	<script type="text/javascript" src="js/json2.js"></script>
	<script type="text/javascript" src="js/comment.js"></script>
</head>
<body>
	<div id="wrapper">
		<form method='post' action='<?php echo U("Index/test");?>'>
		<div id="header">
			用户名：<input type="text" id="userName" name="username" />
			<br />
			图像：
			<br />
			<img src="/thinkphp/1/Public/Home/img/1.jpg" alt="">
			<img src="/thinkphp/1/Public/Home/img/2.jpg" alt="">
			<img src="/thinkphp/1/Public/Home/img/3.jpg" alt="">
			<img src="/thinkphp/1/Public/Home/img/4.jpg" alt="">
			<img src="/thinkphp/1/Public/Home/img/5.jpg" alt="">
			<br />
			<input class="radio" type="radio" checked="checked" name="imgnum" value="1" />
			<input class="radio" type="radio" name="imgnum" value="2" />
			<input class="radio" type="radio" name="imgnum" value="3" />
			<input class="radio" type="radio" name="imgnum" value="4" />
			<input class="radio" type="radio" name="imgnum" value="5" />
			<script type="text/javascript">
				var a = $("input[name='image']:checked").attr('val');
				//alert(a);
			</script>
			<br />
			个人主页：<input type="text" name="webpage" id="persionalPageAddress" />
			<br>
			电话号码：<input type="text" name="telnum" id="telephoneNum" />
		</div>
		<div id="comment">
			<hr />
			<p>最近留言</p>
			<textarea id="commentContent" name="commcon" wrap="soft" maxlength=100></textarea>
			<br />
			<!-- <a id="submit" href="#">提 交</a> -->
			<input type="submit" id="submit" value="提 交">
		</div>
		</form>
		<!-- <div id="content">
			<div id="c1" class="cX">
				<img class="img" id="c1Img" src="/thinkphp/1/Public/Home/img/1.jpg" />
				<a class="userName" id="c1UserName" href="">米卡</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="date" id="c1Date">2015-11-16 21:22:29</span>
				<p clasa="text" id="c1Text">这是评论</p>
				<a class="delete" id="c1Delete" href="">删除</a>
			</div>
		</div> -->
	</div>
</body>
</html>