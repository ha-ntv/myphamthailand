<?php

$name['title'] = "Error 404";
$smarty->assign("seo",$name);

$smarty->display("./header.tpl");
$smarty->display("error_404/view.tpl");
$smarty->display("./footer.tpl");

?>