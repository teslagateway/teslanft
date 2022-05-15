<?php
session_start();
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','jpeg');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}
	require 'class.upload.php';
	$image = new Upload($_FILES['upl']);
	if ($image->uploaded) {
		$resim_adi = uniqid();
		$image->file_new_name_body ="".$resim_adi;
		$image->process("../../../uploads/urunler/diger");
		
		$image->file_new_name_body ="".$resim_adi;
		$image->image_resize = true;
		$image->image_ratio_crop = true;
		$image->image_x = 420;
		$image->image_y = 512;
		$image->process("../../../uploads/urunler/diger/orta");
		
		$image->file_new_name_body ="".$resim_adi;
		$image->image_resize = true;
		$image->image_ratio_crop = true;
		$image->image_x = 300;
		$image->image_y = 366;
		$image->process("../../../uploads/urunler/diger/kucuk");
		$resim_yolu= $image->file_dst_name; 
		 if ( $image->processed ) {
		 	$_SESSION["resimler"][] = $resim_yolu;
			echo '{"status":"success"}';
			exit;
		}

		$image-> Clean();

	} else {
		echo $image->error;
	}
	
	
}

echo '{"status":"error"}';
exit;