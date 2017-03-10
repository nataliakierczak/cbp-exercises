<?php
header('Content-Type: image/png');
$im=imagecreate(310,350);
$background_color=imagecolorallocate($im, 100,50,50);
$color = imagecolorallocate($im, 20, 233, 91);
imagestring($im, 5, 5, 5,  'A Simple Text String', $color);
imageline($im, 50, 0, 100, 100, $color);
imageline($im, 100, 100, 200, 200, $color);
imageline($im, 50, 0, 100, 200, $color);
imageline($im, 0, 0, 100, 300, $color);
imageline($im, 0, 0, 100, 400, $color);
imagepng($im);




