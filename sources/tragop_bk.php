<?php
//////////////load member//////////////
if(!empty($_SESSION['VIETANHMOBILE_MEMBER_ID'])){
	$sql = "SELECT * FROM $GLOBALS[db_sp].member where id=".$_SESSION['VIETANHMOBILE_MEMBER_ID'];
	$rs = $GLOBALS["sp"]->getRow($sql);
	if($_SESSION['VIETANHMOBILE_MEMBER_TYPE']==1)
		$smarty->assign("memberCar",'');
	else
		$smarty->assign("memberCar",$rs);
}

//////////Load TP Tinh thành////
$sql = "select * from $GLOBALS[db_sp].city order by name asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("tinhthanh",$rs);

$sql = "select * from $GLOBALS[db_sp].categories where id=8";
$cat1 = $GLOBALS["sp"]->getRow($sql);

//////////Load đối tác ngân hàng////
$sqlb = "select * from $GLOBALS[db_sp].banner where cid=122 order by num asc, id desc";
$rsb = $GLOBALS["sp"]->getAll($sqlb);
$smarty->assign("bannerBank",$rsb);

$smarty->assign("seo",$cat1);
$idpr = $_GET['cat2'];

$idbonho = isset($_GET["id"]) ? $_GET["id"] : 1;
$priceBonho = 0;
$nameBonho = '';

/////////////////////load bo nho//////////
$sql = "select price_vn from $GLOBALS[db_sp].colorsize	where idpr=$idpr and idbonho=$idbonho and idcity = ".$_SESSION['showCity'];
$priceBonho = $GLOBALS["sp"]->getOne($sql);
		
$sqlbn = "select * from $GLOBALS[db_sp].bonho where  id in (select idbonho from $GLOBALS[db_sp].colorsize where idpr = $idpr and idcity = ".$_SESSION['showCity'].")  order by num asc, id desc";
$rsbonho = $GLOBALS["sp"]->getAll($sqlbn);
if(ceil(count($rsbonho)) > 1)
	$smarty->assign("checkBonho",1);	
$smarty->assign("bonho",$rsbonho);	
if($idbonho > 1){
	$nameBonho = '- '.getNameAll($idbonho,'bonho','name_vn');
}
$smarty->assign("nameBonho",$nameBonho);
$smarty->assign("priceBonho",$priceBonho);
$smarty->assign("idbonho",$idbonho);
switch($act){
	default:
		if($idpr){
			$sql = "select *, pr.id as idsp from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd  
					where pr.id=$idpr 
					 and pr.id=cldd.idpr
					 and cldd.idbonho = $idbonho
					 and cldd.idcity=$showCity
			";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$smarty->assign("view",$rs);
			
			/*
			$namecheck = strtolower($rs['name_vn']);
			if (strlen(strstr($namecheck, 'samsung')) > 0) {
				$smarty->assign("checkisSamsung",1);
				$smarty->assign("slpercent",20);
			 }
			 
			 if( ($rs['price_vn'] >= 7000000) && ($rs['price_vn'] <= 10000000) && ($checkisIphone > 0 ) && ($showCity==1) )
				$smarty->assign("slpercent",30);
			else if( ($rs['price_vn'] >= 10000000) && ($checkisIphone > 0 ) && ($showCity==1) )
				$smarty->assign("slpercent",40);
			else if( ($checkisIphone > 0 ) && ($showCity==17) )		
				$smarty->assign("slpercent",40);
			else
				$smarty->assign("slpercent",20);
			*/
			/*
			$checkisIphone = checkisIphone($rs['cid']);
			if($checkisIphone > 0)
				$smarty->assign("slpercent",40);
			else
				$smarty->assign("slpercent",20);
			 */
			 $smarty->assign("slmonth",12);
			 
			$template = "tragop/ctsp-tragop.tpl";
		}
		else{
			//$template = "tragop/view.tpl";
			$url = $path_url.'/mua-dien-thoai-iphone-tra-gop-lay-lien/';
			Header( "HTTP/1.1 301 Moved Permanently" );
			Header( "Location:".$url); 
		}
	break;	
}
$smarty->assign("checkProductDt",1);
$smarty->assign("checkTragop",1);	
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");
?>