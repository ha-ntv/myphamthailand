<?php
$idpem = 4;
$act = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
switch($act){
	case "delete":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat4']);		
			$sql="delete from $GLOBALS[db_sp].partner where id=$id and idcity in (".$_SESSION['admin_showCity'].")";
			$GLOBALS["sp"]->execute($sql);
			
			$url = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/";
			page_transfer2($url);
		}
	break;
	
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql = "select * from $GLOBALS[db_sp].partner where id=$id and idcity in (".$_SESSION['admin_showCity'].")";
			$rs = $GLOBALS["sp"]->getRow($sql);
			if(empty($rs['id'])){
				$url = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/";
				page_transfer2($url);
			}			
			$smarty->assign("edit",$rs);	
			$template = "nha-cung-cap/edit.tpl";
		}
	break;
	
	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$template = "nha-cung-cap/edit.tpl";
		}
	break;
	
	case "addsm":
	case "editsm":
		Editsm();
		$url = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/";
		page_transfer2($url);
	break;
	default:
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url.'/';
			page_transfer2($page);
		}
		else{
			$idpr = trim($_GET['cat2']);
			$sql="select * from $GLOBALS[db_sp].partner where idcity in (".$_SESSION['admin_showCity'].") order by id desc";	
			
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/nha-cung-cap/".$_REQUEST['cat1']."/0/0"; //set url for paginator
			$iSEGSIZE=10;
			$link_url = "";
			
			if($num_page > 1 )
				$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			if($page!=1)
			{
				$number=$num_rows_page * ($page-1);
				$smarty->assign("number",$number);
			}
			$smarty->assign("link_url",$link_url);
				
			$smarty->assign("view",$rs);
			$template = "nha-cung-cap/list.tpl";
			
			/////check Perm
			if(checkPermision($idpem,1))
				$smarty->assign("checkPer1","true");
			
			if(checkPermision($idpem,2))
				$smarty->assign("checkPer2","true");
			
			if(checkPermision($idpem,3))
				$smarty->assign("checkPer3","true");
		}
	break;
}
$smarty->assign("checkDoitac","class='Active'");
$smarty->assign("checkNhacungcap","class='active'");

$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");


function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
	
	$arr['idcity'] = $_SESSION['admin_showCity'];
	$arr['name']= trim($_POST["name"]);	
	$arr['phone']= trim($_POST["phone"]);
	$arr['email']= trim($_POST["email"]);		
	$arr['address']= trim($_POST["address"]);	
	if ($act=="addsm")
	{
		vaInsert('partner',$arr); /// thêm dữ liệu đầu tiên
	}
	else
	{
		$id = trim($_POST['id']);
		//////////////////////////////////////////	
		vaUpdate('partner',$arr,' id='.$id);
	}
}
?>