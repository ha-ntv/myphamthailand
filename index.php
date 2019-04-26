<?php
include_once("include/config.php");
include_once("functions/function.php");

$page   = isset($_GET["page"])  ? $_GET["page"]  : '1';//for paging
//die('sss:'.$_GET['unique_key']);
if($_GET['cat1'] == "thanh-vien"  || $_GET['cat1'] == "shoponline" || $_GET['cat1'] == "don-hang"  || $_GET['cat1'] == "tra-gop" || $_GET['cat1'] == "gio-hang" || $_GET['cat1'] == "thanh-toan" || $_GET['cat1'] == "check-out"){
	if($_GET['cat1'] == "thanh-vien"){
		$do = "member";
		$act = $_GET['cat2'];
	}
	elseif($_GET['cat1'] == "don-hang"){
		$do = "donhang";
		$act = $_GET['cat2'];
		
	}
	
	elseif($_GET['cat1'] == "tra-gop"){
		$do = "tragop";
		$act = $_GET['cat2'];
		
	}
	elseif($_GET['cat1'] == "gio-hang") {
		$do = "giohang";
		$act = $_GET['cat2'];
	}
	elseif($_GET['cat1'] == "thanh-toan") {
		$do = "thanhtoan";
		$act = $_GET['cat2'];
	}
	elseif($_GET['cat1'] == "check-out") {
		$do = "checkout";
		$act = $_GET['cat2'];
	}
}
elseif($_GET['cat1'] == "404"){
	$do = "error-404";
}
else{
	if(isset($_GET['cat1'])){
		$cat1_key = $_GET['cat1'];
		if($cat1_key == "index"){
			$do = "main";
			$act = "main";
			$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$cat1_key' and pid=2";
			$cat1 = $GLOBALS["sp"]->getRow($sql);			
		}
		else{
			if($_GET['cat2'] == "new" || $_GET['cat2'] == "likenew" || $_GET['cat2'] == "world" || $_GET['cat2'] == "lock"){
				$act = "list";
				$do = "products";
				
				$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$cat1_key'";
				$cat1 = $GLOBALS["sp"]->getRow($sql);
			}
			else{
				$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$cat1_key'";
				$cat1 = $GLOBALS["sp"]->getRow($sql);
				if(!$cat1['id']){//bi rong la kg ton tai link quay ve trang chu
					PageHome("index.html");
				}
				if($cat1['has_child'] == 1){
					$do = "submenu";
					$act = "list";
				}
				else{				
					$sql = "select * from $GLOBALS[db_sp].component where id=".$cat1['comp'];
				
					$r = $GLOBALS["sp"]->getRow($sql);
					$do = $r['do'];
					$act = $r['act'];
				}
				if(isset($_GET['cat2']) && ($do != "search") && ($do != "contact") ){
					global $cat2;
					$cat2_key = $_GET['cat2'];
					//$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$cat2_key' and pid=" . $cat1['id'];
					$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$cat2_key' ";
					$cat2 = $GLOBALS["sp"]->getRow($sql);
					if(!$cat2['id']){//bi rong la kg ton tai link quay ve trang chu
						PageHome("404/");
					}
					if(isset($cat2['comp'])){
						if($cat2['comp']==0){
							$do = "submenu";
							$act = "list";
						}
						else{
							$sql = "select * from $GLOBALS[db_sp].component where id=".$cat2['comp'];
							$r = $GLOBALS["sp"]->getRow($sql);
							$do = $r['do'];
							$act = $r['act'];
						}
					}
				}
				if(isset($_GET['unique_key'])){
					$act = "detail";
				}
			}
		}
	}
	else if(isset($_GET['unique_key'])){
		$act = "detail";
		$do = "products";
	}
	else{
		$sql = "select * from $GLOBALS[db_sp].categories where id=3 and pid=2";
		$cat1 = $GLOBALS["sp"]->getRow($sql);
		$do = "main";
		$act = "main";		
	}
}
include_once("allmenu.php");
require("./sources/".$do.".php");
include_once("include/login.php");
?>