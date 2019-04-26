<?php 
include_once("#include/config.php");
////load noi dung footer
function getNameCrmHDH($code){
	$sql = "SELECT * FROM $GLOBALS[db_sp].serial where code='$code'";
	$rs = $GLOBALS["sp"]->GetRow($sql);
	return $rs['hdh'];
}		
function getNamePr($table,$name,$id){
	$sql = "SELECT * FROM $GLOBALS[db_web].".$table." where id=$id";
	$rs = $GLOBALS["web"]->getRow($sql);
	return $rs[$name];
}

function convert_number_to_words($number) {
	$hyphen      = ' ';
	$conjunction = '  ';
	$separator   = ' ';
	$negative    = 'âm ';
	$decimal     = ' phẩy ';
	$dictionary  = array(
		0                   => 'không',
		1                   => 'một',
		2                   => 'hai',
		3                   => 'ba',
		4                   => 'bốn',
		5                   => 'năm',
		6                   => 'sáu',
		7                   => 'bảy',
		8                   => 'tám',
		9                   => 'chín',
		10                  => 'mười',
		11                  => 'mười một',
		12                  => 'mười hai',
		13                  => 'mười ba',
		14                  => 'mười bốn',
		15                  => 'mười năm',
		16                  => 'mười sáu',
		17                  => 'mười bảy',
		18                  => 'mười tám',
		19                  => 'mười chín',
		20                  => 'hai mươi',
		30                  => 'ba mươi',
		40                  => 'bốn mươi',
		50                  => 'năm mươi',
		60                  => 'sáu mươi',
		70                  => 'bảy mươi',
		80                  => 'tám mươi',
		90                  => 'chín mươi',
		100                 => 'trăm',
		1000                => 'ngàn',
		1000000             => 'triệu',
		1000000000          => 'tỷ',
		1000000000000       => 'nghìn tỷ',
		1000000000000000    => 'ngàn triệu triệu',
		1000000000000000000 => 'tỷ tỷ'
	);
 
	if (!is_numeric($number)) {
		return false;
	}
	if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
		trigger_error(
			'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
			E_USER_WARNING
		);
		return false;
	}
 
	if ($number < 0) {
		return $negative . convert_number_to_words(abs($number));
	}
 
	$string = $fraction = null;
 
	if (strpos($number, '.') !== false) {
		list($number, $fraction) = explode('.', $number);
	}
 
	switch (true) {
		case $number < 21:
			$string = $dictionary[$number];
		break;
		case $number < 100:
			$tens   = ((int) ($number / 10)) * 10;
			$units  = $number % 10;
			$string = $dictionary[$tens];
			if ($units) {
				$string .= $hyphen . $dictionary[$units];
			}
		break;
		case $number < 1000:
			$hundreds  = $number / 100;
			$remainder = $number % 100;
			$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
			if ($remainder) {
				$string .= $conjunction . convert_number_to_words($remainder);
			}
		break;
		default:
			$baseUnit = pow(1000, floor(log($number, 1000)));
			$numBaseUnits = (int) ($number / $baseUnit);
			$remainder = $number % $baseUnit;
			$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
			if ($remainder) {
				$string .= $remainder < 100 ? $conjunction : $separator;
				$string .= convert_number_to_words($remainder);
			}
		break;
	}
 
	if (null !== $fraction && is_numeric($fraction)) {
		$string .= $decimal;
		$words = array();
		foreach (str_split((string) $fraction) as $number) {
			$words[] = $dictionary[$number];
		}
		$string .= implode(' ', $words);
	}
	return $string ;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
</head>
<body>
<style type="text/css">
	*{
		margin:0px;
		padding:0px;
	}
	body {
		font-family:Arial, Helvetica, sans-serif;
		font-size:13px;
		color:#000000;
		margin:0;
	}
	.TitleTopPrint {
		/*background:#000000;*/
		color: #000000;
		font-weight: bold;
		font-size:24px;
		padding:10px 0;
		
	}
	.XuatkhoPrint {
		color: #000000;
		font-weight: bold;
		font-size:30px;
		padding:10px 0 0 0;
		
	}
	.DatedPrint {
		font-family:"Times New Roman", Times, serif;
		font-style:italic;
		font-size:16px;
		margin-left:55px;
	}
	.CodePrint{
		color: #000000;
		font-size:24px;
		padding:5px 0 0 10px;
	}
	
	.NamePrintAll{
		clear:both;
		width:100%;
		margin:8px 0;
		overflow:hidden;
	}
		.NamePrint{
			float:left;
			font-weight:bold;
		}
		.LinePrint{
			float:left;
			border-bottom:1px #000000 dashed;
			padding:0 20px 0 5px;
			margin:0 0 0 2px;
		}
		.LinePrintRight{
			float:left;
			border-bottom:1px #000000 dashed;
			padding:0 30px 0 5px;
			margin:0 0 0 4px;
		}
		.Fl{
			float:left;
		}
		.Kyten{
			font-style:italic;
		}
		.FontTime{
			font-family:"Times New Roman", Times, serif;
			font-size:15px;
		}
		.AddressPrint{
			line-height:22px;	
		}
	td{ padding:4px;}
	.right-dated{
		padding:3px;
	}
	.logan {
		font-family: MyriadPro-BoldCond;
	}
	.logan img{
		padding-bottom:6px;
	}
	.red{
		color:#ed1b24
	}
	.textngien{
		font-style:oblique;
		font-weight:bold;
		float:left;
	}
	.linengang{
		border:1px solid #000000;
		width:100%;
		margin:0 auto;
	}			
