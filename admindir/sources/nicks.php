<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
switch($act){
	case "edit":
		//die($path_url);
		$id  = $_GET["id"];
		$sql = "select * from $GLOBALS[db_sp].nicks where id=$id";
		$rs = $GLOBALS["sp"]->getRow($sql);
		
		
		$smarty->assign("edit",$rs);	
		$template = "nicks/edit.tpl";
	break;
	case "add":
		$template = "nicks/edit.tpl";
	
	break;
	case "dellist":
		
		$id=$_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sqlstmt="select * from $GLOBALS[db_sp].`articles` where id=".$id[$i];
			$r = $GLOBALS["sp"]->getRow($sqlstmt);
			if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
			
			$sql="delete from $GLOBALS[db_sp].nicks  where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);
		}
		$url = "index.php?do=nicks&cid=".$_GET['cid'];
		page_transfer2($url);
	break;
	case "show":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].nicks SET active=1 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=nicks&cid=".$_GET['cid'];
		page_transfer2($url);
	break;
	case "hide":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].nicks SET active=0 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=nicks&cid=".$_GET['cid'];
		page_transfer2($url);
		
	break;
		
	case "order":
		$id = $_POST["id"];	
		$ordering=$_POST["ordering"];
		//die(print_r($_POST["ordering"]));		
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].nicks SET num=".$ordering[$i]." where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=nicks&cid=".$_GET['cid'];
		page_transfer2($url);	
	break;
	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=nicks&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;
	default:
		
		$sql="select * from $GLOBALS[db_sp].nicks order by num asc, id desc ";
		
		$total = count($GLOBALS["sp"]->getAll($sql));
		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=nicks&cid=".$_GET['cid']; //set url for paginator
		$iSEGSIZE=20;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "nicks/list.tpl";
	break;
}
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");
function Editsm()
{
	global $path_url;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name_vn']= $_POST["name_vn"];
	$arr['yahoo']= $_POST["yahoo"];
	
	$arr['skype']= $_POST["skype"];
	$arr['yahoo']= $_POST["yahoo"];
	
	$arr['phone']= $_POST["phone"];
	$arr['email']= $_POST["email"];
	$arr['num'] = $_POST["num"];
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	$arr['cid']=$_POST["cat"];
	
	if ($act=="addsm")
	{
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/picture/chat-online/".$filename)){
				$sql="select max(id)+1 from $GLOBALS[db_sp].nicks";
				$idmax = $GLOBALS["sp"]->getOne($sql);
				
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$idmax.'.'.$fileRename[1];
			}
			///////////////////////////////////	
			copy($_FILES['img_thumb_vn']['tmp_name'], "../picture/chat-online/" . $filename) ;
			$arr['img_thumb_vn'] = "picture/chat-online/" . $filename;
		}
		vaInsert('nicks',$arr);
		
	}
	else
	{
		$id = $_POST['id'];
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/picture/chat-online/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$id.'.'.$fileRename[1];
			}
			///////////////////////////////////	
			copy($_FILES['img_thumb_vn']['tmp_name'], "../picture/chat-online/" . $filename) ;
			$arr['img_thumb_vn'] = "picture/chat-online/" . $filename;
		}
		/* xoa hinh */
		$sqlstmt="select * from $GLOBALS[db_sp].`articles` where id=$id";
		$r = $GLOBALS["sp"]->getRow($sqlstmt);
		
		if (isset($arr['img_thumb_vn'])){
			if($arr['img_thumb_vn'] != $r['img_thumb_vn'])
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
		}	
		////Xóa Img khi chon Xoa/////
		if($_POST['del_thumb_vn']=='del_thumb_vn'){
			unlink($path_dir."/".$r['img_thumb_vn']);
			$arr['img_thumb_vn'] = "";
		}
		
		vaUpdate('nicks',$arr,' id='.$id);
	}
	
}
?>