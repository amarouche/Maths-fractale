<?php

function creaimag($image)
{
    $image_x = 350;
    $image_y = 350;
    $image = imagecreatetruecolor($image_x, $image_y);
    $blanc = imagecolorallocate($image, 255, 255, 255);
    $noir  = imagecolorallocate($image, 0, 0, 0);
    imagefill($image, 0 ,0 , $blanc);
    
    return $image;
}

function calcu()
{
    
}