</style>
<?php
$sql = "select * from $GLOBALS[db_web].orders where id = '" .$_GET['id']."'";
$rs = $GLOBALS["web"]->getRow($sql);
$arrDay = getdate();
if($rs['type']==1)
	$loaidh = 'Trả góp';
else
	$loaidh = 'Mua';
//////////////////Load ma so
$so= $rs['id'];
$leng = strlen($so);
if($leng==1)
	$so = '000000'.$so;
elseif($leng==2)
	$so = '00000'.$so;
elseif($leng==3)
	$so = '0000'.$so;
elseif($leng==4)
	$so = '000'.$so;
elseif($leng==5)
	$so = '00'.$so;
elseif($leng==6)
	$so = '0'.$so;
else
	$so = $so;
//////////////////Load ma so
$so= $rs['id'];
$leng = strlen($so);
if($leng==1)
	$so = '000000'.$so;
elseif($leng==2)
	$so = '00000'.$so;
elseif($leng==3)
	$so = '0000'.$so;
elseif($leng==4)
	$so = '000'.$so;
elseif($leng==5)
	$so = '00'.$so;
elseif($leng==6)
	$so = '0'.$so;
else
	$so = $so;
	
//////////////////Load trả góp
$stt = 1;
if($rs['type']==1){
	$stt++;
	$strTraGop = '
		<tr>
			<td align="center" valign="middle">'.$stt.'</td>
			<td valign="middle"> Trả trước: '.$rs['slpercent'].'% , Thời gian vay: '.$rs['slmonth'].' tháng</td>
			<td align="center" valign="middle"> </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
	  	</tr>
	';
}

//////////////////Load bao hanh vcare
if($rs['vcare'] > 0){
	if($rs['vcare'] == 300000){
		$nameVcare = 'Gói bảo hành Vcare 6 tháng';
	}
	else{
		$nameVcare = 'Gói bảo hành Vcare 12 tháng';
	}
	$i=1;
	$stt++;
	$strVcare='
		<tr>
			<td align="center" valign="middle">'.$stt.'</td>
			<td align="left" valign="middle">'.$nameVcare.'</td>
			<td align="left" valign="middle"></td>
			<td align="left" valign="middle"></td>
			<td align="left" valign="middle">1</td>
			<td align="right" valign="middle">'.number_format($rs['vcare'],0,",",".").' đ</td>
			<td align="right" valign="middle">'.number_format($rs['vcare'],0,",",".").' đ</td>
		  </tr>
	';
}
else{
	$strVcare='';
}

//////////////////Load phụ kiện

if($rs['idpromotion'] > 0){
	$i=0;
	$sqlprm = "SELECT * FROM $GLOBALS[db_sp].phukiengiamgia where id in (".$rs['idpromotion'].")";
	$rsprm = $GLOBALS["sp"]->getAll($sqlprm);
	$i=2;
	$stt++;
	foreach($rsprm as $item){
		$i++;
		$strPromotion.= '
			<tr>
				<td align="center" valign="middle">'.$stt.'</td>
				<td align="left" valign="middle">'.$item['name_vn'].'</td>
				<td align="left" valign="middle"></td>
				<td align="left" valign="middle"></td>
				<td align="left" valign="middle">1</td>
				<td align="right" valign="middle">'.number_format($item['promotion_vn'],0,",",".").' đ</td>
				<td align="right" valign="middle">'.number_format($item['promotion_vn'],0,",",".").' đ</td>
			  </tr>
		';
	}
}

$num = ceil(2+$i);
if($rs['type']==1)
	$num++;
