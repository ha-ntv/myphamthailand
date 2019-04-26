<?php
	include_once("../include/config.php");
	include_once("../functions/function.php");

	$str = '';
	$queryString = $_POST['queryString'];
	$type = $_GET['type'];
	$sql = "select *,pr.id as prid from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
			where pr.active=1 
			and pr.name_vn LIKE '%" . $queryString . "%'
			and pr.id=cldd.idpr
			and cldd.idcity=$showCity 
			and pr.price > 0
			group by pr.id
			order by pr.num asc, pr.id desc limit 50
	";
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	
		foreach($rs as $item){
			//$tinhtrang = tinhtranghang($item["typepr"]);
			//if($tinhtrang == ''){
				$imgview = "<img width='60' class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
				$str .= '
					<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'" class="clear"> 
						<div class="img_search">
							'.$imgview.'
						</div>
						<div class="FL">
							'.$item["name_".$lang].' <br />
							<strong>'.number_format($item["price"],0,",",".").'đ</strong>
						</div>						
					</a>
				';
			//}
		}
	
	echo $str;
?>
