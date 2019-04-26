<?php

include("../../#include/config.php");

$cid = isset($_POST['cid'])?$_POST['cid']:0;

/*

/////// kiem tra toi da la 2 cap



$cap = 0;

///cap 1

$sql = "select * from $GLOBALS[db_sp].categories where pid<>0 and pid<>1 and id=".$cid."  ";

$rs = $GLOBALS["sp"]->getRow($sql);



if($rs['id']){

	$cap = $cap + 1;

	

	$sql = "select * from $GLOBALS[db_sp].categories where pid<>0 and pid<>1 and id=".$rs['pid']."  ";

	$rs = $GLOBALS["sp"]->getRow($sql);

	if($rs['id']){

		$cap = $cap + 1;

	}

	

}





if($cap >= 2)

	$err = "false";

else

	$err = "success"; //tao duoc cat

	

/////////////////////

*/

/////// kiem tra toi da la 3 cap

$cap = 0;
///cap 1
$sql = "select * from $GLOBALS[db_sp].categories where pid<>0 and pid<>1 and id=".$cid."  ";
$rs = $GLOBALS["sp"]->getRow($sql);
if($rs['id']){
	$cap = $cap + 1;
	$sql = "select * from $GLOBALS[db_sp].categories where pid<>0 and pid<>1 and id=".$rs['pid']."  ";
	$rs = $GLOBALS["sp"]->getRow($sql);
	if($rs['id']){
		$cap = $cap + 1;
		$sql = "select * from $GLOBALS[db_sp].categories where pid<>0 and pid<>1 and id=".$rs['pid']."  ";
		$rs = $GLOBALS["sp"]->getRow($sql);
		if($rs['id']){
			$cap = $cap + 1;
		}
	}
}
if($cap >= 3)

	$err = "false";
else

	$err = "success"; //tao duoc cat

/////////////////////

die(json_encode(array('status'=>$err)));



?>