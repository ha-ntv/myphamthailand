<?php
///Load tìm kiếm theo Giá////////
$sql_search = "select * from $GLOBALS[db_sp].categories 
		where active=1 
		and pid = 69
		order by num asc, id desc 
";
$rs_search = $GLOBALS["sp"]->getAll($sql_search);
$smarty->assign("searchPrice",$rs_search);


///////////////////////////Load Menu Top web/////////////////////////////
$listmenu = "";
$listmenu1 = "";
$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and active=1 and has_left=1 order by num asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$imenu = 0;
foreach($rs as $item){
	$imenu++;
	foreach($rs_search as $value){
		$searchPrice.= '
			<li>
				<a href="'.$path_url.'/'.$item["unique_key"].'/'.$value["unique_key"].'/" title="'.$value["title_link"].'" >'.$value["name_".$lang].'</a>
			</li>
		';
	}
////cap 2
	if($item['has_child'] == 1)
	{
		if($item['id']==3 || $item['id']==5)
			$sql1 = "select * from $GLOBALS[db_sp].categories where type=".$item['id']." and active=1  order by num asc, id desc";
		else
			$sql1 = "select * from $GLOBALS[db_sp].categories where pid=".$item['id']." and active=1  order by num asc, id desc";
		$rs1 = $GLOBALS["sp"]->getAll($sql1);
		$i = 0;
		if(count($rs1) > 0){// cap 2
			if($item['id']==3 || $item['id']==5){//Menu Dien thoa
				
				$sql_ap = "select * from $GLOBALS[db_sp].categories where `type`=".$item['id']." and active=1 order by num asc, id desc ";
				$rs_a = $GLOBALS["sp"]->getAll($sql_ap);
				foreach($rs_a as $item3){// cấp 3
					if($item3['has_child'] == 1){
						$sql_apcon = "select * from $GLOBALS[db_sp].categories where type=".$item3['id']." and active=1 order by num asc, id desc";
						$rs_acon = $GLOBALS["sp"]->getAll($sql_apcon);
						$strphone = '';
						foreach($rs_acon as $valuePhone){
							$strphone .='
								<li>
									<a href="'.$path_url.'/'.$valuePhone["unique_key"].'/" title="'.$valuePhone["title_link"].'" >'.$valuePhone["name_".$lang].'</a>
								</li>
							';
						}
						
						$listmenu12 .= '
							<li>
								<a href="'.$path_url.'/'.$item3["unique_key"].'/" title="'.$rs_a["title_link"].'" >'.$item3["name_".$lang].'</a>
								<ul class="menuPhone">
									'.$strphone.'
								</ul>
							</li>
						';
					}
				}

					
				$listmenu1.='
					<ul class="menu_ver_item" style="width:100%">
                            <li class="bold">
								<a>HẢNG SẢN XUẤT</a>
							</li>
				' .$listmenu12;
				/*
				$listmenu12 = '';
					foreach($rs1 as $item1){
						$listmenu1.= '
							<li>
								<a href="'.$path_url.'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].' 123456</a>
							</li> 
						';
					}
				*/
				$listmenu12 = '';
			}
			
			else{
				$listmenu1.='
                	<ul class="menu_ver_item" style="width:100%">
						<li class="bold">
						 	<a href="'.$path_url.'/'.$item["unique_key"].'/"  title="'.$item["title_link"].'">'.$item["name_".$lang].'</a>
					 	</li>
				';
						foreach($rs1 as $item1){
							$listmenu1.= '
								<li>
									 <a href="'.$path_url.'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
								</li>
							';
						}
				$listmenu1.='
					 </ul>
				';
			}
		}
	}
////	
	if(!empty($listmenu1)){
		$checkMenuCon = '<span class="iconcm"></span>';	
		$checkBgMenuCon = ' 
			<div class="menu_ver_hover">'
				. $listmenu1 .'
			</div>
		';
	}
	else{
		$checkMenuCon = '';
		$checkBgMenuCon = '';
	}
	$linkacap1 = '';
	if(!empty($item["link"]))
		$linkacap1 = $item["link"];
	else
		$linkacap1 = $path_url.'/'.$item["unique_key"].'/';
	
	$listmenu.= '
		<li>
			<a href="'.$linkacap1.'"  title="'.$item["title_link"].'">
				<span class="btn-info iconbox">
					<i class="fa famen'.$item["id"].'"></i>
				</span>
				'.$item["name_".$lang].'
				'.$checkMenuCon.'
			</a>
			'
			. $checkBgMenuCon .'

	   </li>	
	';
	$searchPrice = "";
	$listmenu1 = "";
}

