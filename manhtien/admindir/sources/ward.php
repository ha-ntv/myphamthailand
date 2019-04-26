<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$idpem = -3;
switch($act){
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].ward where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
					
			$smarty->assign("edit",$rs);	
			$template = "ward/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{	
			$template = "ward/edit.tpl";
		}
	break;

	case "dellist":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].ward  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].ward SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].ward SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

		
	case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].ward SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		}	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		$sql="select * from $GLOBALS[db_sp].ward where district_id=".$_GET['district_id']." order by num asc, name asc ";
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=ward&city_id=".$_GET['city_id']."&district_id=".$_GET['district_id']; //set url for paginator
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
		
		$template = "ward/list.tpl";
		/////check Perm
		if(checkPermision($idpem,1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($idpem,2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($idpem,3))
			$smarty->assign("checkPer3","true");
	break;
}
$smarty->assign("tabmenu",8);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");
	
function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name']= trim($_POST["name"]);
	$arr['district_id']=trim($_POST["district_id"]);
	
	$arr['num']= trim($_POST["num"]);
	$arr['active'] = $_POST['active']=='active'?'1':'0';

	if ($act=="addsm")
	{
		vaInsert('ward',$arr);
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('ward',$arr,' id='.$id);
	}	
}
?>