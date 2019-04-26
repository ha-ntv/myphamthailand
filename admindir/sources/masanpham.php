<?php
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	$cid  = $_GET["cid"];
	switch($act){
		case "edit":
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].masanpham where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
					
			$smarty->assign("edit",$rs);	
			$template = "masanpham/edit.tpl";
		break;
	
		case "add":
			$template = "masanpham/edit.tpl";
		break;
	
		case "dellist":
			
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				
				$sql="delete from $GLOBALS[db_sp].masanpham  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=masanpham&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "show":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].masanpham SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=masanpham&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "hide":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].masanpham SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=masanpham&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
			
		break;
	
			
		case "order":
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].masanpham SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=masanpham&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);	
		break;
	
		case "addsm":
		case "editsm":
			Editsm();
			$url = "index.php?do=masanpham&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		default:
			
			$sql="select * from $GLOBALS[db_sp].masanpham where cid=$cid order by num asc, id desc ";
			$total = count($GLOBALS["sp"]->getAll($sql));
	
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = "index.php?do=masanpham&act=list&cid=$cid"; //set url for paginator
			
			$iSEGSIZE=20;
			$link_url = "";
			
			if($num_page > 1 )
				$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			
			$smarty->assign("link_url",$link_url);
			$smarty->assign("view",$rs);
			
			$template = "masanpham/list.tpl";
		break;
	}
	$smarty->assign("tabmenu",0);
	$smarty->assign("masanpham",'class="ActiveMenu"');
	$smarty->display("header.tpl");
	$smarty->display($template);
	$smarty->display("footer.tpl");
	
function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['cid']= trim($_POST["cid"]);
	$arr['name_vn']= trim($_POST["name_vn"]);
	$arr['code']= trim($_POST["code"]);
	
	if ($act=="addsm")
	{
		vaInsert('masanpham',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('masanpham',$arr,' id='.$id);
	}	
}
?>