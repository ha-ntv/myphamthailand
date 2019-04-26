<?php
$idpem = 3;
$act = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
////////////////////
$sql = "select * from $GLOBALS[db_web].categories where pid=2 and crm=1 order by num asc, id desc ";
$rs = $GLOBALS["web"]->getAll($sql);
$smarty->assign("catPr",$rs);
switch($act){

	case "deletephieu":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/view-dt/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat3']);	
			
			$sqlma="delete from $GLOBALS[db_sp].serial where id=$id and idcity in (".$_SESSION['admin_showCity'].") ";
			$GLOBALS["sp"]->execute($sqlma);
			$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/view-dt/";
			page_transfer2($url);
		}
	break;
		
	case "delete":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat3']);	
			$sqlphieu = "select * from $GLOBALS[db_sp].phieunhaphang where id=$id order by id desc";
			$rsphieu = $GLOBALS["sp"]->getRow($sqlphieu);	
			
			$sqlma="delete from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") and maphieu='".$rsphieu['maphieu']."'";
			$GLOBALS["sp"]->execute($sqlma);
				
			$sql="delete from $GLOBALS[db_sp].phieunhaphang where id=$id";
			$GLOBALS["sp"]->execute($sql);
			
			$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
			page_transfer2($url);
		}
	break;

	case "editphieu":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat3"];
			$sql = "select * from $GLOBALS[db_sp].serial where id=$id and idcity in (".$_SESSION['admin_showCity'].")";
			$rs = $GLOBALS["sp"]->getRow($sql);
			if(empty($rs['id'])){
				$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
				page_transfer2($url);
			}			
			$smarty->assign("edit",$rs);	
			$template = "phieu-nhap-hang/editphieu.tpl";
		}
	break;
	
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat3"];
			$sql = "select * from $GLOBALS[db_sp].phieunhaphang where id=$id and idcity in (".$_SESSION['admin_showCity'].")";
			$rs = $GLOBALS["sp"]->getRow($sql);
			if(empty($rs['id'])){
				$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
				page_transfer2($url);
			}			
			$smarty->assign("viewphieu",$rs);
			$smarty->assign("editadd",'editsm');	
			$template = "phieu-nhap-hang/add.tpl";
		}
	break;
	
	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$smarty->assign("editadd",'addsm');
			$template = "phieu-nhap-hang/add.tpl";
		}
	break;
	
	case "addsm":
	case "editsm":
		Editsm();
		$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/";
		page_transfer2($url);
	break;
	
	case "editphieusm":
		Editphieusm();
		$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/view-dt/";
		page_transfer2($url);
	break;
	
	case "view-dt":
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$maphieu = trim($_REQUEST['cat1']);	
			$sql = "select * from $GLOBALS[db_sp].serial where maphieu='$maphieu' and cid > 0 and idcity in (".$_SESSION['admin_showCity'].") group by cid order by cid asc";
			$rs = $GLOBALS["sp"]->getAll($sql);	
			$smarty->assign("view",$rs);
			$template = "phieu-nhap-hang/view-dt.tpl";
			/////check Perm trong Function insert_getViewDtPhieuNhapKho
		}
	break;
	
	default:
		if(!checkPermision($idpem,5)){
			page_permision();
			$page = $path_url;
			page_transfer2($page);
		}
		else{
			$sql="select * from $GLOBALS[db_sp].phieunhaphang where idcity in (".$_SESSION['admin_showCity'].") order by id desc";
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/phieu-nhap-hang/".$_REQUEST['cat1']."/0/0"; //set url for paginator
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
			$template = "phieu-nhap-hang/list.tpl";
			
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
$smarty->assign("checkGiaoDich","class='Active'");
$smarty->assign("checkPhieuNhapHang","class='active'");
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");


function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
	if ($act=="addsm")
	{
		$idpr = trim($_POST["idprphieu"]);
		$arrphieu['datedphieu'] = trim($_POST["dated"]); 
		$arrphieu['idpartnerphieu'] = trim($_POST["idpartnerphieu"]);
		
		$arr['cid']= trim($_POST["cidphieu"]);
		$arr['idpr']= $idpr;
		$arr['idpartner'] = $idpartner = trim($_POST["idpartner"]);
		$arr['idcity'] = $_SESSION['admin_showCity'];
		$arr['code']= trim($_POST["code"]);	
		$arr['pricenhap'] = trim($_POST["pricenhap"]);
		$arr['pricenhap'] = $pricenhap = str_replace(".", "", $arr['pricenhap']);
		$arr['dated']= trim($_POST["dated"]);
	
		$sql = "SELECT max(id) FROM $GLOBALS[db_sp].phieunhaphang";
		$rs = $GLOBALS["sp"]->GetOne($sql);
		$so = cong6so($rs+1);
		$maphieu = 'PNH'.$so;
		$arrphieu['maphieu'] = $maphieu;
		$arrphieu['idcity'] = $_SESSION['admin_showCity'];
		
		vaInsert('phieunhaphang',$arrphieu); // thêm dữ liệu phiếu nhập kho
		
		$arr['maphieu']= $maphieu;
		vaInsert('serial',$arr); /// thêm dữ liệu đầu tiên
		$cidphieuall = $idprphieuall = $price = $codeall = array();
		$cidphieuall = $_POST["cidphieuall"];
		$idprphieuall = $_POST["idprphieuall"];
		$codeall = $_POST["codeall"];
		$price = $_POST["price"];
		$partnerall = $_POST["partnerall"];
		//print_r($price[1]); die();
		for($i=0;$i<=count($codeall);$i++){
			$code = trim($codeall[$i]);
			$priceTam = trim($price[$i]);	
			$partnerTam = trim($partnerall[$i]);
			$idpr = trim($idprphieuall[$i]);
			$cid	= trim($cidphieuall[$i]);
			if(!empty($code)){
				$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='".$code."'";
				$rs = $GLOBALS["sp"]->GetAll($sql);
				
				if(ceil(count($rs)) <= 0 && $idpr > 0){
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
					$arr['idpr'] = $idpr;
					$arr['cid'] = $cid;
					$arr['code'] = $code;
					vaInsert('serial',$arr);
				}	
			}
				
		}
	}
	else
	{
		$arr['cid']= trim($_POST["cidphieu"]);
		$idpr = trim($_POST["idprphieu"]);
		$arr['idpr']= $idpr;
		$arr['idpartner'] = $idpartner = trim($_POST["idpartner"]);
		$arr['idcity'] = $_SESSION['admin_showCity'];
		$arr['code']= trim($_POST["code"]);	
		$arr['pricenhap'] = trim($_POST["pricenhap"]);
		$arr['pricenhap'] = $pricenhap = str_replace(".", "", $arr['pricenhap']);
		$arr['dated']= trim($_POST["dated"]);
		$arr['maphieu'] = trim($_POST["viewmaphieu"]);
		if(!empty($arr['maphieu'])){
			vaInsert('serial',$arr); /// thêm dữ liệu đầu tiên
			$cidphieuall = $idprphieuall = $price = $codeall = array();
			$cidphieuall = $_POST["cidphieuall"];
			$idprphieuall = $_POST["idprphieuall"];
			$codeall = $_POST["codeall"];
			$price = $_POST["price"];
			$partnerall = $_POST["partnerall"];
			//print_r($price[1]); die();
			for($i=0;$i<=count($codeall);$i++){
				$code = trim($codeall[$i]);
				$priceTam = trim($price[$i]);	
				$partnerTam = trim($partnerall[$i]);
				$idpr = trim($idprphieuall[$i]);
				$cid	= trim($cidphieuall[$i]);
				if(!empty($code)){
					$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='".$code."'";
					$rs = $GLOBALS["sp"]->GetAll($sql);
					
					if(ceil(count($rs)) <= 0 && $idpr > 0){
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
						$arr['idpr'] = $idpr;
						$arr['cid'] = $cid;
						$arr['code'] = $code;
						vaInsert('serial',$arr);
					}	
				}
			}		
		}
	}
}

function editphieusm()
{
	$arr['cid']= trim($_POST["cidphieu"]);
	$arr['idpr']= trim($_POST["idprphieu"]);
	$arr['idpartner'] = trim($_POST["idpartner"]);
	$arr['code']= trim($_POST["code"]);	
	$arr['pricenhap'] = trim($_POST["pricenhap"]);
	$arr['pricenhap'] = $pricenhap = str_replace(".", "", $arr['pricenhap']);
	$arr['dated']= trim($_POST["dated"]);
	$id = trim($_POST['id']);
	//////////////////////////////////////////	
	vaUpdate('serial',$arr,' id='.$id);
}
?>