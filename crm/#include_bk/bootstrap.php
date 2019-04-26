<?php
//user smarty
require_once($config['BASE_DIR'].'/libraries/smarty/libs/Smarty.class.php');
//DB Exceptions
require_once($config['BASE_DIR'].'/libraries/adodb5/adodb-exceptions.inc.php');
require_once($config['BASE_DIR'].'/libraries/adodb5/adodb.inc.php');

//multi lang
require_once($config['BASE_DIR'].'/libraries/multilang.class.php');
$conn = ADONewConnection($DBTYPE);

//print_r($conn); die();
$GLOBALS["db_sp"]=$DBNAME;
$GLOBALS["sp"]=$conn;
$db = $GLOBALS["db_sp"];

$GLOBALS['sp']->NConnect($DBHOST, $DBUSER, $DBPASSWORD, $GLOBALS["db_sp"]);

if (!$conn) {
	echo "Could not DB !";
	exit();
}

$conn_web = &ADONewConnection($DBTYPEWEB); 
$result=$conn_web->PConnect($DBHOSTWEB,$DBUSERWEB,$DBPASSWORDWEB,$DBNAMEWEB); 
if (!$result) exit("Can't connect $DBHOSTWEB");

$GLOBALS['web']=$conn_web;
$GLOBALS['db_web']=$DBNAMEWEB;

mysql_query("SET NAMES 'UTF8'");
//load language
//$language=!isset($_COOKIE["language"])?"vn":$_COOKIE["language"];
$language='vn';
$_SESSION['language']=$language;


//die($showCity);
//$language='en';

//create smarty object
$smarty = new SmartyML($language);
$GLOBALS['smarty']=$smarty;
//path smarty
$smarty ->left_delimiter = '<!--{';
$smarty ->right_delimiter = '}-->';

$smarty->caching = false;
$smarty ->compile_dir	= $config['BASE_DIR']."/templates/template_c/";
$smarty ->template_dir	= $config['BASE_DIR']."/templates/tpl/";
$smarty->cache_dir 	=   $config['BASE_DIR']."/templates/cache/";
///

//$path_url=$config['BASE_URL'];

$path_url=$config['BASE_URL'];
$smarty->assign("path_url",$path_url);

$path_url_web=$config['BASE_URL_WEB'];
$smarty->assign("path_url_web",$path_url_web);


$path_dir=$config['BASE_DIR']."/";
$smarty->assign("path_dir",$path_dir);

$lang = $language;
$smarty->assign("lang",$language);





?>