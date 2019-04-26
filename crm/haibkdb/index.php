<?php
@session_start();
if($_SESSION["store_haitac12345_login"]!="store_haitac12345_login"){ 
	if($_POST){
		$username = $username = isset($_POST["username"])? $_POST["username"]: '';
		$password = isset($_POST["password"])? $_POST["password"]: '';
		
		if(md5($password) == 'b0a24a2f9f13779168af264a537927b4' && $username == 'haiha')
		{
			$_SESSION["store_haitac12345_login"]    = "store_haitac12345_login";
			echo"<script type=\"text/javascript\">	
				document.location.href= 'index.php'
			</script>";
		}
		else{
			die('Vui long lien he Admin');
		}
	}
	echo'
		<form name="login" method="post" action="">
			USERNAME : <input type="text" name="username" id="username" class="Input"/> <br/><br/>
			PASSWORD : <input type="password" name="password" id="password" class="Input"/> <br/><br/>
			<input type="submit" name="submit" value="submit" />
		</form>
	';
}
else{
	if (!@ob_start("ob_gzhandler")) @ob_start();
	include ('./inc/functions.php');
	$page=(isset($_GET['page'])) ? $_GET['page'] : 'main.php';
	if (!file_exists("./work/config/mysqldumper.php"))
	{
		header("location: install.php");
		ob_end_flush();
		die();
	}
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
			"http://www.w3.org/TR/html4/frameset.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="Author" content="Daniel Schlichtholz">
	<title>MySQLDumper</title>
	</head>
	
	<frameset border=0 cols="190,*">
		<frame name="MySQL_Dumper_menu" src="menu.php" scrolling="no" noresize
			frameborder="0" marginwidth="0" marginheight="0">
		<frame name="MySQL_Dumper_content" src="<?php
		echo $page;
		?>"
			scrolling="auto" frameborder="0" marginwidth="0" marginheight="0">
	</frameset><noframes></noframes>
	</html>
	<?php
	ob_end_flush(); 
	?>
<?php } ?>	