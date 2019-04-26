<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
switch($act){
	case "editsm":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=intro&act=edit&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			Editsm();
			$url = "index.php?do=intro&act=edit&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
	
	case "edit":
	default:
		$id = $_GET["cid"];
		$sql = "select * from $GLOBALS[db_sp].intro where id=$id";
		$rs = $GLOBALS["sp"]->getRow($sql);
		
		if(!$rs['id']){
			$sql_cat = "select * from  $GLOBALS[db_sp].categories where id = ".$id;
			$rs_cat = $GLOBALS["sp"]->getRow($sql_cat);
			$arr['id'] = $id;
			$arr['name_vn'] = $rs_cat['name_vn'];
			$arr['name_en'] = $rs_cat['name_en'];
			
			$smarty->assign("editCat",$arr);
			vaInsert('intro',$arr);
		}
		else{
			$sql_cat = "select * from  $GLOBALS[db_sp].categories where id = ".$id;
			$rs_cat = $GLOBALS["sp"]->getrow($sql_cat);
			
			$smarty->assign("editCat",$rs_cat);
		}
	
		
		$smarty->assign("edit",$rs);
		
		$template = "intro/edit.tpl";
		
	break;
	
}
$smarty->assign("tabmenu",0);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name_vn']= $_POST["name_vn"];
	$arr['name_en']= $_POST["name_en"];
	
	$arr['cid'] = $_POST["cat"];
	
	$arr['content_vn']= $_POST["content_vn"];
	$arr['content_en']= $_POST["content_en"];

	$id = $_POST['cat'];
	vaUpdate('intro',$arr,' id='.$id);
}
?>