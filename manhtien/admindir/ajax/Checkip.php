<?php
include("../../#include/config.php");
include("../functions/function.php");
global $path_url,$path_dir;
$error = array();
$error = "";
$arr = "";
$act = isset($_POST['act'])?$_POST['act']:"";
$id =  isset($_POST['id'])?$_POST['id']:"";
switch($act){
	
	case "changes":
		$pwold = md5($_POST['pwold']);
		$id = $_SESSION['admin_artseed_id'];

		$sql = "select * from $GLOBALS[db_sp].admin where password = '$pwold' and id=$id ";
		$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($count == 0){
			$error = "Password cũ không tồn tại." ;
		}
		
	break;
	
	case "colorpr":
		$name = trim($_POST['name']);
		$code = trim($_POST['code']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].colorpr where BINARY code='$code'";
			$sql_name = "SELECT * FROM $GLOBALS[db_sp].colorpr where BINARY name='$name'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].colorpr where BINARY code='$code' and id<>$id";
			$sql_name = "SELECT * FROM $GLOBALS[db_sp].colorpr where BINARY name='$name' and id<>$id";
		}

		$rs = $GLOBALS["sp"]->GetAll($sql);
		$rs_name = $GLOBALS["sp"]->GetAll($sql_name);
		if(ceil(count($rs)) > 0)
			$error .="Mã màu này đã tồn tại .";
		if(ceil(count($rs_name)) > 0)
			$error .=" Tên này đã tồn tại. ";
	break;	
	
	case "sizepr":
		$name = trim($_POST['name']);
		$code = trim($_POST['code']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].sizepr where BINARY code='$code'";
			$sql_name = "SELECT * FROM $GLOBALS[db_sp].sizepr where BINARY name='$name'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].sizepr where BINARY code='$code' and id<>$id";
			$sql_name = "SELECT * FROM $GLOBALS[db_sp].sizepr where BINARY name='$name' and id<>$id";
		}

		$rs = $GLOBALS["sp"]->GetAll($sql);
		$rs_name = $GLOBALS["sp"]->GetAll($sql_name);
		if(ceil(count($rs)) > 0)
			$error .="Mã size này đã tồn tại .";
		if(ceil(count($rs_name)) > 0)
			$error .=" Tên này đã tồn tại. ";
	break;	
	
	case "colorsize":
		$idcity = trim($_POST['idcity']);
		$idbonho = trim($_POST['idbonho']);
		$idpr = trim($_POST['idpr']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize where idcity=$idcity and idbonho=$idbonho and idpr=$idpr";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize where idcity=$idcity and idbonho=$idbonho and idpr=$idpr and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Địa điểm này đã tồn tại .";
	break;
	
	case "noidungkn":
		$idcity = trim($_POST['idcity']);
		$cid = trim($_POST['cid']);
		$id = trim($_POST['id']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinchung where idcity=$idcity and cid=$cid";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinchung where idcity=$idcity and cid=$cid and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Địa điểm này đã tồn tại .";
	break;
	
	case "thongtinseach":
		$id = trim($_POST['id']);
		$cid = trim($_POST['cid']);
		$name = trim($_POST['name_vn']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinsearch where active=1 and BINARY name_vn='$name' and cid=$cid";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinsearch where active=1 and BINARY name_vn='$name' and cid=$cid and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Tên này đã tồn tại .";
	break;
	
	case "bonho":
		$id = trim($_POST['id']);
		$cid = trim($_POST['cid']);
		$name = trim($_POST['name_vn']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].bonho where active=1 and BINARY name_vn='$name' and cid=$cid";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].bonho where active=1 and BINARY name_vn='$name' and cid=$cid and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Tên này đã tồn tại .";
	break;
	
	/* bk check code chon moi
	case "checkcode":
		$id = trim($_POST['id']);
		$codesp = trim($_POST['codesp']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].products where codesp=$codesp";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].products where codesp=$codesp and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Mã sản phẩm này tồn tại .";
		else{
			$sqlanme = "SELECT name_vn FROM $GLOBALS[db_sp].masanpham where id=$codesp";
			$name = $GLOBALS["sp"]->GetOne($sqlanme);
		}
	break;
	*/
	case "checkcode":
		$id = trim($_POST['id']);
		$codesp = trim($_POST['codesp']);
		if(!empty($codesp)){
			if(empty($id)){
				$sql = "SELECT * FROM $GLOBALS[db_sp].products where codesp1='$codesp'";
			}
			else{
				$sql = "SELECT * FROM $GLOBALS[db_sp].products where codesp1='$codesp' and id<>$id";
			}
			//die($sql);
			$rs = $GLOBALS["sp"]->GetAll($sql);
			if(ceil(count($rs)) > 0)
				$error ="Mã sản phẩm này tồn tại .";
		}
		
	break;
	
	case "masanpham":
		$id = trim($_POST['id']);
		$code = trim($_POST['code']);
		
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].masanpham where code='$code' ";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].masanpham where code='$code' and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Mã sản phẩm này tồn tại .";
	break;
	
	case "duyetdonhang":
		$idmember = trim($_POST['idmember']);
		$idorder = trim($_POST['idorder']);
		$serial = trim($_POST['txtserial']);
		$hdh  = trim($_POST['txthdh']);
		$loaikhachhang  = trim($_POST['loaikhachhang']);

		if($idorder){
			if(count(checkphukien) > 0){// update phu kien
				$checkphukien = implode(',',$_POST['checkphukien']);
				$sql1=" update $GLOBALS[db_sp].orders SET 
							phukien='$checkphukien'
						where id='$idorder' ";
				$GLOBALS["sp"]->execute($sql1);
			}
			
			
			$sql = "SELECT * FROM $GLOBALS[db_sp].orders where id='$idorder'";
			$rs = $GLOBALS["sp"]->GetRow($sql);
			$idprweb = $rs['idpr'];
			$price = $rs['price'];
			/////////////check serial bên crm
			$sqlcrm = "SELECT * FROM $GLOBALS[db_crm].serial where idpr='$idprweb' and code='$serial'";
			$rscrm = $GLOBALS["crm"]->GetRow($sqlcrm);
			if(!empty($rscrm['id'])){
				if($rscrm['active']==1){
					$arrDay = getdate();
					$datednow = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
					$idserial = $rscrm['id'];
					
					$sql1=" update $GLOBALS[db_crm].serial SET 
								datesell='$datednow',
								hdh='$hdh', 
								active='0',
								priceban='$price'
							where id=".$rscrm['id'];
					$GLOBALS["crm"]->execute($sql1);
					
					$sql2=" update $GLOBALS[db_sp].orders SET 
								status=1,
								mid=$idmember,
								loaikhachhang = '$loaikhachhang',
								hdh='$hdh',
								serial='".$serial."'
							where id=".$idorder;
					$GLOBALS["sp"]->execute($sql2);	
				}
				else{
					$error ="Số Serial ".$serial." đã bán rồi.";
				}
			}
			else{
				$error ="Số Serial ".$serial." không tồn tại trong CRM, vui long liên hệ với admin.";
			}
		}
		else
			$error ="Vui lòng nhấn Ctr + F5 để thực hiện lại.";
	break;
	case "loadSerial":
		$idorder = $_POST['idorder'];
		$sqlpr = "SELECT * FROM $GLOBALS[db_sp].orders where id='$idorder'";
		$rspr = $GLOBALS["sp"]->GetRow($sqlpr);
		$idpr = trim($rspr['idpr']);
		$idkhuvuc = trim($rspr['idkhuvuc']);
		/////////load serial
		$sql = "SELECT * FROM $GLOBALS[db_crm].serial where idpr='$idpr' and active=1 and  idcity=$idkhuvuc";
		$rs = $GLOBALS["crm"]->GetAll($sql);
		$str = '';
		foreach($rs as $item){
			$str .= '
				<option value="'.$item['code'].'">'.$item['code'].'</option>
			';
		}
		if($str)
			$str =  '<option value="">-----Hoặc chọn số serial----</option> ' .$str;	
		$error = $str;
	break;	
}

die(json_encode(array('status'=>$error,'name'=>$name)));
?>