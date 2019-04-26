<?php
include("../../include/config.php");
include("../functions/function.php");

$error = array();
$error ="";
$id = trim($_POST['id']);
$username = trim($_POST['username']);
$email = trim(isset($_POST['email'])?$_POST['email']:"");
$table = trim($_POST['table']);

if(!empty($username)){
	if(empty($id)){
		$sql = "SELECT * FROM $GLOBALS[db_sp].".$table." where BINARY username='$username'";
	}
	else{
		$sql = "SELECT * FROM $GLOBALS[db_sp].".$table." where BINARY username='$username' and id<>$id";
	}
	$rs = $GLOBALS["sp"]->GetAll($sql);
	if(ceil(count($rs)) > 0)
		$error .="Username này đã tồn tại.";
}

if(!empty($email)){
	if(empty($id)){
		$sql_email = "SELECT * FROM $GLOBALS[db_sp].".$table." where BINARY email='$email'";
	}
	else{
		$sql_email = "SELECT * FROM $GLOBALS[db_sp].".$table." where BINARY email='$email' and id<>$id";
	}
	$rs_email = $GLOBALS["sp"]->GetAll($sql_email);
	if(ceil(count($rs_email)) > 0)
	$error .=" Địa chỉ Email này đã tồn tại. ";
}
die(json_encode(array('status'=>$error)));
?>