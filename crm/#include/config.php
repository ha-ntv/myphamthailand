<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors",0); 

$config = array();
// =============== CONFIGURATION ===================================================================

$config['BASE_DIR']     = $_SERVER['DOCUMENT_ROOT']; 
$config['BASE_URL']     =  "http://".$_SERVER['SERVER_NAME']; 


$config['BASE_DIR_WEB']     = $_SERVER['DOCUMENT_ROOT'].'/vietanhmobile.com'; 
$config['BASE_URL_WEB']     =  "http://vietanhmobile.com"; 


//=======================Config Database=============================================================
$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'vieta935_crmseo';
$DBPASSWORD = 'uHHWu1&!(.H6';
$DBNAME = 'vieta935_crmseo';


$DBTYPEWEB = 'mysql';
$DBHOSTWEB = 'localhost';
$DBUSERWEB = 'vieta935_seo';
$DBPASSWORDWEB = 'B7+l=D3hpz*0';
$DBNAMEWEB = 'vieta935_seo';


//=======================Path to url=============================================================
require_once($config['BASE_DIR'].'/#include/bootstrap.php');
?>