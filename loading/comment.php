<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");
	
	$arr['name'] = striptags($_POST["name"]);
	$arr['phone'] = striptags($_POST["phone"]);
	
	$arr['content'] = striptags($_POST["content"]);
	$arr['idpr'] = trim($_POST["idpr"]);
	$session = trim($_POST["session"]);
	$arr['active'] = 0;
	$arr['dated'] = date('Y/m/d');
	$time =strtoupper(date('a'));
	$arr['timed'] = date('H:i ').$time;
	
	$arr['idcity'] = $showCity;
	$arr['ipwam'] = $_SERVER['REMOTE_ADDR'];
	$arr['type'] = isset($_POST['type'])?$_POST['type']:0;

	if( $arr['name'] != "" && $arr['phone'] != "" && $arr['content'] != "" && $session == $_SESSION['securityGetcode']){
		$id = vaInsert('comment',$arr);
		if($id){
			$_SESSION['securityGetcode']='';
			die(json_encode(array('status'=>'success','msg'=>'Cám ơn bạn, bình luận thành công.')));
		}
		else
			die(json_encode(array('status'=>'error','msg'=>'Vui lòng nhập đầy đủ thông tin.')));	
	}
?>