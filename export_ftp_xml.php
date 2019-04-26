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

$xml_data = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" '
  . 'standalone="yes"?><rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">'
  . '<channel>	<title>Vietanhmobile Store</title>	<link rel="self" href="'.$url.'"/>'
  . '<description>Vietanhmobile FEED</description></channel></rss>');
	

	foreach($result as $rows) {
	   $price = $category = '';
	   $price = getNamePrt('colorsize','price_vn',$rows['id'],0);
	   $category = $rows['cid']? getNamePrt('categories','name_vn',$rows['cid'],1):'';
	   // $arr .=$count.','
	   // .''.','
	   // .$rows['name_vn'].','
	   // .$rows['title'].',Product,'
	   // .$url.'/'.$rows['unique_key'].'.html'.','
	   // .$url.'/'.$rows['img_vn'].','
	   // .''.','
	   // .($rows['num']+0) > 0?'in stock':'out of stock'.','
	   // .$price .','
	   // .''.','
	   // .''.','
	   // .$category.'\n';
		$xml_sub = $xml_data->addChild("entry");
		$xml_sub->addChild('g:id',$rows['id']);
		$xml_sub->addChild('g:title',utf8_for_xml($rows['name_vn']));
		$xml_sub->addChild('g:description',utf8_for_xml($rows['title']));
		$xml_sub->addChild('g:product_type','Product');
		$xml_sub->addChild('g:link',$url.'/'.utf8_for_xml($rows['unique_key']).'.html');
		$xml_sub->addChild('g:image_link',$url.'/'.utf8_for_xml($rows['img_vn']));
		$xml_sub->addChild('g:condition','new');
		$xml_sub->addChild('g:availability',($rows['num']+0) > 0?'in stock':'out of stock');
		$xml_sub->addChild('g:price',$price);
		$xml_sub->addChild('g:sale_price','');
		$xml_sub->addChild('g:sale_price_effective_date','');
		$xml_sub->addChild('g:brand',utf8_for_xml($category));
	}
	
ob_end_clean();
Header('Content-type: text/xml;  charset:UTF-8; ');
print($xml_data->asXML());