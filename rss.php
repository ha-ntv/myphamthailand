<?php
header('Content-Type: application/xml; charset=utf-8');
include_once("#include/config.php");
if(isset($_GET['title2']))
	$unique_key = $_GET['title2'].".rss";
else
	$unique_key = $_GET['title1'].".rss";

$sql_cat = "select * from $GLOBALS[db_sp].categories where unique_key='".$unique_key."' ";
$rs_cat = $GLOBALS["sp"]->getRow($sql_cat);

$sql = "select * from $GLOBALS[db_sp].articles where active=1 and name_$lang<>'' order by num asc, id desc ";
$rs = $GLOBALS["sp"]->getAll($sql);

echo '<?php xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
	<channel>
		<title>'.$rs_cat['title'].'</title>
		<description>'.$rs_cat['des_'.$lang].'</description>
		<link>'.$path_url.'</link>
		<copyright>vaydonggia.com</copyright>
		<generator>vaydonggia.com</generator>
		<pubDate>'.date("D,j M Y G:i:s").'GMT</pubDate>
		<lastBuildDate>'.date("D,j M Y G:i:s").'GMT</lastBuildDate>
		
		';
foreach($rs as $item){

echo '
		<item>
			<title>'.$item['name_'.$lang].'</title>
			<description>'.$item['short_'.$lang].'</description>
			<link>'.$path_url.'/'.GetArticleDetail($item,$lang).'</link>
			<pubDate>'.$item['dated'].'</pubDate>
		</item>
';
}

echo '
	</channel>
</rss>
';
//die();
function GetArticleDetail($cat, $lg2){
	$id = $cat['cid'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $cat["unique_key"].".html";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}
?>