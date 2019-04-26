<?php
include("../../include/config.php");
include("../functions/function.php");
$q = strtolower($_GET["q"]);
if (!$q) return;
$type = isset($_REQUEST['type'])?$_REQUEST['type']:"";
$idorder = trim($_REQUEST['idpr']);
$sqlod = "SELECT * FROM $GLOBALS[db_sp].orders where id=$idorder ";
$rsod = $GLOBALS["sp"]->GetRow($sqlod);
$idpr = $rsod['idpr'];

if($idpr > 0){
	switch($type){
		case "serial":
			$sql = "SELECT * FROM $GLOBALS[db_crm].serial where idpr='$idpr' and code LIKE '%$q%' ";
			$rs = $GLOBALS["crm"]->GetAll($sql);
			foreach($rs as $item){
				$cname = $item['code'];
				echo "$cname\n";
			}
		break;
	}
}
?>