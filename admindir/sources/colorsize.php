<?php
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$cid  = $_GET["cid"];
	$idpr  = $_GET["idpr"];
	$sql_pr = "select * from $GLOBALS[db_sp].products  where id=$idpr";
	$rs_pr = $GLOBALS["sp"]->getRow($sql_pr);
	$smarty->assign("viewpr",$rs_pr);
	
	//////////////load địa điểm////////////
	$sql = "select * from $GLOBALS[db_sp].city where active=1 order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);		
	$smarty->assign("city",$rs);	
	
	//////////////load bo nho////////////
	$sql = "select * from $GLOBALS[db_sp].bonho order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);		
	$smarty->assign("bonho",$rs);	
		
	switch($act){
		case "edit":
			$id  = $_GET["id"];
			
			$sql = "select * from $GLOBALS[db_sp].colorsize where id=$id";
			$rs = $GLOBALS["sp"]->getRow($sql);
					
			$smarty->assign("edit",$rs);	
			$template = "colorsize/edit.tpl";
		break;
	
		case "add":
			$template = "colorsize/edit.tpl";
		break;
	
		case "dellist":
			
			$id=$_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				
				$sql="delete from $GLOBALS[db_sp].colorsize  where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
				
				$sql="delete from $GLOBALS[db_sp].colorprice  where idcolorsize=".$id[$i];
				$GLOBALS["sp"]->execute($sql);
			}
			
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "show":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].colorsize SET typepr=1 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		case "hide":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].colorsize SET typepr=0 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
			
		break;
		
		case "hidekinhdoanh":
			$id = $_POST["iddel"];
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].colorsize SET typepr=2 where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
			
		break;
	
			
		case "order":
			$id = $_POST["id"];	
			$ordering=$_POST["ordering"];
			//die(print_r($_POST["ordering"]));		
			for($i=0;$i<count($id);$i++){
				$sql="update $GLOBALS[db_sp].colorsize SET num=".$ordering[$i]." where id=".$id[$i];
				$GLOBALS["sp"]->execute($sql);		
			}
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);	
		break;
	
		case "addsm":
		case "editsm":
			Editsm();
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid&p=".$_REQUEST['p'];
			page_transfer2($url);
		break;
	
		default:
			
			$sql="select * from $GLOBALS[db_sp].colorsize where idpr=$idpr order by idcity asc, id desc ";
			$total = count($GLOBALS["sp"]->getAll($sql));
	
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = "index.php?do=colorsize&idpr=$idpr&cid=$cid"; //set url for paginator
			
			$iSEGSIZE=20;
			$link_url = "";
			
			if($num_page > 1 )
				$link_url = paginator($url,$page,$num_page,$iSEGSIZE);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			
			
			$sqlcount = "select count(id) from $GLOBALS[db_sp].colorsize where idpr=$idpr and idcity=1";
			$countcity = ceil($GLOBALS["sp"]->getOne($sqlcount));
			$smarty->assign("countcity",$countcity);
			
			$smarty->assign("link_url",$link_url);
			$smarty->assign("view",$rs);
			
			$template = "colorsize/list.tpl";
		break;
	}
	$smarty->assign("tabmenu",0);
	$smarty->assign("colorsize",'class="ActiveMenu"');
	$smarty->display("header.tpl");
	$smarty->display($template);
	$smarty->display("footer.tpl");
	
function Editsm()
{
	global $path_url,$path_dir;
	$act = isset($_REQUEST['act'])?$_REQUEST['act']:"";
	
	$arr['idpr']= trim($_POST["idpr"]);
	$arr['idcity']= trim($_POST["idcity"]);
	$arr['idbonho']= trim($_POST["idbonho"]);	
	$arr['price_vn']= trim($_POST["price_vn"]);
	$arr['price_vn'] = str_replace(".", "", $arr['price_vn']);
	$arr['soluong_vn']= trim($_POST["soluong_vn"]);
	$arr['soluongban_vn']= trim($_POST["soluongban_vn"]);

	$arr['active'] = $_POST['active']=='active'?'1':'0';
	
	if ($act=="addsm")
	{
		$id = vaInsert('colorsize',$arr);
	}
	else
	{
		$id = $_POST['id'];
		/////xoa bảng colorprice ròi add lại
		$sql="delete from $GLOBALS[db_sp].colorprice  where idcolorsize=".$id;
		$GLOBALS["sp"]->execute($sql);
		vaUpdate('colorsize',$arr,' id='.$id);
	}	
	//////////
	$pricecolorall = $_POST["pricecolor"];
	$colorall = $_POST["color"];
	for($i=0;$i<=count($pricecolorall);$i++){
		$pricecolor = trim($pricecolorall[$i]);
		$color = trim($colorall[$i]);
		if(!empty($pricecolor)){
			$arrcolor['idcolorsize'] = $id;
			$arrcolor['price_vn'] = str_replace(".", "", $pricecolor);
			$arrcolor['idcolor'] = $color;
			vaInsert('colorprice',$arrcolor);
		}
	}
}
?>