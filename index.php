<?php
header("content-type:text/html; charset=UTF-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>初识大学</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="/js/top_nav.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="/"><div id="logo"
							class="header_l_nav">
							<img src="img/logo.png">
							<div class="title">C.C.W.I.</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/">首页</a></li>
						<!--<li><a class="text" href="/course/">课程设置</a></li> -->
						<li><a class="text" href="/public/">分享活动</a></li>
						<li><a class="text" href="/team/">奉献爱心</a></li>
						<li><a class="text" href="/join/">加入我们</a></li>
					</ul>
				</div>
				<div class="welcome_center">
					<div class="widget-wrap">
						<h1 class="title">收集爱心，收集每一滴水</h1>
						<p class="text">
							全国各地水污染严重,水污染问题被列为急需解决的环境问题之⼀.<br> 深层地下⽔受污染,⾄少需要上千年才能彻底自净.<br>
							⽽山区,已经成为深层地下⽔受污染最直接的受害区。<br> 但⽣活在偏远⼭区的孩子们,<br>喝上健康干净的水却成为奢望。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content">
				<div class="block">
					<div class="item">
						<div class="item_content">
							<img src="./img/BG1.jpg"> <a
								href="/"><div
									class='item_link text'>
									<p><span class="x-large">认识水资源</span><br><br>
									对于水的各方面知识<br>
									你是否了解？<br>
									我们的活动会让你认识水</p>
								</div></a>
						</div>
					</div>
					<div class="item">
						<div class="item_content">
							<img src="./img/BG2.jpg"> <a
								href="/public"><div
									class='item_link text'>
									<p><span class="x-large">深入了解</span><br><br>
									西南、西北、中部，<br>哪些地方有干旱？<br>
									我们的宣传手册会带你一探究竟</p>
								</div></a>
						</div>
					</div>
					<div class="item">
						<div class="item_content" id="aboutUs">
							<img src="./img/BG3.jpg"> <a
								href="/join/">
							<div class='item_link text'>
								<p><span class="x-large">实地考察</span><br><br>
								零距离接触干旱，<br>奉献自己的青春和爱心，<br>走在最前线<br>
								</p>
							</div></a>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="item-col2">
						<div class="item_content">
							<img src="./img/BG4.jpg"> <a href="/team/"><div
									class='item_link text'>
									<p><span class="x-large">志愿团队</span><br><br>
									科学的人员构成，<br>丰富的志愿经历，<br>为了人们更好的未来
									</p>
								</div></a>
						</div>
					</div>
					<div class="item">
						<div class="item_content">
							<img src="./img/BG5.jpg"> <a href="/public/"><div
									class='item_link text'>
									<p><span class="x-large">近期活动</span><br><br>
									公益活动，<br>线上宣讲为你敞开——关注我们，<br>关注未来
									</p>
								</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="top_nav">
			<div id="tn_quick">
				<a href="/course/"><div class="tn_pagelink"
						id="course" title="课程设置"></div></a> <a href="/public/"><div
						class="tn_pagelink" id="public" title="公益讲堂"></div></a> <a
					href="/team/"><div class="tn_pagelink" id="team"
						title="授课团队"></div></a> <a href="/join/"><div
						class="tn_pagelink" id="join" title="加入我们"></div></a>
			</div>
		</div>
		<div id="hide_bg" class="enrollPanel hlbg"></div>
		<div class="hlbg text" id="fade_bg">
		<h3>关于我们</h3>
		</div>
		<div class="footer_wrapper">
			<div class = "footer" id="foot_info">
				<div class="foot_col" id="contact">
					<h3 class="x-large">联系我们</h3>
					<dl>
						<dt class="foot_tn" id="phone"></dt>
						<dd class="foot_text">13585978782</dd>
						<dt class="foot_tn" id="email"></dt>
						<dd class="foot_text">software@gmail.com</dd>
						<dt class="foot_tn" id="renren"></dt>
						<dd class="foot_text"><a href="http://www.renren.com/250130313" target="_blank">官方人人</a></dd>
					</dl>
				</div>
				<div class="foot_col" id="aboutInfo">
					<h3 class="x-large">C.C.W.I.</h3>
					<p>C.C.W.I.是参照美国C.W.I.发起的公益性活动,我们没有能力解决全世界的健康饮水问题,所以致⼒于解决中国国内偏远山区的饮⽤干净⽔问题。</p>
					<p>我们不接受政府资助,因为那会阻碍我们看到事实的真相,所以我们只接受社会捐款,希望您的爱心,能够到达真正需要的地⽅。</p>
				</div>
			</div>
			<div class="footer" id="icp">
				 <span>©2014 Software Engineering</span>
			</div>
		</div>
	</div>
</body>
</html>