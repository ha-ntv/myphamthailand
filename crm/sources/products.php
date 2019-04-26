<?php
$smarty->assign("thongke",thongkekho());
$act = isset($_REQUEST['do'])?$_REQUEST['do']:"";
switch($act){
	default:
		$wh = " 1=1 ";
		$strparts = explode('?', $_SERVER['REQUEST_URI'], 2);
		if(!empty($strparts[1])){
			$str = urldecode(utf8_decode($strparts[1]));
			$str = explode('&', $str);
			
			$codes = explode('=', $str[0]);
			$codes = checkStr($codes[1]);
			
			$names = explode('=', $str[1]);
			$names = checkStr($names[1]);
			
			//echo $codes . "<br>". $names;
			
			if(!empty($codes)){
				$codes = trim($codes);
				$wh .= " and codesp = '".$codes."' ";
				$smarty->assign("codes",$codes);
			}
			if(!empty($names)){
				$names = trim($names);
				$wh .= " and name_vn = '".$names."' ";
				$smarty->assign("names",$names);
			}
		}
		
		if(!empty($_GET['cat1']) && $_GET['cat1']!=1){
			$sql="select * from $GLOBALS[db_web].products where cid=".$_GET['cat1']." and active=1 order by num asc, id desc ";
			$template = "products/list.tpl";
		}
		else{
			$checkSearch = 1;
			$sql="select * from $GLOBALS[db_web].products where $wh and active=1 ";
			$template = "products/list.tpl";
		}
		
		//die($sql);
		if($checkSearch==1){
			$rs = $GLOBALS["web"]->getAll($sql);
			$smarty->assign("checkSearch",$checkSearch);
		}
		else{
		
			$total = count($GLOBALS["web"]->getAll($sql));
			$num_rows_page = $numPageAll;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$url = $path_url."/products/".$_GET['cat1']."/0/0"; //set url for paginator
			$iSEGSIZE=10;
			$link_url = "";
			
			if($num_page > 1 )
				$link_url = paginator($num_page,$page,$iSEGSIZE,$url);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["web"]->getAll($sql);
			if($page!=1)
			{
				$number=$num_rows_page * ($page-1);
				$smarty->assign("number",$number);
			}
			$smarty->assign("link_url",$link_url);
		}
		$smarty->assign("view",$rs);
		
	break;
}

$smarty->assign("checkHanghoa","class='Active'");
$smarty->assign("checkHanghoa1","class='active'");
$smarty->display("header.tpl");
$smarty->display($template);
$smarty->display("footer.tpl");

?>