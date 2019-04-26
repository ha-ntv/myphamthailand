<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
////////load city
$sql_city = "select * from $GLOBALS[db_sp].city where active=1 order by id asc";
$rs_city = $GLOBALS["sp"]->getAll($sql_city);
$smarty->assign("city",$rs_city);

////////load phu kien giam gia
$sql_pkgg = "select * from $GLOBALS[db_sp].phukiengiamgia where active=1 order by id asc";
$rs_pkgg = $GLOBALS["sp"]->getAll($sql_pkgg);
$smarty->assign("phukiengiamgia",$rs_pkgg);

////////load Quà khuyến mãi
$sql_qkm = "select * from $GLOBALS[db_sp].categories where pid=9 order by num asc, id desc";
$rs_qkm = $GLOBALS["sp"]->getAll($sql_qkm);
$smarty->assign("quakhuyenmai",$rs_qkm);

////////load Quà khuyến mãi
$sql_bcsp = "select * from $GLOBALS[db_sp].categories where pid=123 order by num asc, id desc";
$rs_bcsp = $GLOBALS["sp"]->getAll($sql_bcsp);
$smarty->assign("bochuansp",$rs_bcsp);

////////load Cam kết
$sql_ck = "select * from $GLOBALS[db_sp].categories where pid=171 order by num asc, id desc";
$rs_ck = $GLOBALS["sp"]->getAll($sql_ck);
$smarty->assign("camket",$rs_ck);

////////load chế độ bảo hành
$sql_bh = "select * from $GLOBALS[db_sp].categories where pid=93 order by num asc, id desc";
$rs_bh = $GLOBALS["sp"]->getAll($sql_bh);
$smarty->assign("chedobaohanh",$rs_bh);

///////////////Load ma san pham
if(!empty($_GET["cid"])){
	$sqlcode = "select * from $GLOBALS[db_sp].masanpham where cid=".$_GET["cid"]." and active=1 order by num asc, id desc";
	$rscode = $GLOBALS["sp"]->getAll($sqlcode);
	$smarty->assign("masanpham",$rscode);
}

