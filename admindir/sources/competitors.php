<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$idkhuvuc = trim(isset($_REQUEST['type'])?$_REQUEST['type']:1);
$idpem = -6;

$sql = "select * from $GLOBALS[db_sp].categories where crm=1 order by num asc, id desc ";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("catPr",$rs);

switch($act){
	case "edit":
		//die($path_url);
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=competitors&cid=".$_GET["cid"]."&type=".$idkhuvuc;
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].competitors where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
					
			$smarty->assign("edit",$rs);	
			$template = "competitors/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page="index.php?do=competitors&cid=".$_GET["cid"]."&type=".$idkhuvuc;
			page_transfer2($page);
		}
		else{	
			$template = "competitors/edit.tpl";
		}
	
	break;

	case "dellist":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page="index.php?do=competitors&cid=".$_GET["cid"]."&type=".$idkhuvuc;
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].competitors  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=competitors&cid=".$_GET['cid']."&type=".$idkhuvuc;
			page_transfer2($url);
		}
	break;
	
	case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=competitors&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].competitors SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=competitors&cid=".$_GET['cid']."&type=".$idkhuvuc;
			page_transfer2($url);
		}	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=competitors&cid=".$_GET['cid']."&type=".$idkhuvuc."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		
		$sql="select * from $GLOBALS[db_sp].competitors where type = ".$idkhuvuc." order by num asc, id desc ";
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=competitors&cid=".$_GET['cid']; //set url for paginator
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
		
		$template = "competitors/list.tpl";
		
		/////check Perm
		if(checkPermision($idpem,1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($idpem,2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($idpem,3))
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
	global $path_url,$path_dir,$idkhuvuc;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['cid']= trim($_POST["cid"]);	
	$arr['idpr']= trim($_POST["idpr"]);
	$arr['type']= $idkhuvuc;
	$arr['num'] = $_POST["num"];
	
	if ($act=="addsm")
	{
		$arrDay = getdate();
		$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
		vaInsert('competitors',$arr);						
	}
	else
	{
		$id = $_POST['id'];
		vaUpdate('competitors',$arr,' id='.$id);
		
	}
	
}
?>