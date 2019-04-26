<?php
include("../../#include/config.php");
include("../functions/function.php");
global $path_url,$path_dir;
$error = array();
$error = "";
$error_img = "";
$dir_img = $path_dir.$_POST['dir_img']; //duong dan vao thu muc luu hinh

$img_thumb_vn = isset($_POST['img_thumb_vn'])?$_POST['img_thumb_vn']:"";
$img_thumb_en = isset($_POST['img_thumb_en'])?$_POST['img_thumb_en']:"";

$img_vn = isset($_POST['img_vn'])?$_POST['img_vn']:"";
$img_en = isset($_POST['img_en'])?$_POST['img_en']:"";

$img1_vn = isset($_POST['img1_vn'])?$_POST['img1_vn']:"";
$img1_en = isset($_POST['img1_en'])?$_POST['img1_en']:"";

$img2_vn = isset($_POST['img2_vn'])?$_POST['img2_vn']:"";
$img2_en = isset($_POST['img2_en'])?$_POST['img2_en']:"";

$img3_vn = isset($_POST['img3_vn'])?$_POST['img3_vn']:"";
$img3_en = isset($_POST['img3_en'])?$_POST['img3_en']:"";

$img4_vn = isset($_POST['img4_vn'])?$_POST['img4_vn']:"";
$img4_en = isset($_POST['img4_en'])?$_POST['img4_en']:"";

$img5_vn = isset($_POST['img5_vn'])?$_POST['img5_vn']:"";
$img5_en = isset($_POST['img5_en'])?$_POST['img5_en']:"";

$img6_vn = isset($_POST['img6_vn'])?$_POST['img6_vn']:"";
$img6_en = isset($_POST['img6_en'])?$_POST['img6_en']:"";

$img7_vn = isset($_POST['img7_vn'])?$_POST['img7_vn']:"";
$img7_en = isset($_POST['img7_en'])?$_POST['img7_en']:"";

if($img_thumb_vn){
	if(file_exists($dir_img."/".$img_thumb_vn)){
		$error .="Hinh Nhỏ VN,";
	}
	
	$img = $img_thumb_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh Nhỏ VN,";
	}
	
}
if($img_thumb_en){
	if(file_exists($dir_img."/".$img_thumb_en)){
		$error .="Hinh Nhỏ EN,";
	}
	
	$img = $img_thumb_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh Nhỏ EN,";
	}
	
}


if($img_vn){
	if(file_exists($dir_img."/".$img_vn)){
		$error .="Hinh VN,";
	}
	
	$img = $img_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh VN,";
	}
}
if($img_en){
	if(file_exists($dir_img."/".$img_en)){
		$error .="Hinh EN,";
	}
	
	$img = $img_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh EN,";
	}
}

if($img1_vn){
	if(file_exists($dir_img."/".$img1_vn)){
		$error .="Hinh1 VN,";
	}
	
	$img = $img1_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh1 VN,";
	}
}
if($img1_en){
	if(file_exists($dir_img."/".$img1_en)){
		$error .="Hinh1 EN,";
	}
	
	$img = $img1_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh1 EN,";
	}
}

if($img2_vn){
	if(file_exists($dir_img."/".$img2_vn)){
		$error .="Hinh2 VN,";
	}
	
	$img = $img2_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh2 VN,";
	}
}
if($img2_en){
	if(file_exists($dir_img."/".$img2_en)){
		$error .="Hinh2 EN,";
	}
	
	$img = $img2_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh2 EN,";
	}
}

if($img3_vn){
	if(file_exists($dir_img."/".$img3_vn)){
		$error .="Hinh3 VN,";
	}
	
	$img = $img3_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh3 VN,";
	}
}
if($img3_en){
	if(file_exists($dir_img."/".$img3_en)){
		$error .="Hinh3 EN,";
	}
	
	$img = $img3_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh3 EN,";
	}
}

if($img4_vn){
	if(file_exists($dir_img."/".$img4_vn)){
		$error .="Hinh4 VN,";
	}
	
	$img = $img4_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh4 VN,";
	}
}
if($img4_en){
	if(file_exists($dir_img."/".$img4_en)){
		$error .="Hinh4 EN,";
	}
	
	$img = $img4_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh4 EN,";
	}
}


if($img5_vn){
	if(file_exists($dir_img."/".$img5_vn)){
		$error .="Hinh5 VN,";
	}
	
	$img = $img5_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh5 VN,";
	}
}
if($img5_en){
	if(file_exists($dir_img."/".$img5_en)){
		$error .="Hinh5 EN,";
	}
	
	$img = $img5_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh5 EN,";
	}
}

if($img6_vn){
	if(file_exists($dir_img."/".$img6_vn)){
		$error .="Hinh6 VN,";
	}
	
	$img = $img6_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh6 VN,";
	}
}
if($img6_en){
	if(file_exists($dir_img."/".$img6_en)){
		$error .="Hinh6 EN,";
	}
	
	$img = $img6_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh6 EN,";
	}
}


if($img7_vn){
	if(file_exists($dir_img."/".$img7_vn)){
		$error .="Hinh7 VN,";
	}
	
	$img = $img7_vn;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh7 VN,";
	}
}
if($img7_en){
	if(file_exists($dir_img."/".$img7_en)){
		$error .="Hinh7 EN,";
	}
	
	$img = $img7_en;
	$start = strpos($img,".");
	$type = substr($img,$start,strlen($img));
	if(CheckUploadImg($type)==false){
		$error_img .="Hinh7 EN,";
	}
}
die(json_encode(array('status'=>$error,'CheckImg'=>$error_img)));
?>