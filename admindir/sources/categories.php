<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
/////////loai chon
$type = array(
   array('id'=>0,'name'=>'None'),	
   array('id'=>3,'name'=>'Son môi'),
   array('id'=>5,'name'=>'Săm sóc da mặt'),
   array('id'=>4,'name'=>'Phấn'),
   array('id'=>35,'name'=>'Nước hoa')
);
$smarty->assign("type",$type);

$has_menu = array(
   array('id'=>0,'name'=>'None'),	
   array('id'=>2,'name'=>'Submenu Sản Phẩm')
);
$smarty->assign("has_menu",$has_menu);

$sqls = "select * from $GLOBALS[db_sp].categories where pid=131 order by num asc, id desc";
$rss = $GLOBALS["sp"]->getAll($sqls);
$smarty->assign("names",$rss);

switch($act){
	case "edit":	
		//load component
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{	
			$sql = "select * from $GLOBALS[db_sp].component where active=1 order by id asc";
			$comps = $GLOBALS["sp"]->getAll($sql);
			$smarty->assign("comps",$comps);
			
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].categories where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
			$smarty->assign("edit",$rs);	
			$template = "categories/edit.tpl";
		}
	break;
	
	case "add":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{ 
			//load component
			$sql = "select * from $GLOBALS[db_sp].component where active=1 order by id asc";
			$comps = $GLOBALS["sp"]->getAll($sql);
			$smarty->assign("comps",$comps);
				
			$template = "categories/edit.tpl";
		}
	break;
		
	case "dellist":
		if(!checkPermision($_GET["cid"],3)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];		
			for($i=0;$i<count($id);$i++){
				DeleteCat($id[$i]);
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "show":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	case "hide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "crmshow":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET crm=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "crmhide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET crm=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "crmhtehangshow":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET crmhethang=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "crmhethanghide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET crmhethang=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}
	break;
	
	case "order":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].categories SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=categories&act=list&cid=".$_GET['cid']."&root=".$_GET['root'];
			page_transfer2($url);
		}	
	break;
	
	case "addsm":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php";
			page_transfer2($page);
		}
		else{
			Editsm();
			$url = "index.php?do=categories&cid=".$_GET['cid']."&root=".$_GET['root']."&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;
	
	case "editsm":
	if(!checkPermision($_GET["cid"],2)){
		page_permision();
		$page="index.php";
		page_transfer2($page);
	}
	else{
		Editsm();
		$url = "index.php?do=categories&cid=".$_GET['cid']."&root=".$_GET['root']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	}
	break;
	
	default:
		if($_GET['cid'] == 2){
			$sql = "select * from $GLOBALS[db_sp].categories where pid=".$_GET['cid']." order by num asc, id desc ";
			$rs = $GLOBALS["sp"]->getAll($sql);
		}
		else{
			$sql = "select * from $GLOBALS[db_sp].categories where pid=".$_GET['cid']." order by num asc, id desc ";
			$total = count($GLOBALS["sp"]->getAll($sql));
	
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = "index.php?do=categories&cid=".$_GET['cid']."&root=".$_GET['root']; //set url for paginator
			$iSEGSIZE=3;
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
		 
			$smarty->assign("total",$num_page);
			$smarty->assign("link_url",$link_url);
			
			
		}
		$smarty->assign("view",$rs);
		
		$template = "categories/list.tpl";
		
		
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
	
	$arr['name_vn'] = trim($_POST["name_vn"]);
	$arr['name_en'] = trim($_POST["name_en"]);
	
	$arr['title_vn'] = trim($_POST["title_vn"]);
	$arr['title_en'] = trim($_POST["title_en"]);
	$arr['link'] = trim($_POST["link"]);
				
	$arr['num'] = $_POST["num"];
	$arr['type'] = trim($_POST['type']);
	$arr['has_menu'] = trim($_POST['has_menu']);
	
	$arr['home'] = $_POST['home']=='home'?'1':'0';
	$arr['has_child'] = $_POST['has_child']=='has_child'?'1':'0';
	$arr['has_left'] = $_POST['has_left']=='has_left'?'1':'0';	
	$arr['showpopupsaleup'] = $_POST['showpopupsaleup']=='showpopupsaleup'?'1':'0';
	$arr['showpopupsaleupdn'] = $_POST['showpopupsaleupdn']=='showpopupsaleupdn'?'1':'0';
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	
	$arr['content_vn'] = $_POST["content_vn"];
	$arr['content_en'] = $_POST["content_en"];	
	$arr['comp'] = $_POST['comp'];

	$idsearch = $_POST['idsearch'];
	$arr['idsearch'] = implode(',',$idsearch);
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
		if(isset($_FILES['img_vn']['name'] ) && $_FILES['img_vn']['size']>0){
			$img = $_FILES['img_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/vietanhmobile/".$filename)){
				$sql="select max(id)+1 from $GLOBALS[db_sp].categories";
				$idmax = $GLOBALS["sp"]->getOne($sql);
				
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$idmax.'.'.$fileRename[1];
			}
			///////////////////////////////////	
				
			copy($_FILES['img_vn']['tmp_name'], "../hinh-anh/vietanhmobile/" . $filename) ;
			$arr['img_vn'] = "hinh-anh/vietanhmobile/" . $filename;
		}
		
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/vietanhmobile/".$filename)){
				$sql="select max(id)+1 from $GLOBALS[db_sp].categories";
				$idmax = $GLOBALS["sp"]->getOne($sql);
				
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-logo-'.$idmax.'.'.$fileRename[1];
			}
			///////////////////////////////////	
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/vietanhmobile/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/vietanhmobile/" . $filename;
		}
	
		$arr['pid'] = $_GET['cid'];
		
		$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$unique_key'";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$idadd = vaInsert('categories',$arr);
			$arr['unique_key'] = $unique_key."-".$idadd;
			vaUpdate('categories',$arr,' id='.$idadd);
		}else{
			$arr['unique_key'] = $unique_key;
			vaInsert('categories',$arr);
		}				
	}
	else
	{		
		$id = $_POST['id'];	
		
		if(isset($_FILES['img_vn']['name'] ) && $_FILES['img_vn']['size']>0){
			$img = $_FILES['img_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/vietanhmobile/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-'.$id.'.'.$fileRename[1];
			}
			///////////////////////////////////	
				
			copy($_FILES['img_vn']['tmp_name'], "../hinh-anh/vietanhmobile/" . $filename) ;
			$arr['img_vn'] = "hinh-anh/vietanhmobile/" . $filename;
		}
		
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/vietanhmobile/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-logo-'.$id.'.'.$fileRename[1];
			}
			///////////////////////////////////	
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/vietanhmobile/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/vietanhmobile/" . $filename;
		}
			
		$sqlstmt="select * from $GLOBALS[db_sp].`categories` where id=$id";
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
		
		if (isset($arr['img_vn'])){
			if($arr['img_vn'] != $r['img_vn'])
				if(file_exists($path_dir."/".$r['img_vn'])) unlink($path_dir."/".$r['img_vn']);
		}
		
		if($_POST['del_img_vn']=='del_img_vn'){
			unlink($path_dir."/".$r['img_vn']);
			$arr['img_vn'] = "";
		}

		//////////////kiem tra trung link
		$sql = "select * from $GLOBALS[db_sp].categories where unique_key='$unique_key' and id<>$id";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$arr['unique_key'] = $unique_key."-".$id;
		}else{
			$arr['unique_key'] = $unique_key;
		}		
		//////////////////////////////////////////
		
		///////Kiem tran xem phai la module gioi thieu kg////
		if($r['comp']==3){
			$arr1['name_vn'] = trim($_POST["name_vn"]);
			$arr1['name_en'] = $_POST["name_en"];
			vaUpdate('intro',$arr1,' cid='.$id);	
		}
		vaUpdate('categories',$arr,' id='.$id);		
				
	}	
	
}
function DeleteCat($id){
	$sql = "select id,has_child,comp from $GLOBALS[db_sp].categories where id=$id";
	$r = $GLOBALS["sp"]->getRow($sql);
	
	if($r['id']){
		if($r['has_child'] != 1){ //khong co con, xoa
			$sql = "select * from $GLOBALS[db_sp].component where id=" .  $r['comp'] ;
			$comp = $GLOBALS["sp"]->getRow($sql);
			if($comp['do'] == "" || $comp['do'] == "main" || $comp['do'] == "contact" )
				$sql = "delete from $GLOBALS[db_sp].categories where id =" . $r['id']; 
			else{
				
				if($comp['do']=="intro"){
					$sql="delete from $GLOBALS[db_sp].site_search  where type=3 and id_item=".$r['id'];
					$GLOBALS["sp"]->execute($sql);
				}
				$sql = "delete from $GLOBALS[db_sp]." . $comp['do'] . " where " . ($comp['do']=="intro"?"id":"cid") . "=" . $r['id']; 
				
			}
			
			
			$GLOBALS["sp"]->execute($sql);
		}
		else{ //co con, xoa con no
			$sql = "select id from $GLOBALS[db_sp].categories where pid=$id";
			$arr = $GLOBALS["sp"]->getAll($sql);
			if($arr){
				foreach($arr as $item){
					DeleteCat($item['id']);
				}
			}
		}
		$sql = "delete from $GLOBALS[db_sp].categories where id=".$id;
		$GLOBALS["sp"]->execute($sql);
	}
}
?>