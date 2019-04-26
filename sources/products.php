<?php
$smarty->assign("security",generateCode(6));
//////////////load member//////////////
if(!empty($_SESSION['VIETANHMOBILE_MEMBER_ID'])){
	$sql = "SELECT * FROM $GLOBALS[db_sp].member where id=".$_SESSION['VIETANHMOBILE_MEMBER_ID'];
	$rs = $GLOBALS["sp"]->getRow($sql);
	if($_SESSION['VIETANHMOBILE_MEMBER_TYPE']==1)
		$smarty->assign("memberCar",'');
	else
		$smarty->assign("memberCar",$rs);
}

/////////////////////////////
//////////Load TP Tinh thành////
$sql = "select * from $GLOBALS[db_sp].city order by name asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("tinhthanh",$rs);
switch($act){
	case "detail":
	/*
		if(isset($cat2['id'])){ //cap 2
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
		else{//cap 1
			$cat = $cat1;
			$linkTitle =  ' 
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<span>' .$cat1["name_$lang"]. '</span>
				</div>
			';		
		}
			
		*/	
		
		
		$unique_key = $_GET['unique_key'];
		$sql = "select *, pr.id as idsp from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd  
				where pr.unique_key='$unique_key' 
				 and pr.id=cldd.idpr
				 and pr.price > 0
				 and cldd.idcity=$showCity
		";
		$rs = $GLOBALS["sp"]->getRow($sql);
		//$checkNotragop = checkNotragop($rs['cid']);
		//$smarty->assign("checkNotragop",$checkNotragop);
		
		if(!$rs['idsp']){
			$sql = "select *, pr.id as idsp from $GLOBALS[db_sp].products pr 
					where pr.unique_key='$unique_key' 
			";
			$rs = $GLOBALS["sp"]->getRow($sql);
		}
		/////////////////////load bo nho//////////
		// $sqlbn = "select * from $GLOBALS[db_sp].bonho where id in (select idbonho from $GLOBALS[db_sp].colorsize where idpr = ".$rs['idsp']." and idbonho<>1 and idcity = ".$_SESSION['showCity'].")  order by num asc, id desc";
		// $rsbonho = $GLOBALS["sp"]->getAll($sqlbn);
		// if(ceil(count($rsbonho)) > 0)
		// 	$smarty->assign("checkBonho",1);	
		// $smarty->assign("bonho",$rsbonho);
		//////check name_vn là dòng sản phẩm iphone hay kg
		$namecheck = mb_strtolower($rs['name_vn'],'UTF-8');
		//die($namecheck);
		/*
		if( (strlen(strstr($namecheck, 'chưa active')) > 0) || (strlen(strstr($namecheck, 'mới 100%')) > 0) ){
			$smarty->assign("checkPhuKien",1);
		 }
		*/
		/*
		$checkisIphone = checkisIphone($rs['cid']);
		
		if( ($rs['price_vn'] >= 7000000) && ($checkisIphone > 0 ) && ($showCity==1) )
			$smarty->assign("checkisIphone",1);
		else if( ($checkisIphone > 0 ) && ($showCity==17) )	
			$smarty->assign("checkisIphone",1);;
		*/		
		$smarty->assign("detail",$rs);
		
		//$checkSoluong = ceil($rs['soluong_vn'] - $rs['soluongban_vn']);
		// $checkSoluong = $rs['typepr'];
		// $smarty->assign("checkSoluong",$checkSoluong);
		if(!$rs['idsp']){//bi rong la kg ton tai link quay ve trang chu
			PageHome("404/");
		}
		/////////Get link Title
		//die($rs['cid']);
		$linkTitle = getLinkTitle($rs['cid'],1);
		//die($linkTitle);
		$arr['view'] = ceil($rs['view']+1);
		vaUpdate('products',$arr,' id='.$rs['idsp']);
		
		/////////////////load che do bao hanh cua dong dien thoai iphone
		// $sqlcdbh = "select * from $GLOBALS[db_sp].categories where id=93";
		// $rscdbh = $GLOBALS["sp"]->getRow($sqlcdbh);
		// $smarty->assign("iphoneBaohanh",$rscdbh);
		
		$cid = $rs['cid'];
		////////////////load san pham cung loai//////////////
		$sql_cl = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
					where pr.cid= ".$cid." 
					and pr.id<>".$rs['idsp']." 
					and pr.active=1 
					and pr.id=cldd.idpr
					and cldd.idcity=$showCity
					and pr.price > 0
					and cldd.in_stock<>''
					group by pr.id
					order by pr.num asc, pr.id desc limit 12
		";
		$rs_cl = $GLOBALS["sp"]->getAll($sql_cl);		
		$smarty->assign("view",$rs_cl);
		
		////////////////load commmetn//////////////
		$sql_comment = "select * from $GLOBALS[db_sp].comment where active=1 and idpr=".$rs['idsp']." and idcity=$showCity and type=0 order by num asc, id desc";
		$rs_comment = $GLOBALS["sp"]->getAll($sql_comment);
		$smarty->assign("commentCount",ceil(count($rs_comment)));
		$smarty->assign("viewComment",$rs_comment);
		
		////////////////load Gọi Ngay Hotline Để Được Tư Vấn//////////////
		$sqlholine = "select * from $GLOBALS[db_sp].categories where id=102";
		$rsholine = $GLOBALS["sp"]->getRow($sqlholine);
		$smarty->assign("hotlineTuVan",$rsholine);
		
		//////////////////////////////////////////////////////////////////////
		$smarty->assign("checkProductDt",1);
		$smarty->assign("seo",$rs);
		$template = "products/detail.tpl";
	break;
	
	default:
		
		//////////////////////////Load san pham/////////////////////////
		if(isset($cat2['id'])){
			$linkTitle =  '
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/" title="'.$cat1["title_link"].'">
						' .$cat1["name_$lang"]. '>
					</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<h1 class="breadcrumb">
					<span>' .$cat2["name_$lang"]. '</span>
				</h1> 					
			';
			$cat = $cat2;
			
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
		//print_r($cat1);die();
		///////////////////////load noi dung gioi thieu top/////////////	
		$sql_sdm = "select * from $GLOBALS[db_sp].categories 
				where id = ".$cat['id']."
		";
		$rs_sdm = $GLOBALS["sp"]->getRow($sql_sdm);
		$smarty->assign("contentTop",$rs_sdm);
		
		////////////////////////load tim kiem hang sản xuất/////////
		if($cat1['type']==3 || $cat1['type']==5){
			$sql_sdmtk = "select * from $GLOBALS[db_sp].categories 
				where id = ".$cat1['type']."
			";
			$rs_sdmtk = $GLOBALS["sp"]->getRow($sql_sdmtk);
			
			
			$sql_name = "select * from $GLOBALS[db_sp].categories 
				where id = ".$cat['id']."
			";
			$rs_name = $GLOBALS["sp"]->getRow($sql_name);
			
		}
		else{
			$sql_name = "select * from $GLOBALS[db_sp].categories 
				where id = ".$cat1['type']."
			";
			
			$rs_name = $GLOBALS["sp"]->getRow($sql_name);
			if($rs_name['type']>0){
				$sql_sdmtk = "select * from $GLOBALS[db_sp].categories 
					where id = ".$rs_name['type']."
					and active = 1
				";
				$rs_sdmtk = $GLOBALS["sp"]->getRow($sql_sdmtk);
			}
		}
		
		$smarty->assign("searchName",$rs_name);
		$smarty->assign("searchHang",$rs_sdmtk);
		
		/////////////////////////////////////////////////////////////////
		
		$prid = getPrid($cat['id']);
		//die('xxx:'.$prid);
		if(empty($prid)){
			
			$sql = "select * from $GLOBALS[db_sp].products where active=1 and cid = ".$cat['id']." order by num asc, id desc ";
		}
		else{
			$wh = '';
			$strPrice = $_GET['cat2'];
			
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
					where ( pr.active=1 
					and pr.cid = ".$cat['id']."
					and pr.id=cldd.idpr
					and pr.price > 0
					and cldd.idcity=$showCity $wh )
					group by pr.id
					order by pr.num asc, pr.id desc 
			";
			//die($sql);
			$total = $count = ceil(count($GLOBALS["sp"]->getAll($sql)));
			$num_rows_page = 20;
			$num_page = ceil($count/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;		
			$iSEGSIZE=5;
			$linkpg = "";
			
			if($num_page > 1 ){
				$linkpg = paginator($urll,1,$num_page,$iSEGSIZE,$cat['id'],'products',$path_url,$UrlLink,$idd,$num_rows_page,$strPrice);
				$smarty->assign("Checkpg","1");
			}
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			
			$smarty->assign("num_rows_page",$num_rows_page);
			$smarty->assign("linkpg",$linkpg);
			$smarty->assign("CheckNull",$count);
			
			/////////////////////
			
			$smarty->assign("view",$rs);
			$smarty->assign("seo",$cat);
			$smarty->assign("total",$total);
			$smarty->assign("linkpg",$linkpg);
			
			$smarty->assign("CheckNull",$count);	
		}

		
		$template = "products/view.tpl";
	break;
}	

$smarty->assign("linkTitle",$linkTitle);		
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");
?>