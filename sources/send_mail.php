<?php
error_reporting(E_ALL);
ini_set("display_errors",1); 
require_once('phpmailer/class.phpmailer.php');

$mail_to = "h197969@yahoo.com";
$mailreply = "";
$subject = "gởi từ subject";
$msg = "gởi từ msg";

$mailsend = sendmail("Liên hệ từ hải hà",$mail_to,$subject,$msg,$mailreply,$mailcc="",$mailcc1="");
	
if($mailsend){
	 die("mail sent thanh cong");
}
else die("mail not sent");
	
function sendmail($user,$email,$subj,$mess,$mailreply,$mailcc="",$mailcc1="")
{
	include("./email_config.php");
	$mail = new PHPMailer();
		
		/////////goi cho gmail	
	
		$mail->IsSMTP(); // send via SMTP
		$mail->SMTPAuth = true; // turn on SMTP authentication
		
		$mail->SMTPDebug = 1;
		$mail->SMTPSecure = 'ssl';
		$mail->Port       = 465;
		$mail->Host = SMTP_SERVER;
		$mail->Username = MAIL_USER; // SMTP username
		$mail->Password = MAIL_PASS; // SMTP password
		$mail->SetFrom($mailreply, $subj);
		$mail->CharSet = "UTF-8"; 
		
		$mail->From = MAIL_FROM;
		$mail->FromName = MAIL_FROMNAME;
		
		
		$mail->AddAddress($email,$user);
		
		
		
		$mail->WordWrap = 50; // set word wrap
		
		$mail->IsHTML(true); // send as HTML
		
		$mail->Subject = $subj;
		$mail->Body = $mess;
	
		$send=$mail->Send();
		if ($send) {
			return true;
		}else return false;

}
?> 

