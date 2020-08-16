<?php
    function make_avatar($character)
    {
        $path = "assets/bus_profile/". uniqid() . ".png";
        $image = imagecreate(200, 200);
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        imagecolorallocate($image, $red, $green, $blue);  
        $textcolor = imagecolorallocate($image, 255,255,255);  
    
        imagettftext($image, 100, 0, 55, 150, $textcolor, dirname(__FILE__) . "../../assets/font/Poppins-Regular.ttf", $character);  
        //header("Content-type: image/png");
        $file_path = "../../". $path;
        imagepng($image, $file_path);
        imagedestroy($image);
        return $path;
    }
