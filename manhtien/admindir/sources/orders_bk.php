<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
switch($act){	
	case "dellist":
		$id=$_POST["iddel"];
		for($i=0;$i<count($id);$i++){
			$sql="delete from $GLOBALS[db_sp].orders  where id=".$id[$i];
			$GLOBALS["sp"]->execute($sql);
		}
		
		$url = "index.php?do=orders&s=".$_GET['s'];
		page_transfer2($url);
	break;
	
	
	case "donhang":
		$id=$_POST["iddel"];
		$arr = array();
		for($i=0;$i<count($id);$i++){
			///////////cap nhan so luong ban cho san pham///////////////
			$sql_order = "select * from $GLOBALS[db_sp].orders where id = ".$id[$i];
			$rs_order = $GLOBALS["sp"]->getRow($sql_order);
			//die($sql);
			$idpr = $rs_order['idpr'];
			$idkhuvuc = $rs_order['idkhuvuc'];
			
			$sql = "select * from $GLOBALS[db_sp].colorsize where idpr=$idpr and idcity=$idkhuvuc";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
			$arrdh['soluongban_vn'] = ceil($rs['soluongban_vn']-1);
			vaUpdate('colorsize',$arrdh,' id='.$rs['id']);
			///////////////////////////////////////////////////////////
			
			///////////don hang///////////////
			$arr['status'] = 2;
			vaUpdate('orders',$arr,' id='.$id[$i]);
		}
		$url = "index.php?do=orders&s=".$_GET['s'];
		page_transfer2($url);
	break;
	
	case "serial":
		$id=$_POST["iddel"];
		$serial = trim($_GET["txtserial"]);
		$arr = array();

		for($i=0;$i<count($id);$i++){
			///////////cap nhan so luong ban cho san pham///////////////
			/*
			$sql_order = "select * from $GLOBALS[db_sp].orders where id = ".$id[$i];
			$rs_order = $GLOBALS["sp"]->getRow($sql_order);
			//die($sql);
			$idpr = $rs_order['idpr'];
			$idkhuvuc = $rs_order['idkhuvuc'];
			
			
			$sql = "select * from $GLOBALS[db_sp].colorsize where idpr=$idpr and idcity=$idkhuvuc";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
			$arrdh['soluongban_vn'] = ceil($rs['soluongban_vn']+1);
			vaUpdate('colorsize',$arrdh,' id='.$rs['id']);
			*/
			///////////////////////////////////////////////////////////
			
			///////////don hang đã gởi///////////////
			if(!empty($serial))
				$arr['serial'] = $serial;
			$arr['status'] = 1;
			vaUpdate('orders',$arr,' id='.$id[$i]);
		}
		//die();
		$url = "index.php?do=orders&s=".$_GET['s'];
		page_transfer2($url);
	break;
	
	case "lienhe":
		$id=$_POST["iddel"];
		$arr = array();
		for($i=0;$i<count($id);$i++){
			///////////cap nhan so luong ban cho san pham///////////////
			$sql = "select * from $GLOBALS[db_sp].donhang where dhid = ".$id[$i];
			$rs = $GLOBALS["sp"]->getAll($sql);
			foreach($rs as $item){
				$arrdh['soluongban'] = $item['soluongmua'];
				vaUpdate('products',$arrdh,' id='.$item['spid']);
			}
			///////////////////////////////////////////////////////////
			
			///////////don hang lien he///////////////
			$arr['status'] = 2;
			vaUpdate('orders',$arr,' id='.$id[$i]);
		}
		$url = "index.php?do=orders&s=".$_GET['s'];
		page_transfer2($url);
	break;

	default:
		$sql = "select * from $GLOBALS[db_sp].city where active=1 order by name asc";
		$rs = $GLOBALS["sp"]->getAll($sql);
		$smarty->assign("city",$rs);
		
		$cityShow = trim($_GET['city']);
		$smarty->assign("cityShow",$cityShow);
		$whCity ='';
		if($cityShow){
			$whCity = ' and idkhuvuc='.$cityShow;
		}
		
		$wh = " 1=1 ";
		if(!empty($_POST['codes'])){
			$codes = trim($_POST['codes']);
			$wh .= " and id like '%".$codes."%'  ";
			$smarty->assign("codes",$codes);
		}
		if(!empty($_POST['names'])){
			$names = trim($_POST['names']);
			$wh .= " and name like '%".$names."%'  ";
			$smarty->assign("names",$names);
		}
		
		if(!empty($_POST['phones'])){
			$phones = strSpace(trim($_POST['phones']));
			$wh .= " and phone = '".$phones."'  ";
			$smarty->assign("phones",$phones);
		}
		
		if($_GET['s']==1){ //don hang da duyet
			$sql="select * from $GLOBALS[db_sp].orders where $wh and status = 1 $whCity order by id desc ";
			$template = "orders/list.tpl";
			$smarty->assign("tabmenu",7);
		}
		elseif($_GET['s']==2){ //don hang liên hệ
			$sql="select * from $GLOBALS[db_sp].orders where $wh and status = 2 $whCity order by id desc ";
			$template = "orders/list.tpl";
			$smarty->assign("tabmenu",6);
		}
		else{ //don hang cho duyet
			$sql="select * from $GLOBALS[db_sp].orders where $wh and status = 0 $whCity order by id desc ";
			$template = "orders/list.tpl";
			$smarty->assign("tabmenu",5);
		}
		
		$total = count($GLOBALS["sp"]->getAll($sql));
		$num_rows_page = 100;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=orders&s=".$_GET['s']."&city=".$cityShow; //set url for paginator
		$iSEGSIZE=10;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
				
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		if($page!=1)
		{
			$number=$num_rows_page * ($page-1);
			$smarty->assign("number",$number);
		}
		if(empty($_GET['s']))
			$smarty->assign("s",0);
		else
			$smarty->assign("s",$_GET['s']);
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
	break;
}

