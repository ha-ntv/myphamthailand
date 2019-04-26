<?php

include_once("#include/config.php");
include_once("functions/function.php");

mysql_query("SET NAMES UTF8");
function getNamePrt($table,$name,$id,$which){
if($which == 1)	$sql = "SELECT $name FROM $GLOBALS[db_sp].".$table." where id=$id";
elseif($which == 0) 	$sql = "SELECT price_vn FROM $GLOBALS[db_sp].colorsize where idpr=$id and idcity = 1";
	$rs = $GLOBALS["sp"]->getRow($sql);
	return $rs[$name];
}
function utf8_for_xml($string)
{
    return preg_replace ('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u', '', $string);
	//$arr = array('\x8','\x1d');
	//$arr1 = array('&#008;','&#029;');
	//return str_replace('\x1d','&#29;',$string);
   }
    $myarray = array();
	$url = (isset($_SERVER['HTTPS']) &&
		$_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
	$url .= getenv('HTTP_HOST');

	$sql = "SELECT * from $GLOBALS[db_sp].products where name_vn <> '' and active = 1 ";
    $result = $GLOBALS["sp"]->getAll($sql);



	// Create new PHPExcel object


$csv = '"id","title","description","product_type","link","image_link","condition","availability","price","sale_price","sale_price_effective_date","brand"'.PHP_EOL ;
	foreach($result as $rows) {
	   $price = $category = '';
	   $price = (int)getNamePrt('colorsize','price_vn',$rows['id'],0)!=0?getNamePrt('colorsize','price_vn',$rows['id'],0):'0';
	   $category = $rows['cid']? getNamePrt('categories','name_vn',$rows['cid'],1):'';
	  
		$csv .= '"'.$rows['id'].'",';
		$csv .= '"'.$rows['name_vn'].'",';
		$csv .= '"'.$rows['title'].'",';
		$csv .= '"Product",';
		$csv .= '"'.$url.'/'.$rows['unique_key'].'.html'.'",';
		$csv .= '"'.$url.'/'.$rows['img_vn'].'",';
		$csv .= '"new",';
		$csv .= '"'.($rows['num']+0) > 0?'in stock':'out of stock'.',';
		$csv .= '"'.$price.'",';
		$csv .= '"",';
		$csv .= '"",';
		$csv .= '"'.$category.'"';
		$csv .= PHP_EOL ;
		
	}
	
ob_end_clean();
file_put_contents('feed.csv', "");
file_put_contents('feed.csv', $csv);
