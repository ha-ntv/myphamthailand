<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
if($act=='changes'){
	if($_POST){
		$pw = md5($_POST['password']);
		$sql = "UPDATE $GLOBALS[db_sp].admin  SET 
				password = '$pw'
				where id = ".$_SESSION['admin_artseed_id']."
		";
		
		$GLOBALS["sp"]->execute($sql);
		$url = "index.php";
		page_transfer2($url);
	}
	$template = "users/changes.tpl";
}
else{
	if(!checkPer()){
		page_permision();
		$page="index.php";
		page_transfer2($page);
	}
	else
	{
		switch($act){
			case "edit":
				
				$id  = $_GET["id"];
				$sql = "select * from $GLOBALS[db_sp].admin where id=$id";
				$rs = $GLOBALS["sp"]->getRow($sql);
				
				$smarty->assign("edit",$rs);	
				$template = "users/edit.tpl";
			break;
		
			case "add":
				$template = "users/edit.tpl";
			
			break;
		
			case "dellist":
				
				$id=$_POST["iddel"];
				for($i=0;$i<count($id);$i++){
					$sql="delete from $GLOBALS[db_sp].admin  where id=".$id[$i];
					$GLOBALS["sp"]->execute($sql);
				}
				
				$url = "index.php?do=users";
				page_transfer2($url);
			break;
		
			case "addsm":
			case "editsm":
				Editsm();
				$url = "index.php?do=users&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
				page_transfer2($url);
			break;
		
			default:
				
				
				$sql="select * from $GLOBALS[db_sp].admin where `group` <> '-1' order by id desc ";
				
				$total = count($GLOBALS["sp"]->getAll($sql));
		
				$num_rows_page = $numPageAll;
				$num_page = ceil($total/$num_rows_page);
				
				$begin = ($page - 1)*$num_rows_page;
				$url = "index.php?do=users"; //set url for paginator
				$iSEGSIZE=20;
				$link_url = "";
				
				if($num_page > 1 )
					$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
				
				$sql = $sql." limit $begin,$num_rows_page";
				$rs = $GLOBALS["sp"]->getAll($sql);
				
				$smarty->assign("link_url",$link_url);
				$smarty->assign("view",$rs);
				
				$template = "users/list.tpl";
			break;
		}
	}
}
$smarty->assign("tabmenu",1);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");
function Editsm()
{
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['username']= $_POST["username"];
	$arr['password']= md5($_POST["password"]);
	$arr['email'] = $_POST["email"];
	$arr['group']=1;
	
	if ($act=="addsm")
	{
		$new_id = vaInsert('admin',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('admin',$arr,' id='.$id);
	}
	
}
?>