$smarty->assign("ListMenu",$listmenu);


///////////////////////////Load Menu left mobile/////////////////////////////
$listmenu = "";
$listmenu1 = "";
$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and active=1 and has_left=1 order by num asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$imenu = 0;
foreach($rs as $item){
	$imenu++;
////cap 2
	if($item['has_child'] == 1)
	{
		if($item['id']==3 || $item['id']==5)
			$sql1 = "select * from $GLOBALS[db_sp].categories where type=".$item['id']." and active=1  order by num asc, id desc";
		else
			$sql1 = "select * from $GLOBALS[db_sp].categories where pid=".$item['id']." and active=1  order by num asc, id desc";	
		$rs1 = $GLOBALS["sp"]->getAll($sql1);
		$i = 0;
		if(count($rs1) > 0){// cap 2
			if($item['id']==3 || $item['id']==5){
				$listmenuItem3 = '';
		
				$sql_map = "select * from $GLOBALS[db_sp].categories where `type`=".$item['id']." and active=1 order by num asc, id desc ";
				$rs_ma = $GLOBALS["sp"]->getAll($sql_map);
				foreach($rs_ma as $itemm2){// cấp 3
					if($itemm2['has_child'] == 1){
						////////load cap 3 
						$sql_ap3 = "select * from $GLOBALS[db_sp].categories where type=".$itemm2['id']." and active=1  order by num asc, id desc";
						//die($sql_ap3);
						$rs_ap3 = $GLOBALS["sp"]->getAll($sql_ap3); 
						foreach($rs_ap3 as $item3){
							$listmenuItem3.='
								<h3><a title="'.$item3["title_link"].'" href="'.$path_url.'/'.$item3["unique_key"].'/">'.$item3["name_".$lang].'</a></h3>
							';
						}
						 
						$listmenuleftmobile .= '
							<div class="field_label">
								<a class="cap1" href="javascript:void(0)" title="'.$itemm2["title_link"].'" >'.$itemm2["name_".$lang].'</a>
							
								<span class="sb-toggle-submenu sb-caret sb-caret1"></span>
								<div style="display:none;" class="sb-submenu">
									'.$listmenuItem3.'
								</div>
							</div>
						';
						//die($listmenuleftmobile);
						$listmenuItem3 = '';
					}
				}
			}
			else{
				foreach($rs1 as $item1){
					$listmenuleftmobile.= '
						<div class="field_label">
							<a class="cap1" href="'.$path_url.'/'.$item["unique_key"].'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
						</div>
					';
				}	
				//$listmenuleftmobile='';
			}

			$listmenu1.='
				<div class="sb-submenu" style="display:none;">
					<div class="sb_level_1">
			'.$listmenuleftmobile;
				/*
				foreach($rs1 as $item1){
					$listmenu1.= '
						<div class="field_label">
							<a class="cap1" href="'.$path_url.'/'.$item["unique_key"].'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
						</div>
					';
				}
				*/
			$listmenu1.='
					</div>
				</div>
			';
			$listmenuleftmobile = "";
		}
	}
////
	if($listmenu1){
		$checkLeftMenuCon ='<span class="sb-toggle-submenu sb-caret"></span> '.$listmenu1;
	}
	else{
		$checkLeftMenuCon ='';
	}	
	
	$linkaleftcap1 = '';
	if(!empty($item["link"]))
		$linkaleftcap1 = $item["link"];
	else
		$linkaleftcap1 = $path_url.'/'.$item["unique_key"].'/';
		
	$listmenu.= '
		<li class="item level_0">
			<a href="'.$linkaleftcap1.'"  title="'.$item["title_link"].'">
				'.$item["name_".$lang].'				                		
			</a> 
			'.$checkLeftMenuCon.'
		</li>
	';

	$listmenu1 = "";
}

$smarty->assign("ListMenuLeft",$listmenu);

///////////////////////////Load Menu right mobile/////////////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id in(10,11,12) and active=1 order by num asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("ListMenuRight",$rs);

//////Load menu hoi dap//////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id in(16) and active=1 order by num asc";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("homeHeThongCuaHang",$rs);


//////Load Hot line, tong dai ban hang, khach hang la thuong de //////////////////////
$sql = "select * from $GLOBALS[db_sp].infos where id=55";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("todaibanhang",$rs);

