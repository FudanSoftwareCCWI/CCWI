<?php
	header("content-type:text/html; charset=UTF-8");
	session_start();
	$type = 1;
	$session = $_SESSION['views'];
	if($session == "adminCSDX"){
		$action = $_GET["action"];
		if($action=="join"){
			$type = 1;
		}else if($action=="enroll"){
			$type = 2;
		}else{
			//echo "<script>location.href='/';</script>";
		}
	}else{
		//echo "<script>location.href='/';</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>报名情况</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/contents.css">
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/course.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="/"><div id="logo" class="header_l_nav">
							<img src="../img/friendship_black.png">
							<div class="title">初识大学</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/">首页</a></li>
						<li><a class="text" href="/course/">课程设置</a></li>
						<li><a class="text" href="/public/">近期活动</a></li>
						<li><a class="text" href="/team/">授课团队</a></li>
						<li><a class="text" href="/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="block">
					<div class="item">
						<div class="item_content">
							<?php
								if($type==1){
								$xmlfile = '../classinfo/join.xml';
								$person = simplexml_load_file($xmlfile);
								echo $person->getName();
								echo
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer" id="icp">
				<span> © 2014 SidneyFan,
					all rights reserved </span>
			</div>
		</div>
	</div>
</body>
</html>