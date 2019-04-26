<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
switch($act){
	case "edit":
		$id  = $_GET["id"];
		$sql = "select * from $GLOBALS[db_sp].partner where id=$id";
		$rs = $GLOBALS["sp"]->getRow($sql);
				
		$smarty->assign("edit",$rs);	
		$template = "partner/edit.tpl";
	break;

	case "add":
		$template = "partner/edit.tpl";
	break;

	case "dellist":
		
		$id=$_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sqlstmt="select * from $GLOBALS[db_sp].`partner` where id=".$id[$i];
			$r = $GLOBALS["sp"]->getRow($sqlstmt);
			if(file_exists($path_dir."/".$r['img_vn'])) unlink($path_dir."/".$r['img_vn']);
	
			$sql="delete from $GLOBALS[db_sp].partner  where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);
		}
		
		$url = "index.php?do=partner&cid=".$_GET['cid'];
		page_transfer2($url);
	break;

	case "show":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].partner SET active=1 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=partner&cid=".$_GET['cid'];
		page_transfer2($url);
	break;

	case "hide":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].partner SET active=0 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=partner&cid=".$_GET['cid'];
		page_transfer2($url);
		
	break;

		
	case "order":
		$id = $_POST["id"];	
		$ordering=$_POST["ordering"];
		//die(print_r($_POST["ordering"]));		
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].partner SET num=".$ordering[$i]." where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=partner&cid=".$_GET['cid'];
		page_transfer2($url);	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=partner&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		
		if(isset($_GET['cid']) && $_GET['cid']!=1)
			$sql="select * from $GLOBALS[db_sp].partner where cid=".$_GET['cid']." order by num asc, id desc ";
		else
			$sql="select * from $GLOBALS[db_sp].partner order by num asc, id desc ";
		
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=partner&cid=".$_GET['cid']; //set url for paginator
		$iSEGSIZE=20;
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
		
		$template = "partner/list.tpl";
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
	
	$arr['name_vn']= trim($_POST["name_vn"]);
	$arr['link']= trim($_POST["link"]);
	
	$arr['num'] = $_POST["num"];
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	$arr['cid']=$_POST["cat"];

	if(isset($_FILES['img_vn']['name'] ) && $_FILES['img_vn']['size']>0){
		$img = $_FILES['img_vn']['name'];	
		$start = strpos($img,".");
		$type = substr($img,$start,strlen($img));
		$filename = 'partner-'.time().$type;
		
		$filename = strtolower($filename);
		$filename = RenameFile($filename);
		copy($_FILES['img_vn']['tmp_name'], "../hinh-anh/doi-tac/" . $filename) ;
		$arr['img_vn'] = "hinh-anh/doi-tac/" . $filename;
	}
	
	if ($act=="addsm")
	{
		vaInsert('partner',$arr);
	}
	else
	{
		$id = $_POST['id'];
		
		$sqlstmt="select * from $GLOBALS[db_sp].`partner` where id=$id";
		$r = $GLOBALS["sp"]->getRow($sqlstmt);
		if (isset($arr['img_vn'])){
			if($arr['img_vn'] != $r['img_vn'])
				if(file_exists($path_dir."/".$r['img_vn'])) unlink($path_dir."/".$r['img_vn']);
		}	
		////Xóa Img khi chon Xoa/////
		if($_POST['del_img_vn']=='del_img_vn'){
			unlink($path_dir."/".$r['img_vn']);
			$arr['img_vn'] = "";
		}
		vaUpdate('partner',$arr,' id='.$id);
	}	
}
?>