$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name_vn']= $_POST["name_vn"];
	$arr['name_en']= $_POST["name_en"];
	
	$arr['num'] = $_POST["num"];
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	//$arr['nofollow'] = $_POST['nofollow']=='nofollow'?'nofollow':'';
	$arr['id']= $_POST["cat"];
	/*
	if(!empty($_POST["new_footer"]))
		$arr['new_footer'] = "0|".implode("|",$_POST["new_footer"])."|0";
	else
		$arr['new_footer'] = "|0|";

	*/
	$arr['short_vn']= $_POST["short_vn"];
	$arr['short_en']= $_POST["short_en"];
	
	$arr['content_vn']= $_POST["content_vn"];
	$arr['content_en']= $_POST["content_en"];
	

	$arr['unique_key_vn']=$_POST["unique_key_vn"];
	$arr['unique_key_en']=$_POST["unique_key_en"];
	
	$arr['title_vn']=$_POST["title_vn"];
	$arr['title_en']=$_POST["title_en"];
	
	$arr['title_link_vn'] = $_POST["title_link_vn"];
	$arr['title_link_en'] = $_POST["title_link_en"];
	
	$arr['keyword_vn']=$_POST["keyword_vn"];
	$arr['keyword_en']=$_POST["keyword_en"];
	
	$arr['title_img_vn']=$_POST["title_img_vn"];
	$arr['title_img_en']=$_POST["title_img_en"];
	
	$arr['alt_img_vn']=$_POST["alt_img_vn"];
	$arr['alt_img_en']=$_POST["alt_img_en"];
	
	$arr['des_vn']=$_POST["des_vn"];
	$arr['des_en']=$_POST["des_en"];
	
	//$arr['tags']=$_POST["tags"];


	if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
		$img = $_FILES['img_thumb_vn']['name'];
		$filename = $img;
		//die($filename);
		copy($_FILES['img_thumb_vn']['tmp_name'], "../upload/hoa-tuoi-dep/" . $filename) ;
		$arr['img_thumb_vn'] = "upload/hoa-tuoi-dep/" . $filename;
	}
	if(isset($_FILES['img_thumb_en']['name'] ) && $_FILES['img_thumb_en']['size']>0){
		$img_en = $_FILES['img_thumb_en']['name'];
		$filename = $img_en;
		//die($filename);
		copy($_FILES['img_thumb_en']['tmp_name'], "../upload/hoa-tuoi-dep/" . $filename) ;
		$arr['img_thumb_en'] = "upload/hoa-tuoi-dep/" . $filename;
	}
	
	

	if ($act=="addsm")
	{
		$arrDay = getdate();
		$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
		$new_id = vaInsert('orders',$arr);
				
		//index du lieu trong site_search
		$arr2 = array();
		$arr2['title_vn'] = $arr['name_vn'];
		$arr2['body_vn'] = $arr['short_vn'] ;
		$arr2['title_en'] = $arr['name_en'];
		$arr2['body_en'] = $arr['short_en'];
		$arr2['type'] = 1; //tin tuc
		$arr2['id_item'] = $new_id;
		
		$arr2['id'] = $arr['id'];
		
		$arr2['link_vn'] = $arr['unique_key_vn'];
		$arr2['link_en'] = $arr['unique_key_en'];
		
		$new_id2 = vaInsert('site_search',$arr2);
	}
	else
	{
		$id = $_POST['id'];
		/* xoa hinh */
		$sqlstmt="select * from $GLOBALS[db_sp].`orders` where id=$id";
		$r = $GLOBALS["sp"]->getRow($sqlstmt);
		
		if (isset($arr['img_thumb_vn'])){
			if($arr['img_thumb_vn'] != $r['img_thumb_vn'])
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
		}	
		
		if (isset($arr['img_thumb_en'])){
			if($arr['img_thumb_en'] != $r['img_thumb_en'])
				if(file_exists($path_dir."/".$r['img_thumb_en'])) unlink($path_dir."/".$r['img_thumb_en']);
		}
		
		vaUpdate('orders',$arr,' id='.$id);
		
		
		//index du lieu trong site_search
		$sql = "select * from $GLOBALS[db_sp].site_search where type=1 and id_item=$id";
		//die($sql);
		$ss = $GLOBALS["sp"]->getRow($sql);
		$arr2 = array();
		$arr2['title_vn'] = $arr['name_vn'];
		$arr2['body_vn'] = $arr['short_vn'] ;
		$arr2['title_en'] = $arr['name_en'];
		$arr2['body_en'] = $arr['short_en'];
		
		$arr2['id'] = $arr['id'];
		$arr2['link_vn'] = $arr['unique_key_vn'];
		$arr2['link_en'] = $arr['unique_key_en'];
		
		if($ss['id']){
			$arr2['type'] = 1; //tin tuc
			$arr2['id_item'] = $id;
			vaUpdate('site_search',$arr2,' id='.$ss['id']);
		}
		else{
			$arr2['type'] = 1; //tin tuc
			$arr2['id_item'] = $id;
			vaInsert('site_search',$arr2);
		}
		
	}
	
}
?>