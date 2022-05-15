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
                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » Üyelik Bilgilerim</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
							<div id="bilginote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
							<form id="bilgiform" method="POST" name="bilgiform" style="margin-top: -20px;">
							<label for="ad">Adınız</label>
							<input id="ad" style="text-transform: capitalize;" value="<?php echo $bilgilerim->ad; ?>" type="text" name="ad" class="form-control input-sm">
							<label for="soyad">Soyadınız</label>
							<input style="text-transform: uppercase;" id="soyad" value="<?php echo $bilgilerim->soyad; ?>" type="text" name="soyad" class="form-control input-sm">
							<label for="telefon">Cep Telefonu</label>
							<input id="telefon" name="telefon" type="text" value="<?php echo $bilgilerim->telefon; ?>" class="form-control input-sm">
							<label for="email">E-mail Adresiniz</label>
							<input id="email" type="text" name="email" value="<?php echo $bilgilerim->email; ?>" class="form-control input-sm">
							<label for="email">Doğum Tarihi</label>
							<div class="form-inline">
							<select class="input form-control input-sm" name="gun" id="gun">
							<option value="">Gün</option>
							<?php for ($i=1;$i<=31;$i++){?>
							<option <?php echo($bilgilerim->gun == $i ? 'selected' : '');?> value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
							</select>
							  -
							<select class="input form-control input-sm" name="ay" id="ay">
								<option value="">Ay</option>
								<option <?php echo($bilgilerim->ay == "Ocak" ? 'selected' : '');?> value="Ocak">Ocak</option>
								<option <?php echo($bilgilerim->ay == "Şubat" ? 'selected' : '');?> value="Şubat">Şubat</option>
								<option <?php echo($bilgilerim->ay == "Mart" ? 'selected' : '');?> value="Mart">Mart</option>
								<option <?php echo($bilgilerim->ay == "Nisan" ? 'selected' : '');?> value="Nisan">Nisan</option>
								<option <?php echo($bilgilerim->ay == "Mayıs" ? 'selected' : '');?> value="Mayıs">Mayıs</option>
								<option <?php echo($bilgilerim->ay == "Haziran" ? 'selected' : '');?> value="Haziran">Haziran</option>
								<option <?php echo($bilgilerim->ay == "Temmuz" ? 'selected' : '');?> value="Temmuz">Temmuz</option>
								<option <?php echo($bilgilerim->ay == "Ağustos" ? 'selected' : '');?> value="Ağustos">Ağustos</option>
								<option <?php echo($bilgilerim->ay == "Eylül" ? 'selected' : '');?> value="Eylül">Eylül</option>
								<option <?php echo($bilgilerim->ay == "Ekim" ? 'selected' : '');?> value="Ekim">Ekim</option>
								<option <?php echo($bilgilerim->ay == "Kasım" ? 'selected' : '');?> value="Kasım">Kasım</option>
								<option <?php echo($bilgilerim->ay == "Aralık" ? 'selected' : '');?> value="Aralık">Aralık</option>
							</select>
							  -
							<select class="input form-control input-sm" name="yil" id="yil">
								<option value="">Yıl</option>
								<?php for ($i=1916;$i<=2002;$i++){?>
								<option <?php echo($bilgilerim->yil == $i ? 'selected' : '');?> value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
							</select>
							</div>

                            <label>Cinsiyet</label>
                            <div class="custom_select" style="width: 34%;">
                                <select class="input form-control input-sm" name="cinsiyet" id="cinsiyet">
                                    <option value="">Seçiniz</option>
                                    <option <?php echo($bilgilerim->cinsiyet == "Erkek" ? 'selected' : '');?> value="Erkek">Erkek</option>
                                    <option <?php echo($bilgilerim->cinsiyet == "Kadın" ? 'selected' : '');?> value="Kadın">Kadın</option>
                                </select>
                            </div>
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							<button id="bilgiguncelle" type="button" class="button"><i class="fa fa-user"></i> Bilgilerimi Güncelle</button>
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