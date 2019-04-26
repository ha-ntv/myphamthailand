<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors",0); 
$config = array();
// =============== CONFIGURATION ===================================================================
$config['BASE_DIR']     = $_SERVER['DOCUMENT_ROOT']; 
$config['BASE_URL']     =  "https://".$_SERVER['SERVER_NAME']; 
//=======================Config Database=============================================================
$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'thailand_vi';
$DBPASSWORD = 'login@123!';
$DBNAME = 'thailand_vi';

$DBTYPECRM = 'mysql';
$DBHOSTCRM = 'localhost';
$DBUSERCRM = 'thailand_vi';
$DBPASSWORDCRM = 'login@123!';
$DBNAMECRM = 'thailand_vi';
//=======================Path to url=============================================================
require_once($config['BASE_DIR'].'/include/bootstrap.php');
?>