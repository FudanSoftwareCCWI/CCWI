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
<title>�ڿ��Ŷ�</title>
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
							<div class="title">��ʶ��ѧ</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/CollegeAdvisor/">��ҳ</a></li>
						<li><a class="text" href="/CollegeAdvisor/course/">�γ�����</a></li>
						<li><a class="text" href="/CollegeAdvisor/public/">���潲��</a></li>
						<li><a class="text hltxt" href="/CollegeAdvisor/team/">�ڿ��Ŷ�</a></li>
						<li><a class="text" href="/CollegeAdvisor/join/">��������</a></li>
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
								<div class="sidebar-title nrbg">�ڿ��Ŷ�</div>
								<ul class="sidebar-content">
									<li id="1-1">������ѧ</li>
									<li id="1-2">�Ϻ���ͨ��ѧ</li>
									<li id="1-3">�廪��ѧ</li>
									<li id="1-4">������ѧ</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<div class='item_content showpart' id='content-1-0'>
							<h3>�ڿ��Ŷ�</h3>
							<p>���</p>
						</div>
						<div class='item_content showpart' id='content-1-1'>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-2'>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-3'>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
						</div>
						<div class='item_content showpart' id='content-1-4'>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
							<div class='teacher'>
								<h3>��ʦ</h3>
								<p>���Ͻ���</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer">
				<a href="">��Ȩ����</a><span>|</span> <a href="">��ϵ����</a><span>|</span>
				<a href="">�������</a> <br /> <span id="icp"> �0�8 2014 SidneyFan,
					all rights reserved </span>
			</div>
		</div>
	</div>
</body>
</html>