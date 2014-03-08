<?php
	header("content-type:text/html; charset=UTF-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>新发布活动</title>
	<link type="text/css" rel="stylesheet" href="../src/ckeditor/contents.css?t=E1PE">
</head>
<body class="cke_contents_ltr" >
	<?php
		$title=$_POST['title'];
		$time=$_POST['time'];
		$content=$_POST['editor1'];
		$filePath='../upload/public/'.$time.'__'.$title.'.html';
		$handle = fopen($filePath, "w");
		fwrite($handle,$content);
		fclose($handle);
	?>
	<h1><?php echo $title?></h1>
	<h6><?php echo $time?></h6>
	<?php echo $content?>
	<a href='../admin/admin.php'>返回</a>
</body>
</html>
