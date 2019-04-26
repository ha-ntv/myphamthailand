<?php
include("../#include/config.php");
//include("../functions/function.php");
$type = trim($_POST['type']);
//die($type);
switch($type)
{
	case 'thuongkhach':
		$sql="delete from $GLOBALS[db_sp].banned_ip";
		$GLOBALS["sp"]->execute($sql);
	break;
	case 'thongke':
		$sql="delete from $GLOBALS[db_sp].thongke_ip";
		$GLOBALS["sp"]->execute($sql);
	break;
	
	case 'diadiem':
		$idCity = trim($_POST['idCity']);
		
		$_SESSION['admin_showCity'] = $idCity;
		
		//die($_SESSION['admin_showCity']);
	break;
}
die(json_encode(array('status'=>' Xóa Thành Công ')));
?>