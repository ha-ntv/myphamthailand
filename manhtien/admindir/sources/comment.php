<?php
$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
$type = isset($_REQUEST['type'])?$_REQUEST['type']:0;
$city = isset($_REQUEST['city'])?$_REQUEST['city']:1;
$idpem = -4;
switch($act){
	case "edit":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city";
			page_transfer2($page);
		}
		else{
			$city = $_GET["city"];
			if($city > 0)
				$smarty->assign("NameTinhThanh",NameTinhThanh('city', 'name', $city)); 
			else
				$smarty->assign("NameTinhThanh",NameTinhThanh('city', 'name', 1)); 
			$id  = $_GET["id"];
			$sql = "select * from $GLOBALS[db_sp].comment where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);	
			$smarty->assign("edit",$rs);	
			$template = "comment/edit.tpl";
		}
	break;

	case "add":
		if(!checkPermision($idpem,1)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city";
			page_transfer2($page);
		}
		else{	
			$template = "comment/edit.tpl";
		}
	break;

	case "dellist":
		if(!checkPermision($idpem,3)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city";
			page_transfer2($page);
		}
		else{
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="delete from $GLOBALS[db_sp].comment  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

	case "show":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].comment SET active=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

	case "hide":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].comment SET active=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city&p=".$_REQUEST['p'];
			page_transfer2($url);
		}
	break;

		
	case "order":
		if(!checkPermision($idpem,2)){
			page_permision();
			$page = "index.php?do=comment&cid=".$_GET['cid'];
			page_transfer2($page);
		}
		else{
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].comment SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=comment&cid=".$_GET['cid']."&type=$type&city=$city&p=".$_REQUEST['p'];
			page_transfer2($url);	
		}
	break;

	case "addsm":
	case "editsm":
		Editsm();
		$url = "index.php?do=comment&cid=0&city=$city&type=$type";
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
			$whCity = ' and idcity='.$cityShow;
		}
		
		$sql="select * from $GLOBALS[db_sp].comment where 1=1 $whCity and (type=$type or type=3)  order by num asc, id desc ";
		$total = count($GLOBALS["sp"]->getAll($sql));
		$num_rows_page = $numPageAll;
		$num_page = ceil($total/$num_rows_page);
		
		$begin = ($page - 1)*$num_rows_page;
		$url = "index.php?do=comment&type=$type&city=".$cityShow; //set url for paginator
		$iSEGSIZE=50;
		$link_url = "";
		
		if($num_page > 1 )
			$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		$smarty->assign("link_url",$link_url);
		$smarty->assign("view",$rs);
		
		$template = "comment/list.tpl";
		/////check Perm
		if(checkPermision($idpem,1))
			$smarty->assign("checkPer1","true");
		
		if(checkPermision($idpem,2))
			$smarty->assign("checkPer2","true");
		
		if(checkPermision($idpem,3))
			$smarty->assign("checkPer3","true");
		
	break;
}
$smarty->assign("tabmenu",0);
if($type == 1)
	$smarty->assign("comment1",'class="ActiveMenu"');
else
	$smarty->assign("comment",'class="ActiveMenu"');
	
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	$arr['name']= $_POST["name"];
	$arr['content']= $_POST["content"];
	$arr['name_tl']= $_POST["name_tl"];
	$arr['content_tl']= $_POST["content_tl"];

	if ($act=="addsm")
	{
		vaInsert('comment',$arr);
	}
	else
	{
		$arr['dated_tl'] = date('Y/m/d');
		$time =strtoupper(date('a'));
		$arr['timed_tl'] = date('H:i ').$time;
	
		$arr['active']= 1;
		$id = $_POST['id'];
		vaUpdate('comment',$arr,' id='.$id);
	}	
}
?>