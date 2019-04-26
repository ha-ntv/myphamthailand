<?php
if(isset($cat2['id'])){
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
}
else{
	$cat = $cat1;
	$linkTitle =  ' 
		<div class="breadcrumb flever_12">
			<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
		</div>
		
		<div class="breadcrumbs_sepa">&gt;</div>
		<h1 class="breadcrumb">
			<span>' .$cat1["name_$lang"]. '</span>
		</h1>
	';		
}
////////////////////////load tim kiem hang sản xuất/////////
$sql_search = "select * from $GLOBALS[db_sp].categories 
	where `type` = ".$cat['id']."
	and active = 1
	order by num asc, id desc 
";
$rs_search = $GLOBALS["sp"]->getAll($sql_search);
$smarty->assign("searchHang",$rs_search);

//if($cat1['id']==4 || $cat1['id']==43 || $cat1['id']==186 || $cat1['id']==187){//menu apple
if($cat1['has_menu']==1){
	
	$sql = "select * from $GLOBALS[db_sp].categories 
			where active=1 
			and pid = ".$cat['id']."
			order by num asc, id desc 
	";
	$template = "submenu/apple-view.tpl";
}
elseif($cat1['has_child']==1) {// submenu sản phẩm
	$checkPage = 1;
	$catsub = '';
	$sqlinput = "select * from $GLOBALS[db_sp].categories where pid = ".$cat1['id']." and active=1";
	$catinput = $GLOBALS["sp"]->getAll($sqlinput);
	$total = ceil(count($catinput));

	if($total > 0){
		$count = 0;
		foreach($catinput as $valuecat){
			
			if($valuecat['has_child']==1){
				$sqlcat = "SELECT id FROM $GLOBALS[db_sp].categories where pid=".$valuecat['id']." and active=1 order by num asc, id desc";
				$rscat = $GLOBALS["sp"]->GetCol($sqlcat);
				$catsub .= implode(',',$rscat);	
			}
			else{
				$catsub .=	($count > 0? ',':'') . $valuecat['id'];
			}
			$count++;
		}
	}
	if(empty($catsub))
		$catsub = 0;
	$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
			where pr.active=1 
			and pr.id=cldd.idpr
		 	and cldd.idcity=$showCity
			and  pr.cid in (".$catsub.") 
			order by pr.num asc, pr.id desc 
	";
	$template = "submenu/view.tpl";
}
else{
	$checkPage = 1;
	$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
			where pr.active=1 
			and pr.id=cldd.idpr
		 	and cldd.idcity=$showCity
			and  pr.cid =" .$cat1['id']. "
			order by pr.num asc, pr.id desc 
	";
	$template = "submenu/view.tpl";
}

if($checkPage == 1){
	$total = $count = ceil(count($GLOBALS["sp"]->getAll($sql)));
	
	$num_rows_page = 20;
	$num_page = ceil($count/$num_rows_page);
	
	$begin = ($page - 1)*$num_rows_page;		
	$iSEGSIZE=5;
	$linkpg = "";
	
	if($num_page > 1 ){
		$linkpg = paginator($urll,1,$num_page,$iSEGSIZE,$cat['id'],'searchSubmenu',$path_url,$UrlLink,$idd,$num_rows_page);
		$smarty->assign("Checkpg","1");
	}
	
	$sql = $sql." limit $begin,$num_rows_page";
	$smarty->assign("num_rows_page",$num_rows_page);
	$smarty->assign("linkpg",$linkpg);
}

$rs = $GLOBALS["sp"]->getAll($sql);

$smarty->assign("CheckNull",ceil(count($rs)));

$smarty->assign("linkTitle",$linkTitle);
$smarty->assign("view",$rs);
$smarty->assign("seo",$cat);


$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");

?>