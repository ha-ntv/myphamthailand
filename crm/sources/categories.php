<?php
$smarty->assign("thongke",thongkekho());
$act = isset($_REQUEST['do'])?$_REQUEST['do']:"";
/////////loai chon		
switch($act){
	default:
		$sql = "select * from $GLOBALS[db_web].categories where pid=2 and crm=1 order by num asc, id desc ";
		$total = count($GLOBALS["web"]->getAll($sql));
		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		$begin = ($page - 1)*$num_rows_page;
		$url = $path_url."/categories/".$_GET['cat1']."/0/0";
		$iSEGSIZE=3;
		$link_url = "";
		if($num_page > 1 )
			$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["web"]->getAll($sql);
		if($page!=1)
		{
			$number=$num_rows_page * ($page-1);
			$smarty->assign("number",$number);
		}
		$smarty->assign("total",$num_page);
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		$template = "categories/list.tpl";
		/////check Perm
		if(checkPermision($_GET["cid"],1))
			$smarty->assign("checkPer1","true");
		if(checkPermision($_GET["cid"],2))
			$smarty->assign("checkPer2","true");
		if(checkPermision($_GET["cid"],3))
			$smarty->assign("checkPer3","true");
		///////////////////////////
	break;
}
$smarty->assign("checkHanghoa","class='Active'");
$smarty->assign("checkHanghoa1","class='active'");
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");
?>