//die($num);
for($j=$num;$j<6;$j++){
	$strPromotion.= '
		<tr>
			<td align="center" valign="middle">'.$j.'</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		 </tr>
	';
}
///kho gia a5 418 x 598
echo'
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center" height="80" >
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="40%" valign="top" align="left" class="logan red">
							<img src="'.$path_url.'/images/logo.png" alt="Hệ Thống Bán Lẻ Di Động Uy Tín Toàn Quốc"   /> <br>
							<strong>UY TÍN TẠO THƯƠNG HIỆU</strong>
						</td>
						<td width="60%" valign="top" align="left" >
							<br>
							<span class="XuatkhoPrint red">PHIẾU GIAO HÀNG </span>  <br>
							<span class="DatedPrint">(Kiêm Phiếu Bảo Hành)</span>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		 <tr>
			<td valign="top" align="left">
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="70%">
							<div class="NamePrintAll">
								<div class="NamePrint">Tên khách hàng:</div> <div class="LinePrint">'.$rs['name'].' &nbsp;</div>
							</div>
							<div class="NamePrintAll">
								<div class="NamePrint">Địa chỉ:</div> <div class="LinePrint">'.$rs['address'].' &nbsp;</div>
							</div>
							<div class="NamePrintAll">
								<div class="NamePrint">Số điện thoại:</div> <div class="LinePrint">'.$rs['phone'].' &nbsp;</div>
							</div>
							
						</td>
						<td width="30%" valign="top" align="center">
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td class="right-dated" align="left" valign="middle">
										<div class="textngien">Ngày:</div> <div class="LinePrintRight">'.$arrDay['mday'].' tháng '.$arrDay['mon'].' năm '.$arrDay['year'].' &nbsp;</div>
									</td>
								</tr>
								<tr>
									<td class="right-dated" align="left" valign="middle">
										<div class="textngien">Số:</div> <div class="LinePrintRight">'.$so.' &nbsp;</div>
									</td>
								</tr>
								<tr>
									<td class="right-dated"  align="left" valign="middle">
										<div class="textngien">Loại ĐH:</div> <div class="LinePrintRight">'.$loaidh.' &nbsp;</div>
									</td>
								</tr>
								<tr>
									<td class="right-dated"  align="left" valign="middle">
										<div class="textngien">NV bán hàng:</div> <div class="LinePrintRight"> '.getNamePr('member','name',$rs['mid']).' &nbsp;</div>
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
	
			</td>
		</tr>
		
		<tr>
			<td valign="top" align="left">
				<table width="100%" border="1" cellpadding="0" cellspacing="0" style="BORDER-COLLAPSE: collapse;" bordercolor="#333333">
				  <tr>
					<td align="center" width="8%"><strong>STT</strong></td>
					<td align="center"><strong>TÊN HÀNG</strong></td>
					<td align="center" width="12%" ><strong>SỐ SERIAL</strong></td>
					<td align="center" width="12%" ><strong>HỆ ĐH</strong></td>
					<td align="center" width="8%" ><strong>SL</strong></td>
					<td align="center" width="15%" ><strong>ĐƠN GIÁ</strong></td>
					<td align="center" width="20%" ><strong>THÀNH TIỀN</strong></td>
				  </tr>
				  <tr>
					<td align="center" valign="middle">1</td>
					<td align="left" valign="middle">'.getNamePr('products','name_vn',$rs['idpr']).'</td>
					<td align="left" valign="middle">'.$rs['serial'].'</td>
					<td align="left" valign="middle">'.$rs['hdh'].'</td>
					<td align="left" valign="middle">1</td>
					<td align="right" valign="middle">'.number_format($rs['price'],0,",",".").' đ</td>
					<td align="right" valign="middle">'.number_format($rs['price'],0,",",".").' đ</td>
				  </tr>
				  '.$strTraGop.'
				  '.$strVcare.'
				  '.$strPromotion.'
				  <tr>
					<td colspan="10" align="left" valign="middle">
						Tổng số tiền thanh toán: <strong>'.number_format($rs['total'],0,",",".").' đ</strong>
					</td>
				  </tr>
				  
				  <tr>
					<td colspan="10" align="left" valign="middle">
						Số tiền viết bằng chữ: '.ucfirst(convert_number_to_words($rs['total'])).' đồng
					</td>
				  </tr>
				  <tr>
					<td colspan="10" align="left" valign="middle">
						Lời nhắn: '.$rs['content'].'
					</td>
				  </tr>
				  
				</table>
	
			</td>
		</tr>
		
	</table>
';
?>

</body>
</html>

