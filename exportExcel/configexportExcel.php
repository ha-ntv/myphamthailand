<?php
@session_start();
error_reporting(E_ALL);
ini_set("display_errors",0); 

global $dblink;
$dblink = mysql_connect("localhost","vieta935_seo","B7+l=D3hpz*0")or die("Can not connect db");
mysql_select_db("vieta935_seo",$dblink);
//$dblink = mysql_connect("localhost","root","")or die("Can not connect db");
//mysql_select_db("vietanhmobile_new",$dblink);
mysql_query("SET NAMES 'utf8'");
?>
