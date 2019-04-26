<?php 
include_once("#include/config.php");
include_once("functions/function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Detail</title>
</head>
<body>
<?php

$arr = array();
//$arr['is_new'] = 0;
//vaUpdate('orders',$arr,' id='.$_GET['id']);
	
$sql = "select * from $GLOBALS[db_sp].orders where id=" . $_GET['id'];
$order = $GLOBALS["sp"]->getRow($sql);
echo str_replace('[ORDER_ID]', $order['id'], $order['descs']) ;
?>
<br />
<p align="center">
<input type="button" value=" Close " onclick="window.close();" />
</p>
</body>
</html>
