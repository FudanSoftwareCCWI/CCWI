<?php
	header("content-type:text/html; charset=UTF-8");
	//session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/login.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" language="javascript" type="text/javascript"
	src="../js/jquery-1.10.2.min.js" defer="defer"></script>
<script charset="utf-8" language="javascript" type="text/javascript"
	src="../js/login.js" defer="defer"></script>
<title>登陆系统</title>

</head>
<body>
	<!--主体部分-->
	<div class="main">
		<!--登录-->
		<h1 class="title">管理员登陆</h1>
		<div class="login">
			<form method="post" id="loginForm" class="login-form" action="/admin/admin.php">
				<span class="text">账户：</span>
				<dl class="login_input" id="account">
					<input type="text" id="account_name" name="act_name">
				</dl>
				<span class="text">密码：</span>
				<dl class="login_input" id="key">
					<input type="password" id="account_key" name="act_pwd">
				</dl>
				<dl class="submit">
					<input type="submit" id="submit_btn" value="登&nbsp;录" />
				</dl>
			</form>
		</div>
	</div>
	<!--版权声明-->
	<div class="footer" id="icp">
		<span> © 2013
			SidneyFan, all rights reserved </span>
	</div>
</body>
</html>