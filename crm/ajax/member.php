<?php
include("../#include/config.php");
include("../functions/function.php");

$error = array();
$error ="";
$id = trim($_POST['id']);
$username = trim($_POST['username']);
$email = trim(isset($_POST['email'])?$_POST['email']:"");
$table = trim($_POST['table']);
$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";
switch($type)
{	
	case 'setSessionDiaDiem':
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			$showCity = trim($_POST['idciy']);
			$_SESSION['admin_showCity'] = $showCity;
			$error = 'success';
		}
	break;
	
	case 'signout':
		unset($_SESSION['store_crmvietanhmobile_login']);
		unset($_SESSION['admin_crmvietanhmobil_username']);
		unset($_SESSION['admin_crmvietanhmobil_group']);
		unset($_SESSION['admin_crmvietanhmobil_id']);
		$error = 'success';
	break;
	
	case "addmember":
		$id = trim($_POST['id']);
		$username = trim($_POST['username']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].admin where  username='$username'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].admin where  username='$username' and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		
		if(ceil(count($rs)) > 0)
			$error = "Username này đã tồn tại .";
					
	break;	
	case "changes":
		$pwold = md5($_POST['pwold']);
		$id = $_SESSION['admin_crmvietanhmobil_id'];
		
		$sql = "select * from $GLOBALS[db_sp].admin where password = '$pwold' and id=$id ";
		$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
		if($count == 0){
			$error = "Mật khẩu cũ không tồn tại." ;
		}
		
	break;
}
die(json_encode(array('status'=>$error)));
?>