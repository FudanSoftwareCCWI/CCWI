<?php
	header("content-type:text/html; charset=UTF-8");
	//现在只用一套密码
	$ACCOUNT = "adminCSDX";
	$KEY = "2014chushidaxue";
	$name = $_POST["act_name"];
	$pwd = $_POST["act_pwd"];
	if($name==$ACCOUNT && $pwd==$KEY){
		session_start();
		$_SESSION["views"]= $name;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/contents.css">
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/course.js"></script>
<script type="text/javascript" src="/js/top_nav.js"></script>
<script type="text/javascript" src="/src/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/src/ckfinder/ckfinder.js"></script>
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
						<li><a class="text" href="/admin">登出</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content">
				<?php		
					session_start();
					if(strcmp($_SESSION["views"],$ACCOUNT)==0){
				?>
				<div class="block">
					<div class="item">
						<div class="item_content" id="side_left">
							<div class="sidebar-row1">
								<div class="sidebar-title nrbg" id="1-0">下载文件</div>
							</div>
							<div class="sidebar-row1">
								<div class="sidebar-title nrbg" id="2-0">发布活动</div>
							</div>
						</div>
					</div>
					<div class="item-col2">
						<div class="item_content showpart" id="content-1-0">
							<div class="content-row">
								<h3>报名情况</h3>
								<p><a href="../user/download_file.php?file=join">下载【加入我们】报名情况</a></p>
								<h3>捐款情况</h3>
								<p><a href="../user/download_file.php?file=apply">下载【奉献爱心】捐款情况</a></p>
							</div>
						</div>
						<div class="item_content showpart" id="content-2-0">
							<div class="content-row">
								<form action="/upload_public.php" method="post">
									<h3>活动详情</h3>
									<div class="line must"><span>活动标题*</span><input type="text" name="title"><span class="error hltxt"></span></div>
									<div class="line must"><span>举办日期*</span><input type="text" name="time" id="datepicker" placeholder="YYYY-MM-DD"><span class="error hltxt"></span></div>
									<script>
							  			$(function(){
							  				$("#datepicker").datepicker();
							    			$("#datepicker").datepicker("option","dateFormat","yy-mm-dd");
							  			});
							  		</script>
									<p>
										<textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
										<script type="text/javascript">
											// This is a check for the CKEditor class. If not defined, the paths must be checked.
											if ( typeof CKEDITOR == 'undefined' ){
												document.write(
													'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
													'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
													'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
													'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
													'value (line 32).' ) ;
											}else{
												var editor = CKEDITOR.replace( 'editor1' );
												editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
												// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
												// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
												CKFinder.setupCKEditor( editor, '/src/ckfinder' ) ;
												// It is also possible to pass an object with selected CKFinder properties as a second argument.
												// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
						 					}
										</script>
									</p>
									<div class="line"><input type="submit" value="提交" id="panel_enroll"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php
					}else{
						echo "用户名与密码不匹配，如果你喜欢探索，欢迎<a href='/join/'>加入我们</a>";
					}
				?>
			</div>
		</div>
		<div class="footer" id="icp">
			<span>©2014 Software Engineering</span>
		</div>
	</div>
</body>
</html>