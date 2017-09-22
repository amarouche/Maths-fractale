<?php

require('funcz.php');
include('variab.php');

// Zn+1 = Znk + c et la condition Z0 = 0

$iterations_max = $_POST['iterations'];
$degres = $_POST['degres'];

if ($iterations_max == NUll)
{
    $iterations_max = 50;
}

$image = creaimag($image);
$couleurs = array();
for($i = 0; $i < $iterations_max; $i++)
    $couleur[$i] = imagecolorallocate($image, $i*50, $i*50, $i*50);
$x = 0;

while( $x < $image_x){
    $y = 0;
    while( $y < $image_y){
        $real_const = $x/$zoom_x + $x1;
        $imag_const = $y/$zoom_y +$y1;
        $Z_real = 0;
        $Z_imag = 0;
        $i = 0;
        while(sqrt(pow($Z_real, 2) + pow($Z_imag, 2)) < 2 AND $i < $iterations_max){
            if ($degres == NULL){
                $tmp = $Z_real;
                $Z_real = $Z_real*$Z_real - $Z_imag*$Z_imag + $real_const;
                $Z_imag = 2*$tmp*$Z_imag + $imag_const;
                $i++;
            }
            else{ 
                $tmp=pow(($Z_real*$Z_real+$Z_imag*$Z_imag),($degres/2)) *cos($degres*atan2($Z_imag,$Z_real)) + $real_const;
                $Z_imag=pow(($Z_real*$Z_real+$Z_imag*$Z_imag),($degres/2)) *sin($degres*atan2($Z_imag,$Z_real)) + $imag_const;
                $Z_real=$tmp;
                $i++;
            }
        }
        if($i == $iterations_max)
            imagesetpixel($image, $x, $y, $noir);
             else
            imagesetpixel($image, $x, $y, $couleur[$i]);
    $y++;
    }
$x++;
}
imagestring($image, 3, 1, 1, '', $noir);
header('Content-type: image/png');
imagepng($image, "../IMG/fracz.png");
header('Location: resu.php');
?>
