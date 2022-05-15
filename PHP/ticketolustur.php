<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$uyeid		= p('uyeid');
	$baslik		= p('baslikk');
	$isim		= p('isim');
	$email		= p('email');
	$durum		= "1";
	$departman	= p('departman');
	$oncelik	= p('oncelik');
	$mesaj		= p('mesaj');
	$t			= date("Y-m-d H:i:s");
	$tt			= date("Y-m-d H:i:s");
	$guncelleme	= tarih($t);
	$tarih		= tarih($tt);
	
	
		if(empty($isim) || empty($baslik) || empty($email) || empty($departman) || empty($oncelik) || empty($mesaj)){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}else{
			$ticketekle = Sorgu("INSERT INTO ticket SET
								uyeid		=	'$uyeid',
								isim		=	'$isim',
								baslik		=	'$baslik',
								email		=	'$email',
								departman	=	'$departman',
								oncelik		=	'$oncelik',
								durum		=	'$durum',
								mesaj		=	'$mesaj',
								tarih		=	'$tarih',
								guncelleme	=	'$guncelleme'");
			
			if($ticketekle){
				echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
						<strong>İşlem Tamamlandı. </strong><br> 
						Ticket talebiniz oluşturuldu..
					</div>';
				echo '<meta id="refresh" http-equiv="refresh" content="2; url=ticket.html" />'; 
			}else{
				echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
						<strong>İşlem Başarısız </strong><br> 
						Hata oluştu.Lütfen tekrar deneyiniz.!
					</div>';
			}
		}		
?>