$sql = "select * from $GLOBALS[db_sp].infos where id=57";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("khachhanglathuongde",$rs);

$sql = "select content_$lang from $GLOBALS[db_sp].infos where id=56";
$rs = $GLOBALS["sp"]->getOne($sql);
$rs = str_replace("<p>", "", $rs);
$rs = str_replace("</p>", "", $rs);
$smarty->assign("hotline",$rs);


/////////////load sản phẩm  hot right
$sql = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd  
		 where pr.active=1 
		 and pr.type=3  
		 and  pr.img_thumb_vn<>''
		 and cldd.price_vn > 0
		 and pr.id=cldd.idpr
		 and cldd.idcity=$showCity 
		 and cldd.typepr<>''
		 and cldd.typepr<>2
		 and cldd.typepr<>0
		 group by pr.id
		 order by pr.orderhot asc, pr.id desc limit 20
";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("rightProductHot",$rs);

//////////Load banner
$sqlbanner = "select * from $GLOBALS[db_sp].banner where cid = 111 and active=1 order by num asc, id desc limit 2";
$rsbanner = $GLOBALS["sp"]->getAll($sqlbanner);
$smarty->assign("bannerpr",$rsbanner);
		
//////Load load khu vuc //////////////////////
$sql = "select * from $GLOBALS[db_sp].city where active=1 order by id asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("cityHome",$rs);

//////Load load Popup //////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id=81";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("popupHome",$rs);

//////Load footer //////////////////////
$sql = "select * from $GLOBALS[db_sp].infos where id=52";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("addressFooter",$rs);

/////////địa chỉ khu vực
$sql = "select * from $GLOBALS[db_sp].infos where id=59";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("khuvucFooter",$rs);

/////////danh muc và san pham noi bat
$sql = "select * from $GLOBALS[db_sp].infos where id=60";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("danhmucsanphmFooter",$rs);

/////////Thong tin tài khoản
$sql = "select * from $GLOBALS[db_sp].infos where id=63";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("thongtintaikhoanFooter",$rs);

/////////góp ý kiến 
$sql = "select * from $GLOBALS[db_sp].infos where id=66";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("gopykienRight",$rs);

//////Load Footer Viet anh//////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id in(13,10,12,66,67,101) and active=1 order by num asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("HoiDapFooter",$rs);

//////Load Footer Viet anh//////////////////////
$sql = "select * from $GLOBALS[db_sp].partner where active=1 and cid=68 order by num asc, id desc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("partnerFooter",$rs);


//////Load Footer slider Viet anh//////////////////////
$sql = "select * from $GLOBALS[db_sp].partner where active=1 and cid<>68 order by num asc, id desc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("partnerFooterSlider",$rs);


/////////////load noi bat( có thể bạn quan tâm)
$sql = "select * from $GLOBALS[db_sp].articles where active=1 and img_thumb_vn<>'' and cid=90 order by num asc, id desc limit 3";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("newsNoibat",$rs);

//////Load Search//////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id =76 ";
$rs = $GLOBALS["sp"]->getRow($sql);
$smarty->assign("search",$rs);

/////////////////load qua khuyen mai cua dong dien thoai iphone
$sqlip = "select * from $GLOBALS[db_sp].categories where id=89";
$iphonePromotion = $GLOBALS["sp"]->getRow($sqlip);
$smarty->assign("iphonePromotion",$iphonePromotion);

/////////////////load qua khuyen mai cua dong dien thoai iphone
$sql100 = "select * from $GLOBALS[db_sp].categories where id=109";
$iphonePromotion100 = $GLOBALS["sp"]->getRow($sql100);
$smarty->assign("iphonePromotion100",$iphonePromotion100);

////////////////////lod Sale popu
$sqlsl = "select * from $GLOBALS[db_sp].categories where id=136";
$rssl = $GLOBALS["sp"]->getRow($sqlsl);
$smarty->assign("saleup",$rssl);
$checkShowSaleup = $flagnd = '';
if($showCity==1){//TPHCM
	$checkShowSaleup = $rssl['showpopupsaleup'];
	$flagnd = 'vn';
}
else{
	$checkShowSaleup = $rssl['showpopupsaleupdn'];
	$flagnd = 'en';
}
$smarty->assign("flagnd",$flagnd);
$smarty->assign("checkShowSaleup",$checkShowSaleup);
?>

