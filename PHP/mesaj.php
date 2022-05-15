<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$isim 		= p('isim');
	$email	 	= p('email');
	$konu 		= p('konu');
	$mesaj 		= p('mesaj');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	if(empty($isim) || empty($email) || empty($konu) || empty($mesaj)){
		echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}else{
		$iletisim = Sorgu("INSERT INTO iletisim SET
							isim	=	'$isim',
							email	=	'$email',
							konu	=	'$konu',
							ip		=	'$ip',
							tarih	=	'$tarih',
							mesaj	=	'$mesaj'");	
		if($iletisim){
			echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
					<strong>İşlem Tamamlandı. </strong><br> 
					Mesajınız başarılı bir şekilde gönderilmiştir..Teşekkürler
				</div>';
			}else{
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Hata oluştu.Tekrar deneyiniz.
			</div>';
			}
		}
	?>