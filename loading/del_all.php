<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");	
    
    unset($_SESSION["cart"]);
    
     $number = 0;
    echo json_encode(array('status' => 'success', 'number' => $number));
?>