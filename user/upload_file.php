<?php
header("content-type:text/html; charset=UTF-8");
require_once('../src/PHPExcel.php');
$file_error_code = $_FILES["file"]["error"];

$error = 0;
$file_error = 0;

$name = $_POST["name"];
$sex = $_POST["sex"];
$birthday = $_POST["birthday"];
$city = $_POST["city"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$diploma = $_POST["diploma"];
$school = $_POST["school"];
$experience = $_POST["experience"];
$extra = $_POST["extra"];
$type = $_POST["type"];
$file_path="";
$file_path_utf8="";
/*
echo $name;
echo $sex;
echo $birthday;
echo $city;
echo $mobile;
echo $email;
echo $diploma;
echo $school;
*/
if($name==""||$sex==""||$birthday==""||$city==""||$mobile==""||$email==""||$diploma==""||$school==""){
	$error = 1;//表单有错误
}
//echo "error".$error;

if(!preg_match("/^[0-1]?[0-9]{1}\/[0-1]?[0-9]{1}\/[0-9]{4}$/",$birthday)
	|| !preg_match("/^[0-9]*$/",$mobile) || strlen($mobile) !=11
	|| !preg_match("/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/",$email)){
	$error = 1;//表单有错误
}
//echo "error".$error;
if(!preg_match("/^((?!<).)*$/", $name)
||!preg_match("/^((?!<).)*$/", $sex)
||!preg_match("/^((?!<).)*$/", $birthday)
||!preg_match("/^((?!<).)*$/", $city)
||!preg_match("/^((?!<).)*$/", $mobile)
||!preg_match("/^((?!<).)*$/", $email)
||!preg_match("/^((?!<).)*$/", $diploma)
||!preg_match("/^((?!<).)*$/", $school)
||!preg_match("/^((?!<).)*$/", $experience)
||!preg_match("/^((?!<).)*$/", $extra)
){
	$error = 2;//恶意注入信息
};
//echo "error".$error;

if($file_error_code != 4){
	if ((($_FILES["file"]["type"] == "application/msword")||($_FILES["file"]["type"] == "application/pdf"))
		&& ($_FILES["file"]["size"] < 2048000)){
	  if ($_FILES["file"]["error"] > 0){
	    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    $file_error = 1;
	    }
	  else
	    {
	    //echo "file name match".$_FILES['file']["name"];
	    if(!preg_match("/^((?!<).)*$/", $_FILES['file']["name"])){
	    	//echo "file name match".$_FILES['file']["name"];
		    $file_error = 2;//恶意注入
	    }else{
		    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
		    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		  	$filename = addslashes($_FILES['file']["name"]);//客户端文件名
		  	$filename_gb2312 = iconv("UTF-8","GB2312", $filename);   //字符转码			
			$filename_sever_gb2312 = date("his").rand(100,999);
			$file_path_utf8 = $filename_sever_gb2312."__".$_FILES['file']["name"];
			$filename_sever_gb2312 .= "__".$filename_gb2312;
			$file_path = "../upload/" . $filename_sever_gb2312;
			$file_path_utf8 = $file_path_utf8;
			move_uploaded_file($_FILES["file"]["tmp_name"],$file_path);
			//move_uploaded_file($_FILES["file"]["tmp_name"],"/Library/WebServer/Documents/upload/" . $filename_sever_gb2312);
			
			//echo "Stored in: " . "/upload/" . $filename_sever_gb2312;
		    }
	    }
	  }
	else
	  {
	  $file_error = 2;
	  //echo "Invalid file";
	  }
}

$__readexcel_called = false;
function readexcel($filePath) {
	$PHPExcel = PHPExcel_IOFactory::load($filePath);           
	$currentSheet = $PHPExcel->getSheet(0);  /**取得一共有多少列*/
	$allColumn = $currentSheet->getHighestColumn();     /**取得一共有多少行*/
	$allRow = $currentSheet->getHighestRow();
	$all = array();
	for( $currentRow = 1 ; $currentRow <= $allRow ; $currentRow++){	
		$flag = 0;
		$col = array();
		for($currentColumn='A'; ord($currentColumn) <= ord($allColumn) ; $currentColumn++){		
			$address = $currentColumn.$currentRow;   			
			$string = $currentSheet->getCell($address)->getValue();			
			$col[$flag] = $string;			
			$flag++;
		}
		$all[] = $col;
	}
	return $all;
}

function writeexcel($data, $path=false, $name='', $param = array()){	
	$objPHPExcel = new PHPExcel();
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	if(isset($param['title']))
		$objPHPExcel->setCreator($param['title']);
	if(isset($param['creator']))
		$objPHPExcel->setCreator($param['creator']);
	if(!is_array($data[0])) $data = array($data);
	$workSheet =  $objPHPExcel->getActiveSheet();

	foreach($data as $k=>$v){
		$row_id = $k+1;
		if(is_array($v))
			foreach($v as $kk=>$vv){
				$col_id = $kk;
				//echo '$row_id='.$row_id.', $col_id='.$col_id.'';
				if(is_array($vv)){
					$cell = $workSheet->setCellValueByColumnAndRow($col_id, $row_id,  $vv[0])->getCellByColumnAndRow($col_id, $row_id);					
					$param = $vv[1];
					if(isset($param['width'])){
						$tmp = $workSheet->getColumnDimensionByColumn($col_id)->setWidth($param['width']);
					}
					
					if(isset($param['style'])){

						$workSheet->getStyleByColumnAndRow($col_id, $row_id )->applyFromArray($param['style']);
					}
				}else $workSheet->setCellValueByColumnAndRow($col_id, $row_id, $vv);
			}
		else
			$workSheet->setCellValueByColumnAndRow(1, $row_id, $vv);
	}

	if(!$path){
		if(!$name) $name = time().'.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$name.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory:: createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save( 'php://output');
	}else $objWriter->save($path);

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在线报名</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/contents.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/enroll.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header_content">
				<div id="nav_menu" class="header_l_nav">
					<a class="text" href="../"><div id="logo" class="header_l_nav">
							<img src="../img/friendship_black.png">
							<div class="title">初识大学</div>
						</div></a>
					<ul class="menu_content">
						<li><a class="text" href="../">首页</a></li>
						<li><a class="text" href="../course/">课程设置</a></li>
						<li><a class="text" href="../public/">近期活动</a></li>
						<li><a class="text" href="../team/">授课团队</a></li>
						<li><a class="text" href="../join/">加入我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_wrapper">
			<div class="main_content text">
				<div class="block">
					<div class="item-middle">
						<div class="item_content">
							<h3>投递简历</h3>
							<p>
								<?php								
								if($file_error==0 && $error==0){
									$all = readexcel("../classinfo/join.xlsx");
									$row_num = count($all);
									$sex_cn = $sex=="m"?"男":"女";
									if($type=="team"){
										$type_cn = "授课团队";
									}else if ($type=="team"){
										$type_cn = "高中校园代理";
									}else if($type = "resource"){
										$type_cn = "人力资源";
									}
									$all[$row_num] = array($name,$sex_cn,$birthday,$city,$mobile,$email,$diploma,$school,$experience,$extra,$file_path_utf8,$type_cn);
									writeexcel(
									    $all,'../classinfo/join.xlsx'  
									); 
									echo "报名成功，请期待我们的回复";									
								}else{
									echo "报名失败";
									if($error==1)
										echo "由于某种原因，你的报名信息没有成功投递，请再次尝试，或者直接与我们取得联系<br />";
									if($error==2)//几乎不出现
										echo "请不要在填写资料中包含特殊字符<br />";
									if($file_error==1)
										echo "由于某种原因，您上传的附件失败了，请再次尝试，或者直接与我们取得联系<br />";
									if($file_error==2)//几乎不出现
										echo "您的文件名命名不符合要求，上传失败，请再次尝试，或者直接与我们取得联系<br />";
								}
								?>
							</p>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_wrapper">
			<div class="footer" id="icp">
				 <span> © 2014 SidneyFan,
					all rights reserved </span>
			</div>
		</div>
	</div>
</body>
</html>