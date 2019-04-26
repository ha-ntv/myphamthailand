<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$idpem = 136;
switch($act){
	case "dellist":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page="index.php?do=saleup&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].saleup  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=saleup&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
		
	case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=saleup&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].saleup SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=saleup&cid=".$_GET['cid'];
			page_transfer2($url);
		}	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=saleup&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		$wh = '';
		$idCity = isset($_POST['idCity'])?$_POST['idCity']:1;
		$dateds = trim($_POST['dateds']);
		$phones = trim($_POST['phones']);
		
		$sql = "select * from $GLOBALS[db_sp].city where active=1 order by name asc";
		$rs = $GLOBALS["sp"]->getAll($sql);
		$smarty->assign("city",$rs);
		
		
		$wh ='';
		if($idCity){
			$wh .= ' and idcity='.$idCity;
			$smarty->assign("cityShow",$idCity);
		}
		if($dateds){
			$wh .= ' and dated="'.$dateds.'" ';
			$smarty->assign("dateds",$dateds);
		}
		if($phones){
			$wh .= ' and phone="'.$phones.'" ';
			$smarty->assign("phones",$phones);
		}
		
		
		$sql="select * from $GLOBALS[db_sp].saleup where 1=1  $wh order by id desc";
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=saleup&cid=".$_GET['cid']; //set url for paginator
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
		
		$template = "saleup/list.tpl";
		
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
?>