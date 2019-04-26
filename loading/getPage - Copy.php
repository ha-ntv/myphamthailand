<?php 

	include_once("../include/config.php");

	include_once("../functions/function.php");

	

	$page = $_REQUEST["pageNo"];

	$cid = isset($_REQUEST["cid"])?$_REQUEST["cid"]:0;

	$type = $_REQUEST["type"];

	$idd = isset($_REQUEST["idd"])?$_REQUEST["idd"]:0;

	$num = isset($_REQUEST["numpage"])?$_REQUEST["numpage"]:1;

	$numpage = isset($_REQUEST["numpage"])?$_REQUEST["numpage"]:1;

	$num_rows_page = isset($_REQUEST["num_rows_page"])?$_REQUEST["num_rows_page"]:1;

	

	$Next = "<div class='pagination'><a class='load_more' href=\"#\" onclick=\"dynPageObj.setUrl('".$path_url."/loading/getPage.php?pageNo=".($_GET['pageNo']+1)."&type=".$type."&numpage=".$numpage."&num_rows_page=".$num_rows_page."&cid=".$cid."&idd=".$idd."');dynPageObj.loadPage();this.style.display='none';return false\">Xem thêm  sản phẩm</a></div>";	

	$Previous = "<div class='pagination'><a class='load_more' href=\"#\" onclick=\"dynPageObj.setUrl('".$path_url."/loading/getPage.php?pageNo=".($_GET['pageNo']+1)."&type=".$type."&numpage=".$numpage."&num_rows_page=".$num_rows_page."&cid=".$cid."&idd=".$idd."');dynPageObj.loadPage();this.style.display='none';return false\">Xem thêm  sản phẩm</a></div>";

	

	

	switch($type)

	{

		

		case 'articles':

			if($page > 0){

				$sql = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cid." order by num asc, id desc ";

				$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

				$sql = $sql." limit $set_limit";

				$rs = $GLOBALS["sp"]->getAll($sql);

				$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

				///xuat du lieu tin tuc

				$str = "";

				if($total > 0 ){

					foreach($rs as $item){

						$link = GetLinkDetail($item, $lang);

						

						$html.='

							<div class="item">

								<div class="frame_img pull-left mgright">

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

										<img src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'" class="img-responsive" />

									 </a>

								</div>

								<div class="NewsLeft">

									<h3 class="item_title_new">

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

											<strong>'.$item["name_".$lang].'</strong>

										</a>

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

					if($page==($numpage-1))

						$html=$html;

					else	

						$html.=$Next;

				}

				else{

				

					$html="";

				}

				

				echo $html;

			}

			else

			{

				echo $Next;

			}

			

		break;

				

		case 'products':

			if($page > 0){

				$sql = "select * from $GLOBALS[db_sp].products where active=1 and cid=".$cid." order by num asc, id desc";

				$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

				$sql = $sql." limit $set_limit";

				$rs = $GLOBALS["sp"]->getAll($sql);

				$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

				///xuat du lieu tin tuc

				$str = "";

				if($total > 0 ){

					foreach($rs as $item){

						$link = GetLinkDetail($item, $lang);

						$getColorPr = getColorPr($item['id']);

						if(!empty($item["img_thumb_en"])){

							$class = 'promotion';

							$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."' />";

						}

						else{

							$class = '';

							$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";

						}

						$html.='

							<li class="product '.$class.'">

								<div class="frame_inner">

									<div class="frame_img_cat ">

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

											'.$imgview.'

									   </a>

									</div>

									<div class="frame_title">

										<h3 class="name" >

											<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

											   '.$item["name_".$lang].'

											</a> 

										</h3>

									</div>

									<div class="frame_price">

										<div class="price">

											<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

										</div>

										<div class="discount">&nbsp;</div>

									</div>

								</div>

								<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$link.'\'">

									<div class="frame_title">

										<div class="name" >

											<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

											   '.$item["name_".$lang].'

											</a> 

										</div>

									</div>

									<div class="frame_color">

										'.$getColorPr.'

									</div>

									<div class="frame_price">

										<div class="price">

											<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

										</div>

									</div>

									<div class="divider"></div>

									<div class="frame_discount"></div>

									<div class="frame_accessories">

										'.$item["promotion_".$lang].'

									</div>

								</div>

							</li>

						';

					}

					if($page==($numpage-1))

						$html=$html;

					else	

						$html.=$Next;

				}

				else{

				

					$html="";

				}

				

				echo $html;

			}

			else

			{

				echo $Next;

			}

			

		break;

		

		case 'products-dt':

			if($page > 0){

				$sql = "select * from $GLOBALS[db_sp].products where cid not in (select id from $GLOBALS[db_sp].categories where pid=".$cid.") and active=1 order by id desc ";

				$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

				$sql = $sql." limit $set_limit";

				$rs = $GLOBALS["sp"]->getAll($sql);

				$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

				///xuat du lieu tin tuc

				$str = "";

				if($total > 0 ){

					foreach($rs as $item){

						$link = GetLinkDetail($item, $lang);

						$soluong = getSoLuong($item['id']);

						$soluongban = getSoLuongBan($item['id']);

						$loaimenhgia = getLoaiMenhGia($item['id']);

						if($lang == "vn"){

							$tang_them = 'Tặng thêm';

							$so_luong = 'số lượng';

							$con_lai = 'còn lai';

							$phieu = 'Phiếu';

							$tongloaiphieu = 'Có '.$loaimenhgia.' loại mệnh giá phiếu quà tặng';

							

						}

						else{

							$tang_them = 'Give more';

							$so_luong = 'amount';

							$con_lai = 'remaining';

							$phieu = 'Vote';

							$tongloaiphieu = 'There are '.$loaimenhgia.' types of the voucher';

						}

						$html.='

							<div class="product">

								<h3 class="top_product">

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

										<strong>'.$item["name_".$lang].'</strong>

									</a>

								</h3>

								<div class="main_product">

									<div class="top_product1">

									   '.$item["short_".$lang].'

									</div>

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

										<img src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'"/>

									</a>

									

								</div>

								<div class="bottom_product">

									<strong>'.$tang_them.'</strong> <strong class="price">'.$item["promotion"].'%</strong> 

									 <div class="bottom_product_num">

										'.$so_luong.'<span class="bottom_product_num_price"> '.getSoLuong($item['id']).' </span> <span class="bottom_product_num_text">'.$con_lai.'<strong class="pricecon"> '.ceil(getSoLuong($item['id'])-getSoLuongBan($item['id'])).' </strong> '.$phieu.'</span>

									</div> 

								   <div class="bottom_product_address"> '.$item["address_".$lang].'</div>   

												   

								</div>

								

								<div class="bottom_product1">

									 '.$tongloaiphieu.'

								</div>

							</div>

						';

					}

					if($page==($numpage-1))

						$html=$html;

					else	

						$html.=$Next;

				}

				else{

				

					$html="";

				}

				

				echo $html;

			}

			else

			{

				echo $Next;

			}

			

		break;

		

		case 'search':

			if($page > 0){

				$wh = isset($_SESSION['searchwh'])?$_SESSION['searchwh']:'';

				$sql = "select * from $GLOBALS[db_sp].products where 1=1 $wh and active=1  order by num asc, id desc ";

				$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

				$sql = $sql." limit $set_limit";

				$rs = $GLOBALS["sp"]->getAll($sql);

				$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

				///xuat du lieu tin tuc

				$str = "";

				if($total > 0 ){

					foreach($rs as $item){

						$link = GetLinkDetail($item, $lang);

						$soluong = getSoLuong($item['id']);

						$soluongban = getSoLuongBan($item['id']);

						$loaimenhgia = getLoaiMenhGia($item['id']);

						if($lang == "vn"){

							$tang_them = 'Tặng thêm';

							$so_luong = 'số lượng';

							$con_lai = 'còn lai';

							$phieu = 'Phiếu';

							$tongloaiphieu = 'Có '.$loaimenhgia.' loại mệnh giá phiếu quà tặng';

							

						}

						else{

							$tang_them = 'Give more';

							$so_luong = 'amount';

							$con_lai = 'remaining';

							$phieu = 'Vote';

							$tongloaiphieu = 'There are '.$loaimenhgia.' types of the voucher';

						}

						$html.='

						

							<div class="product">

								<h3 class="top_product">

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

										<strong>'.$item["name_".$lang].'</strong>

									</a>

								</h3>

								<div class="main_product">

									<div class="top_product1">

									   '.$item["short_".$lang].'

									</div>

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">

										<img src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'"/>

									</a>

									

								</div>

								<div class="bottom_product">

									<strong>'.$tang_them.'</strong> <strong class="price">'.$item["promotion"].'%</strong> 

									 <div class="bottom_product_num">

										'.$so_luong.'<span class="bottom_product_num_price"> '.getSoLuong($item['id']).' </span> <span class="bottom_product_num_text">'.$con_lai.'<strong class="pricecon"> '.ceil(getSoLuong($item['id'])-getSoLuongBan($item['id'])).' </strong> '.$phieu.'</span>

									</div> 

								   <div class="bottom_product_address"> '.$item["address_".$lang].'</div>   

												   

								</div>

								

								<div class="bottom_product1">

									 '.$tongloaiphieu.'

								</div>

							</div>

						';

					}

					if($page==($numpage-1))

						$html=$html;

					else	

						$html.=$Next;

				}

				else{

				

					$html="";

				}

				

				echo $html;

			}

			else

			{

				echo $Next;

			}

			

		break;	

		

		case 'searchSubmenu':

			

			$strPrice = trim($_POST['prcie']);

			if($strPrice=='asc')

				$wh = ' order by price_vn asc ';

			else if($strPrice=='desc')

				$wh = ' order by price_vn desc ';

			else{

				$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$strPrice."' ";	

				$rspr = $GLOBALS["sp"]->getRow($sqlpr);

				$price = explode(',',trim($rspr['title_vn']));

				

				if(!empty($price[1])){

					$wh = " and price_vn>=$price[0] and price_vn<=$price[1] order by num asc, id desc ";	

				}

				else{

					if($price[0]==3000000){

						$wh = " and price_vn<=$price[0] order by num asc, id desc ";	

					}

					else{

						$wh = " and price_vn>=$price[0] order by num asc, id desc ";

					}

				}

			}

		

				

			if($cid==3){

				$sql = "select * from $GLOBALS[db_sp].products 

						where active=1 

						and cid in (select id from $GLOBALS[db_sp].categories where pid = ".$cid." and active=1) 

						or cid in (select id from $GLOBALS[db_sp].categories where pid = 4 and active=1) 

						$wh

				";

				$template = "submenu/view.tpl";

			}

			else if($cid==5){

				$sql = "select * from $GLOBALS[db_sp].products 

						where active=1 

						and cid in (select id from $GLOBALS[db_sp].categories where pid = ".$cid." and active=1) 

						$wh

				";

			}

			/*

			$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

			$sql = $sql." limit $set_limit";

			*/

			$rs = $GLOBALS["sp"]->getAll($sql);

			$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

			//die($sql);

			///xuat du lieu tin tuc

			$str = "";

			if($total > 0 ){

				foreach($rs as $item){

					$link = GetLinkDetail($item, $lang);

					$getColorPr = getColorPr($item['id']);

					if(!empty($item["img_thumb_en"])){

						$class = 'promotion';

						$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."' />";

					}

					else{

						$class = '';

						$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";

					}

					$html.='

						<li class="product '.$class.'">

							<div class="frame_inner">

								<div class="frame_img_cat ">

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										'.$imgview.'

								   </a>

								</div>

								<div class="frame_title">

									<h3 class="name" >

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										   '.$item["name_".$lang].'

										</a> 

									</h3>

								</div>

								<div class="frame_price">

									<div class="price">

										<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

									</div>

									<div class="discount">&nbsp;</div>

								</div>

							</div>

							<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$link.'\'">

								<div class="frame_title">

									<div class="name" >

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										   '.$item["name_".$lang].'

										</a> 

									</div>

								</div>

								<div class="frame_color">

									'.$getColorPr.'

								</div>

								<div class="frame_price">

									<div class="price">

										<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

									</div>

								</div>

								<div class="divider"></div>

								<div class="frame_discount"></div>

								<div class="frame_accessories">

									'.$item["promotion_".$lang].'

								</div>

							</div>

						</li>

					';

				}

				

			}

			

		break;

		

		

		case 'searchProduct':

			

			$strPrice = trim($_POST['prcie']);

			if($strPrice=='asc')

				$wh = ' order by price_vn asc ';

			else if($strPrice=='desc')

				$wh = ' order by price_vn desc ';

			else{

				$sqlpr = " select * from $GLOBALS[db_sp].categories where unique_key='".$strPrice."' ";	

				$rspr = $GLOBALS["sp"]->getRow($sqlpr);

				$price = explode(',',trim($rspr['title_vn']));

				

				if(!empty($price[1])){

					$wh = " and price_vn>=$price[0] and price_vn<=$price[1] order by num asc, id desc ";	

				}

				else{

					if($price[0]==3000000){

						$wh = " and price_vn<=$price[0] order by num asc, id desc ";	

					}

					else{

						$wh = " and price_vn>=$price[0] order by num asc, id desc ";

					}

				}

			}

		

				

			$sql = "select * from $GLOBALS[db_sp].products 

					where active=1 

					and cid = ".$cid." 

					$wh

			";

			/*

			$set_limit = (($page) * $num_rows_page) . ",".$num_rows_page;

			$sql = $sql." limit $set_limit";

			*/

			$rs = $GLOBALS["sp"]->getAll($sql);

			$total = ceil(count($GLOBALS["sp"]->getAll($sql)));

			//die($sql);

			///xuat du lieu tin tuc

			$str = "";

			if($total > 0 ){

				foreach($rs as $item){

					$link = GetLinkDetail($item, $lang);

					$getColorPr = getColorPr($item['id']);

					if(!empty($item["img_thumb_en"])){

						$class = 'promotion';

						$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."' />";

					}

					else{

						$class = '';

						$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";

					}

					$html.='

						<li class="product '.$class.'">

							<div class="frame_inner">

								<div class="frame_img_cat ">

									<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										'.$imgview.'

								   </a>

								</div>

								<div class="frame_title">

									<h3 class="name" >

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										   '.$item["name_".$lang].'

										</a> 

									</h3>

								</div>

								<div class="frame_price">

									<div class="price">

										<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

									</div>

									<div class="discount">&nbsp;</div>

								</div>

							</div>

							<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$link.'\'">

								<div class="frame_title">

									<div class="name" >

										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_link"].'">

										   '.$item["name_".$lang].'

										</a> 

									</div>

								</div>

								<div class="frame_color">

									'.$getColorPr.'

								</div>

								<div class="frame_price">

									<div class="price">

										<span>'.number_format($item["price_".$lang],0,",",".").' VNĐ</span>

									</div>

								</div>

								<div class="divider"></div>

								<div class="frame_discount"></div>

								<div class="frame_accessories">

									'.$item["promotion_".$lang].'

								</div>

							</div>

						</li>

					';

				}

			}

		break;

	}

	

	die(json_encode(array('view'=>$html)));

	

 ?>