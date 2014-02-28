<%@ page language="java" contentType="text/html; charset=GB18030"
	pageEncoding="GB18030"%>
<%@ page import="org.w3c.dom.*"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
	String opstr = "";
	String showpart = "";
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB18030">
<title>授课团队</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/contents.css">
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/team.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="/CollegeAdvisor/"><div id="logo" class="header_l_nav">
							<img src="../img/friendship_black.png">
							<div class="title">初识大学</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/CollegeAdvisor/">首页</a></li>
						<li><a class="text" href="/CollegeAdvisor/course/">课程设置</a></li>
						<li><a class="text" href="/CollegeAdvisor/public/">公益讲堂</a></li>
						<li><a class="text hltxt" href="/CollegeAdvisor/team/">授课团队</a></li>
						<li><a class="text" href="/CollegeAdvisor/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<%
					//System.out.println("read xml");
				%>
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<div class="sidebar-row1" id="1-0">
								<div class="sidebar-title nrbg">授课团队</div>
								<ul class="sidebar-content">
									<li id="1-1">复旦大学</li>
									<li id="1-2">上海交通大学</li>
									<li id="1-3">清华大学</li>
									<li id="1-4">北京大学</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<div class='item_content showpart' id='content-1-0'>
							<h3>授课团队</h3>
							<p>简介</p>
						</div>
						<div class='item_content showpart' id='content-1-1'>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-2'>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-3'>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-4'>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
							<div class='teacher'>
								<h3>讲师</h3>
								<p>资料介绍</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer">
				<a href="">版权声明</a><span>|</span> <a href="">联系我们</a><span>|</span>
				<a href="">意见反馈</a> <br /> <span id="icp"> © 2014 SidneyFan,
					all rights reserved </span>
			</div>
		</div>
	</div>
</body>
</html>