<?php
////////load componant/////////
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$cid  = $_GET["cid"];
$idpr  = $_GET["idpr"];
$sql_pr = "select * from $GLOBALS[db_sp].products  where id=$idpr";
$rs_pr = $GLOBALS["sp"]->getRow($sql_pr);
$smarty->assign("viewpr",$rs_pr);

switch($act){	
	
	case "edit":
		//die($path_url);
		$id  = $_GET["id"];
		$sql = "select * from $GLOBALS[db_sp].tags where id=$id";
		$rs = $GLOBALS["sp"]->getRow($sql);
		
				
		$smarty->assign("edit",$rs);	
		$template = "tags/edit.tpl";
	break;

	case "add":
		$template = "tags/edit.tpl";
	
	break;

	case "dellist":
		$id=$_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="delete from $GLOBALS[db_sp].tags  where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);
			
		}
		$url = "index.php?do=tags&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	case "show":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].tags SET active=1 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=tags&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	case "hide":
		$id = $_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].tags SET active=0 where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=tags&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
		page_transfer2($url);
		
	break;

		
	case "order":
		$id = $_POST["id"];	
		$ordering=$_POST["ordering"];
		//die(print_r($_POST["ordering"]));		
		for($i=0;$i<count($id);$i++){
			$sql="update $GLOBALS[db_sp].tags SET num=".$ordering[$i]." where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);		
		}
		$url = "index.php?do=tags&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
		page_transfer2($url);	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=tags&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
	
		$sql="select * from $GLOBALS[db_sp].tags where idpr=$idpr order by num asc, id desc ";
		/*
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=tags&cid=".$_GET['cid']; //set url for paginator
		$iSEGSIZE=20;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
		
		$sql = $sql." limit $begin,$num_rows_page";
		*/
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "tags/list.tpl";
		
		/////check Perm
		if(checkPermision($_GET["cid"],1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($_GET["cid"],2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($_GET["cid"],3))
			$smarty->assign("checkPer3","true");
	break;
}

$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	foreach($_POST["name_vn"] as $value){
		if($value){
			
			$arr['name_vn']= trim($value);
			$arr['idpr']= trim($_POST["idpr"]);
			$arr['cid']= trim($_POST["cat"]);
			
			$arr['num'] = $_POST["num"];
			$arr['active'] = $_POST['active']=='active'?'1':'0';
			
			$arr['unique_key']=$_POST["unique_key"];	
			$arr['title']=$_POST["title"];
		
			$arr['title_link'] = $_POST["title_link"];
			$arr['keyword']=$_POST["keyword"];
			$arr['des']=$_POST["des"];
			
			$arr['unique_key'] = StripUnicode(trim($arr['name_vn']));
			
			if ($act=="addsm")
			{
				$sql_count="select * from $GLOBALS[db_sp].tags where idpr=".$arr['idpr']." and BINARY name_vn='".$arr['name_vn']."' limit 1";
				$rs_count = ceil(count($GLOBALS["sp"]->getAll($sql_count)));
				if($rs_count <= 0)
					vaInsert('tags',$arr);
			}
			else
			{
				$id = $_POST['id'];
				$sql_count="select * from $GLOBALS[db_sp].tags where idpr=".$arr['idpr']." and BINARY name_vn='".$arr['name_vn']."' and id <> $id limit 1";
				$rs_count = ceil(count($GLOBALS["sp"]->getAll($sql_count)));
				
				if($rs_count <= 0)
					vaUpdate('tags',$arr,' id='.$id);		
			}
			
		}
	}
	
}
?>