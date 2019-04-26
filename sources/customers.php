<?php
switch($act){
	case "detail":
		if(isset($cat2['id'])){ //cap 2
			$cat = $cat2;
			
		}
		else{//cap 1
			$cat = $cat1;			
		}

		$unique_key = $_GET['unique_key'];
		$sql = "select * from $GLOBALS[db_sp].customers where unique_key='$unique_key'";
		$rs = $GLOBALS["sp"]->getRow($sql);
		$smarty->assign("detail",$rs);
		
		if(!$rs['id']){//bi rong la kg ton tai link quay ve trang chu
			PageHome("index.html");
		}
		
		$sql_cl = " select * from $GLOBALS[db_sp].customers where active=1 and khid = ".$rs['id']." order by  id desc ";
		$rs_cl = $GLOBALS["sp"]->getAll($sql_cl);

		$smarty->assign("view",$rs_cl);
		$smarty->assign("seo",$rs);
		$smarty->assign("nametitle",$cat);
		
		$h1='
			<div class="maintitletop">
				<div class="subtitletopcontent">
					<div class="titleleftcontent"></div>
					<h1 class="titlecentercontent">'.$rs['name_'.$lang].'</h1>
					<div class="titlerightcontent"></div>
			   </div>
			</div>
		';
		$smarty->assign("loadTitleh1",$h1);
		$template = "customers/detail.tpl";
	break;
	
	default:
		if(isset($cat2['id'])){
			//$UrlLink = $path_url. "/" .$cat1["unique_key_$lang"]. "/" .$cat2["unique_key_$lang"];			
			$cat = $cat2;
		}
		else{
			//$UrlLink = $path_url. "/" . $cat1["unique_key_$lang"];
			$cat = $cat1;			
		}
		$sql = " select * from $GLOBALS[db_sp].customers where active=1 and cid = ".$cat['id']." and khid=0 order by num asc, id desc ";
		$total = $count = ceil(count($GLOBALS["sp"]->getAll($sql)));
		
		$num_rows_page = 40;
		$num_page = ceil($count/$num_rows_page);
		$begin = ($page - 1)*$num_rows_page;
		if($num_page > 1 ){
			$smarty->assign("Checkpg","1");
			$smarty->assign("typePage",'customers');
			$smarty->assign("num_rows_page",$num_rows_page);
			$smarty->assign("num_page",$num_page);
			$smarty->assign("cidPage",$cat['id']);
			$smarty->assign("idPage",$idd);
		}
		
		$sql = $sql." limit $begin,$num_rows_page";
		$rs = $GLOBALS["sp"]->getAll($sql);
		
		////////////////////////////////////////
		$smarty->assign("view",$rs);
		$smarty->assign("seo",$cat);
		
		$h1='
			<div class="maintitletop">
				<div class="subtitletopcontent">
					<div class="titleleftcontent"></div>
					<h1 class="titlecentercontent">'.$cat['name_'.$lang].'</h1>
					<div class="titlerightcontent"></div>
			   </div>
			</div>
		';
		$smarty->assign("loadTitleh1",$h1);
		
				
		$template = "customers/view.tpl";
	break;
}
$smarty->assign("loadcss","customers.css");			
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");

?>