<?php
	header("content-type:text/html; charset=UTF-8");
	$name = $_POST["act_name"];
	$pwd = $_POST["act_pwd"];
	//echo $name;
	//echo $pwd;
	//现在只用一套密码
	$ACCOUNT = "adminCSDX";
	$KEY = "2014chushidaxue";
	
	if($name==$ACCOUNT && $pwd==$KEY){
		session_start();
		$_SESSION['views']= $name;
		echo "session".$_SESSION['views'];
		
		echo "<p>成功登陆</p>";
		echo "<a href='/download_file.php?file=join'>下载【加入我们】报名情况</a><br />";
		echo "<a href='/download_file.php?file=apply'>下载【课程】报名情况</a><br />";
		echo "<form action='/download_file.php?file=resume' method='post'>";
		echo "下载简历:<input type='text' name='name'>";
		echo "<input type='submit' value='下载'>";
		echo "</form>";
		
	}else{
		echo "用户名与密码不匹配，如果你喜欢探索，欢迎<a href='/join/'>加入我们</a>";
	}
?>