<?php
$act= isset($_GET["cat1"])?$_GET["cat1"]:'';
$str = array();
if($_POST){
	///////////load khu vuc
	$showCity = isset($_POST["city"])?$_POST["city"]:1;
	$_SESSION['admin_showCity'] = $showCity;
}
switch($act){
	case "logout":	
		//die('xxx');
		$str = Logout();
		$smarty->assign("msg",$str['msg']);
		$smarty->assign("pagelink",$str['page']);
		$template = "transfer.tpl";
	break;	

	case "sm":
		$str = Login();
		$smarty->assign("msg",$str['msg']);
		$smarty->assign("pagelink",$str['page']);
		$template = "transfer.tpl";
	break;
	
	case "forgot":
		$template = "for-got-pw.tpl";
	break;
	
	case 'forgotsm':
		$str = ForgotPass();
		$smarty->assign("msg",$str['msg']);
		$smarty->assign("pagelink",$str['page']);
		$smarty->assign("err",$str['err']);
		$smarty->assign("err1","sendpw");
		$template = "for-got-pw.tpl";
	break;
	
	case 'resetpass':
		ResetPass();
		$tpl = 'resetpass';
	break;
	
	default:
		$template = "login.tpl";
	break;
}

$smarty->display($template);

function Logout(){
	global $path_url;
	unset($_SESSION['store_crmvietanhmobile_login']);
	unset($_SESSION['admin_crmvietanhmobil_username']);
	unset($_SESSION['admin_crmvietanhmobil_group']);
	unset($_SESSION['admin_crmvietanhmobil_id']);
	
	$msg = "Log Out thành công.";             
	$page = $path_url;             
	return(array ("msg" =>$msg,"page" =>$page));
}

function Login(){
	global $path_url, $showCity;
	if(!isset($_SESSION['counter_crmvietanhmobil_login'])){
		$_SESSION['counter_crmvietanhmobil_login'] = 0;
	}
	if(!empty($_POST['security_code']) && $_POST['security_code'] == $_SESSION['security_code']){
		$username = isset($_POST["username"])     ? $_POST["username"]     : '';
		$password = isset($_POST["password"])     ? $_POST["password"]     : '';
		$pw = md5($password);
		//-------------------------------------------------
		$sql_select = "select * from $GLOBALS[db_sp].admin  where username='$username' ";
		$result = $GLOBALS["sp"]->getRow($sql_select);
		
		if(!$result)
		{
			$_SESSION['counter_crmvietanhmobil_login']++;
			$msg = "Tên đăng nhập không đúng";
			$page = $path_url."/login/";
			return(array ("msg" =>$msg,"page" =>$page));
		}
		elseif($result["idcity"] != $_SESSION['admin_showCity']){
			$msg = "Tài khoản không tồn tại ở địa điểm này.";
			$page = $path_url."/login/";
			return(array ("msg" =>$msg,"page" =>$page));
		}
		if(md5($password)!= $result["password"])
		{
			$_SESSION['counter_crmvietanhmobil_login']++;
			$msg = "Mật khẩu không đúng";
			$page = $path_url."/login/";
			return(array ("msg" =>$msg,"page" =>$page));
		}
		
		if(md5($password) == $result["password"] && $username == $result["username"] && $result["idcity"]=$_SESSION['admin_showCity'] )
		{
			//session_register("store_crmvietanhmobile_login");
			$_SESSION["store_crmvietanhmobile_login"]    = "store_crmvietanhmobile_login";
			//session_register("admin_crmvietanhmobil_username");
			$_SESSION["admin_crmvietanhmobil_username"]    = $username;
			//session_register('admin_crmvietanhmobil_user');
			$_SESSION['admin_crmvietanhmobil_group'] = $result['group'];
			//session_register('admin_crmvietanhmobil_id');
			$_SESSION['admin_crmvietanhmobil_id'] = $result['id'];
			
			$msg = "Đăng nhập thành công.";
			$page = $path_url;
			return(array ("msg" =>$msg,"page" =>$page));
		}
		
	}
	else{
		$_SESSION['counter_crmvietanhmobil_login']++;
		$msg = "Mã bảo vệ không đúng.";
		$page = $path_url."/login/";
		return(array ("msg" =>$msg,"page" =>$page));
		
	}
}
function ForgotPass()
{
	global $db,$act, $msg, $mail, $FullUrl;
	$msg = "Email không tồn tại!";
	$err = "false";
	$sql = "select * from $GLOBALS[db_sp].admin where email='" . $_POST["email"] . "'";
	//die($sql);
	$r = $GLOBALS["sp"]->getRow($sql);
	if($r['email']){
		$body = file_get_contents('./forgot-password.html');
		$body = eregi_replace("[\]",'',$body);
		
		$password = rand (1,"1234567");
		$passwordsql = md5($password);
		$UserPw = "UsserName :".$r['username'] . " ; PassWord :" .$password ;
		
		$body = str_replace('[LINK]', $UserPw, $body);
		$mail->Subject    = "Forgot password admin";
		$mail->MsgHTML($body);
		$mail->AddAddress( $_POST["email"], "Ho Tro");
		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		  die();
		} else {
		 	$sql = "update $GLOBALS[db_sp].admin SET password='".$passwordsql."' where email='".$r['email']."'";
			$GLOBALS["sp"]->execute($sql);		
		}
		
	
		$msg = 'Email đã gửi đến bạn. Mời check mail để reset password!';
		$err = "true";
	}
	
	return(array ("msg" =>$msg,"page" =>$link,"err" => $err));
	
}
function ResetPass()
{
	global $db,$act, $msg, $new_pass;
	$msg="Tài khoản này không tồn tại";
	$sql = "select * from $GLOBALS[db_sp].admin where email='" . $_GET["email"] . "'";
	$r = $db->getRow($sql);
	if($r){
		if($r['password'] == $_GET['password']){
			
			$new_pass = time();
			$arr = array();
			$arr['password'] = md5($new_pass);
			vaUpdate('admin',$arr, "email='" . $_GET["email"] . "'");
			
			$msg = "Xin chào <strong>" . $r['username'] . "</strong> <br />Password mới của bạn là: <strong>$new_pass</strong> <br /> Bạn hãy đổi password ngay sau khi đăng nhập";
		}
	}
}



?>