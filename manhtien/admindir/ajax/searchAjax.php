<?php
include("../../#include/config.php");
include("../functions/function.php");
global $path_url,$path_dir;
$error = array();
$error = "";
$arr = "";
$act = isset($_POST['act'])?$_POST['act']:"";
$idpr =  isset($_POST['idpr'])?$_POST['idpr']:"";
$id =  isset($_POST['id'])?$_POST['id']:"";
$idkhuvuc =  trim(isset($_POST['type'])?$_POST['type']:"");
$cid =  isset($_POST['cid'])?$_POST['cid']:"";
switch($act){
	
	case 'editpr':
		$sql = "SELECT * FROM $GLOBALS[db_sp].products where cid=$cid and active=1 order by num asc, id desc";
		$rs = $GLOBALS["sp"]->GetAll($sql);
		foreach($rs as $item)
		{
			if($item['id'] == $idpr)
				$center .= '<option  value="'.$item['id'].'" selected="selected" >'.$item['name_vn'].'</option>';
			else
				$center .= '<option  value="'.$item['id'].'" >'.$item['name_vn'].'</option>';
		}
		$list =  $center;
		die(json_encode(array('status'=>$list)));
	break;
	
	
	case "products":
		$sql = "select * from $GLOBALS[db_sp].products where id = $idpr limit 1";
		$rs = $GLOBALS["sp"]->getRow($sql);
		
		if(empty($rs['id'])){
			$error = "Sản phẩm không tồn tại vui lòng chọn lại." ;
		}
		
	break;
	
	case "checkNamepr":
		if($id)
			$sql = "select * from $GLOBALS[db_sp].competitors where idpr=$idpr and id<>$id and type=".$idkhuvuc;
		else
			$sql = "select * from $GLOBALS[db_sp].competitors where idpr = $idpr and type=".$idkhuvuc ;
			
		$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($count > 0 ){
			$error = "Sản phẩm này tồn tại vui lòng chọn lại." ;
		}
		
	break;
	
	case "checkNameprLink":
		$name =  trim(isset($_POST['name'])?$_POST['name']:"");
		$linkUrl =   trim(isset($_POST['links'])?$_POST['links']:"");
		if(!empty($linkUrl)){
			$linkUrl = str_replace('http://','',$linkUrl);
			$linkUrl = str_replace('https://','',$linkUrl);
			
			if($id){
				//$sql_name = "select * from $GLOBALS[db_sp].competitorslink where BINARY name_vn='$name' and id<>$id ";
				$sql = "select * from $GLOBALS[db_sp].competitorslink where BINARY links='$linkUrl' and id<>$id and cid=".$cid;
			}
			else{
				//$sql_name = "select * from $GLOBALS[db_sp].competitorslink where name_vn='$name' ";
				$sql = "select * from $GLOBALS[db_sp].competitorslink where BINARY links like '%".$linkUrl."%' and cid=".$cid;
			}
				
			//$count_name = ceil(count($GLOBALS["sp"]->getAll($sql_name)));
			$count = ceil(count($GLOBALS["sp"]->getAll($sql)));
			if($count > 0 ){
				$error = "Đường links này tồn tại ." ;
			}
		}
		//if($count_name > 0 ){
			//$error = "Tên này tồn tại." ;
		//}
		
	break;
}

die(json_encode(array('status'=>$error,'id'=>$rs['id'],'name'=>$rs['name_vn'])));

?>