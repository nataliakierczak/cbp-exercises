<?php
header('Content-Type:image/jpg');
$size=getimagesize('gallery.jpg');
$original= imagecreatefromjpeg('gallery.jpg');

$ratio = $size[0]/$size[1]; //0-width, 1-height


$new=imagecreatetruecolor(500, 500/$ratio);

imagecopyresampled($new, $original, 0, 0, 0,0, 500,500/$ratio, $size[0], $size[1]);

$color = imagecolorallocate($new, 100, 150, 150);
imagestring($new, 15, 15, 15,  'I am a giraffe', $color);

imagejpeg($new); //outputs the data to the browser

imagejpeg($new, 'giraffe-small.jpg');//creating new file based on the size of the $new



