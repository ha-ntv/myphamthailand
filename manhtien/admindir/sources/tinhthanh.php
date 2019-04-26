<?php
if(!checkPer()){
	page_permision();
	$page="index.php";
	page_transfer2($page);
}
else
{
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	switch($act){
		case "edit":
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].tinhthanh where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
					
			$smarty->assign("edit",$rs);	
			$template = "tinhthanh/edit.tpl";
		break;
	
		case "add":
			$template = "tinhthanh/edit.tpl";
		break;
	
		case "dellist":
			
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql1 = "delete from $GLOBALS[db_sp].tinhthanh where cid=".$id[$i]; 
				$GLOBALS["sp"]->execute($sql1);
			
				$sql="delete from $GLOBALS[db_sp].tinhthanh  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "show":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].tinhthanh SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "hide":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].tinhthanh SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
			page_transfer2($url);
			
		break;
	
			
		case "order":
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].tinhthanh SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
			page_transfer2($url);	
		break;
	
		case "addsm":
		case "editsm":
			Editsm();
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		default:
			
			if(isset($_GET['cid']))
				$sql="select * from $GLOBALS[db_sp].tinhthanh where cid=".$_GET['cid']." order by num asc, id asc ";
			else
				$sql="select * from $GLOBALS[db_sp].tinhthanh order by num asc, id asc ";
			
			$total = count($GLOBALS["sp"]->getAll($sql));
	
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = "index.php?do=tinhthanh&cid=".$_GET['cid']; //set url for paginator
			$iSEGSIZE=20;
			$link_url = "";
			
			if($num_page > 1 )
				$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			
			$smarty->assign("link_url",$link_url);
			$smarty->assign("view",$rs);
			
			$template = "tinhthanh/list.tpl";
		break;
	}
	$smarty->assign("tabmenu",7);
	$smarty->display("header.tpl");
	$smarty->display($template);
	$smarty->display("footer.tpl");
}

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name_vn']= $_POST["name_vn"];
	$arr['name_en']= $_POST["name_en"];
	$arr['has_child'] = $_POST['has_child']=='has_child'?'1':'0';
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	
	$arr['cid']=$_POST["cat"];

	if ($act=="addsm")
	{
		vaInsert('tinhthanh',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('tinhthanh',$arr,' id='.$id);
	}	
}
?>