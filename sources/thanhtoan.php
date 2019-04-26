<?php


$seo = array(

    "name_vn" => 'Hoàn tất đơn hàng',

	"title" => 'Hoàn tất đơn hàng',

    "content_vn" => "",

);

$template = "donhang/detail.tpl";



$smarty->assign("seo",$seo);		

$smarty->display("./header.tpl");

$smarty->display($template);

$smarty->display("./footer.tpl");

?>