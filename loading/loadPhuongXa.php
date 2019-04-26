<?php

include("../include/config.php");

include("../functions/function.php");



$error = array();

$error ="";

$id = trim($_POST['id']);

$cid = trim($_POST['cid']);

$idx = trim(isset($_POST['idx'])?$_POST['idx']:0);

$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";

switch($type)

{

	case 'add':

		

		$sql = "SELECT * FROM $GLOBALS[db_sp].ward where district_id=$id order by name asc";

		$rs = $GLOBALS["sp"]->GetAll($sql);

		

		foreach($rs as $item)

		{

			if($item['id'] == $idx)

				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name'].'</option>';

			else

				$center .= '<option  value="'.$item['id'].'" >'.$item['name'].'</option>';;

		}

		

		$list =  '<select name="phuongxa" id="phuongxa"class="ChosceDd" ><option value=""> Phường/xã </option>'.$center.'</select>



		';

		die(json_encode(array('status'=>$list)));

		

	break;

	

}

?>