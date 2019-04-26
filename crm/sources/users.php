<?php
$act = isset($_REQUEST['cat1'])?$_REQUEST['cat1']:"";
switch($act){
	case "changes":
		if($_POST){
			$pw = md5($_POST['password']);
			$sql = "UPDATE $GLOBALS[db_sp].admin  SET 
					password = '$pw'
					where idcity in (".$_SESSION['admin_showCity'].") and id = ".$_SESSION['admin_crmvietanhmobil_id']."
			";
			$GLOBALS["sp"]->execute($sql);
			$url = $path_url;
			page_transfer2($url);
		}
		$template = "users/changes.tpl";
	break;
	case "edit":
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			$id  = $_GET["cat2"];
			$sql = "select * from $GLOBALS[db_sp].admin where idcity in (".$_SESSION['admin_showCity'].") and id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			if(empty($rs['id'])){
				$url = $path_url."/users/";
				page_transfer2($url);
			}	
			$smarty->assign("edit",$rs);	
			$template = "users/edit.tpl";
		}
		else{
			page_permision();
			$page=$path_url;
			page_transfer2($page);
		}
	break;

	case "add":
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			$template = "users/edit.tpl";
		}
		else{
			page_permision();
			$page=$path_url;
			page_transfer2($page);
		}
	break;

	case "dellist":
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			$id  = $_GET["cat2"];
			$sql="delete from $GLOBALS[db_sp].admin where idcity in (".$_SESSION['admin_showCity'].") and id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);
			$url = $path_url."/users/";
			page_transfer2($url);
		}
		else{
			page_permision();
			$page=$path_url;
			page_transfer2($page);
		}
	break;

	case "addsm":
	case "editsm":
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			Editsm();
			$url = $path_url."/users/";
			page_transfer2($url);
		}
		else{
			page_permision();
			$page=$path_url;
			page_transfer2($page);
		}
	break;

	default:
		if($_SESSION['admin_crmvietanhmobil_group'] == -1){
			$cityShow = isset($_REQUEST['cat1'])?$_REQUEST['cat1']:0;
			$smarty->assign("cityShow",$cityShow);
			$whCity ='';
			if($cityShow){
				$whCity = ' and idcity='.$cityShow;
			}
			$sql="select * from $GLOBALS[db_sp].admin where `group` <> '-1' $whCity order by idcity asc, id desc";
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/users/".$cityShow."/0/0"; //set url for paginator
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
			
			$template = "users/list.tpl";
		}
		else{
			page_permision();
			$page=$path_url;
			page_transfer2($page);
		}
	break;
}	

$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");
function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['cat1'])?$_REQUEST['cat1']:'';
	$arr['name']= trim($_POST['name']);
	$arr['username']= trim($_POST['username']);
	$arr['idcity']= trim($_POST['city']);
	if($_POST['password'])
		$arr['password']= md5($_POST['password']);

	if ($act=='addsm')
	{
		$arr['group'] = 1;
		vaInsert('admin',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('admin',$arr,' id='.$id);
	}
}?>