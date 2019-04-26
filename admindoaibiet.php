<?php
@session_start();
if(!$_SESSION['admindvietanhmobilecom'])
	$_SESSION['admindvietanhmobilecom']='admindvietanhmobilecom';
	
header('Location:admindir/index.php');

?>