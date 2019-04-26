<?php
include_once("include/config.php");
include_once("functions/function.php");

$str = '';
$queryString = trim($_POST['queryString']);

$sql = "select *,pr.id as prid from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd
		where pr.active=1 
		and pr.name_vn LIKE '%" . $queryString . "%'
		and pr.id=cldd.idpr
		and cldd.idcity=1 
		order by pr.num asc, pr.id desc limit 50
";
$rs = $GLOBALS["sp"]->getAll($sql);


foreach($rs as $item){
	$imgview = "<img width='90' src='".$path_url ."/". $item['img_thumb_vn'] ."' />";
	$str .= '
		<a href="javascript:void(0)" onclick="searchPrAjax('.$item['prid'].')"> 
			<div class="img_search">
				'.$imgview.'
			</div>
			<div class="FL">
				'.$item["name_vn"].' <br />
				<strong>'.number_format($item["price_vn"]).'d</strong>
			</div>
			
		</a>
	';
}

echo $str;
?>

