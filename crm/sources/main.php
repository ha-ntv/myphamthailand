<?php
$idpem = 5;
/*
$sql = " select count(pr.id),pr.id, pr.name_vn,sr.* from $GLOBALS[db_web].products pr, $GLOBALS[db_sp].serial sr 
	where pr.id = sr.idpr
	and sr.active = 1
	and sr.active = 1
";
*/
//die($sql);

/////Load cat
if(!checkPermision($idpem,5)){
	page_permision();
	$page = $path_url."/users/changes/";
	page_transfer2($page);
}
else{
	unset($_SESSION['countSapHetHang']);
	$sql = "select * from $GLOBALS[db_web].categories where pid=2 and crmhethang=1 and active = 1 order by num asc, id desc ";
	$rs = $GLOBALS["web"]->getAll($sql);
	$smarty->assign("view",$rs);
}
$smarty->assign("checkTongquan","class='Active'");
$smarty->display("header.tpl");
$smarty->display("main/main.tpl");
$smarty->display("footer.tpl");

?>