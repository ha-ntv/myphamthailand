<?php
$idpem = 1; // cho phần serial
$act = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
////////////////////
$sqlbh="select * from $GLOBALS[db_sp].baohanh where active=1 order by id asc";
$rsbh = $GLOBALS["sp"]->getAll($sqlbh);
$smarty->assign("baohanh",$rsbh);

///////////////////
$sql="select * from $GLOBALS[db_web].products where id=".$_REQUEST['cat2'];
$rs = $GLOBALS["web"]->getRow($sql);
$smarty->assign("namePr",$rs);

$sql = "select * from $GLOBALS[db_web].categories where pid=2 and crm=1 order by num asc, id desc ";
$rs = $GLOBALS["web"]->getAll($sql);
$smarty->assign("catPr",$rs);
switch($act){
	case "trahang":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql="update $GLOBALS[db_sp].serial SET active=1 where idcity in (".$_SESSION['admin_showCity'].") and id=".$id;
			$GLOBALS["sp"]->execute($sql);				
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($url);
		}
	break;
	case "banhang":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql="update $GLOBALS[db_sp].serial SET active=0 where idcity in (".$_SESSION['admin_showCity'].") and id=".$id;
			$GLOBALS["sp"]->execute($sql);				
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($url);
		}
	break;
	case "baohanh":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$baohanh = isset($_REQUEST['cat5'])?$_REQUEST['cat5']:1;
			$id  = $_GET["cat4"];
			$sql="update $GLOBALS[db_sp].serial SET baohanh='".$baohanh."' where idcity in (".$_SESSION['admin_showCity'].") and id=".$id;
			$GLOBALS["sp"]->execute($sql);				
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat6']."/";
			page_transfer2($url);
		}
	break;
	
	case "baohanhxong":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql="update $GLOBALS[db_sp].serial SET baohanh=0 where idcity in (".$_SESSION['admin_showCity'].") and id=".$id;
			$GLOBALS["sp"]->execute($sql);		
					
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($url);
		}
	break;
	
	case "delete":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat4']);		
			$sql="delete from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and id=$id";
			$GLOBALS["sp"]->execute($sql);	
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($url);
		}
	break;
	
	case "view":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url."/serial/2/0/search/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql = "select * from $GLOBALS[db_sp].serial where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);		
			$smarty->assign("edit",$rs);	
			$template = "serial/edit.tpl";
		}
	break;
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat4"];
			$sql = "select * from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);	
			if(empty($rs['id'])){
				$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
				page_transfer2($url);
			}		
			$smarty->assign("edit",$rs);	
			$template = "serial/edit.tpl";
		}
	break;
	
	case "add":
		//$template = "serial/add.tpl";
		//page_transfer2($url);
	break;
	
	case "addsm":
	case "editsm":
		$maphieu = isset($_POST['maphieu'])?$_POST['maphieu']:0;
		Editsm();
		$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$maphieu."/";
		page_transfer2($url);
	break;
	case "search":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$_REQUEST['cat5']."/";
			page_transfer2($page);
		}
		else{
			$wh = " 1=1 ";
			if(!empty($_SESSION['whsCodes'])){
				$wh .= " and code = '".$_SESSION['whsCodes']."' ";
				$smarty->assign("codes",$_SESSION['whsCodes']);
			}
			if(!empty($_SESSION['whsDateds'])){
				$wh .= " and dated = '".$_SESSION['whsDateds']."' ";
				$smarty->assign("dateds",$_SESSION['whsDateds']);
			}
			if(!empty($_SESSION['whsIdpartners'])){
				$wh .= " and idpartner = '".$_SESSION['whsIdpartners']."' ";
				$smarty->assign("idpartner",$_SESSION['whsIdpartners']);
			}
	
			$sql = "select * from $GLOBALS[db_sp].serial where $wh and idcity in (".$_SESSION['admin_showCity'].") order by dated desc, id desc";
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/serial/2/0/search"; //set url for paginator
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
			$template = "serial/search.tpl";
			
			/////check Perm
			if(checkPermision($idpem,1))
				$smarty->assign("checkPer1","true");
			if(checkPermision($idpem,2))
				$smarty->assign("checkPer2","true");
			if(checkPermision($idpem,3))
				$smarty->assign("checkPer3","true");
		}
	break;
	
	case "viewbaohanh":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$sql = "select * from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and baohanh in (1,2) and cid > 0 group by cid order by cid asc";
			$rs = $GLOBALS["sp"]->getAll($sql);
			$smarty->assign("view",$rs);
			$template = "serial/viewbaohanh.tpl";
			$smarty->assign("checkMaybaohanh","class='active'");
		}
		
		/////check Perm trong Function insert_getViewDtBaohanh
	break;
	
	default:
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url.'/';
			page_transfer2($page);
		}
		else{
			$wh = "";
			$maphieu = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:0;
			$smarty->assign("maphieu",$maphieu);
			if(!empty($maphieu))
				$wh = " and maphieu='".$maphieu."' ";
			$idpr = trim($_GET['cat2']);
			$sql="select * from $GLOBALS[db_sp].serial where idpr=$idpr and idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
	
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/serial/".$_REQUEST['cat1']."/".$_REQUEST['cat2']."/".$maphieu; //set url for paginator
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
			$template = "serial/list.tpl";
			
			/////check Perm
			if(checkPermision($idpem,1))
				$smarty->assign("checkPer1","true");
			
			if(checkPermision($idpem,2))
				$smarty->assign("checkPer2","true");
			
			if(checkPermision($idpem,3))
				$smarty->assign("checkPer3","true");
		}
	break;
}
$smarty->assign("checkHanghoa","class='Active'");
$smarty->assign("checkHanghoa1","class='active'");
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");


