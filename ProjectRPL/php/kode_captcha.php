<?php

	session_start();

	header("Content-type: image/png");
	$panjang = 4;
	$font_size=12;
	$width=100;
	$height=30;

	$_SESSION["kode_captcha"]="";

	$gbr = imagecreate($width, $height);
	imagecolorallocate($gbr, 0, 0, 0);

	$white = imagecolorallocate($gbr, 255, 255, 255);
	$grey = imagecolorallocate($gbr, 128, 128,128);

	$font = "../font/monaco.ttf"; 
	$karakter = 'ABCDEFGHIJKLMNOPQRSTU1234567890';

	for($i=0;$i<$panjang;$i++) {

		$pos = rand(0, strlen($karakter)-1);
		$kode = $karakter{$pos};

		$_SESSION["kode_captcha"].=$kode;
		$sudut= rand(-25, 25);

		imagettftext($gbr, $font_size, $sudut, 10+20*$i, 25, $grey, $font, $kode);
		imagettftext ($gbr, $font_size, $sudut, 9+20*$i, 26, $white, $font, $kode);
	}

	imagepng($gbr); 
	imagedestroy($gbr);
?>