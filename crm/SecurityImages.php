<?php
session_start();
function generateCode($characters) {
	/* list all possible characters, similar looking characters and vowels have been removed */
	
	$possible = '23456789bcdfghjkmnpqrstvwxyz';
	$code = '';
	$i = 0;
	while ($i < $characters) { 
		$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$i++;
	}
	return $code;
}
$width = isset($_GET['width']) ? $_GET['width'] : '120';
$height = isset($_GET['height']) ? $_GET['height'] : '40';
$characters = isset($_GET['characters']) && $_GET['characters'] > 1 ? $_GET['characters'] : '6';

$rand = generateCode($characters);
// create the hash for the random number and put it in the session
$_SESSION['security_vaydonggia'] = $rand;
// create the image
$image = imagecreate($width, $height);
$font_size = 25;
// use white as the background image
$bgColor = imagecolorallocate ($image, 204, 45, 144);
// the text color is black
$textColor = imagecolorallocate ($image, 249, 176, 220);

$noise_color = imagecolorallocate($image, 138, 31, 96);
for( $i=0; $i<($width*$height)/3; $i++ ) {
	imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
}
/* generate random lines in background */
for( $i=0; $i<($width*$height)/150; $i++ ) {
	imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
}
$textbox = imagettfbbox($font_size, 0, 'UnrealT.ttf', $rand);
$x = ($width - $textbox[4])/2;
$y = ($height - $textbox[5])/2;
imagettftext($image, $font_size, 0, $x, $y, $textColor, 'UnrealT.ttf' , $rand);

// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// always modified
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

// send the content type header so the image is displayed properly
header('Content-type: image/jpeg');

// send the image to the browser
imagejpeg($image);

// destroy the image to free up the memory
imagedestroy($image);
?>