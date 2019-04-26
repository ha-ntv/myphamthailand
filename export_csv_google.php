<?php

include_once("#include/config.php");
include_once("functions/function.php");

mysql_query("SET NAMES UTF8");
function getNamePrt($table,$name,$id,$which){
if($which == 1)	$sql = "SELECT $name FROM $GLOBALS[db_sp].".$table." where id=$id";
elseif($which == 0) 	$sql = "SELECT MIN(price_vn) FROM $GLOBALS[db_sp].colorsize where idpr=$id and idcity = 1";
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

	$sql = "SELECT pro.*, clr.price_vn, clr.typepr from $GLOBALS[db_sp].products AS pro LEFT JOIN   $GLOBALS[db_sp].colorsize AS clr ON clr.idpr = pro.id AND clr.idbonho = 1  WHERE pro.name_vn <> ''
	and pro.active = 1 
	and clr.idcity = 1 GROUP BY clr.idpr";
      $result = $GLOBALS["sp"]->getAll($sql);
 



$csv = '"id","title","description","link","image link","condition","availability","price","brand","google product category"'.PHP_EOL ;
	foreach($result as $rows) {
	   $price = $category = '';
	   $price = (int)$rows['price_vn']!= 0 ? $rows['price_vn'] :1000;
	   $category = $rows['cid']? getNamePrt('categories','name_vn',$rows['cid'],1):'';
	  
		$csv .= '"'.$rows['id'].'",';
		$csv .= '"'.$rows['name_vn'].'",';
		$csv .= '"'.$rows['title'].'",';
	//	$csv .= '"Product",';
		$csv .= '"'.$url.'/'.$rows['unique_key'].'.html'.'",';
		$csv .= '"'.$url.'/'.($rows['img_vn']!= ''? $rows['img_vn']: $rows['img_thumb_vn'] ).'",';
		$csv .= '"new",';
		$csv .= ((int)$rows['typepr'] == 1 || (int)$rows['typepr'] == 2 )?'"in stock",':'"out of stock",';

		$csv .= '"'.$price.' VND",';
		//$csv .= '"",';
		//$csv .= '"",';
		$csv .= '"'.$category.'",';
		$csv .='""';
		$csv .= PHP_EOL ;
		
	}
ob_end_clean();

file_put_contents('feed_google.csv', "");
file_put_contents('feed_google.csv', $csv);
