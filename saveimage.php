<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
header("Access-Control-Allow-Origin: *");
$rawImage=$GLOBALS['HTTP_RAW_POST_DATA'];
$removeHeaders=substr($rawImage,strpos($rawImage, ",")+1);
$decode=base64_decode($removeHeaders);
$fopen=fopen('myImage.png', 'wb');
fwrite($fopen,$decode);
fclose($fopen);
?>
