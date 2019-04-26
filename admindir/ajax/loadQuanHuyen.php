<?php

include("../../include/config.php");

include("../functions/function.php");



$error = array();

$error ="";

$id = trim($_POST['id']);

$cid = trim($_POST['cid']);

$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";

switch($type)

{

	case 'add':

		$sql = "SELECT * FROM $GLOBALS[db_sp].tinhthanh where cid=$id and active=1 order by num asc, id asc";

		

		$rs = $GLOBALS["sp"]->GetAll($sql);

		foreach($rs as $item)

		{



			$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';;

		}

		$list =  '<select id="quanhuyen" name="quanhuyen" >'.$center.'</select>';

		die(json_encode(array('status'=>$list)));

		

	break;

	

	case 'edit':

		$sql = "SELECT * FROM $GLOBALS[db_sp].tinhthanh where cid=$id and active=1 order by num asc, id asc";

		

		$rs = $GLOBALS["sp"]->GetAll($sql);

		foreach($rs as $item)

		{

			if($item['id'] == $cid)

				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name_vn'].'</option>';

			else

				$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';;

		}

		$list =  '<select id="quanhuyen" name="quanhuyen" >'.$center.'</select>';

		die(json_encode(array('status'=>$list)));

		

	break;



}

?>