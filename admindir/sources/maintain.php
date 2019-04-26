<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
switch($act){
	case "editsm":
		global $db,$act;
		$arr['bao_tri'] = $_POST["bao_tri"]=="1"?"1":"0";
		$arr['bat_dau'] = $_POST["bat_dau"] . " " . $_POST['gio_bat_dau'] . ":" . $_POST['phut_bat_dau'] . ":" . "00";
		$arr['ket_thuc'] = $_POST["ket_thuc"] . " "  . $_POST['gio_ket_thuc'] . ":" . $_POST['phut_ket_thuc'] . ":" . "00";
		
		$id = 1;		
		vaUpdate('bao_tri',$arr,' id='.$id);	
			
		$url = "index.php?do=maintain";
		page_transfer2($url);
	break;

	

	default:
		$sql = "select * from $GLOBALS[db_sp].bao_tri order by id desc limit 0,1";
		$rs = $GLOBALS["sp"]->getRow($sql);

		$bat_dau = getdate(strtotime($rs['bat_dau']));
		$ket_thuc = getdate(strtotime($rs['ket_thuc']));
		
		$smarty->assign("bat_dau",$bat_dau);
		$smarty->assign("ket_thuc",$ket_thuc);
		$smarty->assign("edit",$rs);
		
		$template = "maintain/edit.tpl";
	break;
}

$smarty->assign("tabmenu",2);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

?>