function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
	$idpr = trim($_POST["idprphieu"]);
	$cidphieu = trim($_POST["cidphieu"]);
	
	if( $idpr > 0 )
		$arr['idpr']= $idpr;
	if( $cidphieu > 0 )
		$arr['cid']= $cidphieu;
		
	$arr['idpartner'] = $idpartner = trim($_POST["idpartner"]);
	$arr['idcity'] = $_SESSION['admin_showCity'];
	$arr['code']= trim($_POST["code"]);	
	$arr['pricenhap'] = trim($_POST["pricenhap"]);
	$arr['pricenhap'] = $pricenhap = str_replace(".", "", $arr['pricenhap']);
	$arr['dated']= trim($_POST["dated"]);
	
	$arr['baohanh']= trim($_POST["baohanh"]);
	$arr['content_baohanh']= trim($_POST["content_baohanh"]);
/*
	$maphieu = isset($_POST['maphieu'])?$_POST['maphieu']:0;
	if(!empty($maphieu))
		$arr['maphieu'] = $maphieu;
*/
	if ($act=="addsm")
	{
		vaInsert('serial',$arr); /// thêm dữ liệu đầu tiên
		$price = $codeall = array();
		$codeall = $_POST["codeall"];
		$price = $_POST["price"];
		$partnerall = $_POST["partnerall"];
		//print_r($price[1]); die();
		for($i=0;$i<=count($codeall);$i++){
			$code = trim($codeall[$i]);
			$priceTam = trim($price[$i]);	
			$partnerTam = trim($partnerall[$i]);	
			if(!empty($code)){
				$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='".$code."'";
				$rs = $GLOBALS["sp"]->GetAll($sql);
				
				if(ceil(count($rs)) <= 0){
					if(!empty($priceTam)){
						$arr['pricenhap'] = str_replace(".", "", $priceTam);
					}
					else{
						$arr['pricenhap'] = $pricenhap;
					}
					if(!empty($partnerTam)){
						$arr['idpartner'] = $partnerTam;
					}
					else{
						$arr['idpartner'] = $idpartner;
					}
					$arr['code'] = $code;
					
					vaInsert('serial',$arr);
				}	
			}
				
		}
		
		/*
		$sql = " select * from $GLOBALS[db_web].colorsize 
				 where idcity=".$_SESSION['admin_showCity']." 
				 and idpr=$idpr
		";
		$rs = $GLOBALS["web"]->getRow($sql);
		if(!empty($rs['id'])){
			//$arrserial['soluong_vn'] = $rs['soluong_vn'] + $arr['soluong'];
			$arrserial['price_vn'] = $arr['price'];	
			vaUpdateWeb('colorsize',$arrserial,' id='.$rs['id']);	
		}
		else{
			$arrserial['idpr'] = $arr['idpr'];
			$arrserial['idcity'] = $_SESSION['admin_showCity'];
			
			//$arrserial['soluong_vn'] = $arr['soluong'];
			$arrserial['price_vn'] = $arr['price'];	
			
			vaInsertWeb('colorsize',$arrserial);
		}
		*/
	}
	else
	{
		$id = trim($_POST['id']);
		//////////////////////////////////////////	
		vaUpdate('serial',$arr,' id='.$id);
		/*
		$sql = " select * from $GLOBALS[db_web].colorsize 
				 where idcity=".$_SESSION['admin_showCity']." 
				 and idpr=$idpr
		";
		$rs = $GLOBALS["web"]->getRow($sql);
		if(!empty($rs['id'])){
			//$arrserial['soluong_vn'] = $rs['soluong_vn'] + $arr['soluong'];
			$arrserial['price_vn'] = $arr['price'];	
			vaUpdateWeb('colorsize',$arrserial,' id='.$rs['id']);	
		}
		else{
			$arrserial['idpr'] = $arr['idpr'];
			$arrserial['idcity'] = $_SESSION['admin_showCity'];
			
			//$arrserial['soluong_vn'] = $arr['soluong'];
			$arrserial['price_vn'] = $arr['price'];	 
		}
		*/
	}
}
?>