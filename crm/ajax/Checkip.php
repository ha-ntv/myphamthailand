<?php
include("../#include/config.php");
include("../functions/function.php");
global $path_url,$path_dir;
$error = array();
$error = "";
$arr = "";
$act = isset($_POST['act'])?$_POST['act']:"";
$id =  trim(isset($_POST['id'])?$_POST['id']:"");
switch($act){
	case "checkkhachhang":
		$name = trim($_POST['name']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].khachhang where name='$name'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].khachhang where name='$name' and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Tên khach hàng này đã tồn tại .";
	break;
	
	case "checkPartner":
		$name = trim($_POST['name']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].partner where name='$name'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].partner where name='$name' and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Tên nhà cung cấp này đã tồn tại .";
	break;
	
	case "checkSerial":
		$code = trim($_POST['code']);
		if(empty($id)){
			$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='$code'";
		}
		else{
			$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='$code' and id<>$id";
		}
		$rs = $GLOBALS["sp"]->GetAll($sql);
		if(ceil(count($rs)) > 0)
			$error ="Số Serial này đã tồn tại .";
	break;
	
	case "changes":
		$pwold = md5($_POST['pwold']);
		$id = $_SESSION['admin_crmvietanhmobil_id'];

		$sql = "select * from $GLOBALS[db_sp].admin where password = '$pwold' and id=$id ";
		$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($count == 0){
			$error = "Password cũ không tồn tại." ;
		}
		
	break;
		
	case "addSeria":
		$numname = trim($_POST['numname']);
		$sql = "select * from $GLOBALS[db_sp].partner order by id desc ";
		$rs = $GLOBALS["sp"]->getAll($sql);
		$str='';
		foreach($rs as $item){
			$str .= '
				<option value="'.$item['id'].'"> '.$item['name'].' </option>
			';
		}
		$error ='
			<div class="SubBox"><div class="Line"></div></div>
			<div class="SubBox">
				<span class="titleFr ng-binding">Số Serial '.$numname.'</span>
				<input type="text" name="codeall[]" class="FrText">
			 </div>
			 <div class="SubBox">
				<span class="titleFr ng-binding">Giá nhập '.$numname.'</span>
				<input type="text" name="price[]" class="FrText autoNumeric">
			 </div>
			 <div class="SubBox">
				<span class="titleFr ng-binding">Đối tác '.$numname.'</span>
				<select name="partnerall[]">
					<option value="0">----Chọn đối tác----</option>
					'.$str.'
				</select>
			 </div>
			 
			<script>
				function formatNumber (num) {
					return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
				}
				$(".autoNumeric").autoNumeric("init", {aSep: ".", aDec: "none"});
			</script>
		';
		
	break;
	
	case "addSeriaPhieuNhap":
		$numname = trim($_POST['numname']);
		/////////Load dong san pham
		$sqlsp = "select * from $GLOBALS[db_web].categories where pid=2 and crm=1 order by num asc, id desc ";
		$rssp = $GLOBALS["web"]->getAll($sqlsp);
		foreach($rssp as $value){
			$strsp .= '
				<option value="'.$value['id'].'"> '.$value['name_vn'].' </option>
			';	
		}
		$strsp = '
			<div class="SubBox">
				<span class="titleFr ng-binding">Danh mục SP</span>
				<select name="cidphieuall[]" onchange="loadpr(this.value,'.$numname.')">
					<option value="0">----Chọn Danh mục sản phẩm----</option>
					'.$strsp.'
				</select>
				
			</div>
			<div class="SubBox" id="showidpr'.$numname.'"></div>
		';

		
		$sql = "select * from $GLOBALS[db_sp].partner where idcity in (".$_SESSION['admin_showCity'].") order by id desc ";
		$rs = $GLOBALS["sp"]->getAll($sql);
		$str='';
		foreach($rs as $item){
			$str .= '
				<option value="'.$item['id'].'"> '.$item['name'].' </option>
			';
		}
		$error = '<div class="SubBox"><div class="Line"></div></div>' . $strsp .'
			<div class="SubBox">
				<span class="titleFr ng-binding">Số Serial '.$numname.'</span>
				<input type="text" name="codeall[]" class="FrText">
			 </div>
			 <div class="SubBox">
				<span class="titleFr ng-binding">Giá nhập '.$numname.'</span>
				<input type="text" name="price[]" class="FrText autoNumeric">
			 </div>
			 <div class="SubBox">
				<span class="titleFr ng-binding">Nhà cung cấp</span>
				<select name="partnerall[]">
					<option value="0">----Chọn đối tác----</option>
					'.$str.'
				</select>
			 </div>
			 
			<script>
				function formatNumber (num) {
					return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
				}
				$(".autoNumeric").autoNumeric("init", {aSep: ".", aDec: "none"});
			</script>
		';
		
	break;
	
		
	
	case "search":
		unset($_SESSION['whsCodes']);
		unset($_SESSION['whsDateds']);
		unset($_SESSION['whsIdpartners']);
		
		$codes = $dateds = $idpartners = '';
		$codes = trim($_POST['codes']);
		$dateds = trim($_POST['dateds']);
		$idpartners = trim($_POST['idpartners']);
	
		if(!empty($codes)){
			$_SESSION['whsCodes'] = $codes;	
		}
		if(!empty($dateds)){
			$_SESSION['whsDateds'] = $dateds;	
		}
		if(!empty($idpartners)){
			$_SESSION['whsIdpartners'] = $idpartners;	
		}
	break;
	
	case "tablePr":
		$maphieu = isset($_POST['maphieu'])?$_POST['maphieu']:0;
		$wh = "";
		if(!empty($maphieu))
			$wh = " and maphieu='".$maphieu."' ";
		$listTonkho = $listSerial = '';
		$i=$j=0;
		$idpr = $id;
		$sqltk="select * from $GLOBALS[db_sp].serial where idpr=$idpr and idcity in (".$_SESSION['admin_showCity'].") and active=1 $wh order by dated desc, id desc";
		$rstk = $GLOBALS["sp"]->getAll($sqltk);
		
		$listTonkho.='
			<tr class="trColorOne">
				<td class="tablefont">
					Việt Anh Mobile '.getNameWeb('city','name',$_SESSION['admin_showCity']).'
				</td>
				<td class="tablefont">
					'.countNhapKho($idpr,'soluongtonkho',$maphieu).'
				</td>				
			</tr>
		';
		/////////load serial
		$sql="select * from $GLOBALS[db_sp].serial where idpr=$idpr and idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
		$rs = $GLOBALS["sp"]->getAll($sql);
		foreach($rs as $siral){
			$j++;
			if($j%2==0)
				$classtk = 'trColorTwo';
			else
				$classtk = 'trColorOne';
			if($siral['active']==1)
				$img = 'Chưa bán';
			else
				$img = 'Đã bán';
			$listSerial.='
				<tr class="'.$classtk.'">
					<td class="tablefont">
						'.$j.'
					</td>
					<td class="tablefont">
						'.$siral['code'].'
					</td>
					<td class="tablefont">
						'.number_format($siral["pricenhap"],0,",",".").'
					</td>
					<td class="tablefont">
						'.$siral['dated'].'
					</td>
					<td align="center" class="tablefont">
						'.$img.'
					</td>
				</tr>
			';
		}
		$error ='
			<div class="tabs-menu">	
				  <input id="tab1" type="radio" name="tabs" checked>
				  <label for="tab1" class="label-tab1">Tồn kho</label>  
				  <input id="tab2" type="radio" name="tabs">
				  <label for="tab2" >Serial/Imei</label>                          
				<section id="content1">
				   <table width="100%" border="0">
						<tr>
							<td class="k-header First tablefont">Chi Nhánh</td>
							<td class="k-header tablefont">Tồn kho</td>
						</tr>
						'.$listTonkho.'
					</table>
			   
				  </section>
					
				  <section id="content2">
					<table width="100%" border="0">
						<tr>
							<td class="k-header First tablefont">Stt</td>
							<td class="k-header tablefont">Số Serial </td>
							<td class="k-header tablefont">Giá nhập</td>
							<td class="k-header tablefont">Ngày nhập</td>
							<td align="center" class="k-header tablefont">TT hàng</td>
						</tr>
						'.$listSerial.'
					</table>
				  </section>
				
			 
			</div>
		';
	break;	
	
	case "tablePrPhieuNhap":
		$maphieu = isset($_POST['maphieu'])?$_POST['maphieu']:0;
		$wh = "";
		if(!empty($maphieu))
			$wh = " and maphieu='".$maphieu."' ";
		$listTonkho = $listSerial = '';
		$i=$j=0;
		$sql="select * from $GLOBALS[db_sp].serial where idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
		$rs = $GLOBALS["sp"]->getAll($sql);
		foreach($rs as $siral){
			$j++;
			if($j%2==0)
				$classtk = 'trColorTwo';
			else
				$classtk = 'trColorOne';
			
			$listSerial.='
				<tr class="'.$classtk.'">
					<td class="tablefont">
						'.$j.'
					</td>
					<td class="tablefont">
						'.$siral['code'].'
					</td>
					<td class="tablefont">
						'.number_format($siral["pricenhap"],0,",",".").'
					</td>
					<td class="tablefont">
						'.$siral['dated'].'
					</td>
					
				</tr>
			';
		}
		$error ='
			<div class="tabs-menu">	
				  <input id="tab1" type="radio" name="tabs" checked>
				  <label for="tab1" class="label-tab1">Serial/Imei</label>
				  <section id="content1">
					<table width="100%" border="0">
						<tr>
							<td class="k-header First tablefont">Stt</td>
							<td class="k-header tablefont">Số Serial </td>
							<td class="k-header tablefont">Giá nhập</td>
							<td class="k-header tablefont">Ngày nhập</td>
						</tr>
						'.$listSerial.'
					</table>
				  </section> 
			</div>
		';
	break;
	
	case "tablePrPhieuXuat":
		$maphieu = isset($_POST['maphieu'])?$_POST['maphieu']:0;
		$wh = "";
		if(!empty($maphieu))
			$wh = " and maphieu='".$maphieu."' ";
		$listTonkho = $listSerial = '';
		$i=$j=0;
		$sql="select * from $GLOBALS[db_sp].ctphieuxuathang where idcity in (".$_SESSION['admin_showCity'].") $wh order by dated desc, id desc";
		$rs = $GLOBALS["sp"]->getAll($sql);
		foreach($rs as $siral){
			$j++;
			if($j%2==0)
				$classtk = 'trColorTwo';
			else
				$classtk = 'trColorOne';
			
			$listSerial.='
				<tr class="'.$classtk.'">
					<td class="tablefont">
						'.$j.'
					</td>
					<td class="tablefont">
						'.$siral['code'].'
					</td>
					<td class="tablefont">
						'.number_format($siral["priceban"],0,",",".").'
					</td>
					<td class="tablefont">
						'.$siral['dated'].'
					</td>
					
				</tr>
			';
		}
		$error ='
			<div class="tabs-menu">	
				  <input id="tab1" type="radio" name="tabs" checked>
				  <label for="tab1" class="label-tab1">Serial/Imei</label>
				  <section id="content1">
					<table width="100%" border="0">
						<tr>
							<td class="k-header First tablefont">Stt</td>
							<td class="k-header tablefont">Số Serial </td>
							<td class="k-header tablefont">Giá xuất</td>
							<td class="k-header tablefont">Ngày xuất</td>
						</tr>
						'.$listSerial.'
					</table>
				  </section> 
			</div>
		';
	break;
	
	case "tableHistory":
		$history = isset($_POST['history'])?$_POST['history']:0;
		
		$listTonkho = $listSerial = '';
		$i=$j=0;
		$idpr = $id;
		
		/////////load serial
		$sql = "select * from $GLOBALS[db_web].orders where id in (".$history.") order by id asc";
		$rs = $GLOBALS["web"]->getAll($sql);
		foreach($rs as $item){
			$j++;
			if($j%2==0)
				$classtk = 'trColorTwo';
			else
				$classtk = 'trColorOne';
			$listSerial.='
				<tr class="'.$classtk.'">
					<td class="tablefont">
						'.$j.'
					</td>
					<td class="tablefont">
						'.$item["name"].'
					</td>
					
					<td align="center" class="tablefont">
						<a title="View" target="_blank" href="'.$path_url.'/history.php?id='.$item["id"].'">
                       		<i class="fa a-file-text-o"></i>
                        </a>
					</td>
				</tr>
			';
		}
		$error ='
			<div class="tabs-menu">	
				  <input id="tab1" type="radio" name="tabs" checked>
				  <label for="tab1" class="label-tab1">Lịch sử bán hàng</label>  
				                         
				
				  <section id="content1">
					<table width="100%" border="0">
						<tr>
							<td class="k-header First tablefont">Stt</td>
							<td class="k-header tablefont">Name</td>
							<td align="center" class="k-header tablefont">Xem Chi Tiết</td>
						</tr>
						'.$listSerial.'
					</table>
				  </section>
				
			 
			</div>
		';
	break;	
}

die(json_encode(array('status'=>$error)));

?>