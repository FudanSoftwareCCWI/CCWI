<?php
header("content-type:text/html; charset=UTF-8");
//$BASELINK = "/Library/WebServer/Documents";
$wwwRoot = "..";
$dir = $wwwRoot.'/upload/public/';
require_once("../app/controllers/Pub.php");
require_once("../app/models/PubModel.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>分享活动</title>
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/contents.css">
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/src/ckeditor/skins/moono/editor.css?t=E1PE">
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/public.js"></script>
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/top_nav.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="<?php echo $wwwRoot?>/"><div id="logo" class="header_l_nav">
							<img src="<?php echo $wwwRoot?>/img/friendship_black.png">
							<div class="title">C.C.W.I.</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="<?php echo $wwwRoot?>/">首页</a></li>
						<!-- <li><a class="text" href="<?php echo $wwwRoot?>/course/">课程设置</a></li> -->
						<li><a class="text hltxt" href="<?php echo $wwwRoot?>/public/">分享活动</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/team/">奉献爱心</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<div class="sidebar-row1">
								<div class="sidebar-title nrbg">活动列表</div>
								<ul class="sidebar-content">
								<?php
									Pub::pub_sidebar($dir);
								?>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<?php
						Pub::pub_content($dir);
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="top_nav">
			<div id="tn_quick">
				 <a href="<?php echo $wwwRoot?>/public/"><div
						class="tn_pagelink" id="public" title="公益讲堂"></div></a> <a
					href="<?php echo $wwwRoot?>/team/"><div class="tn_pagelink" id="team"
						title="授课团队"></div></a> <a href="<?php echo $wwwRoot?>/join/"><div
						class="tn_pagelink" id="join" title="加入我们"></div></a>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer" id="icp">
				  <span>©2014 Software Engineering</span>
			</div>
		</div>
	</div>
</body>
</html>