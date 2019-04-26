<?php

include("../include/config.php");

include("../functions/function.php");



$error = array();

$error ="";

$id = trim($_POST['id']);

$cid = trim($_POST['cid']);

$idq = trim(isset($_POST['idq'])?$_POST['idq']:0);

$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";

switch($type)

{

	case 'add':

		$sql = "SELECT * FROM $GLOBALS[db_sp].district where city_id=$id and active=1 order by name";

		$rs = $GLOBALS["sp"]->GetAll($sql);

		

		foreach($rs as $item)

		{

			if($item['id'] == $idq)

				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name'].'</option>';

			else

				$center .= '<option  value="'.$item['id'].'" >'.$item['name'].'</option>';;

		}

		

		$list =  '<select name="quanhuyen" id="quanhuyen" class="ChosceDd" onchange="loadPhuongXa(this.value)">

					<option value=""> Quận/Huyện</option>'.$center.'</select>

			

		';



		die(json_encode(array('status'=>$list)));

		

	break;

	

}

?>