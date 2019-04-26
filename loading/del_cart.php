<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");	
    $id = striptags($_POST["id"]);
    if(!isset($_SESSION["cart"][$id])) {
    }    
    else {
        unset($_SESSION["cart"][$id]);
    }
    if(isset($_SESSION["cart"])) {
        $number = count($_SESSION["cart"]);
        $html = insert_getCart();
    }
    
    else $number = 0;
    echo json_encode(array('status' => 'success', 'number' => $number ,'html' => $html));
?>