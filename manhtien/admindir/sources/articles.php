<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
/*
$loaitin = array(
   array('id'=>1,'name'=>'Bình Thường'),
   array('id'=>2,'name'=>'Khuyến mãi'),
   array('id'=>3,'name'=>'Tin nổi bật')
);
$smarty->assign("loaitin",$loaitin);
*/
switch($act){
	case "edit":
		//die($path_url);
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].articles where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
					
			$smarty->assign("edit",$rs);	
			$template = "articles/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$template = "articles/edit.tpl";
		}
	
	break;

	case "dellist":
		if(!checkPermision($_GET["cid"],3)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sqlstmt="select * from $GLOBALS[db_sp].`articles` where id=".$id[$i];
				$r = $GLOBALS["sp"]->getRow($sqlstmt);
			
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
				if(file_exists($path_dir."/".$r['img_thumb_en'])) unlink($path_dir."/".$r['img_thumb_en']);
		
				$sql="delete from $GLOBALS[db_sp].articles  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=articles&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].articles SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=articles&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].articles SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=articles&cid=".$_GET['cid'];
			page_transfer2($url);
		}
		
	break;

		
	case "order":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=articles&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].articles SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=articles&cid=".$_GET['cid'];
			page_transfer2($url);
		}	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=articles&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		
		if(isset($_GET['cid']) && $_GET['cid']!=1)
			$sql="select * from $GLOBALS[db_sp].articles where cid=".$_GET['cid']." order by num asc, id desc ";
		else
			$sql="select * from $GLOBALS[db_sp].articles order by num asc, id desc ";
		
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=articles&cid=".$_GET['cid']; //set url for paginator
		$iSEGSIZE=20;
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
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "articles/list.tpl";
		
		/////check Perm
		if(checkPermision($_GET["cid"],1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($_GET["cid"],2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($_GET["cid"],3))
			$smarty->assign("checkPer3","true");
		
		///////////////////////////
	break;
}

$smarty->assign("tabmenu",0);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['name_vn']= trim($_POST["name_vn"]);	
	$arr['name_en']= trim($_POST["name_en"]);
	
	$arr['promotion_vn']= trim($_POST["promotion_vn"]);
	$arr['loaitin']= trim($_POST["loaitin"]);
	$arr['num'] = $_POST["num"];
	
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	$arr['cid']= $_POST["cat"];
	
	$arr['short_vn']= trim($_POST["short_vn"]);
	$arr['short_en']= trim($_POST["short_en"]);
	
	$arr['content_vn']= $_POST["content_vn"];
	$arr['content_en']= $_POST["content_en"];
	
	if(empty($_POST['unique_key']))
		$unique_key = StripUnicode(trim($arr['name_vn']));
	else
		$unique_key = trim($_POST['unique_key']);

	$arr['title'] = $_POST["title"];
	$arr['title_link'] = $_POST["title_link"];
	
	$arr['title_img']= trim($_POST["title_img"]);
	$arr['alt_img']= trim($_POST["alt_img"]);
	
	$arr['keyword'] = $_POST["keyword"];
	$arr['des'] = $_POST["des"];

	if ($act=="addsm")
	{
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/tin-tuc/".$filename)){
				$sql="select max(id)+1 from $GLOBALS[db_sp].articles";
				$idmax = $GLOBALS["sp"]->getOne($sql);
				
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$idmax.'.'.$fileRename[1];
			}
			///////////////////////////////////			
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/tin-tuc/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/tin-tuc/" . $filename;
		}
		
		$arrDay = getdate();
		$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
		
		$sql = "select * from $GLOBALS[db_sp].articles where unique_key='$unique_key'";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$idadd = vaInsert('articles',$arr);
			$arr['unique_key'] = $unique_key."-".$idadd;
			vaUpdate('articles',$arr,' id='.$idadd);
		}else{
			$arr['unique_key'] = $unique_key;
			vaInsert('articles',$arr);
		}							
	}
	else
	{
		$id = $_POST['id'];
		
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/tin-tuc/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$id.'.'.$fileRename[1];
			}
			///////////////////////////////////			
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/tin-tuc/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/tin-tuc/" . $filename;
		}
		
		/* xoa hinh */
		$sqlstmt="select * from $GLOBALS[db_sp].`articles` where id=$id";
		$r = $GLOBALS["sp"]->getRow($sqlstmt);
		
		if (isset($arr['img_thumb_vn'])){
			if($arr['img_thumb_vn'] != $r['img_thumb_vn'])
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
		}	
		////Xóa Img khi chon Xoa/////
		if($_POST['del_thumb_vn']=='del_thumb_vn'){
			unlink($path_dir."/".$r['img_thumb_vn']);
			$arr['img_thumb_vn'] = "";
		}
		//////////////kiem tra trung link
		$sql = "select * from $GLOBALS[db_sp].articles where unique_key='$unique_key' and id<>$id";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$arr['unique_key'] = $unique_key."-".$id;
		}else{
			$arr['unique_key'] = $unique_key;
		}		
		//////////////////////////////////////////
		vaUpdate('articles',$arr,' id='.$id);
		
	}
	
}
?>