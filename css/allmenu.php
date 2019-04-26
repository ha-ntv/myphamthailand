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
			<h3>
				<a href="'.$path_url.'/'.$item["unique_key"].'/'.$value["unique_key"].'/" title="'.$value["title_link"].'" >'.$value["name_".$lang].'</a>
			</h3>
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
			if($item['id']==3 || $item['id']==5){//Menu Dien thoai
				if($item['id']==5){ 
					$styleMenu='style="left:-144px;display:none;"';
					$sql_ap = "select * from $GLOBALS[db_sp].categories where id=43";
					$rs_a = $GLOBALS["sp"]->getRow($sql_ap);
					
					$sql_apcon = "select * from $GLOBALS[db_sp].categories where type=43 and active=1 order by num asc, id desc";
					$rs_acon = $GLOBALS["sp"]->getAll($sql_apcon);
					$strphone = '';
					foreach($rs_acon as $valuePhone){
						$strphone .='
							<li>
								<a href="'.$path_url.'/'.$valuePhone["unique_key"].'/" title="'.$valuePhone["title_link"].'" >'.$valuePhone["name_".$lang].'</a>
							</li>
						';
					}
					
					$listmenu12= '
						<h3>
							<a onmouseover="showMenu1(\'menuComputer\')" href="'.$path_url.'/'.$rs_a["unique_key"].'/" title="'.$rs_a["title_link"].'" >'.$rs_a["name_".$lang].'</a>
							<ul id="menuComputer" style="display: none;">
								'.$strphone.'
							</ul>
						</h3>
					';
				}
				
				elseif($item['id']==3){
					$styleMenu='style="display:none;"';
					$sql_ap = "select * from $GLOBALS[db_sp].categories where id=4";
					$rs_a = $GLOBALS["sp"]->getRow($sql_ap);
					
					$sql_apcon = "select * from $GLOBALS[db_sp].categories where type=4 and active=1 order by num asc, id desc";
					$rs_acon = $GLOBALS["sp"]->getAll($sql_apcon);
					$strphone = '';
					foreach($rs_acon as $valuePhone){
						$strphone .='
							<li>
								<a href="'.$path_url.'/'.$valuePhone["unique_key"].'/" title="'.$valuePhone["title_link"].'" >'.$valuePhone["name_".$lang].'</a>
							</li>
						';
					}
					
					$listmenu12= '
						<h3>
							<a onmouseover="showMenu1(\'menuPhone\')" href="'.$path_url.'/'.$rs_a["unique_key"].'/" title="'.$rs_a["title_link"].'" >'.$rs_a["name_".$lang].'</a>
							<ul id="menuPhone" style="display: none;">
								'.$strphone.'
							</ul>
						</h3>
					';
				}
				else
					$listmenu12= '';
				$listmenu1.='
					<div '.$styleMenu.' class="highlight layer_menu_1">
						<div class="inner">
							<div class="menu_col" id="menu_col_0">
                            	<div class="field_name normal first_field">
                                	<div class="field_label">Hãng sản xuất</div>
				' .$listmenu12;
				
					foreach($rs1 as $item1){
						$listmenu1.= '
							<h3>
								<a href="'.$path_url.'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
							</h3> 
						';
					}
					
				$listmenu1.='
								</div>
							</div>
							
							<div class="menu_col">
								<div class="field_name normal first_field">
									<div class="field_label">Giá</div>
									'.$searchPrice.'
								</div>
							</div>	
															
                            <div class="clearfix"></div>
							
						</div>
					</div>
				';
				
			}
			else if($item['id']==6){//Menu Phu kiện
				$listmenu1.='
					<span class="arrow_box" style="margin: 0 50px;"></span>
                    <ul class="dropdown-menu ulPhuKien">
				';
					foreach($rs1 as $item1){
						$listmenu1.= '
							<li class="PhuKien">
								 <a href="'.$path_url.'/'.$item["unique_key"].'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
							</li>
						';
					}
				$listmenu1.='
					</ul>
				';
			}
			else{
				$listmenu1.='
					<span class="arrow_box" style="margin: 0 50px;"></span>
                    <ul class="dropdown-menu">
				';
					foreach($rs1 as $item1){
						$listmenu1.= '
							<li>
								 <a href="'.$path_url.'/'.$item["unique_key"].'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
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
	$listmenu.= '
		<li class="level_1 ">
			<a href="'.$path_url.'/'.$item["unique_key"].'/"  title="'.$item["title_link"].'">
				<span class="btn-info iconbox">
					<i class="fa famen'.$imenu.'"></i>
				</span>&nbsp;
				'.$item["name_".$lang].'				                		
			</a> ' . $listmenu1 .'
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
				if($item['id']==5){
					////////load cap 3 
					$sql_ap3 = "select * from $GLOBALS[db_sp].categories where type=43  and active=1  order by num asc, id desc";
					$rs_ap3 = $GLOBALS["sp"]->getAll($sql_ap3); 
					foreach($rs_ap3 as $item3){
						$listmenuItem3.='
							<h3><a title="'.$item3["title_link"].'" href="'.$path_url.'/'.$item3["unique_key"].'/">'.$item3["name_".$lang].'</a></h3>
						';
					}
					 
					$sql_ap = "select * from $GLOBALS[db_sp].categories where id=43 ";
					$rs_a = $GLOBALS["sp"]->getRow($sql_ap);
					$listmenuleftmobile= '
						<div class="field_label">
							<a class="cap1" href="'.$path_url.'/'.$rs_a["unique_key"].'/" title="'.$rs_a["title_link"].'" >'.$rs_a["name_".$lang].'</a>
						</div>
						<span class="sb-toggle-submenu sb-caret"></span>
						<div style="display:none;" class="sb-submenu">
                        	'.$listmenuItem3.'
                        </div>
					';
					$listmenuItem3 = '';
				}
				elseif($item['id']==3){
					////////load cap 3 
					$sql_ap3 = "select * from $GLOBALS[db_sp].categories where type=4  and active=1 order by num asc, id desc";
					$rs_ap3 = $GLOBALS["sp"]->getAll($sql_ap3); 
					foreach($rs_ap3 as $item3){
						$listmenuItem3.='
							<h3><a title="'.$item3["title_link"].'" href="'.$path_url.'/'.$item3["unique_key"].'/">'.$item3["name_".$lang].'</a></h3>
						';
					}
					
					$sql_ap = "select * from $GLOBALS[db_sp].categories where id=4";
					$rs_a = $GLOBALS["sp"]->getRow($sql_ap);
					$listmenuleftmobile= '
						<div class="field_label">
							<a class="cap1" href="'.$path_url.'/'.$rs_a["unique_key"].'/" title="'.$rs_a["title_link"].'" >'.$rs_a["name_".$lang].'</a>
						</div>
						<span class="sb-toggle-submenu sb-caret"></span>
						<div style="display:none;" class="sb-submenu">
                        	'.$listmenuItem3.'
                        </div>
					';
					$listmenuItem3 = '';
				}
			}
			else{
				$listmenuleftmobile='';
			}
			
			$listmenu1.='
				<div class="sb-submenu" style="display:none;">
					<div class="sb_level_1">
			'.$listmenuleftmobile;
				foreach($rs1 as $item1){
					$listmenu1.= '
						<div class="field_label">
							<a class="cap1" href="'.$path_url.'/'.$item["unique_key"].'/'.$item1["unique_key"].'/" title="'.$item1["title_link"].'" >'.$item1["name_".$lang].'</a>
						</div>
					';
				}
			$listmenu1.='
					</div>
				</div>
			';
		}
	}
////		
	$listmenu.= '
		<li class="item level_0">
			<a href="'.$path_url.'/'.$item["unique_key"].'/"  title="'.$item["title_link"].'">
				'.$item["name_".$lang].'				                		
			</a> 
			<span class="sb-toggle-submenu sb-caret"></span> '.$listmenu1.'
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
$sql = "select * from $GLOBALS[db_sp].categories where id in(13,14,15,16) and active=1 order by num asc";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("homeHoiDap",$rs);


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
		 and pr.id=cldd.idpr
		 and cldd.idcity=$showCity 
		 order by pr.num asc, pr.id desc limit 15
";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("rightProductHot",$rs);


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

//////Load Footer Viet anh//////////////////////
$sql = "select * from $GLOBALS[db_sp].categories where id in(13,10,12,66,67) and active=1 order by num asc";
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

?>

