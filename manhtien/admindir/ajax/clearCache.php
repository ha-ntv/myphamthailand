<?php
include("../../#include/config.php");

$arr = glob($config['BASE_DIR']."/templates/cache/*.tpl");

$count = ceil(count($arr));
if($count>0){
	foreach ($arr as $filename) {
		unlink($filename);
	}
}
echo "ok";

?>