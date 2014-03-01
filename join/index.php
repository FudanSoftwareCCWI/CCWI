<?php
header("content-type:text/html; charset=UTF-8");
$wwwRoot = "..";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>加入我们</title>
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/contents.css">
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/join.js"></script>
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
						<li><a class="text" href="<?php echo $wwwRoot?>/public/">分享活动</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/team/">奉献爱心</a></li>
						<li><a class="text hltxt" href="<?php echo $wwwRoot?>/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<div class="sidebar-row1" id="1-0">
								<div class="sidebar-title nrbg">加入我们</div>
							</div>
							<div class="sidebar-row1" id="2-0">
								<div class="sidebar-title nrbg">公益活动组织</div>
							</div>
							<div class="sidebar-row1" id="3-0">
								<div class="sidebar-title nrbg">联系我们</div>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<div class='item_content showpart' id='content-1-0'>
							<h3>公益团队</h3>
							<p>
							如果你想要加入我们的团队，帮助我们<br />
							和我们一起策划活动、前往西部<br />
							请加入我们！<br />
							我们不需要你24小时全身心的投入<br />
							只需要你能在工作、学习之余，献上自己的一份力量<br />
							</p>
							
							<span class="x-large">报名方式：直接将简历发送至ccwi_2014@163.com 或者</span>
							<a href="<?php echo $wwwRoot?>/enroll.php?type=team"  class="hltxt x-large">在线报名</a>
						</div>
						<div class='item_content showpart' id='content-2-0'>
							<h3>公益活动组织</h3>
							<p>
								各类公益组织，如果：<br />
								想要和我们一起举办宣传活动<br />
								或一起组织志愿活动<br />
								或愿意帮助我们<br />	
								或想要参加我们的活动<br />
								我们都竭诚欢迎！<br />
							</p>
							<h4>为了能让爱心传递下去，请联系我们！</h4>
							<span class="x-large">报名方式：联系我们的负责主管18812345678 或者</span>
							<a href="<?php echo $wwwRoot?>/enroll.php?type=orgnization"  class="hltxt x-large">在线报名</a>
						</div>
						<div class='item_content showpart' id='content-3-0'>
							<h3>联系我们</h3>
							<p>C.C.W.I.是参照美国C.W.I.发起的公益性活动,我们没有能力解决全世界的健康饮水问题,所以致⼒于解决中国国内偏远山区的饮⽤干净⽔问题。</p>
							<p>我们不接受政府资助,因为那会阻碍我们看到事实的真相,所以我们只接受社会捐款,希望您的爱心,能够到达真正需要的地⽅。</p>
							<h4>如果您有任何疑问，加入我们的需求或者任何意见反馈欢迎联系</h4>
							<dl>
								<dt class="foot_tn" id="phone"></dt>
								<dd class="foot_text">13585978782</dd>
								<dt class="foot_tn" id="email"></dt>
								<dd class="foot_text">software@gmail.com</dd>
								<dt class="foot_tn" id="renren"></dt>
								<dd class="foot_text"><a href="http://www.renren.com/250130313" target="_blank">官方人人</a></dd>
							</dl>
						</div>
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