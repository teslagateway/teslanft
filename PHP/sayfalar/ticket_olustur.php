<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '{$_SESSION['uyeid']}'"));?>
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
                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » Ticket Oluştur</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
					<div class="box-authentication">
						<div id="ticketnote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
						<form id="ticketform" method="POST" name="ticketform" style="margin-top: -20px;">		
							<div style="clear:both;"></div>
							<label for="isim">İsim</label>
							<input id="isim" style="text-transform: capitalize;" value="<?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?>" disabled type="text" name="isim" class="form-control input-sm">
							<label for="email">E-posta Adresi</label>
							<input id="email" type="text" name="email" value="<?php echo $bilgilerim->email; ?>" disabled class="form-control input-sm">
							<label for="baslikk">Başlık</label>
							<input id="baslikk" type="text" name="baslikk" class="form-control input-sm">
							<label>Departman</label>
                            <div class="custom_select" style="width: 70%;">
                                <select class="input-sm form-control" name="departman" id="departman">
                                    <option value="1">Ödeme İşlemleri</option>
                                    <option value="2">Üyelik İşlemleri</option>
                                </select>
                            </div>
							<label>Öncelik</label>
                            <div class="custom_select" style="width: 70%;">
                                <select class="input-sm form-control" name="oncelik" id="oncelik">
                                    <option value="1">Yüksek</option>
                                    <option value="2">Orta</option>
                                    <option value="3">Düşük</option>
                                </select>
                            </div>
							<label for="adres">Mesaj</label>
							<textarea class="form-control input-sm" rows="5" id="mesaj" name="mesaj"></textarea>
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							<input id="isim" name="isim" type="hidden" class="form-control" value="<?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?>">
							<input id="email" name="email" type="hidden" class="form-control" value="<?php echo $bilgilerim->email; ?>">
			
							<button id="ticketgonder" type="button" class="button"><i class="fa fa-check"></i> Gönder</button>
							
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