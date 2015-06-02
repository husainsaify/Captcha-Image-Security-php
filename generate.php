<?php
 	header("Content-type: image/jpeg");
 	session_start();
 	$text = $_SESSION['secure'];

 	$font_size = 30;

 	$image_width = 120;
 	$image_height = 40;

 	$image = imagecreate($image_width,$image_height);

 	imagecolorallocate($image, 0, 0, 0);

 	$font_color = imagecolorallocate($image, 255, 255, 255);


 	//create line for image
 	for ($i=1; $i <= 30 ; $i++) { 
 		$x1 = rand(1,100);
	 	$x2 = rand(1,100);
	 	$y1 = rand(1,100);
	 	$y2 = rand(1,100);
	 	imageline($image, $x1, $y1, $x2, $y2, $font_color);
 	}


 	imagettftext($image, $font_size, 0, 15, 35, $font_color, 'font.ttf', $text);
 	imagejpeg($image);
?>