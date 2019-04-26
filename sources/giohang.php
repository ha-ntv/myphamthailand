<?php


$seo = array(

    "name_vn" => 'Xem đơn hàng',

	"title" => 'Xem đơn hàng',

    "content_vn" => "",

);

$template = "donhang/view.tpl";



$smarty->assign("seo",$seo);		

$smarty->display("./header.tpl");

$smarty->display($template);

$smarty->display("./footer.tpl");

?>