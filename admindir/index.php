<?php
include_once("include/config.php");
include_once("functions/function.php");
include_once("functions/categories.class.php");
//include_once("sources/left.php");
include("ADMeditor/fckeditor.php");

//die(session_is_registered('administrator'));
if(!$_SESSION['admindvietanhmobilecom']) die("");
 
//CheckCountLogin();

$numPageAll = 100;
$page = isset($_REQUEST['p'])?$_REQUEST['p']:"1";
if ($page == NULL) $page = 1;

global $act, $do;
$do = isset($_GET['do'])?$_GET['do']:"main";

if (!file_exists("./sources/".$do.".php")){
	die("There is not this function!!!");
}

if(!isset($_SESSION["store_vietanhmobile_login"]))	$do="login";

require("./sources/".$do.".php");


?>