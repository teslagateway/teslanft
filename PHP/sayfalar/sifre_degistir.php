<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '{$_SESSION['uyeid']}'"));?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns" style="margin-bottom:50px;">
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
                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » Şifre Değiştir</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
							<div id="sifrenote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
							<form id="sifreform" method="POST" name="sifreform" style="margin-top: -20px;">
							<label for="msifre">Mevcut Şifreniz</label>
							<input id="msifre" type="password" name="msifre" class="form-control">
							<label for="sifre">Yeni Şifreniz</label>
							<input id="sifre" type="password" name="sifre" class="form-control">
							<label for="sifret">Yeni Şifreniz (tekrar)</label>
							<input id="sifret" name="sifret" type="password" class="form-control">
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							
							<button id="sifredegistir" type="button" class="button"><i class="fa fa-lock"></i> Şifremi Güncelle</button>
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