<?php
$idpem = 2;
$smarty->assign("thongke",thongkekho());
if($_POST){
	$act = isset($_POST['actthongke'])?$_POST['actthongke']:"";
	$smarty->assign("idthongke",$act);
}
else
	$act = isset($_REQUEST['cat1'])?$_REQUEST['cat1']:"";
switch($act){
	case "nhap-hang":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			if($_POST){
				$FromDate =  isset($_POST['FromDate'])?$_POST['FromDate']:"";
				$ToDate =  isset($_POST['ToDate'])?$_POST['ToDate']:"";	
				$smarty->assign("FromDate",$FromDate);
				$smarty->assign("ToDate",$ToDate);
				
				if(!empty($FromDate))
					$wh.=' and dated >= "'.$FromDate.'" ';
				if(!empty($ToDate))
					$wh.=' and dated <= "'.$ToDate.'" ';
					
				/*
				
				$sqlid="select idpr from $GLOBALS[db_sp].serial where idcity=".$_SESSION['admin_showCity']."  $wh group by idpr";
				$rsid = $GLOBALS["sp"]->getCol($sqlid); 
				if($rsid){
					$rsid = implode(',',$rsid);
					$sql=" select * from $GLOBALS[db_web].products 
							where id in ($rsid)
							order by id desc
					";
					$rs = $GLOBALS["web"]->getAll($sql); 
					$smarty->assign("view",$rs);
				}	
				*/
				$sqlid = "select cid from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and cid > 0 $wh group by cid";
				$rsid = $GLOBALS["sp"]->getCol($sqlid);
				if($rsid){
					$rsid = implode(',',$rsid);	
					$sql="  select * from $GLOBALS[db_web].categories where id in ($rsid) order by num asc, id desc";
					$rs = $GLOBALS["web"]->getAll($sql);  
					$smarty->assign("view",$rs);
				}
			}
			$smarty->assign("checkBanhang",1);
			$template = "thong-ke/list.tpl";
			$smarty->assign("Title",'Thống kê nhập hàng');
		}	
	break;
	
	case "view-nhap-hang":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$idpr = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
			$FromDate =  isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
			$ToDate =  isset($_REQUEST['cat4'])?$_REQUEST['cat4']:"";
			
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
				
			$sql = "select * from $GLOBALS[db_sp].serial where idpr=$idpr and idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
			//die($sql);
			$rs = $GLOBALS["sp"]->getAll($sql); 
			$smarty->assign("view",$rs);	
			$template = "thong-ke/view.tpl";
			$smarty->assign("Title",'Thống kê nhập hàng');	
		}
	break;
	
	case "ban-hang":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			if($_POST){
				$FromDate =  isset($_POST['FromDate'])?$_POST['FromDate']:"";
				$ToDate =  isset($_POST['ToDate'])?$_POST['ToDate']:"";	
				$smarty->assign("FromDate",$FromDate);
				$smarty->assign("ToDate",$ToDate);
				
				if(!empty($FromDate))
					$wh.=' and datesell >= "'.$FromDate.'" ';
				if(!empty($ToDate))
					$wh.=' and datesell <= "'.$ToDate.'" ';
				/*	
				$sqlid="select idpr from $GLOBALS[db_sp].serial where active = 0 and idcity=".$_SESSION['admin_showCity']."  $wh group by idpr";
				$rsid = $GLOBALS["sp"]->getCol($sqlid); 
				if($rsid){
					$rsid = implode(',',$rsid);	
					$sql="  select * from $GLOBALS[db_web].products 
							where id in ($rsid)
							order by id desc
					";
					$rs = $GLOBALS["web"]->getAll($sql); 
					$smarty->assign("view",$rs);	
				}
				*/
				$sqlid = "select cid from $GLOBALS[db_sp].serial where active = 0 and idcity in (".$_SESSION['admin_showCity'].") and cid > 0 $wh group by cid";
				$rsid = $GLOBALS["sp"]->getCol($sqlid);
				if($rsid){
					$rsid = implode(',',$rsid);	
					$sql="  select * from $GLOBALS[db_web].categories where id in ($rsid) order by num asc, id desc";
					$rs = $GLOBALS["web"]->getAll($sql);  
					$smarty->assign("view",$rs);
				}
			}
			$template = "thong-ke/list.tpl";
			$smarty->assign("checkBanhang",2);
			$smarty->assign("Title",'Thống kê bán hàng');	
		}
	break;
	
	case "view-ban-hang":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$idpr = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
			$FromDate =  isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
			$ToDate =  isset($_REQUEST['cat4'])?$_REQUEST['cat4']:"";
			
			if(!empty($FromDate))
				$wh.=' and datesell >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and datesell <= "'.$ToDate.'" ';
				
			$sql = "select * from $GLOBALS[db_sp].serial where active=0 and idpr=$idpr and idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
			$rs = $GLOBALS["sp"]->getAll($sql); 
			$smarty->assign("view",$rs);	
			$smarty->assign("viewbanhang","1");
			$template = "thong-ke/view.tpl";
			$smarty->assign("Title",'Thống kê bán hàng');
		}	
	break;
	
	case "view-ton-kho":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$idpr = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
			$FromDate =  isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
			$ToDate =  isset($_REQUEST['cat4'])?$_REQUEST['cat4']:"";
			
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';	
			$sql = "select * from $GLOBALS[db_sp].serial where idpr=$idpr and active=1 and idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
			$rs = $GLOBALS["sp"]->getAll($sql); 
			$smarty->assign("view",$rs);	
			$template = "thong-ke/ton-kho.tpl";
			$smarty->assign("Title",'Thống kê tồn kho');
		}	
	break;
	
	default:
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			if($_POST){//thong ke ton kho
				$FromDate =  isset($_POST['FromDate'])?$_POST['FromDate']:"";
				$ToDate =  isset($_POST['ToDate'])?$_POST['ToDate']:"";	
				$smarty->assign("FromDate",$FromDate);
				$smarty->assign("ToDate",$ToDate);
				
				if(!empty($FromDate))
					$wh.=' and dated >= "'.$FromDate.'" ';
				if(!empty($ToDate))
					$wh.=' and dated <= "'.$ToDate.'" ';
					
				/*
				$sqlid="select idpr  from $GLOBALS[db_sp].serial where idcity=".$_SESSION['admin_showCity']." and active=1 $wh group by idpr";
				$rsid = $GLOBALS["sp"]->getCol($sqlid); 
				if($rsid){
					$rsid = implode(',',$rsid);	
					$sql="  select * from $GLOBALS[db_web].products 
							where id in ($rsid)
							order by id desc
					";
					$rs = $GLOBALS["web"]->getAll($sql); 
					$smarty->assign("view",$rs);	
				}
				*/
	
				$sqlid = "select cid from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and active=1 and cid > 0 $wh group by cid order by idpr asc";
				$rsid = $GLOBALS["sp"]->getCol($sqlid);
				if($rsid){
					$rsid = implode(',',$rsid);	
					$sql="  select * from $GLOBALS[db_web].categories where id in ($rsid) order by num asc, id desc";
					$rs = $GLOBALS["web"]->getAll($sql);  
					$smarty->assign("view",$rs);
				}
			}
			$smarty->assign("Title",'Thống kê tồn kho');
			$template = "thong-ke/list.tpl";
		}
	break;
}
$smarty->assign("checkNhapkho","class='active'");
$smarty->assign("checkHanghoa","class='Active'");
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");


function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['cat3'])?$_REQUEST['cat3']:"";
	$idpr = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
	
	$arr['idpr']= $idpr;
	$arr['idpartner'] = $idpartner = trim($_POST["idpartner"]);
	$arr['idcity'] = $_SESSION['admin_showCity'];
	$arr['code']= trim($_POST["code"]);	
	$arr['pricenhap'] = trim($_POST["pricenhap"]);
	$arr['pricenhap'] = $pricenhap = str_replace(".", "", $arr['pricenhap']);
	$arr['dated']= trim($_POST["dated"]);
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