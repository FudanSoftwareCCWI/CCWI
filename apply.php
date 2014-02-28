<?php
	header("content-type:text/html; charset=UTF-8");
	$type = $_GET["type"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在线报名</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/contents.css">
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/apply.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="/"><div id="logo" class="header_l_nav">
							<img src="/img/friendship_black.png">
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
					<div class="item-middle">
						<div class="item_content">
							<h3>在线报名</h3>
							<p>
								<?php
									echo "感谢你选择我们";
								?>
							</p>		
						</div>
					</div>
				</div>
				<div class="block">
					<div class="item-middle">
						<div class="item_content">
						<form action="/upload_apply.php" class="join_enroll_form" enctype="multipart/form-data" method="post">
							<p class="hltxt enroll_part">个人信息</p>
							<hr>
							<div class="line must"><span>姓名*</span><input type="text" name="name"><span class="error hltxt"></span></div>
							<div class="line must"><span>性别*</span><label for="male">男</label><input type="radio" name="sex" value="m" id="male" checked="true"><label for="female">女</label><input type="radio" name="sex" id="female" value="f"><span class="error hltxt"></span></div>
							<div class="line must"><span>出生日期*</span><input type="text" name="birthday" id="datepicker" placeholder="DD/MM/YYYY"><span class="error hltxt"></span></div>
							<div class="line must"><span>城市*</span><input type="text" name="city"><span class="error hltxt"></span></div>
							<div class="line must"><span>手机*</span><input type="text" name="mobile" id="id_mobile"><span class="error hltxt"></span></div>
							<div class="line must"><span>邮箱*</span><input type="text" name="email" id="id_email"><span class="error hltxt"></span></div>
							<script>
							  $(function(){
							    $("#datepicker").datepicker();
							  });
							</script>
							<p class="hltxt enroll_part">其他信息</p>
							<hr>
							<div class="line must"><span>年级*</span><input type="text" name="grade"><span class="error hltxt"></span></div>
							<div class="line must"><span>加试科目*</span><input type="text" name="add"><span class="error hltxt"></span></div>				
							<div class="line must"><span>目标专业*</span><input type="text" name="aim"><span class="error hltxt"></span></div>
							<div class="line"><span>微信</span><input type="text" name="weixin"><span class="error hltxt"></span></div>
							<input type="hidden" name="type" value="<?php echo $type?>">
							<div class="line"><input type="submit" value="提交" id="panel_enroll"><p class="text gvtxt">请确认你的简历内容准确，真实有效。我们是一个学生团队，期待真诚的你。</p></div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer" id="icp">
				  <span>©2013 Chushidaxue 沪ICP备14004249号-1</span>
			</div>
		</div>
	</div>
</body>
</html>