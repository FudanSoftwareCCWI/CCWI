<?php
	if($_GET['file']=="resume"){
		$filename = $_POST['name'];
		downloads($filename);
	}else{
		$filename = "../classinfo/".$_GET['file'].".xlsx";    //要下载的文件名	 
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".basename($filename));  
		readfile($filename);
	}
	
	function downloads($name){
		$name = iconv("UTF-8","GB2312", $name);
		$file_dir = "../upload/";	
		
		if (!file_exists($file_dir.$name)){
			header("Content-type: text/html; charset=utf-8");
			echo $file_dir.$name;
			echo "File not found!";
			exit; 
		} else {
			$file = fopen($file_dir.$name,"r"); 
			Header("Content-type: application/octet-stream");
			Header("Accept-Ranges: bytes");
			Header("Accept-Length: ".filesize($file_dir . $name));
			Header("Content-Disposition: attachment; filename=".$name);
			echo fread($file, filesize($file_dir.$name));
			fclose($file);
		}
	}
?>