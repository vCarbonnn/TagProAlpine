<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo "Alpine Test";

$rawImage=$GLOBALS['HTTP_RAW_POST_DATA'];
$removeHeaders=substr($rawImage,strpos($rawImage, ",")+1);
$decode=base64_decode($removeHeaders);
$fopen=fopen('myImage.png', 'wb');
fwrite($fopen,$decode);
fclose($fopen);
echo $rawImage;
?>
