<?php

session_start();

error_reporting(E_ALL);

ini_set("display_errors",0); 

$config = array();

// =============== CONFIGURATION ===================================================================

$config['BASE_DIR']     = $_SERVER['DOCUMENT_ROOT']; 

$config['BASE_URL']     =  "http://".$_SERVER['SERVER_NAME']; 

//=======================Config Database=============================================================

$DBTYPE = 'mysql';

$DBHOST = 'localhost';

$DBUSER = 'vieta935_mtien';

$DBPASSWORD = 'RPo?@az_.+S5';

$DBNAME = 'vieta935_mtien';

//=======================Path to url=============================================================

require_once($config['BASE_DIR'].'/#include/bootstrap.php');

?>