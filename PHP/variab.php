<?php

$x1 = -2;
$x2 = 2;
$y1 = -2;
$y2 = 2;

$image_x = 350;
$image_y = 350;

$zoom_x = $image_x/($x2 - $x1);
$zoom_y = $image_y/($y2 - $y1);

$real_const = $x/$zoom_x + $x1;
$imag_const = $y/$zoom_y +$y1;
$Z_real = 0;
$Z_imag = 0;
$i   = 0;
?>