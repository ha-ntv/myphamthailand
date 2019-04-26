<?php

include_once("include/config.php");
include_once("functions/function.php");
require_once("PHPExcel.php");
mysql_query("SET NAMES UTF8");
function getNamePrt($table,$name,$id,$which){
if($which == 1)	$sql = "SELECT $name FROM $GLOBALS[db_sp].".$table." where id=$id";
elseif($which == 0) 	$sql = "SELECT price_vn FROM $GLOBALS[db_sp].colorsize where idpr=$id and idcity = 1";
	$rs = $GLOBALS["sp"]->getRow($sql);
	return $rs[$name];
}
    $myarray = array();
	$url = (isset($_SERVER['HTTPS']) &&
		$_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
	$url .= getenv('HTTP_HOST');

	$sql = "SELECT * from $GLOBALS[db_sp].products where name_vn <> '' and active = 1";
    $result = $GLOBALS["sp"]->getAll($sql);


	// Create new PHPExcel object


	//var_dump($myarray);
	$objPHPExcel = new PHPExcel();

	// Set document properties
	$objPHPExcel->getProperties()->setCreator('Maarten Balliauw')
		->setLastModifiedBy('Maarten Balliauw')
		->setTitle('PHPExcel Test Document')
		->setSubject('PHPExcel Test Document')
		->setDescription('Test document for PHPExcel, generated using PHP classes.')
		->setKeywords('office PHPExcel php')
		->setCategory('Test result file');

	// Create the worksheet
	$objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'No')
		->setCellValue('B1', 'Id')
		->setCellValue('C1', 'title')
		->setCellValue('D1', 'description')
		->setCellValue('E1', 'product_type')
		->setCellValue('F1', 'link')
		->setCellValue('G1', 'image_link')
		->setCellValue('H1', 'condition')
		->setCellValue('I1', 'availability')
		->setCellValue('J1', 'price')
		->setCellValue('K1', 'sale_price')
	    ->setCellValue('L1', 'sale_price_effective_date')
	    ->setCellValue('M1', 'brand');
	    $count = 1;
	    $stt = 2;
	foreach($result as $rows) {
	   $price = $category = '';
	   $price = getNamePrt('colorsize','price_vn',$rows['id'],0);
	   $category = $rows['cid']? getNamePrt('categories','name_vn',$rows['cid'],1):'';
		$myarray = array($count++,$rows['id'], $rows['name_vn'],
		$rows['title'],
		'Product',
		$url.'/'.$rows['unique_key'].'.html',
		$rows['img_vn']!= ''? $url.'/'.$rows['img_vn']:'',
	    'new',
		($rows['num']+0) > 0?'in stock':'out of stock',
	   ((int)$price > 0)?	$price :'',
		'',
		'',		
        $category); 
		$objPHPExcel->getActiveSheet()->fromArray($myarray, NULL, 'A'.$stt++);
	}
	$objPHPExcel->getActiveSheet()->getStyle('A1:M1')->getFont()->setBold(true);

	// Set autofilter
	// Always include the complete filter range!
	// Excel does support setting only the caption
	// row, but that's not a best practise...
	$objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());

	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);
	$time = date("d-m-Y_H-i-s",time());
	ob_end_clean();
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="[vietanhmobile]_facebook_feed'.$time.'.xls"');
	header('Cache-Control: max-age=0');
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// If you're serving to IE over SSL, then the following may be needed
	header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit;