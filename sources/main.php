<?php
//////////////////Load banner////////
$sql = "select * from $GLOBALS[db_sp].banner where active=1 and cid=62 and img_vn<>'' order by num asc, id desc limit 10";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("BannerLeft1",$rs);


$sql = "select * from $GLOBALS[db_sp].banner where active=1 and cid=64 and img_vn<>'' order by num asc, id desc limit 1";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("BannerLeft2",$rs);

$sql = "select * from $GLOBALS[db_sp].banner where active=1 and cid=65 and img_vn<>'' order by num asc, id desc limit 2";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("BannerRight2",$rs);

/////////////load tin mới
$sql = "select * from $GLOBALS[db_sp].articles where active=1 and cid=11 and img_thumb_vn<>'' order by num asc, id desc limit 3";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("newsHome",$rs);

$sql1 = "select * from $GLOBALS[db_sp].articles where active=1 and cid=11 and img_thumb_vn<>'' order by num asc, id desc limit 3,3";
$rs1 = $GLOBALS["sp"]->getAll($sql1);
$smarty->assign("newsHome1",$rs1);

$sql2 = "select * from $GLOBALS[db_sp].articles where active=1 and cid=11 and img_thumb_vn<>'' order by num asc, id desc limit 6,3";
$rs2 = $GLOBALS["sp"]->getAll($sql2);
$smarty->assign("newsHome2",$rs2);

/////////////load sản phẩm hot trang chủ

$sql = "select * from $GLOBALS[db_sp].categories where home=1 and has_child = 0 order by num asc, id desc ";
$rs = $GLOBALS["sp"]->getAll($sql);
$smarty->assign("nameCatPr",$rs);

/*
$sql = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
		 where pr.active=1 
		 and pr.type=3 
		 and pr.id=cldd.idpr
		 and cldd.idcity=$showCity
		 order by pr.orderhot asc, pr.id desc
";
$rs = $GLOBALS["sp"]->getAll($sql);
*/
/////////////
$smarty->assign("seo",$cat1);
$smarty->display("./header.tpl");
$smarty->display("main/main.tpl");
$smarty->display("./footer.tpl");
?>