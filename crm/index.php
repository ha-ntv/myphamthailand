<?php
include_once("#include/config.php");
include_once("functions/function.php");
//////Load load khu vuc //////////////////////
$sql = "select * from $GLOBALS[db_web].city where active=1 order by id asc";
$rs = $GLOBALS["web"]->getAll($sql);
$smarty->assign("cityHome",$rs);

$numPageAll = 30;
$page = isset($_REQUEST['cat4'])?$_REQUEST['cat4']:"1";
if ($page == NULL) $page = 1;
if(!empty($_SESSION['admin_showCity'])){		
	$sql = "select * from $GLOBALS[db_sp].partner where idcity in (".$_SESSION['admin_showCity'].") order by id desc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$smarty->assign("partnerList",$rs);
}

global $act, $do;
$do = isset($_GET['do'])?$_GET['do']:"main";

if (!file_exists("./sources/".$do.".php")){
	die("There is not this function!!!");
}

//die($do);
if(!isset($_SESSION["store_crmvietanhmobile_login"]))	$do="login";
require("./sources/".$do.".php");

?>