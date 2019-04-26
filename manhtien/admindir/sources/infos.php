<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$idpem = 1;
switch($act){
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=infos";
			page_transfer2($page);
		}
		else{
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].infos where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
		
			$smarty->assign("edit",$rs);	
			$template = "infos/edit.tpl";
		}
	break;
   
   case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page="index.php?do=infos";
			page_transfer2($page);
		}
		else{	
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].infos SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=infos";
			page_transfer2($url);
		}	
	break;
	
	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=infos";
		page_transfer2($url);
	break;

	default:
		$sql="select * from $GLOBALS[db_sp].infos where active=1 order by num asc, id asc ";
		$total = count($GLOBALS["sp"]->getAll($sql));

		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=infos"; //set url for paginator
		$iSEGSIZE=20;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "infos/list.tpl";
		
		/////check Perm
		if(checkPermision($idpem,2))
			$smarty->assign("checkPer2","true");
		///////////////////////////
	break;
}
$smarty->assign("tabmenu",3);
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	$arr['name_vn']= $_POST["name_vn"];
	
	$arr['plain_text_vn']= trim($_POST["plain_text_vn"]);
	$arr['plain_text_en']= trim($_POST["plain_text_en"]);
	$arr['content_vn']= $_POST["content_vn"];
	$arr['content_en']= $_POST["content_en"];

	$id = $_POST['id'];
	vaUpdate('infos',$arr,' id='.$id);
		
	
}
?>