<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$loaitin = array(
   array('id'=>1,'name'=>'Bình Thường'),
   array('id'=>2,'name'=>'Khuyến mãi'),
   array('id'=>3,'name'=>'Tin nổi bật')
);
$smarty->assign("loaitin",$loaitin);
switch($act){
	case "edit":
		//die($path_url);
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].phukiengiamgia where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
			
					
			$smarty->assign("edit",$rs);	
			$template = "phu-kien-giam-gia/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($_GET["cid"],1)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$template = "phu-kien-giam-gia/edit.tpl";
		}
	
	break;

	case "dellist":
		if(!checkPermision($_GET["cid"],3)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].phukiengiamgia  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].phukiengiamgia SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].phukiengiamgia SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid'];
			page_transfer2($url);
		}
		
	break;

		
	case "order":
		if(!checkPermision($_GET["cid"],2)){
			page_permision();
			$page="index.php?do=phu-kien-giam-gia&cid=".$_GET["cid"];
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].phukiengiamgia SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid'];
			page_transfer2($url);
		}	
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid']."&p=".$_REQUEST['p'];
		page_transfer2($url);
	break;

	default:
		
		if(isset($_GET['cid']) && $_GET['cid']!=1)
			$sql="select * from $GLOBALS[db_sp].phukiengiamgia where cid=".$_GET['cid']." order by num asc, id desc ";
		else
			$sql="select * from $GLOBALS[db_sp].phukiengiamgia order by num asc, id desc ";
		
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=phu-kien-giam-gia&cid=".$_GET['cid']; //set url for paginator
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
		
		$template = "phu-kien-giam-gia/list.tpl";
		
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
	$arr['price_vn']= replacePrice(trim($_POST["price_vn"]));
	$arr['promotion_vn']= replacePrice(trim($_POST["promotion_vn"]));	

	
	$arr['num'] = $_POST["num"];
	
	$arr['active'] = $_POST['active']=='active'?'1':'0';
	$arr['cid']= $_POST["cat"];

	if ($act=="addsm")
	{
		vaInsert('phukiengiamgia',$arr);			
	}
	else
	{
		$id = $_POST['id'];		
		//////////////////////////////////////////
		vaUpdate('phukiengiamgia',$arr,' id='.$id);
		
	}
	
}
?>