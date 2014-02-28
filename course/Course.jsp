<%@ page language="java" contentType="text/html; charset=GB18030"
	pageEncoding="GB18030"%>
<%@ page import="javax.xml.parsers.*"%>
<%@ page import="org.w3c.dom.*"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
	String opstr = "";
	String showpart = "";
	try {
		int op = Integer.parseInt(request.getParameter("op"));
		if (op < 0 || op > 40) {// 根据科目需要更改
			op = -1;//invalid number
		} else {
			opstr = String.format("#%d-%d", op / 10, op % 10);
			showpart = String
					.format("#content-%d-%d", op / 10, op % 10);
		}
	} catch (NumberFormatException ne) {
		//request's op is invalid
	}
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB18030">
<title>课程设置</title>
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
					<a class="text" href="/CollegeAdvisor/"><div id="logo" class="header_l_nav">
							<img src="../img/friendship_black.png">
							<div class="title">初识大学</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="/CollegeAdvisor/">首页</a></li>
						<li><a class="text hltxt" href="/CollegeAdvisor/course/">课程设置</a></li>
						<li><a class="text" href="/CollegeAdvisor/public/">公益讲堂</a></li>
						<li><a class="text" href="/CollegeAdvisor/team/">授课团队</a></li>
						<li><a class="text" href="/CollegeAdvisor/join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="hide" id="initop"><%=opstr%></div>
				<div class="hide" id="initshow"><%=showpart%></div>
				<%
					DocumentBuilderFactory factory = DocumentBuilderFactory
							.newInstance();
					DocumentBuilder builder = factory.newDocumentBuilder();
					Document doc = builder
							.parse("/Users/apple/Documents/workspace/CollegeAdvisor/classinfo/courses.xml");
					doc.normalize();
					NodeList courses = doc.getElementsByTagName("category");
					System.out.println("read xml");
				%>
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<%
								for (int i = 0; i < courses.getLength(); i++) {
									Element category = (Element) courses.item(i); //category info
									String cat_name = category
											.getElementsByTagName("category_name").item(0)
											.getFirstChild().getNodeValue();
									NodeList car_courses = category
											.getElementsByTagName("course_name");
							%>
							<div class="sidebar-row1" id="<%=i + 1%>-0">
								<div class="sidebar-title nrbg"><%=cat_name%></div>
								<ul class="sidebar-content">
									<%
										for (int j = 0; j < car_courses.getLength(); j++) {
												String li = String.format(
														"<li class='default-li' id='%d-%d'>%s</li>", i + 1,
														j + 1, car_courses.item(j).getFirstChild()
																.getNodeValue());
												out.println(li);
											}
									%>
								</ul>
							</div>
							<%
								}
							%>
						</div>
					</div>
					<div class="item-col2">
					<div class='item_content showpart' id='content-0-0'>
							<h3>课程设置简介</h3>
							<p>Step1</p>
							<p>Step2</p>
							<p>Step3</p>
						</div>
						<%
							for (int i = 0; i < courses.getLength(); i++) { // 3 category
								Element category = (Element) courses.item(i); //category info
								// 首先打印category的showpart
								Element cat_infos = (Element) (category
										.getElementsByTagName("category_info").item(0));
								NodeList category_ps = cat_infos
										.getElementsByTagName("category_p");
								out.println("<div class='item_content showpart' id='content-"
										+ (i + 1) + "-0'>");
								out.println("<div class='content-row'>");
								for (int j = 0; j < category_ps.getLength(); j++) {
									Element p = (Element) category_ps.item(j);//<category_p><head></head><list><li></li></list><paragraph></paragraph></category_p>
									try {
										out.println("<h3>"
												+ p.getElementsByTagName("head").item(0)
														.getFirstChild().getNodeValue()
												+ "</h3>");
									} catch (NullPointerException ne) {
										//介绍里面没有head
										//ne.printStackTrace();
									}
									try {
										out.println("<p>"
												+ p.getElementsByTagName("paragraph").item(0)
														.getFirstChild().getNodeValue()
												+ "</p>");
									} catch (NullPointerException ne) {
										//介绍里面没有paragraph
										//ne.printStackTrace();
									}
									try {
										NodeList lis = ((Element) (p
												.getElementsByTagName("list").item(0)))
												.getElementsByTagName("li");
										out.println("<ul>");
										for (int k = 0; k < lis.getLength(); k++) {
											Element li = (Element) lis.item(k);
											out.print("<li>"
													+ li.getFirstChild().getNodeValue()
													+ "</li>");
										}
										out.println("</ul>");
									} catch (NullPointerException ne) {
										//介绍里面没有list
										//ne.printStackTrace();
									}
								}
								out.println("</div></div>");
								// 再打印course的showpart
								NodeList car_courses = category.getElementsByTagName("course");
								for (int j = 0; j < car_courses.getLength(); j++) {
									out.println("<div class='item_content showpart' id='content-"
											+ (i + 1) + "-" + (j + 1) + "'>");
									out.println("<div class='content-row'>");
									Element course = (Element) car_courses.item(j);//<course><course_name></course_name><course_info><course_p><head></head><paragraph></paragraph><list><li></li></list></course_p></course_info></course>
									Element course_info = (Element)course.getElementsByTagName("course_info").item(0);
									NodeList course_ps = course_info
											.getElementsByTagName("course_p");
									for(int p = 0;p<course_ps.getLength();p++){
										Element c = (Element)course_ps.item(p);
										try {
											out.println("<h3>"
													+ c.getElementsByTagName("head").item(0)
															.getFirstChild().getNodeValue()
													+ "</h3>");
										} catch (NullPointerException ne) {
											//介绍里面没有course_name
											//ne.printStackTrace();
										}
										try {
											NodeList lis = ((Element) (c
													.getElementsByTagName("list").item(0)))
													.getElementsByTagName("li");
											out.println("<ul>");
											for (int k = 0; k < lis.getLength(); k++) {
												Element li = (Element) lis.item(k);
												out.print("<li>"
														+ li.getFirstChild().getNodeValue()
														+ "</li>");
											}
											out.println("</ul>");
										} catch (NullPointerException ne) {
											//介绍里面没有list
											//ne.printStackTrace();
										}
										try {
											out.println("<p>"
													+ c.getElementsByTagName("paragraph").item(0)
															.getFirstChild().getNodeValue()
													+ "</p>");
										} catch (NullPointerException ne) {
											//介绍里面没有paragraph
											//ne.printStackTrace();
										}
									}
									
									out.println("</div></div>");
								}
							}
						%>
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