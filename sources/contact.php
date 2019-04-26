<?php
$smarty->assign("security",generateCode(4));
if($_POST){
	require_once('libraries/phpmailer/class.phpmailer.php');
	$fh = fopen("EmailTemplate/Contact.html", 'r');
	$template = fread($fh, filesize("EmailTemplate/Contact.html"));
	fclose($fh);
	
	$name = striptags($_POST['name']);
	$phone = striptags($_POST['phone']);
	$email = strip_tags(trim($_POST['email']));
	$address = striptags($_POST['address']);
	$message = striptags($_POST['message']);
	
	$template = str_replace('[NAME_SEND]',$name, $template);
	$template = str_replace('[PHONE_SEND]',$phone, $template);
	$template = str_replace('[EMAIL_SEND]',$email, $template);
	$template = str_replace('[ADDRESS_SEND]',$address, $template);
	$template = str_replace('[COMMENT]',$message, $template);
	
	$checkEmail = validate_email($email);
	$checkPhone =  strlen($phone);
	$strPhone = substr(trim($phone),0,1);
	
	if($strPhone==0 && !empty($name) && !empty($phone) && $checkEmail && !empty($address) && $checkPhone>= 10 && $checkPhone<= 11 ){
		///////load email lien he 
		$sql = "select plain_text_en from $GLOBALS[db_sp].infos where id=15 " ;
		$mail_to = strip_tags($GLOBALS['sp']->getOne($sql));
		
		$mailreply = strip_tags($_POST['email']);
		
		$mail_subject = strip_tags($_POST['name']);
		$msg = $template;
		$subject = $mail_subject;
		$user = "vietanhmobile.com";
		$MAIL_FROMNAME = "Liên hệ với Việt Anh mobile";
		$mailsend = sendmail($user,$MAIL_FROMNAME,$mail_to,$subject,$msg,$mailreply,$mailcc="",$mailcc1="");
		
		
		if($mailsend){
			 $smarty->display("contact/finish.tpl");
		}
		else die("mail not sent");	
	}
	else{	
		die('Du lieu khong hop le vui long lam lai');
	}

}

$sql = "select * from $GLOBALS[db_sp].infos where id=14";
$rs = $GLOBALS["sp"]->getRow($sql);

$smarty->assign("addressContact",$rs);
$template = "contact/view.tpl";

$smarty->assign("seo",$cat1);
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");

?>