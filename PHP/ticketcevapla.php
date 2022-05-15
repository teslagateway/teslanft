<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
	$uyeid		= p('uyeid');
	$ticket_id	= p('ticket_id');
	$rutbe		= "0";
	$durum		= "1";
	$mesaj		= p('mesaj');
	$t			= date("Y-m-d H:i:s");
	$guncelleme	= tarih($t);
	
	
		if(empty($mesaj)){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}else{
			$ticketekle = Sorgu("INSERT INTO ticket_cevap SET
								uye_id		=	'$uyeid',
								ticket_id	=	'$ticket_id',
								rutbe		=	'$rutbe',
								durum		=	'$durum',
								mesaj		=	'$mesaj',
								guncelleme	=	'$guncelleme'");
			$ticket_durum	=	Sorgu("UPDATE ticket SET 
									durum		=	'$durum',
									guncelleme	=	'$guncelleme'
									WHERE id	=	'$ticket_id'");
			
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