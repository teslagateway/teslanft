<?php $id = g('id');?>
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"]) || !$id){
	header("Location:giris.html");
}?>
<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '{$_SESSION['uyeid']}'"));?>
<?php $ticketlerim = Sonuc(Sorgu("SELECT * FROM ticket WHERE id = '$id' AND uyeid = '{$_SESSION['uyeid']}'"));?>
<?php if($id != $ticketlerim->id){
	header("Location:ticket.html");
}else{?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
				
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » <?php echo $ticketlerim->baslik; ?></span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">

					<div class="box-authentication">
					<form id="ticketformm" method="POST" name="ticketformm" style="margin-top: -20px;">	
					<div class="mail-body">

				<div class="mail-header">
					<!-- title -->
					<div class="mail-title" id="bgizle" style="float:left;font-size:16px;">
						<?php echo $ticketlerim->baslik; ?> - <small style="line-height: 25px;"><?php echo $ticketlerim->guncelleme; ?></small>
					</div>
					
					<div class="mail-title" id="baslik" style="float:left;font-size:16px;">
						Bildirimi Cevapla
					</div>
					
					<!-- links -->
					<div class="mail-links pull-right gizle" id="ustyanit">
						<a class="btn btn-primary pull-right nooval" id="yanit">Yanıt <i style="margin-top:3px;" class="fa fa-reply"></i></a>
						<a href="ticket.html" class="btn btn-default pull-right nooval"> &lt;&lt; Geri <i style="margin-top:6px;font-size:9px;" class="fa fa-times"></i></a>
						<div style="clear:both;"></div>
						<div style="margin-top:10px">
							<span class="label label-info">Ödeme Bildirimi</span>
							<span class="label label-danger">Öncelik: Yüksek</span>
							<span class="label label-primary">Durum: <?php echo($ticketlerim->durum=='0' ? 'Yanıtlandı' : 'Açık');?></span>
						</div>
					</div>
					<div class="mail-links pull-right cevapla" id="ustyanit">
						<a class="btn btn-primary pull-right nooval" id="iptal">İptal <i style="margin-top:6px;font-size:9px;" class="fa fa-times"></i></a>
						<button id="ticketcevapla" type="button" class="btn btn-success pull-right nooval"> Gönder <i style="margin-top:6px;font-size:9px;" class="fa fa-send"></i></button>
						<div style="clear:both;"></div>
					</div>
				</div>
				<div style="clear:both;"></div>
					<div id="ticketcnote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
					<div class="ticketform">
					<div style="clear:both;"></div>
					<label for="isim">İsim</label>
					<input style="width: 100%;" id="isim" style="text-transform: capitalize;" value="<?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?>" disabled type="text" name="isim" class="form-control input-sm">
					<label for="email">E-posta Adresi</label>
					<input style="width: 100%;" id="email" type="text" name="email" value="<?php echo $bilgilerim->email; ?>" disabled class="form-control input-sm">
					<label for="adres">Mesaj</label>
					<textarea style="width: 100%;" class="form-control input-sm" rows="5" id="mesaj" name="mesaj"></textarea>
					<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
					<input id="ticket_id" name="ticket_id" type="hidden" class="form-control" value="<?php echo $ticketlerim->id; ?>">
					</div>
				
				<?php $Sorgu = Sorgu("SELECT * FROM ticket_cevap WHERE ticket_id = '{$ticketlerim->id}' ORDER BY id DESC");
				while($Sonuc = Sonuc($Sorgu)){?>
				<?php $uye   = Sonuc(Sorgu("SELECT * FROM uyeler WHERE id = '{$Sonuc->uye_id}'"));?>
				<?php if($Sonuc->rutbe == "1"){?>
				<div class="mail-info client">
					<div class="mail-sender dropdown" style="float:left;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/avatar.png" class="img-circle" width="30">
							<span style="color:#569EEC;line-height: 30px;"> <?php echo $ayar->firma_adi;?>  (Yetkili) </span>
						</a>
					</div>
					<div class="mail-date " style="float:right;">
						<?php echo $Sonuc->guncelleme;?>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="mail-text input-smm">
					<?php echo $Sonuc->mesaj;?>
						<br> 
						-------------
						<div style="color:#B3B2B2;margin-top:-15px;">
						<br> <?php echo $ayar->firma_adi; ?>
						<br> <?php echo $ayar->firma_adres; ?>
						<br> Telefon: <?php echo $ayar->firma_tel; ?> Fax : <?php echo $ayar->firma_fax; ?>
						<br> E-Mail: <?php echo $ayar->firma_email; ?>
						<br>
						</div>
				</div>
				
				<?php }else{?>
					<div class="mail-info client">
					<div class="mail-sender dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user.png" class="img-circle" width="30">
							<span style="line-height: 30px;color: #ec5956;"><?php echo $uye->ad; ?> <?php echo $uye->soyad; ?> (Müşteri)</span>
						</a>
					</div>
					<div class="mail-date pull-right">
						<?php echo $Sonuc->guncelleme;?>
					</div>
				</div>

				<div class="mail-text input-smm">
					<p><?php echo $Sonuc->mesaj;?></p>
				</div>
				<?php }?>
				<?php }?>


				<div class="mail-info client">
					<div class="mail-sender dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user.png" class="img-circle" width="30">
							<span style="line-height: 30px;color: #ec5956;"><?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?> (Müşteri)</span>
						</a>
					</div>
					<div class="mail-date pull-right">
						<?php echo $ticketlerim->tarih;?>
					</div>
				</div>

				<div class="mail-text input-smm">
					<p><?php echo $ticketlerim->mesaj;?></p>
				</div>

</div>
						
					</form>	
					</div>
					</div>
				</div>
                </div>
                <!-- ./Content page -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- ./page wapper-->
<?php }?>