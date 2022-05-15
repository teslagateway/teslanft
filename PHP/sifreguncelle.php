<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$uyeid	= p('uyeid');
	$msifre	= p('msifre');
	$sifre	= p('sifre');
	$sifret	= p('sifret');
	$varmi 	= Sorgu("SELECT * FROM uyeler WHERE id = '{$uyeid}' AND sifre = '{$msifre}'");
	if(empty($sifre) || empty($sifret) || empty($msifre)){
		echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Hatalı kullanıcı adı veya parola.
			</div>';
		}elseif($sifre != $sifret){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Şifreler uyuşmuyor..!
			</div>';
		}else{
		if(mysql_num_rows($varmi)>0){
			$uye_sorgu	=	Sorgu("UPDATE uyeler SET
									sifre			=	'$sifre'
									WHERE id		=	'$uyeid'");	
			if($uye_sorgu){
				echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
						<strong>İşlem Tamamlandı. </strong><br> 
						Şifreniz başarıyla değiştirilmiştir..
					</div>';
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
						Hata oluştu.Lütfen tekrar deneyiniz.!
					</div>';
			}
				
		}else{
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
						<strong>İşlem Başarısız </strong><br> 
						Mevcut şifrenizi yanlış girdiniz
				</div>';
		}

	}
?>