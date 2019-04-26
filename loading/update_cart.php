<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");	
    $data = striptags($_POST['data']);	
	$data = explode(';',$data);
	foreach($data as $dt) {
		$key_val = explode('-',$dt);
		if($key_val[1] == 0 && isset($_SESSION['cart'][$key_val[0]])) unset($_SESSION['cart'][$key_val[0]]);
		elseif($key_val[1] >  0 && isset($_SESSION['cart'][$key_val[0]])) $_SESSION['cart'][$key_val[0]] = $key_val[1];
    }
    $html = insert_getCartDetail();
    if(isset($_SESSION['cart'])) $number = count($_SESSION["cart"]);
    else $number = 0;
    echo json_encode(array('status' => 'success', 'number' => $number ,'html' => $html));
?>