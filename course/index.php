<?php
	header("content-type:text/html; charset=UTF-8");
	$opstr = $_GET["opstr"];
	//$BASELINK = "/Library/WebServer/Documents";
	$wwwRoot = "..";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>课程设置</title>
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $wwwRoot?>/css/contents.css">
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/course.js"></script>
<script type="text/javascript" src="<?php echo $wwwRoot?>/js/top_nav.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="<?php echo $wwwRoot?>/"><div id="logo" class="header_l_nav">
							<img src="<?php echo $wwwRoot?>/img/friendship_black.png">
							<div class="title">CCWI</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="<?php echo $wwwRoot?>/">首页</a></li>
						<li><a class="text hltxt" href="<?php echo $wwwRoot?>/course/">课程设置</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/public/">分享活动</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/team/">授课团队</a></li>
						<li><a class="text" href="<?php echo $wwwRoot?>/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="hide" id="initop"><?php echo "#".$opstr ?></div>
				<div class="hide" id="initshow"><?php echo "#content-".$opstr ?></div>
				<?php
					$xmlfile = $wwwRoot.'/classinfo/courses.xml';
					$courses = simplexml_load_file($xmlfile);
					echo $courses;
				?>
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<?php
								$categorys = $courses->children();
								for($i = 0;$i < count($categorys);$i++){
									$category = $categorys[$i];
									$title = $category->children();
									$title = $title[0];
							?>
							<div class="sidebar-row1" id="<?php echo $i+1?>-0">
								<div class="sidebar-title nrbg"><?php echo $title ?></div>
								<ul class="sidebar-content">
									<?php
										$course_of_cat = $category->children();
										for($j=2; $j < count($course_of_cat);$j++){
											$course = $course_of_cat[$j];
											printf("<li class='default-li' id='%d-%d'>%s</li>",$i+1,$j-1,$course->children());
										}
									?>
								</ul>
							</div>
							<?php
								}
							?>
						</div>
					</div>
					<div class="item-col2">
					
					<?php
						for($i = 0;$i < count($categorys);$i++){
							$category = $categorys[$i];
							// 首先打印category的showpart
							printf("<div class='item_content showpart' id='content-". ($i + 1) ."-0'>");
							printf("<div class='content-row'>");
							$category_children = $category->children();
							foreach($category_children[1]->children() as $category_p){
								foreach($category_p->children() as $child){
									if(($child->getName()=='ul')==1){
										printf("<ul>");
										foreach($child->children() as $li){
											printf("<li>%s</li>",$li);
										}
										printf("</ul>");
									}else{
										printf("<%s>%s</%s>",$child->getName(),$child,$child->getName());
									}
								}
							}
							if($i==2)
							printf("<div class='enrollin hlbg'><a class='text' href=".$wwwRoot."/apply.php?type=course-%d-0'>报&nbsp;名</a></div>",($i + 1));
							printf("</div></div>");
							//再打印category的course
							$course_of_cat = $category->children();
							for($j=2; $j < count($course_of_cat);$j++){
							printf("<div class='item_content showpart' id='content-". ($i + 1) ."-".($j-1)."'>");
							printf("<div class='content-row'>");							
							$course_of_cat_children=$course_of_cat[$j]->children();
							foreach($course_of_cat_children[1]->children() as $course_p){
								foreach($course_p->children() as $child){
									if(($child->getName()=='ul')==1){
										printf("<ul>");
										foreach($child->children() as $li){
											printf("<li>%s</li>",$li);
										}
										printf("</ul>");
									}else if(($child->getName()=='table')==1){
										printf("<table border='1'>");
										foreach($child->children() as $tr){
											printf("<tr>");
											foreach($tr->children() as $td){
												printf("<%s>%s</%s>",$td->getName(),$td,$td->getName());
											}
											printf("</tr>");
										}
										printf("</table>");
									}else if(($child->getName()=='warn')==1){
										printf("<p class='warn'>%s</p>",$child);
									}else{
										printf("<%s>%s</%s>",$child->getName(),$child,$child->getName());
									}
								}
							}
							printf("<a class='text' href=".$wwwRoot."'/apply.php?type=course-%d-%d'><div class='enrollin hlbg'>报&nbsp;名</div></a>",($i + 1),($j-1));
							printf("</div></div>");
							}
						}
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