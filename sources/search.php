<?php
$wh = "";
if(!empty($_GET['cat2'])){
	$cat = $cat2;
	$linkTitle =  '
		<div class="breadcrumb flever_12">
			<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
		</div>
		
		<div class="breadcrumbs_sepa">&gt;</div>
		<div class="breadcrumb">
			<a href="' . $path_url. '/' .$cat1["unique_key"]. '/" title="'.$cat1["title_link"].'">
				<span>' .$cat1["name_$lang"]. '</span>
			</a>
		</div>
		
		<div class="breadcrumbs_sepa">&gt;</div>
		<div class="breadcrumb">
			<span>' .$cat2["name_$lang"]. '</span>
		</div> 					
	';
	$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$_GET['cat2']."' ";	
	$rspr = $GLOBALS["sp"]->getRow($sqlpr);
	$price = explode(',',trim($rspr['title_vn']));
	
	$strPrice = trim($_GET['cat2']);
	if(!empty($price[1])){
		$wh = " and cldd.price_vn>=$price[0] and cldd.price_vn<=$price[1] order by pr.num asc, pr.id desc ";	
	}
	else{
		if($price[0]==3000000){
			$wh = " and cldd.price_vn<=$price[0] order by pr.num asc, pr.id desc ";	
		}
		else{
			$wh = " and cldd.price_vn>=$price[0] order by pr.num asc, pr.id desc ";
		}
	}	
	
	if($cat1['id']==3){
		$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
				where pr.active=1 
				and pr.id=cldd.idpr
				and cldd.idcity=$showCity
				and ( pr.cid in (select id from $GLOBALS[db_sp].categories where type = ".$cat1['id']." and active=1) 
				or pr.cid in (select id from $GLOBALS[db_sp].categories where type = 4 and active=1) )
				$wh 
		";
	}
	else if($cat1['id']==5){
		$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
				where pr.active=1 
				and pr.id=cldd.idpr
				and cldd.idcity=$showCity
				and ( pr.cid in (select id from $GLOBALS[db_sp].categories where type = ".$cat1['id']." and active=1) 
				or pr.cid in (select id from $GLOBALS[db_sp].categories where type = 43 and active=1) )
				$wh
		";
	}
	
	$namePage = "searchSubmenu";
	
}
else{
	
	$cat = $cat1;
	$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
			where (pr.name_".$lang." like '%".$_SESSION['keyshopping']."%' or pr.code like '%".$_SESSION['keyshopping']."%' or pr.codesp like '%".$_SESSION['keyshopping']."%') 
			and pr.active=1 
			and pr.id=cldd.idpr
			and cldd.idcity=$showCity 
			order by pr.num asc, pr.id desc 
	";
	$smarty->assign("checkSearch",11);
	$smarty->assign("nameSe",$_SESSION['keyshopping']);	
	$namePage = "search";
}
$total = $count = ceil(count($GLOBALS["sp"]->getAll($sql)));
$num_rows_page = 20;
$num_page = ceil($count/$num_rows_page);
$begin = ($page - 1)*$num_rows_page;		
$iSEGSIZE=5;
$linkpg = "";
if($num_page > 1 ){
	$linkpg = paginator($urll,1,$num_page,$iSEGSIZE,$cat1['id'],$namePage,$path_url,$UrlLink,$idd,$num_rows_page,$strPrice);
	$smarty->assign("Checkpg","1");
}
$sql = $sql." limit $begin,$num_rows_page";
$rs = $GLOBALS["sp"]->getAll($sql);
		
$smarty->assign("num_rows_page",$num_rows_page);
$smarty->assign("linkpg",$linkpg);
$smarty->assign("CheckNull",$count);
		
$smarty->assign("view",$rs);
$smarty->assign("total",$total);
$template = "search/view.tpl";
$smarty->assign("seo",$cat);
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");
?>