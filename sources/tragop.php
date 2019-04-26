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
			$idcolorsize = ceil($_GET['qty']);
			$idcolor = ceil($_GET['color']);
			
			$sql = "select *, pr.id as idsp,cldd.id as idcolorsize  from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd  
					where pr.id=$idpr 
					 and pr.id=cldd.idpr
					 and cldd.idbonho = $idbonho
					 and cldd.idcity=$showCity
			";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$smarty->assign("view",$rs);
			
			if($idcolorsize > 0){// chọn màu sản phẩm
				$sqlcolorpr = "select * from $GLOBALS[db_sp].colorprice where idcolorsize=$idcolorsize and idcolor=$idcolor";
				$rscolorpr = $GLOBALS["sp"]->getRow($sqlcolorpr);
				$smarty->assign("viewcolorpr",$rscolorpr);
				$smarty->assign("checkColor",1);
				$nameColor = getNameAll($idcolor,'colorpr','name');
				$smarty->assign("nameColor",$nameColor);
				///////load màu và giá bộ nhớ	
				$sqlclpr = "select * from $GLOBALS[db_sp].colorpr where id in (select idcolor from $GLOBALS[db_sp].colorprice where idcolorsize=$idcolorsize) order by num asc ";
				$rsclpr = $GLOBALS["sp"]->getAll($sqlclpr);
				$color = $classColor = '';
				if(ceil(count($rsclpr)) > 0){
					foreach($rsclpr as $item){
						if($idcolor == $item['id'])
							$classColor = ' class="active" ';
						$color .='
							<a '.$classColor.' href="javascript:void(0)" onclick="priceColor('.$idcolorsize.','.$item['id'].')" style="background-color:'.$item['color'].';" title="'.$item['name'].'"></a>	
						';
						$classColor = '';
					}
					$color = '
						<div class="all-bonho list_color">
							<strong class="chonbonho Fl">Chọn Màu:</strong>
							'.$color.'
						</div>
					';
					$smarty->assign("showcolor",$color);
				}
				$price =  $rscolorpr['price_vn'];
			}
			else{
				$sqlclpr = "select * from $GLOBALS[db_sp].colorpr where id in (select idcolor from $GLOBALS[db_sp].colorprice where idcolorsize=".$rs['idcolorsize'].") order by num asc ";
				$rsclpr = $GLOBALS["sp"]->getAll($sqlclpr);
				if(ceil(count($rsclpr)) > 0){
					foreach($rsclpr as $item){
						$color .='
							<a '.$classColor.' href="javascript:void(0)" onclick="priceColor('.$rs['idcolorsize'].','.$item['id'].')" style="background-color:'.$item['color'].';" title="'.$item['name'].'"></a>	
						';
					}
					$color = '
						<div class="all-bonho list_color">
							<strong class="chonbonho Fl">Chọn Màu:</strong>
							'.$color.'
							<span class="tootip_price"><img src="'.$path_url .'/images/chon-mau-xem-gia.png"></span>
						</div>
					';
					$smarty->assign("showcolor",$color);
				}
				$price =  $rs['price_vn'];	
			}
			$smarty->assign("priceshow",$price);
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