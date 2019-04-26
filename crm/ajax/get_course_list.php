<?php
require_once("../#include/config.php");
require_once("../functions/function.php");
//CheckLogin();
$q = strtolower($_GET["q"]);
if (!$q) return;
$type = isset($_REQUEST['type'])?$_REQUEST['type']:"";
$table = isset($_REQUEST['table'])?$_REQUEST['table']:"";
$name = isset($_REQUEST['name'])?$_REQUEST['name']:"";
switch($type){
	case "serial":
		$sql = "SELECT * FROM $GLOBALS[db_sp].".$table." where idcity in (".$_SESSION['admin_showCity'].")";
		$rs = $GLOBALS["sp"]->GetAll($sql);
		foreach($rs as $item){
			$cname = $item[$name];
			echo "$cname\n";
		}	
	break;
}
?>