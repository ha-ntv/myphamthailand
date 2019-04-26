<?php
include("../#include/config.php");
include("../functions/function.php");

$error = array();
$error ="";
$idprphieu = trim($_POST['idprphieu']);
$cid = trim($_POST['cid']);
$idpr = trim($_POST['idpr']);
$num = trim($_POST['num']);
$type = isset($_POST["type"])?$_POST["type"]:"";
switch($type)
{
	case 'addpr':
		$sql = "SELECT * FROM $GLOBALS[db_web].products where cid=$cid and active=1 order by num asc, id desc";
		$rs = $GLOBALS["web"]->GetAll($sql);
		foreach($rs as $item)
		{
			$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';;
		}
		if($num > 0)
			$list =  '<span class="titleFr ng-binding">Sản phẩm</span> <select  style="width:330px;" name="idprphieuall[]" >'.$center.'</select>';
		else
			$list =  '<span class="titleFr ng-binding">Sản phẩm</span> <select  style="width:330px;" name="idprphieu" id="idprphieu">'.$center.'</select>';

		die(json_encode(array('status'=>$list)));
		
	break;
	
	case 'editpr':
		$sql = "SELECT * FROM $GLOBALS[db_web].products where cid=$cid and active=1 order by num asc, id desc";
		$rs = $GLOBALS["web"]->GetAll($sql);
		foreach($rs as $item)
		{
			if($item['id'] == $idprphieu)
				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name_vn'].'</option>';
			else
				$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';
		}
		$list =  '<span class="titleFr ng-binding">Sản phẩm</span> <select style="width:330px;" name="idprphieu" id="idprphieu">'.$center.'</select>';
		die(json_encode(array('status'=>$list)));
		
	break;
	
	case 'addprxuatkho':
		$sql = "SELECT * FROM $GLOBALS[db_web].products where cid=$cid and active=1 order by num asc, id desc";
		$rs = $GLOBALS["web"]->GetAll($sql);
		foreach($rs as $item)
		{
			if($item['id'] == $idprphieu)
				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name_vn'].'</option>';
			else
				$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';
		}
		if($num > 0)
			$list =  '<span class="titleFr ng-binding">Sản phẩm</span> <select  style="width:330px;" name="idprphieuall[]" onchange="loadSerial(this.value,'.$num.')" ><option value="0">----Chọn sản phẩm----</option>'.$center.'</select>';
		else
			$list =  '<span class="titleFr ng-binding">Sản phẩm</span> <select  style="width:330px;" name="idprphieu" id="idprphieu" onchange="loadSerial(this.value)" ><option value="0">----Chọn sản phẩm----</option>'.$center.'</select>';

		die(json_encode(array('status'=>$list)));
		
	break;
	
	case 'addserial':
		$sqlpr = "SELECT * FROM $GLOBALS[db_web].products where id=$idpr and active=1 limit 1";
		$rspr = $GLOBALS["web"]->GetRow($sqlpr);
		
		$sql = "SELECT * FROM $GLOBALS[db_sp].serial where idpr=$idpr and cid = ".$rspr['cid']." and active=1 and idcity in (".$_SESSION['admin_showCity'].") order by id desc";
		$rs = $GLOBALS["sp"]->GetAll($sql);
		foreach($rs as $item)
		{
			$center .= '<option  value="'.$item['code'].'" >'.$item['code'].'</option>';;
		}
		die(json_encode(array('status'=>$center)));
		
	break;
	
	case "addSeriaPhieuXuat":
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

		
		$sql = "select * from $GLOBALS[db_sp].khachhang where idcity in (".$_SESSION['admin_showCity'].") order by id desc ";
		$rs = $GLOBALS["sp"]->getAll($sql);
		$str='';
		foreach($rs as $item){
			$str .= '
				<option value="'.$item['id'].'"> '.$item['name'].' </option>
			';
		}
		$error = '<div class="SubBox"><div class="Line"></div></div>' . $strsp .'
			<div class="SubBox">
				 <div class="titleFr ng-binding Fl">Số Serial '.$numname.'</div>
				 <div class="sub-select-serial">	
					<select class="select-serial" id="leftValues'.$numname.'" multiple="multiple"></select>
				</div>
				<div class="sub-btn-serial">
					<input type="button" id="btnLeft'.$numname.'" value="&lt;&lt;" />
					<input type="button" id="btnRight'.$numname.'" value="&gt;&gt;" />
				</div>
				<div class="sub-select-serial">
					<select class="select-serial" id="rightValues'.$numname.'" name="code'.$numname.'[]" multiple="multiple"></select>
				</div>
				<input type="hidden" name="checkcodeall[]" />
				  <div class="Clear"></div>  
			 </div>
			 
			 <div class="SubBox">
				<span class="titleFr ng-binding">Giá xuất '.$numname.'</span>
				<input type="text" name="price[]" class="FrText autoNumeric">
			 </div>
			 
			 <div class="SubBox">
				<span class="titleFr ng-binding">Khách hàng</span>
				<select name="partnerall[]">
					<option value="0">----Chọn khach hang----</option>
					'.$str.'
				</select>
			 </div>
			 
			 <script>
			 	$("#btnLeft'.$numname.'").click(function () {
						var selectedItem = $("#rightValues'.$numname.' option:selected");
						$("#leftValues'.$numname.'").append(selectedItem);
					});
					
					$("#btnRight'.$numname.'").click(function () {
						var selectedItem = $("#leftValues'.$numname.' option:selected");
						$("#rightValues'.$numname.'").append(selectedItem);
						
					});
					
				function formatNumber (num) {
					return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
				}
				$(".autoNumeric").autoNumeric("init", {aSep: ".", aDec: "none"});
			</script>
		';
		die(json_encode(array('status'=>$error)));
	break;

}
?>