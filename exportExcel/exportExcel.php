<?php
require_once("configexportExcel.php");
require 'php-excel.class.php';
			
$sql = "select phone from comment where phone<>'' order by id desc ";
$result = mysql_query($sql,$dblink);
$myarray[] = array("PHONE");
$str = $str1 = $str2 = '';
while($rows = mysql_fetch_array($result)) {
	$myarray[] = array(trim($rows['phone'])); 
}
$xls = new Excel_XML('UTF-8', false, 'phone-comment');
$xls->addArray($myarray);
$xls->generateXML('phone-comment');
exit();
?>
