<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$smarty->assign("yearView",date("Y")+1);
$idpem = -1;
switch($act){
	case "changes":
		if($_POST){
			$pw = md5($_POST['password']);
			$sql = "UPDATE $GLOBALS[db_sp].member  SET 
					password = '$pw'
					where id = ".$_SESSION['member_artseed_id']."
			";
			
			$GLOBALS["sp"]->execute($sql);
			$url = "index.php";
			page_transfer2($url);
		}
		$template = "member/changes.tpl";
	break;
		case "show":
			if(!checkPermision($idpem,2)){
				page_permision();
				$page="index.php?do=member&cid=".$_GET['cid'];
				page_transfer2($page);
			}
			else{
				$id = $_POST["iddel"];
				for($i=0;$i<count($id);$i++){
					$sql="update $GLOBALS[db_sp].member SET active=1 where id=".$id[$i];
					$GLOBALS["sp"]->execute($sql);		
				}
				$url = "index.php?do=member&cid=".$_GET['cid'];
				page_transfer2($url);
			}
	break;

	case "hide":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].member SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

		
	case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].member SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($url);
		}	
	break;
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].member where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
			$smarty->assign("edit",$rs);	
			$template = "member/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page="index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{	
			$template = "member/edit.tpl";
		}	
	
	break;

	case "dellist":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page="index.php?do=member&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].member  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
		}
		$url = "index.php?do=member";
		page_transfer2($url);
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=member&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		$type = isset($_REQUEST['type'])?$_REQUEST['type']:0; 
		$smarty->assign("type",$type);
		$wh = ' where type='.$type;
		$sql="select * from $GLOBALS[db_sp].member $wh order by id desc ";
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=member&type=".$type; //set url for paginator
		$iSEGSIZE=20;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "member/list.tpl";
		/////check Perm
		if(checkPermision($idpem,1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($idpem,2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($idpem,3))
			$smarty->assign("checkPer3","true");
	break;
}
$smarty->assign("tabmenu",4);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	if($_REQUEST['act'] != editsm)
		$arr['password']= md5($_POST["password"]);
			
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	$arr['name']= trim($_POST["name"]);
	$arr['day']= trim($_POST["day"]);
	$arr['month']= trim($_POST["month"]);
	$arr['year']= trim($_POST["year"]);
	$arr['username']= $_POST["username"];
	$arr['phone']= trim($_POST["phone"]);
	$arr['email']= trim($_POST["email"]);
	$arr['address']= trim($_POST["address"]);
	$arr['type'] = $_POST['type']=='nhanvienct'?'1':'0';
	if ($act=="addsm")
	{
		$new_id = vaInsert('member',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('member',$arr,' id='.$id);
	}
	
}
?>