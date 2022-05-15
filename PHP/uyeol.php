<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$ad 		= ucfirst(p('ad'));
	$soyad	 	= ucfirst(p('soyad'));
	$telefon 	= p('telefon');
	$email 		= p('email');
	$sifre	 	= p('sifre');
	$sifret	 	= p('sifret');
	$sozlesme	= p('sozlesme');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	
	if(empty($ad) || empty($soyad) || empty($telefon) || empty($email) || empty($sifre) || empty($sifret)){
		echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}elseif($sifre != $sifret){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Şifreler uyuşmuyor..!
			</div>';
		}else{
		$varmi = Sorgu("SELECT * FROM uyeler WHERE email = '{$email}'");
		if(mysql_num_rows($varmi)>0){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Bu E-Posta adresi sistemde kayıtlıdır..!
			</div>';			
		}elseif(!$_POST['sozlesme']){;
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Lütfen Sözleşmeyi Kabul Ediniz..!
			</div>';
		}else{
		$uyeler = Sorgu("INSERT INTO uyeler SET
							ad		=	'$ad',
							soyad	=	'$soyad',
							durum	=	'1',
							email	=	'$email',
							telefon	=	'$telefon',
							sifre	=	'$sifre',
							ip		=	'$ip',
							tarih	=	'$tarih'");	
		if($uyeler){
			echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
					<strong>İşlem Tamamlandı. </strong><br> 
					Yönlendiriliyosunuz..
				</div>';
			$UyeSorgu	=	Sorgu("SELECT * FROM uyeler WHERE email = '{$email}' AND sifre = '{$sifre}'");
			$uyeSonuc	=	Sonuc($UyeSorgu);
			$_SESSION['uyeid'] 	= $uyeSonuc->id;
			$_SESSION['email'] 	= $uyeSonuc->email;
			$_SESSION['ad'] 	= $uyeSonuc->ad;
			$_SESSION['soyad'] 	= $uyeSonuc->soyad;
			echo '<script type="text/JavaScript">
					function timedRefresh(timeoutPeriod) {
						setTimeout("location.reload(true);",timeoutPeriod);
					}
					window.onload = timedRefresh(1000);
				</script>';
			}else{
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Hata oluştu.Tekrar deneyiniz.
			</div>';
			
			}
		}
	}
	?>