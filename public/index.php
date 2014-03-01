<?php
header("content-type:text/html; charset=UTF-8");
//$BASELINK = "/Library/WebServer/Documents";
$BASELINK ="..";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>分享活动</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/contents.css">
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/public.js"></script>
<script type="text/javascript" src="/js/top_nav.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="/"><div id="logo" class="header_l_nav">
							<img src="/img/logo.png">
							<div class="title">C.C.W.I.</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/">首页</a></li>
						<!-- <li><a class="text" href="/course/">课程设置</a></li> -->
						<li><a class="text hltxt" href="/public/">分享活动</a></li>
						<li><a class="text" href="/team/">奉献爱心</a></li>
						<li><a class="text" href="/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<?php
					$xmlfile = $BASELINK.'/classinfo/activity.xml';
					$activities = simplexml_load_file($xmlfile);
					//echo "activity".$activities->getName();
				?>
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<div class="sidebar-row1">
								<div class="sidebar-title nrbg">活动列表</div>
								<ul class="sidebar-content">
								<?php
									$activity = $activities->children();
									for($i = 0;$i < count($activity);$i++){
										$act = $activity[$i]->children();
										$act = $act[0];
										$act = $act->children();
										$act = $act[1];
										printf("<li class='default-li' id='1-%d'>%s</li>",$i+1,$act);
									}
								?>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<?php
						$activity = $activities->children();
						for($i = 0;$i < count($activity);$i++){
							$act = $activity[$i];
							$act_p = $act->children();
							printf("<div class='item_content showpart activity' id='content-1-".($i + 1)."'>");
							printf("<div class='content-row'>");
							printf("<h3>活动简介</h3>");
							for($j=0; $j < count($act_p);$j++){
								$p = $act_p[$j];
								$p_children = $p->children();
								printf("<div class='activity_line'>");
								foreach($p->children() as $line){
									if($line->getName()=="renren"){
										printf("<p>%s：<a href='http://www.renren.com/250130313' target='_blank'>@人人主页</a></p>",$line);
									}else
									printf("<%s>%s</%s>",$line->getName(),$line,$line->getName());
								}
								printf("</div>");
							}
							printf("<a class='text' href='/apply.php?type=public-1-%d'><div class='enrollin hlbg'>报&nbsp;名</div></a>",($i + 1));
							printf("</div></div>");
						}
					?>
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
		<div class="footer_wrapper">
			<div class="footer" id="icp">
				  <span>©2014 Software Engineering</span>
			</div>
		</div>
	</div>
</body>
</html>