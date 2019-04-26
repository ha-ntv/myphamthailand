<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");
	
	$quantity = striptags($_POST["quantity"])+0;
    $id = striptags($_POST["id"]);
    if(!isset($_SESSION["cart"][$id]))
    $_SESSION["cart"][$id] = $quantity;
    else {
        $_SESSION["cart"][$id] += $quantity;
    }
    $number = count($_SESSION["cart"]);
    $html = insert_getCart();
    echo json_encode(array('status' => 'success', 'number' => $number,'html' => $html ));
?>