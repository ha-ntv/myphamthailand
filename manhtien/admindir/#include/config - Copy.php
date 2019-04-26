<?php
include("../#include/config.php");
$config['BASE_DIR']     = $_SERVER['DOCUMENT_ROOT'].'/vietanhmobile_new/admindir'; 
$config['BASE_URL']     =  "http://".$_SERVER['SERVER_NAME']."/vietanhmobile_new/admindir"; 
$smarty ->compile_dir	= $config['BASE_DIR']."/templates/template_c/";
$smarty ->template_dir	= $config['BASE_DIR']."/templates/tpl/";
$smarty->cache_dir 	=   $config['BASE_DIR']."/templates/cache/";
///
$path_admin_url=$config['BASE_URL'];
$smarty->assign("path_admin_url",$path_admin_url);
?>

