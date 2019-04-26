<?php
if(isset($cat2['id'])){ //cap 2
	//$linkTitle =  " <a href='" . $path_url. "/" .$cat1["unique_key_$lang"]. "/' title='".$cat1["title_link_$lang"]."'>" .$cat1["name_$lang"]. "</a> ";
	$cat = $cat2;
}
else{//cap 1
	$linkTitle = '
		<div class="breadcrumb flever_12">
			<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
		</div>
		<div class="breadcrumbs_sepa">&gt;</div>
		<div class="breadcrumb">
			<span>'.$cat1["name_$lang"].'</span>
		</div>
	';
	$cat = $cat1;			
}
$id = $cat['id'];
$sql_dt = "select * from $GLOBALS[db_sp].intro where id=$id";
$rs_dt = $GLOBALS["sp"]->getRow($sql_dt);
if($rs_dt['id']==130){
	///////cap nhap so lan xem
	$arr['view'] = ceil($rs_dt['view']+1);
	vaUpdate('intro',$arr,' id='.$rs_dt['id']);
		
	$smarty->assign("security",generateCode(6));
	$smarty->assign("checkProductDt",1);
	////////////////load commmetn//////////////
	$sql_comment = "select * from $GLOBALS[db_sp].comment where active=1 and idpr=".$rs_dt['id']." and idcity=$showCity and type=3 order by num asc, id desc";
	$rs_comment = $GLOBALS["sp"]->getAll($sql_comment);
	$smarty->assign("commentCount",ceil(count($rs_comment)));
	$smarty->assign("viewComment",$rs_comment);
}
$smarty->assign("detail",$rs_dt);
$smarty->assign("checkContact",$id);
$smarty->assign("seo",$cat);
$smarty->assign("linkTitle",$linkTitle);
$smarty->display("./header.tpl");
$smarty->display("./intro/view.tpl");
$smarty->display("./footer.tpl");
?>