switch($act){
	case "copysp":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$cid  = $_GET["cid"];
			$id  = $_GET["id"];
			$sql_pr = "select * from $GLOBALS[db_sp].products  where id=$id";
			$rs_pr = $GLOBALS["sp"]->getRow($sql_pr);
			$smarty->assign("view",$rs_pr);
			$smarty->assign("cid_sharepr",explode(",",$rs_pr['cid_sharepr']));
		
		
			//$sql = "select * from $GLOBALS[db_sp].categories where pid = (select pid from $GLOBALS[db_sp].categories where id=$cid) and id <> $cid order by num asc, id desc";
			$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and id in (6) order by num asc, id desc ";
			$rs = $GLOBALS["sp"]->getAll($sql);
	
			$smarty->assign("cidother",$cid);	
			$smarty->assign("copy",$rs);	
			$template = "products/copypr.tpl";
		}
	break;
	
	case "copysmsp":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_GET["id"];
			$cid = $_GET["cid"];
			$p = $_GET["p"];
			
			$cid_share=$_POST["iddel"];
			$str = implode(",",$cid_share);
			if($str=="")
				$str = "0";
			$str = "0,".$str.",0";
			
			$arr['cid_sharepr'] = $str;
			vaUpdate('products',$arr,' id='.$id);
			$url = "index.php?do=products&act=copysp&id=".$id."&cid=".$cid;
			page_transfer2($url);
		}
	break;
	
	case "copy":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$cid  = $_GET["cid"];
			$id  = $_GET["id"];
			$sql_pr = "select * from $GLOBALS[db_sp].products  where id=$id";
			$rs_pr = $GLOBALS["sp"]->getRow($sql_pr);
			$smarty->assign("view",$rs_pr);
			$smarty->assign("cid_share",explode(",",$rs_pr['cid_share']));
		
		
			//$sql = "select * from $GLOBALS[db_sp].categories where pid = (select pid from $GLOBALS[db_sp].categories where id=$cid) and id <> $cid order by num asc, id desc";
			$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and id in (11,91) order by num asc, id desc ";
			$rs = $GLOBALS["sp"]->getAll($sql);
	
			$smarty->assign("cidother",$cid);	
			$smarty->assign("copy",$rs);	
			$template = "products/copy.tpl";
		}
	break;
	
	case "copysm":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_GET["id"];
			$cid = $_GET["cid"];
			$p = $_GET["p"];
			
			$cid_share=$_POST["iddel"];
			$str = implode(",",$cid_share);
			if($str=="")
				$str = "0";
			$str = "0,".$str.",0";
			
			$arr['cid_share'] = $str;
			
			vaUpdate('products',$arr,' id='.$id);
			$url = "index.php?do=products&act=copy&id=".$id."&cid=".$cid;
			page_transfer2($url);
		}
	break;
	
	
	case "edit":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].products where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$smarty->assign("edit",$rs);
			
			$template = "products/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$template = "products/edit.tpl";
		}
	
	break;

	case "dellist":
		if(!checkPermision($_GET["cid"],3)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				
				$sqlstmt="select * from $GLOBALS[db_sp].`products` where id=".$id[$i];
				$r = $GLOBALS["sp"]->getRow($sqlstmt);
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
				if(file_exists($path_dir."/".$r['img_thumb_en'])) unlink($path_dir."/".$r['img_thumb_en']);
				if(file_exists($path_dir."/".$r['img_vn']))	unlink($path_dir."/".$r['img_vn']);
				if(file_exists($path_dir."/".$r['img2_vn']))	unlink($path_dir."/".$r['img2_vn']);
				if(file_exists($path_dir."/".$r['img3_vn']))	unlink($path_dir."/".$r['img3_vn']);
				if(file_exists($path_dir."/".$r['img4_vn']))	unlink($path_dir."/".$r['img4_vn']);
				if(file_exists($path_dir."/".$r['img5_vn']))	unlink($path_dir."/".$r['img5_vn']);
				
				$sql="delete from $GLOBALS[db_sp].colorsize where idpr=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
				
				$sql="delete from $GLOBALS[db_sp].comment where idpr=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
				
				$sql="delete from $GLOBALS[db_sp].products  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);
		}
		
	break;
	
	
	case "crmhtehangshow":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET crmhethang=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
	
	case "crmhethanghide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET crmhethang=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;
		
	case "order":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&cid=".$_GET['cid'];
			page_transfer2($url);	
		}
	break;
	
	case "orderhot":
		if(!checkPermision(-5,2)){
			page_permision();
			$page="index.php?do=products&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].products SET orderhot=".$ordering[$i]." where id=".$id[$i];
				//die($sql);
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=products&act=hot&cid=".$_GET["cid"];
			page_transfer2($url);	
		}
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=products&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;
	
	case "hot":
		////////////Load dong sản của cat//////////
		$sqlcat ="select * from $GLOBALS[db_sp].categories where home=1 order by num asc, id desc ";
		$rscat = $GLOBALS["sp"]->getAll($sqlcat);
		$smarty->assign("catpr",$rscat);
		
		$cidcat = trim($_REQUEST['cid']);
		$smarty->assign("cidcat",$cidcat);
		if(empty($cidcat)) 
			$cidcat = $rscat[0]['id'];

		if($cidcat == 4 || $cidcat == 43){
			$sqlcat = "SELECT id FROM $GLOBALS[db_sp].categories where type=$cidcat and active=1 order by num asc, id desc";
			$rscat = $GLOBALS["sp"]->GetCol($sqlcat);
			$cidcat = implode(',',$rscat);
		}
		else{
			$sqlcat1 ="select * from $GLOBALS[db_sp].categories where id=$cidcat";
			$rscat1 = $GLOBALS["sp"]->getRow($sqlcat1);	
			if($rscat1['has_child'] == 1){
				$sql1 = "select id from $GLOBALS[db_sp].categories where pid=".$rscat1['id']." and active=1  order by num asc, id desc";
				$rs1 = $GLOBALS["sp"]->GetCol($sql1);
				$cidcat = implode(',',$rs1);
			}
		}
		
		$sql="select * from $GLOBALS[db_sp].products where type=3 and cid in ($cidcat) order by orderhot asc, id desc ";
		$total = count($GLOBALS["sp"]->getAll($sql));
		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=products&act=hot"; //set url for paginator
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
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "products/hot.tpl";
		
		/////check Perm		
		if(checkPermision(-5,2))
			$smarty->assign("checkPer2","true");
		
	break;
	
	default:

		$wh = " 1=1 ";
		if($_POST)
			$checkSearch = 1;
		if(!empty($_POST['codes'])){
			$codes = trim($_POST['codes']);
			$wh .= " and ( code like '%".$codes."%' or codesp like '%".$codes."%' ) ";
			$smarty->assign("codes",$codes);
		}
		if(!empty($_POST['showhide'])){
			$showhide = trim($_POST['showhide']);
			if($showhide==2)
				$showhidesql = 0;
			else
				$showhidesql = 1;
			$wh .= " and active = ".$showhidesql." ";
			$smarty->assign("showhide",$showhide);
		}
		
		if(!empty($_POST['types'])){
			$types = trim($_POST['types']);
			$wh .= " and type = ".$types." ";
			$smarty->assign("types",$types);
		}
		
		if(!empty($_GET['cid']) && $_GET['cid']!=1){
			$sql="select * from $GLOBALS[db_sp].products where $wh and cid=".$_GET['cid']."  order by num asc, id desc ";
			$template = "products/list.tpl";
		}
		else{
			$sql="select * from $GLOBALS[db_sp].products where $wh order by num asc, id desc ";
			$template = "products/search.tpl";
		}
		
		if($checkSearch==1){
			$rs = $GLOBALS["sp"]->getAll($sql);
		}
		else{
		
			$total = count($GLOBALS["sp"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = "index.php?do=products&cid=".$_GET['cid']; //set url for paginator
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
			$smarty->assign("link_url",$link_url);
		}
		$smarty->assign("view",$rs);
		
		
		
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
	$arr['video']= trim($_POST["video"]);	
	
	//$arr['codesp']= trim($_POST["codesp"]);
	$arr['codesp1']= trim($_POST["codesp1"]);
	$vcare = trim($_POST["vcare"]);
	$vcare12 = trim($_POST["vcare12"]);
	$arr['vcare'] = ceil(str_replace(".", "",$vcare));
	$arr['vcare12'] = ceil(str_replace(".", "",$vcare12));
	
	$arr['type'] = $_POST['type']=='sphost'?'3':'1';
	$arr['chinhhang'] = $_POST['chinhhang']=='chinhhang'?'1':'0';
	$arr['temchinhhang'] = $_POST['temchinhhang']=='temchinhhang'?'1':'0';
	$arr['num'] = $_POST["num"];
	
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	
	$arr['typebspchuan'] = trim($_POST['typebspchuan']);
	$arr['typeiphone'] = trim($_POST['typeiphone']);
	$arr['typebaove'] = trim($_POST['typebaove']);
	$arr['typecamket'] = trim($_POST['typecamket']);
	
	$arr['cid']=$_POST["cat"];
	
	$arr['bosanphamchuan_vn']= $_POST["bosanphamchuan_vn"];
	$arr['bosanphamchuan_en']= $_POST["bosanphamchuan_en"];
	$arr['promotion_vn']= $_POST["promotion_vn"];
	$arr['promotion_en']= $_POST["promotion_en"];
	$arr['chedobaohanh_vn']= $_POST["chedobaohanh_vn"];
	$arr['chedobaohanh_en']= $_POST["chedobaohanh_en"];

	$arr['thongsokythuat_vn']= $_POST["thongsokythuat_vn"];
	$arr['content_vn']= $_POST["content_vn"];	
	$arr['luuysanpham_vn']= trim($_POST["luuysanpham_vn"]);	
	
	if(!empty($_POST["idpromotion"]))
		$arr['idpromotion'] = "0,".implode(",",$_POST["idpromotion"]);
	else
		$arr['idpromotion'] = "0";
	
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
		$sql="select max(id)+1 from $GLOBALS[db_sp].products";
		$idmax = $GLOBALS["sp"]->getOne($sql);
		
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;	
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-tv'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img_thumb_en']['name'] ) && $_FILES['img_thumb_en']['size']>0){
			$img = $_FILES['img_thumb_en']['name'];
			$filename = $img;	
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-te'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_thumb_en']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_thumb_en'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img_vn']['name'] ) && $_FILES['img_vn']['size']>0){
			$img = $_FILES['img_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h1'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img2_vn']['name'] ) && $_FILES['img2_vn']['size']>0){
			$img = $_FILES['img2_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h2'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img2_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img2_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img3_vn']['name'] ) && $_FILES['img3_vn']['size']>0){
			$img = $_FILES['img3_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h3'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img3_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img3_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img4_vn']['name'] ) && $_FILES['img4_vn']['size']>0){
		
			$img = $_FILES['img4_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h4'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img4_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img4_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img5_vn']['name'] ) && $_FILES['img5_vn']['size']>0){
			$img = $_FILES['img5_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h5'.$idmax.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img5_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img5_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		/////////////////////////////////////////////////////
		$arrDay = getdate();
		$arr['dated'] = $arrDay['year'].'-'.$arrDay['mon'].'-'.$arrDay['mday'];
		$sql = "select * from $GLOBALS[db_sp].products where unique_key='$unique_key'";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$idadd = vaInsert('products',$arr);
			$arr['unique_key'] = $unique_key."-".$idadd;
			vaUpdate('products',$arr,' id='.$idadd);
		}else{
			$arr['unique_key'] = $unique_key;
			$id = vaInsert('products',$arr);
			
			$arr['code']= "VA".$id;
			vaUpdate('products',$arr,' id='.$id);
		}			
	}
	else
	{
		$id = $_POST['id'];
		
		if(isset($_FILES['img_thumb_vn']['name'] ) && $_FILES['img_thumb_vn']['size']>0){
			$img = $_FILES['img_thumb_vn']['name'];
			$filename = $img;	
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-tv'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_thumb_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_thumb_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img_thumb_en']['name'] ) && $_FILES['img_thumb_en']['size']>0){
			$img = $_FILES['img_thumb_en']['name'];
			$filename = $img;	
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-te'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_thumb_en']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_thumb_en'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img_vn']['name'] ) && $_FILES['img_vn']['size']>0){
			$img = $_FILES['img_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h1'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img2_vn']['name'] ) && $_FILES['img2_vn']['size']>0){
			$img = $_FILES['img2_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h2'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img2_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img2_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img3_vn']['name'] ) && $_FILES['img3_vn']['size']>0){
			$img = $_FILES['img3_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h3'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img3_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img3_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img4_vn']['name'] ) && $_FILES['img4_vn']['size']>0){
		
			$img = $_FILES['img4_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h4'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img4_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img4_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		if(isset($_FILES['img5_vn']['name'] ) && $_FILES['img5_vn']['size']>0){
			$img = $_FILES['img5_vn']['name'];	
			$filename = $img;
			/////////////////nếu tồn tại hình
			if(file_exists($path_dir."/hinh-anh/san-pham/".$filename)){
				$fileRename = explode('.',$filename);
				$filename = $fileRename[0].'-h5'.$id.'.'.$fileRename[1];
			}					
			/////////////////////////////
			copy($_FILES['img5_vn']['tmp_name'], "../hinh-anh/san-pham/" . $filename) ;
			$arr['img5_vn'] = "hinh-anh/san-pham/" . $filename;
		}
		
		/////////////////////////////////////////////////////
		/* xoa hinh */
		$sqlstmt="select * from $GLOBALS[db_sp].`products` where id=$id";
		$r = $GLOBALS["sp"]->getRow($sqlstmt);
		
		if (isset($arr['img_thumb_vn'])){
			if($arr['img_thumb_vn'] != $r['img_thumb_vn'])
				if(file_exists($path_dir."/".$r['img_thumb_vn'])) unlink($path_dir."/".$r['img_thumb_vn']);
		}	
		
		if (isset($arr['img_thumb_en'])){
			if($arr['img_thumb_en'] != $r['img_thumb_en'])
				if(file_exists($path_dir."/".$r['img_thumb_en'])) unlink($path_dir."/".$r['img_thumb_en']);
		}	
		
		if (isset($arr['img_vn'])){
			if($arr['img_vn'] != $r['img_vn'])
				if(file_exists($path_dir."/".$r['img_vn'])) unlink($path_dir."/".$r['img_vn']);
		}
		
		if (isset($arr['img2_vn'])){
			if($arr['img2_vn'] != $r['img2_vn'])
				if(file_exists($path_dir."/".$r['img2_vn'])) unlink($path_dir."/".$r['img2_vn']);
		}	
		
		if (isset($arr['img3_vn'])){
			if($arr['img3_vn'] != $r['img3_vn'])
				if(file_exists($path_dir."/".$r['img3_vn'])) unlink($path_dir."/".$r['img3_vn']);
		}	
		
		if (isset($arr['img4_vn'])){
			if($arr['img4_vn'] != $r['img4_vn'])
				if(file_exists($path_dir."/".$r['img4_vn'])) unlink($path_dir."/".$r['img4_vn']);
		}	
		
		if (isset($arr['img5_vn'])){
			if($arr['img5_vn'] != $r['img5_vn'])
				if(file_exists($path_dir."/".$r['img5_vn'])) unlink($path_dir."/".$r['img5_vn']);
		}		
		
		////Xóa Img khi chon Xoa/////
		if($_POST['del_thumb_vn']=='del_thumb_vn'){
			unlink($path_dir."/".$r['img_thumb_vn']);
			$arr['img_thumb_vn'] = "";
		}
		
		if($_POST['del_thumb_en']=='del_thumb_en'){
			unlink($path_dir."/".$r['img_thumb_en']);
			$arr['img_thumb_en'] = "";
		}
			
		if($_POST['del_img_vn']=='del_img_vn'){
			unlink($path_dir."/".$r['img_vn']);
			$arr['img_vn'] = "";
		}
		
		if($_POST['del_img2_vn']=='del_img2_vn'){
			unlink($path_dir."/".$r['img2_vn']);
			$arr['img2_vn'] = "";
		}
		
		if($_POST['del_img3_vn']=='del_img3_vn'){
			unlink($path_dir."/".$r['img3_vn']);
			$arr['img3_vn'] = "";
		}
		
		if($_POST['del_img4_vn']=='del_img4_vn'){
			unlink($path_dir."/".$r['img4_vn']);
			$arr['img4_vn'] = "";
		}
		
		if($_POST['del_img5_vn']=='del_img5_vn'){
			unlink($path_dir."/".$r['img5_vn']);
			$arr['img5_vn'] = "";
		}
			
		//////////////kiem tra trung link
		$sql = "select * from $GLOBALS[db_sp].products where unique_key='$unique_key' and id<>$id";
		$rs = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		if($rs > 0){
			$arr['unique_key'] = $unique_key."-".$id;
		}else{
			$arr['unique_key'] = $unique_key;
		}	
		
		$arr['code']= trim($_POST["code"]);
			
		//////////////////////////////////////////	
		vaUpdate('products',$arr,' id='.$id);
	}
	
}
?>