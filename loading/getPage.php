<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");
	$page = isset($_REQUEST["page"])?$_REQUEST["page"]:1;
	$cid = isset($_REQUEST["cid"])?$_REQUEST["cid"]:0;
	$type = $_REQUEST["type"];
	$url = isset($_REQUEST["url"])?$_REQUEST["url"]:$path_url;
	$idd = isset($_REQUEST["idd"])?$_REQUEST["idd"]:0;
	$num = isset($_REQUEST["num"])?$_REQUEST["num"]:1;
	$num_rows_page = isset($_REQUEST["num_rows_page"])?$_REQUEST["num_rows_page"]:1;
	$strPrice = isset($_REQUEST["strPrice"])?$_REQUEST["strPrice"]:'';

	$sqlip = "select * from $GLOBALS[db_sp].categories where id=89";
	$iphonePromotion = $GLOBALS["sp"]->getRow($sqlip);
	
	$sql100 = "select * from $GLOBALS[db_sp].categories where id=109";
	$iphonePromotion100 = $GLOBALS["sp"]->getRow($sql100);

	switch($type)
	{
		case 'searchTragop':
			$id = trim($_POST['id']);
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
					where pr.id=$id 
					and cldd.idbonho = 1
					and pr.id=cldd.idpr
					and cldd.price_vn > 0
					and cldd.idcity=$showCity
			";

			$item = $GLOBALS["sp"]->getRow($sql);
			$name = $item["name_".$lang];
			$price = $item["price_".$lang];
			$tinhtrang = tinhtranghang($item["typepr"]);
				
			if( ($item["price_".$lang]==0 ) || ($tinhtrang != '') ){
				$pricecheck = $tinhtrang;
				$pricecheck1 = $tinhtrang;
			}
			else{
				$pricecheck = '<span id="showPrice">'.number_format($item["price_".$lang],0,",",".").'</span> vnđ';
				$pricecheck1 = number_format($item["price_".$lang],0,",",".").' VNĐ ';
			}	
			$buynow = '
				<img width="140px" src="'.$path_url .'/'. $item['img_thumb_vn'] .'" class="img-responsive " />
				 <div class="price" style="text-align:center">
					'.$pricecheck.'  									   	
				 </div>
			';
			
			$view = '
				<div class="product-img">
					<img width="100px" src="'.$path_url .'/'. $item['img_thumb_vn'] .'" />
				</div>
				<div id="product-description">
					<h2 class="name">
						<a title="'.$item["name_".$lang].'">'.$item["name_".$lang].'</a>
					</h2>
					<div class="price">
						<span>'.$pricecheck1.'</span>
					</div>
				</div>
			';
			
			die(json_encode(array('buynow'=>$buynow,'view'=>$view,'name'=>$name,'price'=>$price)));
		break;
		case 'newsHome':
			$view = $str = $str1 = $str2 = '';
			$sql = "select * from $GLOBALS[db_sp].articles where active=1 and cid=$cid and img_thumb_vn<>'' order by num asc, id desc limit 3";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			if(ceil(count($rs))>0){
				foreach($rs as $item){
					$link = GetLinkDetail($item, $lang);
					$str.='
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
							<div class="media-box">
								<a class="pull-left" href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">
									<img width="102" height="102" src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">
										<a class="pull-left" href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">'.$item["name_".$lang].' </a> 
										<br /> <span class="dated">('.date("d-m-Y", strtotime($item['dated'])).')</span> 
									</h4>
									<div style="height:55px;">'.$item["short_".$lang].'</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					';
				}
				$str='<div class="row item active">'.$str.'</div>';
				
				$sql1 = "select * from $GLOBALS[db_sp].articles where active=1 and cid=$cid and img_thumb_vn<>'' order by num asc, id desc limit 3,3";
				$rs1 = $GLOBALS["sp"]->getAll($sql1);
				if(ceil(count($rs1))>0){
					foreach($rs1 as $item1){
						$link1 = GetLinkDetail($item1, $lang);
						$str1.='
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
								<div class="media-box">
									<a class="pull-left" href="'.$path_url.'/'.$link1.'" title="'.$item1["title_".$lang].'">
										<img width="102" height="102" src= "'.$path_url .'/'. $item1["img_thumb_vn"] .'" alt="'.$item1["name_".$lang].'" />
									</a>
									<div class="media-body">
										<h4 class="media-heading">
											<a class="pull-left" href="'.$path_url.'/'.$link1.'" title="'.$item1["title_".$lang].'">'.$item1["name_".$lang].'</a>
											<br /> <span class="dated">('.date("d-m-Y", strtotime($item1['dated'])).')</span> 
										</h4>
										<div style="height:55px;">'.$item1["short_".$lang].'</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						';
					}
					$str1='<div class="row item">'.$str1.'</div>';
					
					$sql2 = "select * from $GLOBALS[db_sp].articles where active=1 and cid=$cid and img_thumb_vn<>'' order by num asc, id desc limit 6,3";
					$rs2 = $GLOBALS["sp"]->getAll($sql2);
					if(ceil(count($rs2))>0){
						foreach($rs2 as $item2){
							$link2 = GetLinkDetail($item2, $lang);
							$str2.='
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
									<div class="media-box">
										<a class="pull-left" href="'.$path_url.'/'.$link2.'" title="'.$item2["title_".$lang].'">
											<img width="102" height="102" src= "'.$path_url .'/'. $item2["img_thumb_vn"] .'" alt="'.$item2["name_".$lang].'" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">
												<a class="pull-left" href="'.$path_url.'/'.$link2.'" title="'.$item2["title_".$lang].'">'.$item2["name_".$lang].'</a>
												<br /> <span class="dated">('.date("d-m-Y", strtotime($item2['dated'])).')</span> 
											</h4>
											<div style="height:55px;">'.$item2["short_".$lang].'</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							';
						}
						$str2='<div class="row item">'.$str2.'</div>';
					}
				}
			}
			$str = $str.$str1.$str2;
			if($str){
				$view = '
					<div class="carousel-inner">            			                		                																										
						'.$str.'
					</div>
				
					<a data-slide="prev" href="#myCarouselnews0" class=" carousel-control left ">
						<i class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></i>
					</a>
					<a data-slide="next" href="#myCarouselnews0" class=" carousel-control right">
						<i class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></i>
					</a>
				';
			}
			else{
				$view = '';
			}
			die(json_encode(array('view'=>$view)));
		break;
		
		case 'homePr':
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
					where pr.active=1 
					and pr.type=3 
					and pr.id=cldd.idpr
					and cldd.idbonho = 1
					and cldd.price_vn > 0
					and cldd.idcity=$showCity
					order by pr.orderhot asc, pr.id desc
			";
			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,$type,$path_url,$url,$idd,$num_rows_page);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
				foreach($rs as $item){
					if( $item["typeiphone"] > 1){
						$promotion = getChedobaohanh($item["typeiphone"]);
					}
					else{
						if($showCity == 1)
							$promotion = $item["promotion_vn"];
						else
							$promotion = $item["promotion_en"];
					}
																
					$tinhtrang = tinhtranghang($item["typepr"]);
			
					$TemChinhHang = $chinhhang = '';	
					if( $item["temchinhhang"] == 1)
						$TemChinhHang = '<div class="TemChinhHang"></div>';
						
					if( ($item["price_".$lang]==0) || ($tinhtrang != '') ){
						$pricecheck = $tinhtrang;
						$classOpacity = 'opacity';
						$divhethang = '<div class="hethang"></div>';
					}
					else{
						$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
						$classOpacity = $divhethang = '';
					}	
					if( $item["chinhhang"] == 1){
						$chinhhang = '
							<div class="noelmu"></div>
							<div class="noelhoa"></div>
						';	
					}			
					if(!empty($item["img_thumb_en"])){
						$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."' />";
						$view.='
							<li class="product promotion">
								<div class="frame_inner">
									<div class="frame_img_cat ">
										'.$TemChinhHang.'
										'.$chinhhang.'
										'.$divhethang.'
										<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
											'.$imgview.'
									   </a>
									</div>
									<div class="frame_title">
										<h3 class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</h3>
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
										<div class="discount">&nbsp;</div>
									</div>
								</div>
								<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
									<div class="frame_title">
										<div class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</div>
									</div>
									<div class="frame_color">
										'.$getColorPr.'
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
									</div>
									<div class="divider"></div>
									<div class="frame_discount"></div>
									<div class="frame_accessories">
										'.$promotion.'
									</div>
								</div>
							</li>
						';
						
						$view.='
							<li class="product promotionsmall">
								<div class="frame_inner">
									<div class="frame_img_cat ">
										'.$TemChinhHang.'
										'.$TemChinhHang.'
										'.$divhethang.'
										<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
											<img class="img-responsive" src="'.$path_url ."/". $item['img_thumb_vn'] .'" alt="'.$item["alt_img"].'" title="'.$item['title_img'].'"/>
									   </a>
									</div>
									<div class="frame_title">
										<h3 class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</h3>
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
										<div class="discount">&nbsp;</div>
									</div>
								</div>
								<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
									<div class="frame_title">
										<div class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</div>
									</div>
									<div class="frame_color">
										'.$getColorPr.'
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
									</div>
									<div class="divider"></div>
									<div class="frame_discount"></div>
									<div class="frame_accessories">
										'.$promotion.'
									</div>
								</div>
							</li>
						';
					}
					else{
						$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
						$view.='
							<li class="product">
								<div class="frame_inner">
									<div class="frame_img_cat ">
										'.$TemChinhHang.'
										'.$TemChinhHang.'
										'.$divhethang.'
										<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
											'.$imgview.'
									   </a>
									</div>
									<div class="frame_title">
										<h3 class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</h3>
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
										<div class="discount">&nbsp;</div>
									</div>
								</div>
								<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
									<div class="frame_title">
										<div class="name" >
											<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
										</div>
									</div>
									<div class="frame_color">
										'.$getColorPr.'
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
									</div>
									<div class="divider"></div>
									<div class="frame_discount"></div>
									<div class="frame_accessories">
										'.$promotion.'
									</div>
								</div>
							</li>
						';
					}
					
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;
		
		case 'articles':
			$sql = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cid." order by num asc, id desc ";
			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,$type,$path_url,$url,$idd,$num_rows_page);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
				foreach($rs as $item){
				
					$link = GetLinkDetail($item, $lang);
						
						$view.='
							<div class="item">
								<div class="frame_img pull-left mgright">
									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">
										<img width="150" height="150" src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'" class="img-responsive" />
									 </a>
								</div>
								<div class="NewsLeft">
									<h3 class="item_title_new">
										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'"><strong>'.$item["name_".$lang].'</strong></a>
									</h3>
									<div class="news_datetime">
										Cập nhật: '.date("d-m-Y", strtotime($item['dated'])).'
									</div>
									
									<div class="new_short">
										'.$item["short_".$lang].'					
									</div>
								</div>
							</div>
						';
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;
		
		case 'products':
			$wh = '';
			if(!empty($strPrice)){
				if($strPrice=='cu'){
					$wh = " and pr.name_".$lang." LIKE '%hàng trưng bày%' ";
				}
				else if($strPrice=='moi'){
					$wh = " and ( pr.name_".$lang." LIKE '%chưa active%' or pr.name_".$lang." LIKE '%100%' ) ";
				}
				else if($strPrice=='quocte'){
					$wh = " and pr.name_".$lang." LIKE '%quốc tế%' ";
				}
				else if($strPrice=='lock'){
					$wh = " and pr.name_".$lang." LIKE '%lock%' ";
				}
			}
			
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
					where (pr.active=1 
					and pr.cid=".$cid."
					and pr.id=cldd.idpr
					and cldd.idbonho = 1
					and cldd.price_vn > 0
		 			and cldd.idcity=$showCity $wh) 
					or (pr.cid_sharepr like '%,".$cid.",%' and pr.id=cldd.idpr and cldd.price_vn > 0 and cldd.idcity=$showCity )
					group by pr.id
					order by pr.num asc, pr.id desc
			";
			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,$type,$path_url,$url,$idd,$num_rows_page,$strPrice);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
			foreach($rs as $item){
				if( $item["typeiphone"] > 1){
					$promotion = getChedobaohanh($item["typeiphone"]);
				}
				else{
					if($showCity == 1)
						$promotion = $item["promotion_vn"];
					else
						$promotion = $item["promotion_en"];
				}
					
				$tinhtrang = tinhtranghang($item["typepr"]);
				
				$TemChinhHang = $chinhhang = '';	
				if( $item["temchinhhang"] == 1)
					$TemChinhHang = '<div class="TemChinhHang"></div>';	
					
				
				if( ($item["price_".$lang]==0) || ($tinhtrang != '') ){
					$pricecheck = $tinhtrang;
					$classOpacity = 'opacity';
					$divhethang = '<div class="hethang"></div>';
				}
				else{
					$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
					$classOpacity = $divhethang = '';
				}	
				if( $item["chinhhang"] == 1){
					$chinhhang = '
						<div class="noelmu"></div>
						<div class="noelhoa"></div>
					';	
				}	
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
				$view.='
					<li class="product '.$class.'">
						<div class="frame_inner">
							<div class="frame_img_cat ">
								'.$TemChinhHang.'
								'.$chinhhang.'
								'.$divhethang.'
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
									'.$imgview.'
							   </a>
							</div>
							<div class="frame_title">
								<h3 class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</h3>
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.' </span>
								</div>
								<div class="discount">&nbsp;</div>
							</div>
						</div>
						<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
							<div class="frame_title">
								<div class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</div>
							</div>
							<div class="frame_color">
								'.$getColorPr.'
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
							</div>
							<div class="divider"></div>
							<div class="frame_discount"></div>
							<div class="frame_accessories">
								'.$promotion.'
							</div>
						</div>
					</li>
				';
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;
		
		case 'searchProduct':
			$wh = $whorder = '';
			if(!empty($strPrice)){
				if($strPrice=='asc')
					$whorder = ' order by cldd.price_vn asc ';
				else if($strPrice=='desc')
					$whorder = ' order by cldd.price_vn desc ';
				else if($strPrice=='cu'){
					$wh = " and pr.name_".$lang." LIKE '%hàng trưng bày%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='moi'){
					$wh = " and ( pr.name_".$lang." LIKE '%chưa active%' or pr.name_".$lang." LIKE '%100%' ) ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='quocte'){
					$wh = " and pr.name_".$lang." LIKE '%quốc tế%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='lock'){
					$wh = " and pr.name_".$lang." LIKE '%lock%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else{
					$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$strPrice."' ";	
					$rspr = $GLOBALS["sp"]->getRow($sqlpr);
					$price = explode(',',trim($rspr['title_vn']));
					
					if(!empty($price[1])){
						$wh = " and cldd.price_vn>=$price[0] and cldd.price_vn<=$price[1] ";	
						$whorder = " order by pr.num asc, pr.id desc ";
					}
					else{
						if($price[0]==3000000){
							$wh = " and cldd.price_vn<=$price[0] ";	
							$whorder = " order by pr.num asc, pr.id desc ";
						}
						else{
							$wh = " and cldd.price_vn>=$price[0] ";
							$whorder = " order by pr.num asc, pr.id desc ";
						}
					}
				}
			}
			else{
				$whorder = " order by pr.num asc, pr.id desc ";
			}
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
					where (pr.active=1 
					and pr.cid=".$cid."
					and cldd.idbonho = 1
					and cldd.price_vn > 0
					and pr.id=cldd.idpr
		 			and cldd.idcity=$showCity 
					$wh )
					or (pr.cid_sharepr like '%,".$cid.",%' and pr.id=cldd.idpr and cldd.price_vn > 0 and cldd.idcity=$showCity $wh )
					group by pr.id
					$whorder
			";

			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,'searchProduct',$path_url,$url,$idd,$num_rows_page,$strPrice);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
			foreach($rs as $item){
				if( $item["typeiphone"] > 1){
					$promotion = getChedobaohanh($item["typeiphone"]);
				}
				else{
					if($showCity == 1)
						$promotion = $item["promotion_vn"];
					else
						$promotion = $item["promotion_en"];
				}
				
				$tinhtrang = tinhtranghang($item["typepr"]);
				
				$TemChinhHang = $chinhhang = '';	
				if( $item["temchinhhang"] == 1)
					$TemChinhHang = '<div class="TemChinhHang"></div>';
					
				if( ($item["price_".$lang]==0) || ($tinhtrang != '') ){
					$pricecheck = $tinhtrang;
					$classOpacity = 'opacity';
					$divhethang = '<div class="hethang"></div>';
				}
				else{
					$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
					$classOpacity = $divhethang = '';
				}	
				if( $item["chinhhang"] == 1){
					$chinhhang = '
						<div class="noelmu"></div>
						<div class="noelhoa"></div>
					';	
				}	
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
				$view.='
					<li class="product '.$class.'">
						<div class="frame_inner">
							<div class="frame_img_cat ">
								'.$TemChinhHang.'
								'.$chinhhang.'
								'.$divhethang.'
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
									'.$imgview.'
							   </a>
							</div>
							<div class="frame_title">
								<h3 class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</h3>
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
								<div class="discount">&nbsp;</div>
							</div>
						</div>
						<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
							<div class="frame_title">
								<div class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</div>
							</div>
							<div class="frame_color">
								'.$getColorPr.'
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
							</div>
							<div class="divider"></div>
							<div class="frame_discount"></div>
							<div class="frame_accessories">
								'.$promotion.'
							</div>
						</div>
					</li>
				';
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;
		
		case 'searchSubmenu':
			//die('ccc'.$cid);
			$wh = $whorder = '';
			if(!empty($strPrice)){
				if($strPrice=='asc')
					$whorder = ' order by cldd.price_vn asc ';
				else if($strPrice=='desc')
					$whorder = ' order by cldd.price_vn desc ';
				else if($strPrice=='cu'){
					$wh = " and pr.name_".$lang." LIKE '%hàng trưng bày%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='moi'){
					$wh = " and ( pr.name_".$lang." LIKE '%chưa active%' or pr.name_".$lang." LIKE '%100%' ) ";
					$whorder = " order by pr.num asc, pr.id desc ";
		        }
				else if($strPrice=='quocte'){
					$wh = " and pr.name_".$lang." LIKE '%quốc tế%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='lock'){
					$wh = " and pr.name_".$lang." LIKE '%lock%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else{
					$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$strPrice."' ";	
					$rspr = $GLOBALS["sp"]->getRow($sqlpr);
					$price = explode(',',trim($rspr['title_vn']));
					
					if(!empty($price[1])){
						$wh = " and cldd.price_vn>=$price[0] and cldd.price_vn<=$price[1] ";
						$whorder = " order by pr.num asc, pr.id desc ";
					}
					else{
						if($price[0]==3000000){
							$wh = " and cldd.price_vn<=$price[0] ";	
							$whorder = " order by pr.num asc, pr.id desc ";
						}
						else{
							$wh = " and cldd.price_vn>=$price[0] ";
							$whorder = " order by pr.num asc, pr.id desc ";
						}
					}
				}
			}
			else{
				$whorder = " order by pr.num asc, pr.id desc ";
			}
			
			$loadCat = loadCat($cid);
			if($cid==3){
				$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.active=1 
						and pr.id=cldd.idpr
						and cldd.idbonho = 1
						and cldd.idcity=$showCity
						and cldd.price_vn > 0
						and ( pr.cid in (select id from $GLOBALS[db_sp].categories where type = ".$cid." and active=1) 
						or pr.cid in (select id from $GLOBALS[db_sp].categories where type = 4 and active=1) ) 
						$wh
						$whorder 
				";
			}
			else if($cid==5){
				$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.active=1 
						and pr.id=cldd.idpr
						and cldd.idbonho = 1
						and cldd.idcity=$showCity
						and cldd.price_vn > 0
						and ( pr.cid in (select id from $GLOBALS[db_sp].categories where type = ".$cid." and active=1) 
						or pr.cid in (select id from $GLOBALS[db_sp].categories where type = 43 and active=1) ) 
						$wh
						$whorder
				";
			}
			
			else if($loadCat['has_menu']==2){// submenu sản phẩm
				$catsub = '';
				$sqlinput = "select * from $GLOBALS[db_sp].categories where pid = ".$cid." and active=1";
				$catinput = $GLOBALS["sp"]->getAll($sqlinput);
				$total = ceil(count($catinput));
			
				if($total > 0){
					foreach($catinput as $valuecat){
						if($valuecat['has_child']==1){
							$sqlcat = "SELECT id FROM $GLOBALS[db_sp].categories where pid=".$valuecat['id']." and active=1 order by num asc, id desc";
							$rscat = $GLOBALS["sp"]->GetCol($sqlcat);
							$catsub .= implode(',',$rscat);	
						}
						else{
							$catsub .=	',' . $valuecat['id'];
						}
					}
				}
				if(empty($catsub))
					$catsub = 0;
				$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.active=1 
						and pr.id=cldd.idpr
						and cldd.idbonho = 1
						and cldd.price_vn > 0
						and cldd.idcity=$showCity
						and pr.cid in (".$catsub.")
						$wh
						$whorder 
				";
			}
			//die($sql);
			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,'searchSubmenu',$path_url,$url,$idd,$num_rows_page,$strPrice);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
			foreach($rs as $item){
				if( $item["typeiphone"] > 1){
					$promotion = getChedobaohanh($item["typeiphone"]);
				}
				else{
					if($showCity == 1)
						$promotion = $item["promotion_vn"];
					else
						$promotion = $item["promotion_en"];
				}
					
				$tinhtrang = tinhtranghang($item["typepr"]);
				$TemChinhHang = $chinhhang = '';	
				if( $item["temchinhhang"] == 1)
			 		$TemChinhHang = '<div class="TemChinhHang"></div>';
	 			
				if( ($item["price_".$lang]==0) || ($tinhtrang != '') ){
					$pricecheck = $tinhtrang;
					$classOpacity = 'opacity';
					$divhethang = '<div class="hethang"></div>';
				}
				else{
					$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
					$classOpacity = $divhethang = '';
				}	
				if( $item["chinhhang"] == 1){
					$chinhhang = '
						<div class="noelmu"></div>
						<div class="noelhoa"></div>
					';	
				}	
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
				$view.='
					<li class="product '.$class.'">
						<div class="frame_inner">
							<div class="frame_img_cat ">
								'.$TemChinhHang.'
								'.$chinhhang.'
								'.$divhethang.'
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
									'.$imgview.'
							   </a>
							</div>
							<div class="frame_title">
								<h3 class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</h3>
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
								<div class="discount">&nbsp;</div>
							</div>
						</div>
						<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
							<div class="frame_title">
								<div class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</div>
							</div>
							<div class="frame_color">
								'.$getColorPr.'
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
							</div>
							<div class="divider"></div>
							<div class="frame_discount"></div>
							<div class="frame_accessories">
								'.$promotion.'
							</div>
						</div>
					</li>
				';
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;

		case 'searchSubmenuApple':
			global $showCity;
			$wh = $whorder = '';
			if(!empty($strPrice)){
				if($strPrice=='asc')
					$whorder = ' order by cldd.price_vn asc ';
				else if($strPrice=='desc')
					$whorder = ' order by cldd.price_vn desc ';
				else if($strPrice=='cu'){
					$wh = " and pr.name_".$lang." LIKE '%hàng trưng bày%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='moi'){
					$wh = " and ( pr.name_".$lang." LIKE '%chưa active%' or pr.name_".$lang." LIKE '%100%' ) ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='quocte'){
					$wh = " and pr.name_".$lang." LIKE '%quốc tế%' ";
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else if($strPrice=='lock'){
					$wh = " and pr.name_".$lang." LIKE '%lock%' ";	
					$whorder = " order by pr.num asc, pr.id desc ";
				}
				else{
					$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$strPrice."' ";	
					$rspr = $GLOBALS["sp"]->getRow($sqlpr);
					$price = explode(',',trim($rspr['title_vn']));
					
					if(!empty($price[1])){
						$wh = " and cldd.price_vn>=$price[0] and cldd.price_vn<=$price[1] ";	
						$whorder = " order by pr.num asc, pr.id desc ";
					}
					else{
						if($price[0]==3000000){
							$wh = " and cldd.price_vn<=$price[0] ";
							$whorder = " order by pr.num asc, pr.id desc ";
						}
						else{
							$wh = " and cldd.price_vn>=$price[0] ";
							$whorder = " order by pr.num asc, pr.id desc ";
						}
					}
				}
			}
			else{
				$whorder = " order by pr.num asc, pr.id desc ";
			}
			
			$sql = "select * from $GLOBALS[db_sp].categories 
				where active=1 
				and pid = ".$cid."
				order by num asc, id desc 
			";
			$rs = $GLOBALS["sp"]->getAll($sql);
			
			
			foreach($rs as $item){
				///get san pham
				$cid = $item['id'];
				$html = "";
				$sql1 = "SELECT * FROM $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.cid=$cid 
						and pr.active=1 
						and cldd.idbonho = 1
						and cldd.price_vn > 0
						and pr.id=cldd.idpr
						and cldd.idcity=$showCity
						$wh 
						$whorder
				";
				$rs1 = $GLOBALS["sp"]->getAll($sql1);
				$total = ceil(count($GLOBALS["sp"]->getAll($sql)));
				if($total > 0 ){
					foreach($rs1 as $item1){
						if( $item1["typeiphone"] > 1){
							$promotion = getChedobaohanh($item1["typeiphone"]);
						}
						else{
							if($showCity == 1)
								$promotion = $item1["promotion_vn"];
							else
								$promotion = $item1["promotion_en"];
						}
							
						$tinhtrang = tinhtranghang($item1["typepr"]);
							
						$TemChinhHang = $chinhhang ='';	
						if( $item["temchinhhang"] == 1)
							$TemChinhHang = '<div class="TemChinhHang"></div>';	
						
						if( ($item1["price_".$lang]==0) || ($tinhtrang != '') ){
							$pricecheck = $tinhtrang;
							$classOpacity = 'opacity';
							$divhethang = '<div class="hethang"></div>';
						}
						else{
							$pricecheck = number_format($item1["price_".$lang],0,",",".").' VNĐ ';
							$classOpacity = $divhethang = '';
						}
						if( $item1["chinhhang"] == 1){
							$chinhhang = '
								<div class="noelmu"></div>
								<div class="noelhoa"></div>
							';	
						}	
						$class = '';
						$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item1['img_thumb_vn'] ."' alt='".$item1["alt_img"]."' title='".$item1['title_img']."'/>";
						
						$html.='
							<li class="product">
								<div class="frame_inner">
									<div class="frame_img_cat ">
										'.$TemChinhHang.'
										'.$chinhhang.'
										'.$divhethang.'
										<a href="'.$path_url.'/'.$item1["unique_key"].'.html" title="'.$item1["title_link"].'">
											'.$imgview.'
									   </a>
									</div>
									<div class="frame_title">
										<h3 class="name" >
											<a href="'.$path_url.'/'.$item1["unique_key"].'.html" title="'.$item1["title_link"].'">'.$item1["name_".$lang].'</a> 
										</h3>
									</div>
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
										<div class="discount">&nbsp;</div>
									</div>
								</div>
								<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item1["unique_key"].'.html\'">
									<div class="frame_title">
										<div class="name" >
											<a href="'.$path_url.'/'.$item1["unique_key"].'.html" title="'.$item1["title_link"].'">'.$item1["name_".$lang].'</a> 
										</div>
									</div>
									
									<div class="frame_price">
										<div class="price">
											<span>'.$pricecheck.'</span>
										</div>
									</div>
									<div class="divider"></div>
									<div class="frame_discount"></div>
									<div class="frame_accessories">
										'.$promotion.'
									</div>
								</div>
							</li>
						';
					}
				}

				$link = GetLinkCat($item, $lang);
				$view.='
					<div class="group-title">
						<a class="menu-name hot_item" href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a>
					</div>
					<ul class="products_list clearfix">
						'.$html.'
					</ul>	
				';
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;
		
		case 'search':
			$sql = "select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
					where (pr.name_".$lang." like '%".$_SESSION['keyshopping']."%' or pr.code like '%".$_SESSION['keyshopping']."%' or pr.codesp like '%".$_SESSION['keyshopping']."%') 
					and pr.active=1 
					and pr.id=cldd.idpr
					and cldd.idbonho = 1
					and cldd.price_vn > 0
					and cldd.idcity=$showCity 
					order by pr.num asc, pr.id desc 
			";
			$total = count($GLOBALS["sp"]->getAll($sql));
			
			$num_rows_page = $num_rows_page;
			$num_page = ceil($total/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;
			$urll = "ShowPaging"; //set url for paginator
			
			$iSEGSIZE=4;
			$linkpg = "";
		
			if($num_page > 1 )
				$linkpg = paginator($urll,$page,$num_page,$iSEGSIZE,$cid,$type,$path_url,$url,$idd,$num_rows_page);
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			//die($sql);
			///xuat du lieu tin tuc
			
			if($total > 0 ){
			foreach($rs as $item){
				if( $item["typeiphone"] > 1){
					$promotion = getChedobaohanh($item["typeiphone"]);
				}
				else{
					if($showCity == 1)
						$promotion = $item["promotion_vn"];
					else
						$promotion = $item["promotion_en"];
				}
					
				$tinhtrang = tinhtranghang($item["typepr"]);
				
				$TemChinhHang = $chinhhang = '';	
				if( $item["temchinhhang"] == 1)
					 $TemChinhHang = '<div class="TemChinhHang"></div>';
	 			
				if( ($item["price_".$lang]==0) || ($tinhtrang != '') ){
					$pricecheck = $tinhtrang;
					$classOpacity = 'opacity';
					$divhethang = '<div class="hethang"></div>';
				}
				else{
					$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
					$classOpacity = $divhethang = '';
				}
				if( $item1["chinhhang"] == 1){
					$chinhhang = '
						<div class="noelmu"></div>
						<div class="noelhoa"></div>
					';	
				}	
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
				$view.='
					<li class="product '.$class.'">
						<div class="frame_inner">
							<div class="frame_img_cat ">
								'.$TemChinhHang.'
								'.$chinhhang.'
								'.$divhethang.'
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
									'.$imgview.'
							   </a>
							</div>
							<div class="frame_title">
								<h3 class="name" ><a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a></h3>
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
								<div class="discount">&nbsp;</div>
							</div>
						</div>
						<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
							<div class="frame_title">
								<div class="name" >
									<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
								</div>
							</div>
							<div class="frame_color">
								'.$getColorPr.'
							</div>
							<div class="frame_price">
								<div class="price">
									<span>'.$pricecheck.'</span>
								</div>
							</div>
							<div class="divider"></div>
							<div class="frame_discount"></div>
							<div class="frame_accessories">
								'.$promotion.'
							</div>
						</div>
					</li>
				';
				}
			
			}
			
			die(json_encode(array('view'=>$view,'Pagelink'=>$linkpg)));
			
			
		break;	
		
		case 'priceBonho':
			$nameBonho = '';
			$idbonho = ceil($_POST["idbonho"]);
			if($idbonho == 0)
				$idbonho=1;
			$idpr = ceil($_POST["idpr"]);
			$priceBonho = $price = $priceAll = 0;
			$sql = "select * from $GLOBALS[db_sp].colorsize where idpr=$idpr and idbonho=$idbonho and idcity = ".$_SESSION['showCity'];
			$rs = $GLOBALS["sp"]->getRow($sql);
			if($rs['typepr'] == 2)
				$priceBonho = 0;
			else
				$priceBonho = ceil($rs["price_vn"]);	
			$priceAll = number_format($priceBonho,0,",",".");
			if($idbonho > 1)
				$nameBonho = '- '.getNameAll($idbonho,'bonho','name_vn');
				
			///////load màu và giá bộ nhớ	
			$sqlclpr = "select * from $GLOBALS[db_sp].colorpr where id in (select idcolor from $GLOBALS[db_sp].colorprice where idcolorsize=".$rs['id'].") order by num asc ";
			$rsclpr = $GLOBALS["sp"]->getAll($sqlclpr);
			$color = '';
			if(ceil(count($rsclpr)) > 0){
				foreach($rsclpr as $item){			
					$color .='
						<a href="javascript:void(0)" onclick="priceColor('.$rs['id'].','.$item['id'].')" style="background-color:'.$item['color'].';" title="'.$item['name'].'"></a>	
					';
				}
				$color = '
					<div class="all-bonho list_color">
                    	<strong class="chonbonho Fl">Chọn Màu:</strong>
						'.$color.'
						 <span class="tootip_price"><img src="'.$path_url .'/images/chon-mau-xem-gia.png"></span>
					</div>
				';
			}
			
			die(json_encode(array('priceBonho'=>$priceBonho,'priceAll'=>$priceAll,'nameBonho'=>$nameBonho,'color'=>$color)));
	 	break;
		case 'priceColor':
			$idcolorsize = ceil($_POST["idcolorsize"]);
			$idcolor = ceil($_POST["idcolor"]);
			$sql = "select * from $GLOBALS[db_sp].colorprice where idcolorsize=$idcolorsize and idcolor=$idcolor ";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$priceBonho = ceil($rs["price_vn"]);
			$priceAll = number_format($priceBonho,0,",",".");
			$nameColor= "-" . getNameAll($idcolor,'colorpr','name');
			die(json_encode(array('priceBonho'=>$priceBonho,'priceAll'=>$priceAll,'nameColor'=>$nameColor)));
		break;
}

 ?>