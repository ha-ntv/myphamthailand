<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
////////load city
$sql_city = "select * from $GLOBALS[db_sp].city where active=1 order by id asc";
$rs_city = $GLOBALS["sp"]->getAll($sql_city);
$smarty->assign("city",$rs_city);

switch($act){
	case "copy":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$cid  = $_GET["cid"];
			$id  = $_GET["id"];
			$sql_pr = "select * from $GLOBALS[db_sp].thongtinchung  where id=$id";
			$rs_pr = $GLOBALS["sp"]->getRow($sql_pr);
			$smarty->assign("view",$rs_pr);
			$smarty->assign("cid_share",explode(",",$rs_pr['cid_share']));
		
		
			//$sql = "select * from $GLOBALS[db_sp].categories where pid = (select pid from $GLOBALS[db_sp].categories where id=$cid) and id <> $cid order by num asc, id desc";
			$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and id in (11,91) order by num asc, id desc ";
			$rs = $GLOBALS["sp"]->getAll($sql);
	
			$smarty->assign("cidother",$cid);	
			$smarty->assign("copy",$rs);	
			$template = "thongtinchung/copy.tpl";
		}
	break;
	
	case "copysm":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_GET["id"];
			$cid = $_GET["cid"];
			$p = $_GET["p"];
			
			$cid_share=$_POST["iddel"];
			$str = implode(",",$cid_share);
			if($str=="")
				$str = "0";
			$str = "0,".$str.",0";
			
			$arr['cid_share'] = $str;
			
			vaUpdate('thongtinchung',$arr,' id='.$id);
			$url = "index.php?do=thongtinchung&act=copy&id=".$id."&cid=".$cid;
			page_transfer2($url);
		}
	break;
	
	case "edit":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].thongtinchung where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$smarty->assign("edit",$rs);
			
			$template = "thongtinchung/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$template = "thongtinchung/edit.tpl";
		}
	
	break;

	case "dellist":
		if(!checkPermision($_GET["cid"],3)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				
				$sqlstmt="select * from $GLOBALS[db_sp].`thongtinchung` where id=".$id[$i];
				$r = $GLOBALS["sp"]->getRow($sqlstmt);
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
				if(file_exists($path_dir."/".$r['img_thumb_en'])) unlink($path_dir."/".$r['img_thumb_en']);
				if(file_exists($path_dir."/".$r['img_vn']))	unlink($path_dir."/".$r['img_vn']);
				if(file_exists($path_dir."/".$r['img2_vn']))	unlink($path_dir."/".$r['img2_vn']);
				if(file_exists($path_dir."/".$r['img3_vn']))	unlink($path_dir."/".$r['img3_vn']);
				if(file_exists($path_dir."/".$r['img4_vn']))	unlink($path_dir."/".$r['img4_vn']);
				if(file_exists($path_dir."/".$r['img5_vn']))	unlink($path_dir."/".$r['img5_vn']);
				
				$sql="delete from $GLOBALS[db_sp].colorsize where idpr=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
				
				$sql="delete from $GLOBALS[db_sp].comment where idpr=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
				
				$sql="delete from $GLOBALS[db_sp].thongtinchung  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);
		}
		
	break;
	
	
	case "crmhtehangshow":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET crmhethang=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
	
	case "crmhethanghide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET crmhethang=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
		
	case "order":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&cid=".$_GET['cid'];
			page_transfer2($url);	
		}
	break;
	
	case "orderhot":
		if(!checkPermision(-5,2)){
			page_permision();
			$page="index.php?do=thongtinchung&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].thongtinchung SET orderhot=".$ordering[$i]." where id=".$id[$i];
				//die($sql);
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=thongtinchung&act=hot&cid=".$_GET["cid"];
			page_transfer2($url);	
		}
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=thongtinchung&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;
	
	default:
		$sql="select * from $GLOBALS[db_sp].thongtinchung where cid=".$_GET['cid']." order by idcity asc, num asc, id desc ";
		$template = "thongtinchung/list.tpl";
		
		$total = count($GLOBALS["sp"]->getAll($sql));
		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=thongtinchung&cid=".$_GET['cid']; //set url for paginator
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

		if(checkPermision($_GET["cid"],1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($_GET["cid"],2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($_GET["cid"],3))
			$smarty->assign("checkPer3","true");
		
		///////////////////////////
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
	$arr['idcity']= trim($_POST["idcity"]);
	$arr['name_vn']= trim($_POST["name_vn"]);
	$arr['content_vn']= $_POST["content_vn"];	
	
	$arr['num'] = $_POST["num"];
	$arr['cid']=$_POST["cat"];
	if ($act=="addsm")
	{
		$arr['active'] = 1;
		vaInsert('thongtinchung',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('thongtinchung',$arr,' id='.$id);
	}
	
}
?>