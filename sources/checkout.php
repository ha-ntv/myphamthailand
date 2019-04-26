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
	
	default :
		$arr = array();
		$arrOrder = array();
		$priceTotal = trim(isset($_POST['priceTotal'])?$_POST['priceTotal']:"");
		
		$arr['name'] = $name = striptags(isset($_POST['billing_first_name'])?$_POST['billing_first_name']:"");
		$arr['phone'] = $phone = striptags(isset($_POST['billing_phone'])?$_POST['billing_phone']:"");
		$arr['address'] = $address = striptags(isset($_POST['billing_address_1'])?$_POST['billing_address_1']:"");
		
		 $shipping_cost = str_replace('.','', isset($_POST['shipping_fees'])?$_POST['shipping_fees']:0);
		 $arr['shipping_cost'] = $shipping_cost = str_replace(',','.', $shipping_cost);
		$sender_msg = striptags(isset($_POST['order_comments'])?$_POST['order_comments']:"");
		$arr['email'] = $email = $_SESSION['VIETANHMOBILE_MEMBER_EMAIL'];
		
		$checkPhone =  strlen($phone);
		$strPhone = substr(trim($phone),0,1);
		if($strPhone==0 && !empty($name) && is_numeric($phone) && $checkPhone>= 10 && $checkPhone<= 11 ){
			$phuongthuc = trim($_POST['payment_method']);
			
			
			$arrDay = getdate();
			$arrOrder['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
			$ngaydathang = $arrDay['mday'].'-'.$arrDay['mon'].'-'.$arrDay['year'];
			
			$fh = fopen("EmailTemplate/CheckOut.html", 'r');
			$template = fread($fh, filesize("EmailTemplate/CheckOut.html"));
			fclose($fh);
			
			$str = '';	
			$strgiahotro = '';
			$pricegiahotro = '';
		
	
			
			
			$template = str_replace('[NAME]',$name, $template);
			$template = str_replace('[PHONE]',$phone, $template);
			$template = str_replace('[EMAIL]',$email, $template);
			$template = str_replace('[MSSG]',$sender_msg, $template);
			$template = str_replace('[DATETIME_ORDER]',$ngaydathang, $template);
			$template = str_replace('[PHUONGTHUC]',$phuongthuc, $template);
			
		
			
			if(!empty($address)){
				$template = str_replace('[ADDRESS]',$address, $template);
			}
			
			$total = 0;
			$gross = 0;
			$totalAll = 0;
			$stt = 1;
			$list = " ";
			$namePr = " ";
			$QuantityPr = 0;
			$list_items = array();
			$list_insert = array();
			foreach($_SESSION["cart"] as $key => $val) {
				$list_items[] = $key;
				$list_insert[] = $key . ':'.$val;
			}
			$list_insert = implode(',',$list_insert);
			$list_items = implode(',',$list_items);
			$total_money = 0;
			$list .= '<table class="table-responsive">
						<thead>
						<tr>
						<th>Code</th>
						<th>Tên-Hình</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						</tr>
						
						</thead>';
			$sql = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.id IN (".$list_items.") 
						and pr.active=1 
						and pr.id=cldd.idpr
						and cldd.idcity=$showCity
			";
			//die($sql);
			$rows = $GLOBALS['sp']->getAll($sql);
			$contact = true;
			foreach($rows as $row) {
				$total+= $row["price"]*$_SESSION["cart"][$row["idpr"]];
				$price1 = number_format($row["price"],0,",",".");
				if($row["price"] == 0) {
					$contact = false;
					$gross = "Liên hệ";
				} 
				else {
					$gross =  number_format($row["price"]*$_SESSION["cart"][$row["idpr"]],0,",",".");
				}
				$priceOut = $price1;
				$img = "<img width='57'  alt='".$row['alt_img']."' src='".$path_url."/".$row['img_thumb_vn']."' />";
				
				$list .= '<tr>';
				$list .= '<td valign="middle" bgcolor="#FFFFFF" align="center" >'.$row['code']. '</td>';
				$list .= '<td valign="top" bgcolor="#FFFFFF" align="left" >'.$row['name_'.$lang]. '<br />'.$img.' <br /> </td>';
				$list .= '<td valign="middle" bgcolor="#FFFFFF" align="right">'.$price1.'</td>';
				$list .= '<td valign="middle" bgcolor="#FFFFFF" align="right">'.$_SESSION["cart"][$row["idpr"]].'</td>';
				$list .= '<td valign="middle" bgcolor="#FFFFFF" align="right">'.$gross .'</td>';
				$list .= '</tr>';
			
			}
			
			
				
			$list .= "
				<tr>
					<td bgcolor='#E3E3E3' align='center' class='bot'>PHÍ SHIP</td>
					<td bgcolor='#E3E3E3' align='center' class='bot'>".number_format($shipping_cost,0,",",".")."</td>
					<td bgcolor='#E3E3E3' align='right' class='bot'><b>TIỀN HÀNG:</b></td>					
					<td bgcolor='#E3E3E3' align='right'> <span class='style2'><b>".($contact? number_format($total,0,",","."): "Liên hệ")." VNĐ</b></span></td>
					<td bgcolor='#E3E3E3' align='center' class='bot'>TỔNG CỘNG : ".($contact? number_format($total+$shipping_cost,0,",","."): "Liên hệ")."</td>
					</tr>";
			
			////Load Content Footer trong mail
			$sqlfooter = "select content_vn from $GLOBALS[db_sp].infos where id = 62";
			$rsfooter = $GLOBALS["sp"]->getOne($sqlfooter);
			$template = str_replace('[FOOTER]', $rsfooter, $template);
			$template = str_replace('[SAN_PHAM]', $list, $template);
			$s = strpos($template, "<body>") + 6;
			$e = strpos($template, "</body>") ;
			$arrOrder['descs'] = substr($template, $s, $e - $s);
			$arrOrder['mid'] = $_SESSION['VIETANHMOBILE_MEMBER_ID'];
			$arrOrder['idpr'] = $list_insert;
			$arrOrder['total'] = $total;
			$arrOrder['name'] = $arr['name'];
			$arrOrder['address'] = $arr['address'];
			$arrOrder['phone'] = strSpace($arr['phone']);
			$arrOrder['email'] = $arr['email'];
			$arrOrder['ship'] = $shipping_cost;
		//	$arrOrder['city'] = $smarty.session.showCity;
			
			
			$arrOrder['content'] = $sender_msg;
	
			$OrderId = vaInsert('orders',$arrOrder);
			$template = str_replace('[ORDER_ID]', $OrderId, $template);
			unset($_SESSION["cart"]);
			
			$order_id = $OrderId;	
			$BaseUrl = $path_url."/check-out/finish/";
			echo "<script type=\"text/javascript\">	
					document.location.href='".$BaseUrl."'
				</script>";
		}
		else{
			echo"<script type=\"text/javascript\">	
				alert('Thông tin không đúng vui lòng làm lại.');
				window.history.back();
			</script>";
		}

	
}
		
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");
?>