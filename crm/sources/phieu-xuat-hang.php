<?php
$idpem = 7;
$act = isset($_REQUEST['cat2'])?$_REQUEST['cat2']:"";
////////////////////
$sql = "select * from $GLOBALS[db_web].categories where pid=2 and crm=1 order by num asc, id desc ";
$rs = $GLOBALS["web"]->getAll($sql);
$smarty->assign("catPr",$rs);

$sql = "select * from $GLOBALS[db_sp].khachhang where idcity in (".$_SESSION['admin_showCity'].") order by id desc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("khachhangList",$rs);

switch($act){
	case "deletephieu":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/view-dt/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat3']);	
			
			///////////cập nhật tình trạng bán hàng active=0
			$sqlbh = "	SELECT * FROM $GLOBALS[db_sp].serial 
						where code in (SELECT code from $GLOBALS[db_sp].ctphieuxuathang where id=$id and idcity in (".$_SESSION['admin_showCity'].") ) 
						and active=0 
						and idcity in (".$_SESSION['admin_showCity'].") 
			";
	
			$rsbh = $GLOBALS["sp"]->GetRow($sqlbh);
			$arrbh['active'] = 1;
			$arrbh['muasi'] = 0;
			$arrbh['priceban'] = 0;
			vaUpdate('serial',$arrbh,' id='.$rsbh['id']);	

			$sqlma="delete from $GLOBALS[db_sp].ctphieuxuathang where id=$id and idcity in (".$_SESSION['admin_showCity'].") ";
			$GLOBALS["sp"]->execute($sqlma);
			$url = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/view-dt/";
			page_transfer2($url);
		}
	break;

	case "delete":

		if(!checkPermision($idpem,3)){
			page_permision();
			$page = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id = trim($_REQUEST['cat3']);	
			$sqlphieu = "select * from $GLOBALS[db_sp].phieuxuathang where id=$id and idcity in (".$_SESSION['admin_showCity'].") order by id desc";
			$rsphieu = $GLOBALS["sp"]->getRow($sqlphieu);	
			$maphieu = $rsphieu['maphieu'];
			
			$sql = "SELECT * from $GLOBALS[db_sp].ctphieuxuathang where maphieu='".$maphieu."' and idcity in (".$_SESSION['admin_showCity'].")";
			$rs = $GLOBALS["sp"]->getAll($sql);
			if(ceil(count($rs)) > 0){
				foreach($rs as $item){
					$code = $item['code'];
					$sqlbh = "	SELECT * FROM $GLOBALS[db_sp].serial where code='".$code."' and active=0 and idcity in (".$_SESSION['admin_showCity'].")";
					$rsbh = $GLOBALS["sp"]->GetRow($sqlbh);
					
					$arrbh['active'] = 1;
					$arrbh['muasi'] = 0;
					$arrbh['priceban'] = 0;
					vaUpdate('serial',$arrbh,' id='.$rsbh['id']);	
		
					$sqlma="delete from $GLOBALS[db_sp].ctphieuxuathang where id=".$item['id']." and idcity in (".$_SESSION['admin_showCity'].") ";
					$GLOBALS["sp"]->execute($sqlma);
				}
			}	
			
			$sql="delete from $GLOBALS[db_sp].phieuxuathang where id=$id";
			$GLOBALS["sp"]->execute($sql);
			
			$url = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
			page_transfer2($url);
		}

	break;	
	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$smarty->assign("editadd",'addsm');
			$template = "phieu-xuat-hang/add.tpl";
		}
	break;
	
	case "editphieu":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["cat3"];
			$sql = "select * from $GLOBALS[db_sp].ctphieuxuathang where id=$id and idcity in (".$_SESSION['admin_showCity'].")";
			$rs = $GLOBALS["sp"]->getRow($sql);
			if(empty($rs['id'])){
				$url = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
				page_transfer2($url);
			}			
			$smarty->assign("edit",$rs);	
			$template = "phieu-xuat-hang/viewphieu.tpl";
		}
	break;
	
	case "addsm":
	case "editsm":
		Editsm();
		$url = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/";
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
			$sql = "select * from $GLOBALS[db_sp].ctphieuxuathang where maphieu='$maphieu' and cid > 0 and idcity in (".$_SESSION['admin_showCity'].") group by cid order by cid asc";
			$rs = $GLOBALS["sp"]->getAll($sql);	
			$smarty->assign("view",$rs);
			$template = "phieu-xuat-hang/view-dt.tpl";
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
			$sql="select * from $GLOBALS[db_sp].phieuxuathang where idcity in (".$_SESSION['admin_showCity'].") order by id desc";
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/phieu-xuat-hang/".$_REQUEST['cat1']."/0/0"; //set url for paginator
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
			$template = "phieu-xuat-hang/list.tpl";
			
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
$smarty->assign("checkPhieuXuatHang","class='active'");
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
			
		$arr['priceban'] = trim($_POST["priceban"]);
		$arr['priceban'] = $priceban = str_replace(".", "", $arr['priceban']);
		$arr['dated']= trim($_POST["dated"]);
		$sql = "SELECT max(id) FROM $GLOBALS[db_sp].phieuxuathang";
		$rs = $GLOBALS["sp"]->GetOne($sql);
		$so = cong6so($rs+1);
		$maphieu = 'PXH'.$so;
		$arrphieu['maphieu'] = $maphieu;
		$arrphieu['idcity'] = $_SESSION['admin_showCity'];
		vaInsert('phieuxuathang',$arrphieu); // thêm dữ liệu phiếu nhập kho
		$arr['maphieu']= $maphieu;
		$code = $_POST["code"];
		if($code){
			$code = implode(',',$code);
			///////////cập nhật tình trạng bán hàng active=0
			$sqlbh = "SELECT * FROM $GLOBALS[db_sp].serial where code in(".$code.") and active=1 and idcity in (".$_SESSION['admin_showCity'].") ";
			$rsbh = $GLOBALS["sp"]->GetAll($sqlbh);
			
			if(ceil(count($rsbh)) > 0){
				foreach($rsbh as $value){
					$arrbh['active'] = 0;
					$arrbh['muasi'] = 1;
					$arrbh['priceban'] = $priceban;
					vaUpdate('serial',$arrbh,' id='.$value['id']);	
					
					$arr['code']= $value["code"];
					vaInsert('ctphieuxuathang',$arr); /// thêm dữ liệu đầu tiên
				}
			}
			////////////////////////////////////////////////
		}
		
		$cidphieuall = $idprphieuall = $price = $codeall = array();
		$cidphieuall = $_POST["cidphieuall"];
		$idprphieuall = $_POST["idprphieuall"];
		$codeall = $_POST["codeall"];
		$price = $_POST["price"];
		$partnerall = $_POST["partnerall"];

		$checkcodeall = $_POST["checkcodeall"];
		//print_r($partnerall); die();
		
		for($i=0;$i<=count($checkcodeall);$i++){
			$j=$i+2;
			$codeall = "code".$j;
			//die($codeall);
			$code = $_POST[$codeall];
			$priceTam = trim($price[$i]);	
			$partnerTam = trim($partnerall[$i]);
			$idpr = trim($idprphieuall[$i]);
			$cid	= trim($cidphieuall[$i]);
			$sqlbh = $rsbh = $value = "";
			if($code){
				$code = implode(',',$code);
				///////////cập nhật tình trạng bán hàng active=0
				$sqlbh = "SELECT * FROM $GLOBALS[db_sp].serial where code in(".$code.") and active=1 and idcity in (".$_SESSION['admin_showCity'].") ";
				$rsbh = $GLOBALS["sp"]->GetAll($sqlbh);
				
				if(ceil(count($rsbh)) > 0 && $idpr > 0){
					foreach($rsbh as $value){
						if(!empty($priceTam)){
							$arr['priceban'] = str_replace(".", "", $priceTam);
						}
						else{
							$arr['priceban'] = $priceban;
						}
						if(!empty($partnerTam)){
							$arr['idpartner'] = $partnerTam;
						}
						else{
							$arr['idpartner'] = $idpartner;
						}
						
						$arrbh['active'] = 0;
						$arrbh['muasi'] = 1;
						$arrbh['priceban'] = $arr['priceban'];
						vaUpdate('serial',$arrbh,' id='.$value['id']);	

						
						$arr['code']= $value["code"];
						$arr['idpr'] = $idpr;
						$arr['cid'] = $cid;
						vaInsert('ctphieuxuathang',$arr); /// thêm dữ liệu đầu tiên
					}
				}
				////////////////////////////////////////////////
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