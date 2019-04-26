<?php
require_once('libraries/phpmailer/class.phpmailer.php');
$name['title'] = "Giỏ hàng";
$smarty->assign("seo",$name);

switch($act){
	case"finish":
		$sql = "select * from $GLOBALS[db_sp].infos where id=64 ";
		$rs = $GLOBALS["sp"]->getRow($sql);
		$smarty->assign("thanksyou",$rs);
		$template = "gio-hang/finish.tpl";
	break;
	
	case"thanh-toan":
		$arr = array();
		$arrOrder = array();
		$priceTotal = trim(isset($_POST['priceTotal'])?$_POST['priceTotal']:"");
		
		$arr['email'] = $email = striptags(isset($_POST['sender_email'])?$_POST['sender_email']:"");
		$arr['name'] = $name = striptags(isset($_POST['sender_name'])?$_POST['sender_name']:"");
		$arr['phone'] = $phone = striptags(isset($_POST['sender_telephone'])?$_POST['sender_telephone']:"");
		$arr['address'] = $address = striptags(isset($_POST['sender_address'])?$_POST['sender_address']:"");
		$sender_msg = striptags(isset($_POST['sender_msg'])?$_POST['sender_msg']:"");
		$arr['codepromotion'] = $codepromotion = trim(isset($_POST['sender_code'])?$_POST['sender_code']:"");
		
		$idbonho = striptags(isset($_POST['idbonho'])?$_POST['idbonho']:1);
		$priceBonho = striptags(isset($_POST['priceBonho'])?$_POST['priceBonho']:0);
		
		$checkPhone =  strlen($phone);
		$strPhone = substr(trim($phone),0,1);
		if($strPhone==0 && !empty($name) && is_numeric($phone) && $checkPhone>= 10 && $checkPhone<= 11 ){
			$phuongthuc = trim($_POST['checkmod']);
			$tragop =  trim(isset($_POST['tragop'])?$_POST['tragop']:"");
					
			$idtinhthanh = $tinhthanh = trim(isset($_POST['tinhthanh'])?$_POST['tinhthanh']:"");
			$idquanhuyen = $quanhuyen = trim(isset($_POST['quanhuyen'])?$_POST['quanhuyen']:"");
			$idphuongxa = $phuongxa = trim(isset($_POST['phuongxa'])?$_POST['phuongxa']:"");
			
			$arrDay = getdate();
			$arrOrder['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
			$ngaydathang = $arrDay['mday'].'-'.$arrDay['mon'].'-'.$arrDay['year'];
			
			$fh = fopen("EmailTemplate/CheckOut.html", 'r');
			$template = fread($fh, filesize("EmailTemplate/CheckOut.html"));
			fclose($fh);
			
			$str = '';	
			$strgiahotro = '';
			$pricegiahotro = '';
			if($tragop == 'tragop'){// mua hàng trả góp
				
				$arrOrder['tratruoc'] =  trim($_POST['showTratruocInput']);
				$arrOrder['gopthang'] =  trim($_POST['showGopMoiThangInput']);
				
				$arrOrder['slpercent'] =  trim($_POST['slpercent']);
				$arrOrder['slmonth'] =  trim($_POST['slmonth']);
				
				$arrOrder['type'] =  1;	
				
				$str .='<strong>Gói hổ trợ giảm giá</strong> <br /> Trả trước <span class="style2">'.$arrOrder['slpercent'].'% </span>';
				$str .='<br /> Thời gian vay <span class="style2">'.$arrOrder['slmonth'].' tháng </span>';
				$str .='<br /> Số tiền Trả trước <span class="style2">'.number_format($arrOrder['tratruoc'],0,",",".") .' vnđ </span>';
				$str .='<br /> Số tiền Góp mỗi tháng <span class="style2">'.number_format($arrOrder['gopthang'],0,",",".") .' vnđ </span>';
				
				$template = str_replace('[HOTRO_GIAMGIA]',$str, $template);
				
				$arrOrder['banking'] = $banking = ($_POST['banking']);
				$bankingTpl = '
					<tr>
						<td style="padding:10px 0;"><strong>Ngân hàng</strong> : '.getNameAll($banking,'banner','name_vn').'</td>
					</tr>
				';
				$template = str_replace('[BANKING]',$bankingTpl, $template);
			}
			
	
			$vcare = trim($_POST['Vcare']);
			$vcare12 = trim($_POST['Vcare12']);
			$idpromotion = $_POST['PkPromotion'];
			if($idpromotion){
				$idpromotion = implode(",",$idpromotion);
				$sql_pmt = "SELECT * FROM $GLOBALS[db_sp].phukiengiamgia where id in ($idpromotion) order by id desc";
				$rs_pmt = $GLOBALS["sp"]->GetAll($sql_pmt);
				$str = '';
				$pricePromotion = 0;
				foreach($rs_pmt as $values){
					//$str .=' <br /> '.$values['name_vn'].' từ  '.number_format($values['price_vn'],0,",",".").' xuống <span class="style2">'.number_format($values['promotion_vn'],0,",",".").'</span>';
					$str .=' <br /> '.$values['name_vn'].' giá <span class="style2">'.number_format($values['promotion_vn'],0,",",".").'</span>';
					$pricePromotion += $values['promotion_vn'];
					$pricegiahotro .= ' <br /> '. number_format($values['promotion_vn'],0,",",".");
				}
				//$template = str_replace('[HOTRO_GIAMGIA]',$str, $template);
				$strgiahotro = $str;
			}
	
			
			
			$template = str_replace('[NAME]',$name, $template);
			$template = str_replace('[PHONE]',$phone, $template);
			$template = str_replace('[EMAIL]',$email, $template);
			$template = str_replace('[MSSG]',$sender_msg, $template);
			$template = str_replace('[DATETIME_ORDER]',$ngaydathang, $template);
			$template = str_replace('[PHUONGTHUC]',$phuongthuc, $template);
			
			//die($idpromotion);
			if(!empty($idtinhthanh)){
				$tinhthanh = getNameCity($idtinhthanh);
				//$template = str_replace('[TINHTHANH]',$tinhthanh, $template);
				$template = str_replace('[TINHTHANH]',$tinhthanh, $template);
				
			}
			if(!empty($idquanhuyen)){
				$quanhuyen = getNameDistrict($idquanhuyen);
				$template = str_replace('[QUANHUYEN]',$quanhuyen, $template);
			}
			if(!empty($idphuongxa)){
				$phuongxa = getNameWard($idphuongxa);
				$template = str_replace('[PHUONGXA]',$phuongxa, $template);
			}
			
			if(!empty($address)){
				$template = str_replace('[ADDRESS]',$address, $template);
			}
			
			///////////////////load nhan vien lap don hang
			$strm = '';
			if($_SESSION['VIETANHMOBILE_MEMBER_TYPE']==1){
			
				$sql_m = "SELECT * FROM $GLOBALS[db_sp].member where id=".$_SESSION['VIETANHMOBILE_MEMBER_ID'];
				$rs_m = $GLOBALS["sp"]->GetRow($sql_m);
				
				$strm = '
					<tr>
						<td colspan="3"><strong>Họ tên</strong> : '.$rs_m['name'].'</td>
					</tr>
				  
					<tr>
						<td colspan="3"><strong>Điện thoại</strong> : '.$rs_m['phone'].'</td>
					</tr>
				  
					<tr>
						<td colspan="3"><strong>Email</strong> : '.$rs_m['email'].'</td>
					</tr>
					
					<tr>
						<td colspan="3"><strong>Địa chỉ</strong> : '.$rs_m['address'].'</td>
					</tr>	
				';
				
				$template = str_replace('[NV_LAP_DON_HANG]','NHÂN VIÊN LẬP ĐƠN HÀNG', $template);
				$template = str_replace('[THONG_TIN_NV]',$strm, $template);
			}
			else{
				$template = str_replace('[NV_LAP_DON_HANG]','', $template);
				$template = str_replace('[THONG_TIN_NV]','', $template);
			}
			////////////////////////////////////////////////	
			$idpr = trim(isset($_POST['idpr'])?$_POST['idpr']:"");
			
			$total = 0;
			$totalAll = 0;
			$stt = 1;
			$list = " ";
			$namePr = " ";
			$QuantityPr = 0;
	
			$sql = " select *,pr.id as idpr from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.id=".$idpr." 
						and pr.active=1 
						and pr.id=cldd.idpr
						and cldd.idbonho = $idbonho
						and cldd.idcity=$showCity
			";
			//die($sql);
			$row = $GLOBALS['sp']->getRow($sql);
			
			
			$price =ceil($row['price_'.$lang]) ;
			$priceVare = ceil(trim($_POST['priceTotal']));
			$vcareText = $vcareShow = '';
			if(($priceBonho > 0) && ($idbonho > 1)){
				$bonhoShow = ' - '.getNameAll($idbonho,'bonho','name_vn');	
			}
			if($vcare > 0){
				$vcareText = 'Gói Vcare 6 tháng ';
				$vcareShow = '<br>'.number_format($vcare,0,",",".");
			}
			if($vcare12 > 0){
				$vcareText = 'Gói Vcare 12 tháng ';
				$vcareShow = '<br>'.number_format($vcare12,0,",",".");
			}
			$price1 = number_format($price,0,",",".");
			$priceOut = number_format($priceVare,0,",",".");
	
			$img = "<img width='57'  alt='".$row['alt_img']."' src='".$path_url."/".$row['img_thumb_vn']."' />";
			
			$list .= '<tr>';
			$list .= '<td valign="middle" bgcolor="#FFFFFF" align="center" >'.$row['code']. '</td>';
			$list .= '<td valign="top" bgcolor="#FFFFFF" align="left" >'.$row['name_'.$lang].$bonhoShow. ' <br />'.$img.' <br /> '.$strgiahotro.' <br /> '.$vcareText.' </td>';
			$list .= '<td valign="middle" bgcolor="#FFFFFF" align="right">'.$price1.$vcareShow.'</td>';
			$list .= '</tr>';
			
				
			$list .= "
				<tr>
					<td bgcolor='#E3E3E3' align='center' class='bot'></td>
					<td bgcolor='#E3E3E3' align='right' class='bot'><b>TỔNG TIỀN:</b></td>
					<td bgcolor='#E3E3E3' align='right'> <span class='style2'><b>".$price1." VNĐ</b></span></td>
				</tr>";
			
			$template = str_replace('[SAN_PHAM]', $list, $template);
			$s = strpos($template, "<body>") + 6;
			$e = strpos($template, "</body>") ;
			$arrOrder['descs'] = substr($template, $s, $e - $s);
			$arrOrder['mid'] = $_SESSION['VIETANHMOBILE_MEMBER_ID'];
			$arrOrder['mtype'] = $_SESSION['VIETANHMOBILE_MEMBER_TYPE'];
			$arrOrder['idpr'] = $idpr;
			$arrOrder['idkhuvuc'] = $showCity;
			$arrOrder['city'] = $idtinhthanh;
			$arrOrder['district'] = $idquanhuyen;
			$arrOrder['ward'] = $idphuongxa;
			
			$arrOrder['vcare'] =  $vcare;
			$arrOrder['idpromotion'] =  $idpromotion;
	
			$arrOrder['name'] = $arr['name'];
			$arrOrder['address'] = $arr['address'];
			$arrOrder['phone'] = strSpace($arr['phone']);
			$arrOrder['email'] = $arr['email'];
			$arrOrder['codepromotion'] = $arr['codepromotion'];
			
			$arrOrder['idbonho'] = $idbonho;
			$arrOrder['priceBonho'] = $priceBonho;
			
			$arrOrder['price'] = $price;
			$arrOrder['total'] = $priceVare;
			$arrOrder['content'] = $sender_msg;
	
			$OrderId = vaInsert('orders',$arrOrder);
			$template = str_replace('[ORDER_ID]', $OrderId, $template);
	
			///////load email lien he
	
			$sql = "select plain_text_vn from $GLOBALS[db_sp].infos where id=15 " ;
			$mail_to = strip_tags($GLOBALS['sp']->getOne($sql));
			$mailreply = $mail_to;
			$mailcc = $email;
			
			$msg = $template;
			$subject = "Đơn Hàng Số ".$OrderId;
			$MAIL_FROMNAME = "Đơn hàng";
			$user = "Đơn hàng";
			$mailsend = sendmail($user,$MAIL_FROMNAME,$mail_to,$subject,$msg,$mailreply,$mailcc,$mailcc1="");
			if(!$mailsend)
				die('Lỗi hệ thống không thể gởi mail, vui lònng quay lại sau. ');
		
			$order_id = $OrderId;		
			$BaseUrl = $path_url."/gio-hang/finish/".$OrderId."/";
			
			echo"<script type=\"text/javascript\">	
					document.location.href='".$BaseUrl."'
			</script>";
		}
		else{
			echo"<script type=\"text/javascript\">	
				alert('Thông tin không đúng vui lòng làm lại.');
				window.history.back();
			</script>";
		}
	break;
	
}
		
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");
?>