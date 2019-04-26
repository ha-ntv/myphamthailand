<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");
	$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";
	$city = isset($_REQUEST["city"])?$_REQUEST["city"]:1;
	$error = '';
	switch($type)
	{	
		case 'dellike':
			$id = trim($_POST['id']);				
			$sql=" delete from $GLOBALS[db_sp].productlike  
				    where idpr=$id
					and mid=".$_SESSION['VIETANHMOBILE_MEMBER_ID']."
			 ";
			// die($sql);
			$GLOBALS["sp"]->execute($sql);
			die(json_encode(array('status'=>'success')));
		break;
		
		case 'like':
			$idpr = trim($_POST['idpr']);				
			$sql = "select * from $GLOBALS[db_sp].productlike 
					where idpr=$idpr 
					and mid=".$_SESSION['VIETANHMOBILE_MEMBER_ID'];
			$rs = $GLOBALS["sp"]->getAll($sql);
			if(ceil(count($rs)) > 0) {
				die(json_encode(array('status'=>'error')));
			}
			else{
				$arr['dated'] = date('Y/m/d');
				$arr['mid'] = $_SESSION['VIETANHMOBILE_MEMBER_ID'];
				$arr['idpr'] = $idpr;
				$id = vaInsert('productlike',$arr);
				die(json_encode(array('status'=>'success')));	
			}
		break;
		
		case 'setCity':
			$_SESSION['showCity'] = $city;
			die(json_encode(array('status'=>'ok')));
		break;	
		case 'register':
			$arr['name'] = striptags($_POST['name']);
			$arr['email'] = $email = striptags($_POST['email']);
			$password = trim($_POST['password']);
			$password = trim($_POST['password']);
			
			$arr['day']= trim($_POST["birth_day"]);
			$arr['month']= trim($_POST["birth_month"]);
			$arr['year']= trim($_POST["birth_year"]);
			
			$password = trim($_POST['password']);
			$arr['password'] = md5($password);
			if(!empty($email)){
				$sql = "select * from $GLOBALS[db_sp].member where BINARY `email`='$email'";
				$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
				if($count > 0)
					$error = "Địa chỉ email này đã tồn tại.";
			}

			if(!empty($error)){
				die(json_encode(array('status'=>'error','errors'=>$error)));
			} 
			else {
				$id = vaInsert('member',$arr);
				$sql = "select * from $GLOBALS[db_sp].member where id=$id";
				$rs = $GLOBALS["sp"]->getRow($sql);
				$_SESSION['VIETANHMOBILE_MEMBER_ID'] = $rs["id"];
				$_SESSION['VIETANHMOBILE_MEMBER_NAME'] = $rs["name"];
				$_SESSION['VIETANHMOBILE_MEMBER_EMAIL'] = $rs["email"];
				die(json_encode(array('status'=>'success','msg'=>'111')));
			}
		break;
		
		case 'login':
			$email = addslashes(trim($_POST['email']));
			$pw = $_POST['password'];
			if(!empty($email) && !empty($pw)){
				
				$password=md5($pw);
				$sql = "SELECT * FROM $GLOBALS[db_sp].member where email='$email' and password='$password' limit 1";
				$rs = $GLOBALS["sp"]->GetRow($sql);
				//die($rs["email"] . " pw: ". $rs["password"]);			
				//die($sql);
				if(!empty($rs["id"]) && !empty($rs["email"]) == $email && !empty($rs["password"]) == $password)
				{
					$_SESSION['VIETANHMOBILE_MEMBER_ID'] = $rs["id"];
					$_SESSION['VIETANHMOBILE_MEMBER_NAME'] = $rs["name"];
					$_SESSION['VIETANHMOBILE_MEMBER_EMAIL'] = $rs["email"];
					$_SESSION['VIETANHMOBILE_MEMBER_TYPE'] = $rs["type"];
				}
				else   $error = 'Địa chỉ email hoặc mật khẩu không đúng.';
			}
			
			//die($sql);
			if(!empty($error)){
				die(json_encode(array('status'=>'error','errors'=>$error)));
			} 
			else {
				die(json_encode(array('status'=>'success','msg'=>'111')));
			}
			
			
		break;

		case 'changepw':
			$oldpw = isset($_POST['passwordold'])?$_POST['passwordold']:"";
			$pw = isset($_POST['password'])?$_POST['password']:"";
			//die($oldpw);
			if(!empty($oldpw)){
				$oldpw = md5($oldpw);
				$sql = "SELECT * FROM $GLOBALS[db_sp].member where id=".$_SESSION['VIETANHMOBILE_MEMBER_ID']." and password='$oldpw' limit 1";
				$count = ceil(count($GLOBALS["sp"]->GetAll($sql)));
				if(!$count)
					$error =  "Mật khẩu cũ không đúng.";
			}
			
			if(empty($error)){
				$password = md5($pw);
				$sql =  " UPDATE $GLOBALS[db_sp].member SET
						  password='$password' WHERE
						  id = ".$_SESSION['VIETANHMOBILE_MEMBER_ID']."
				";
				$GLOBALS["sp"]->execute($sql);
				
			}
			if(!empty($error)){
				die(json_encode(array('status'=>'error','errors'=>$error)));
			} 
			else {
				die(json_encode(array('status'=>'success','msg'=>'111')));
			}
			
		break;
		
		case 'forgot':
			require_once('../libraries/phpmailer/class.phpmailer.php');
			$email = isset($_POST['email'])?$_POST['email']:"";
		
			if(!empty($email) && empty($error)){
				$sql = "SELECT * FROM $GLOBALS[db_sp].member where email='$email' limit 0,1";
				$count = ceil(count($GLOBALS["sp"]->GetAll($sql)));
			
				if(!empty($count))
				{
					$pw = rand (1,"123456789");
					$password = md5($pw);

					$fh = fopen("../EmailTemplate/forgot_password.html", 'r');
					$template = fread($fh, filesize("../EmailTemplate/forgot_password.html"));
					fclose($fh);
					
					$template = str_replace('[LINK]',$pw,$template);
					//die($template);
					///send mail
					$msg = $template;
					$subject = "Forgot Password";
					$mail_to = trim($email);
					$mailsend = sendmailAjax("Forgot Password",$mail_to,$subject,$msg);
					
					if(!$mailsend){
						$error['email'] = "mail not sent";
					}
					else{
						$sql = "UPDATE $GLOBALS[db_sp].member set password='$password' where email='$email' ";
						$GLOBALS["sp"]->execute($sql);
					}
				}
				else   $error['email'] = $EmailValidateForgotPw;
			
			}
			
			if(isset($error) && count($error) > 0){
				die(json_encode(array('status'=>'error','errors'=>$error)));
			} 
			else {
						
				die(json_encode(array('status'=>'success','msg'=>$PwForgot)));
			}
			
		break;
		
		case 'signout':
			unset($_SESSION['VIETANHMOBILE_MEMBER_ID']);
			unset($_SESSION['VIETANHMOBILE_MEMBER_NAME']);	
			unset($_SESSION['VIETANHMOBILE_MEMBER_EMAIL']);
			unset($_SESSION['VIETANHMOBILE_MEMBER_TYPE']);
			die(json_encode(array('status'=>'success')));
		break;
		
		case 'searchSp':
			$searchtext = isset($_POST['searchtext'])?$_POST['searchtext']:"";
			session_register('keyshopping');
			$_SESSION['keyshopping'] = $searchtext;
			die(json_encode(array('distination'=>$path_url."/shop-online/")));
		break;
		
		case 'ykhachhang':
			$arrDay = getdate();
			$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
		
			$arr['name'] = striptags($_POST['txtSubscribeName']);
			$arr['phone'] = striptags($_POST['txtSubscribePhone']);
			$arr['content'] = striptags($_POST['txtSubscribeMgs']);
			$arr['idcity'] = $_SESSION['showCity'];
			
			require_once('../libraries/phpmailer/class.phpmailer.php');
			$fh = fopen("../EmailTemplate/ykienkhachhang.html", 'r');
			$template = fread($fh, filesize("../EmailTemplate/ykienkhachhang.html"));
			fclose($fh);
			
			$template = str_replace('[NAME_SEND]',$arr['name'],$template);
			$template = str_replace('[PHONE_SEND]',$arr['phone'],$template);
			$template = str_replace('[COMMENT]',$arr['content'],$template);
			
			$msg = $template;
			$subject = "Ý Kiến Khách Hàng";
			$sql = "select plain_text_en from $GLOBALS[db_sp].infos where id=15 " ;
			$mail_to = strip_tags($GLOBALS['sp']->getOne($sql));
			$mailreply = $mail_to;//$arr['email'];
			$mailsend = sendmailAjax("Ý kiếu khách hàng",$mail_to,$subject,$msg,$mailreply);
			
			if(!$mailsend){
				$error['email'] = "mail not sent";
				die(json_encode(array('status'=>'','msg'=>'Lỗi gởi mail, bạn vui lòng quay lại sau.')));
			}
			else{
				vaInsert('ykienkhachhang',$arr);
				//$_SESSION['ykienkhachhang'] = 'ykienkhachhang';
				die(json_encode(array('status'=>'success','msg'=>'111')));
			}
		break;
		
		case 'close-saleup':
			if($_SESSION['saleupOne']==2){
				unset($_SESSION['saleupOne']);
				setcookie("saleup", "Test saleup", time() + (3600 * 24 * 365), "/"); //1 năm
			}
			else{
				$_SESSION['saleupOne'] = 3;
				/*
				$time = 58; //60 giay
				setcookie("saleup", "Test saleup", time() + $time, "/"); // 86400 = 1 day
				$_SESSION['saleupOne'] = 2;
				*/
			}
			die(json_encode(array('status'=>'success','msg'=>'111')));
		break;
		case 'saleup':
			$arrDay = getdate();
			$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
			$arr['idcity'] = $_SESSION['showCity'];
			$arr['name'] = striptags($_POST['namesaleup']);
			$arr['phone'] = striptags($_POST['phonesaleup']);
			vaInsert('saleup',$arr);
			unset($_SESSION['saleupOne']);
			setcookie("saleup", "Test saleup", time() + (3600 * 24 * 365), "/"); //1 năm
			die(json_encode(array('status'=>'success','msg'=>'111')));
		break;
	}
	

 
 ?>