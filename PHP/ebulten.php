<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$email	 	= p('email');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	if(empty($email)){
		echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				E-Mail adresiniz boş olamaz..
			</div>';
		}else{
		$ebulten = Sorgu("INSERT INTO ebulten SET
							email	=	'$email',
							ip		=	'$ip',
							tarih	=	'$tarih'");	
		if($ebulten){
			echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
					<strong>İşlem Tamamlandı. </strong><br> 
					E-Mail adresiniz başarıyla kaydedilmiştir..Teşekkürler
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