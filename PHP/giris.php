<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$email	 	= p('email');
	$sifre	 	= p('sifre');
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);

	if(empty($sifre) || empty($email)){
		echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Hatalı kullanıcı adı veya parola.
			</div>';
			
		}else{
			$UyeSorgu	=	Sorgu("SELECT * FROM uyeler WHERE email = '{$email}' AND sifre = '{$sifre}'");
			$uyeSonuc	=	Sonuc($UyeSorgu);
			if(say($UyeSorgu) >0 ){
				$_SESSION['uyeid'] 	= $uyeSonuc->id;
				$_SESSION['email'] 	= $uyeSonuc->email;
				$_SESSION['ad'] 	= $uyeSonuc->ad;
				$_SESSION['soyad'] 	= $uyeSonuc->soyad;
				echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
						<strong>İşlem Tamamlandı. </strong><br> 
						Yönlendiriliyosunuz..
					</div> ';
                    echo'<meta http-equiv="refresh" content="0;URL=hesabim.html">';
			}else{
				echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
						<strong>İşlem Başarısız </strong><br> 
						Hatalı kullanıcı adı veya parola.
					</div>';
			}
	}
?>