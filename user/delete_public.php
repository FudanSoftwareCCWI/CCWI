<?php
	$title=$_POST['title'];
	$file='../upload/public/'.$title.'.html';
	if (!unlink($file)){
  		echo ("失败");
  	}else{
  		echo ("成功");
  	}

