<?php

include("../include/config.php");

include("../functions/function.php");



$error = array();

$error ="";

$id = trim($_POST['id']);

$idpr = trim($_POST['idpr']);

$type = isset($_REQUEST["type"])?$_REQUEST["type"]:"";

switch($type)

{

	case 'color':

		$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize where idpr=$idpr and idcolor=$id order by num asc, id desc";

		$rs = $GLOBALS["sp"]->GetRow($sql);



		$size = explode(",",$rs['idsize']);

		

		foreach($size as $value)

		{

			if($value > 0)

				$center .= '<option value="'.$value.'" >'.GetnameSize($value).'</option>';;

		}



		$list =  ' <select name="popkichthuoc" id="popkichthuoc" style="width:215px;"><option value="">Chọn kích thước *</option>'.$center.'</select>

			<script type="text/javascript" language="javascript">

				$(document).ready(function() {

					try {

						oHandler = $("#popkichthuoc").msDropDown({mainCSS:"dd2"}).data("dd");

						} catch(e) {

							alert("Error: "+e.message);

						}

				})

			</script>

		

		';



		die(json_encode(array('status'=>$list)));

		

	break;

	

}



?>