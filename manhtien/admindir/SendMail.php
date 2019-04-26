<?php
include_once("./#include/config.php");
include_once("./functions/function.php");
require_once('../libraries/phpmailer/class.phpmailer.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Detail</title>

</head>
<body>
<?php
	$sql = "select * from $GLOBALS[db_sp].orders where id=".$_GET['id'];
	$order = $GLOBALS["sp"]->getRow($sql);

	$template = '<p><strong>Cảm ơn bạn đã mua hàng tại vaydonggia.com .Chúng tôi xin xác nhận đơn hàng dưới đây.</strong></p>
	<p>[DESC]</p>
	';
		
	$template = str_replace('[DESC]', $order['descs'], $template);
	$template = str_replace('[ORDER_ID]', $_GET['id'], $template);
	
	$sql = "select plain_text_vn from $GLOBALS[db_sp].infos where id=15 " ;
	$mailreply = strip_tags($GLOBALS['sp']->getOne($sql));
	
	$subject = 'Xác nhận giao hàng hoàn tất đơn hàng số '. $_GET['id'];
	$mail_to = $order['email'];
	$MAIL_FROMNAME = "Xác nhận giao hàng hoàn tất";
	$user = "Xác nhận giao hàng hoàn tất";
	$msg = $template;
	$mailsend = sendmail($user,$MAIL_FROMNAME,$mail_to,$subject,$msg,$mailreply,$mailcc="",$mailcc1="");
	
	if(!$mailsend) {
	  echo "Lỗi trong khi gởi mail: "; die();
	} else {
	  echo "Đơn hàng đã được gởi đến ".$mail_to ; 
	}
	$arr['status'] = 1;
	vaUpdate('orders',$arr,' id='.$_GET['id']);
		
?>

</body>
</html>
