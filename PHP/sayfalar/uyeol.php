<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(isset($_SESSION["email"])){
	header("Location:index.html");
}?>
<?php $email = p('email');?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasyafa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Üye Ol</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">ÜYE OL</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Hesap Oluştur</h3>
						<div id="uyenote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
						<form id="uyeolform" method="POST" name="uyeolform">
                        <label for="ad">Adınız</label>
                        <input id="ad" style="text-transform: capitalize;" type="text" name="ad" class="form-control input-sm">
						<label for="soyad">Soyadınız</label>
                        <input style="text-transform: uppercase;" id="soyad" type="text" name="soyad" class="form-control input-sm">
						<label for="telefon">Cep Telefonu</label>
                        <input id="telefon" name="telefon" type="text" class="form-control input-sm">
						<label for="email">E-mail Adresiniz</label>
                        <input id="email" type="text" name="email" value="<?php echo $email;?>" class="form-control input-sm">
                        <label for="sifre">Şifre</label>
                        <input id="sifre" type="password" name="sifre" class="form-control input-sm">
						<label for="sifret">Şifre (tekrar) </label>
                        <input id="sifret" type="password" name="sifret" class="form-control input-sm">
						
						<div class="label">
							<input type="checkbox" style="margin-top:0px;" name="sozlesme" id="sozlesme" value="1" class="required bigscale" data-message="Lütfen kullanıcı sözleşmesini onaylayınız.">
							<span class="checkTxt"><a href="#" data-toggle="modal" data-target="#ksozlesme" class="fancybox iframe">Kullanıcı sözleşmesini</a> okudum ve onaylıyorum.</span>
						</div>
						
                        <button id="uyeol" type="button" class="button"><i class="fa fa-user"></i> Hesap Oluştur</button>
						</form>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Zaten Üyeyim ?</h3>
                        <label for="emmail_login">E-mail Adresiniz</label>
                        <input id="emmail_login" type="text" class="form-control input-sm">
                        <label for="password_login">Şifre</label>
                        <input id="password_login" type="password" class="form-control input-sm">
                        <p class="forgot-pass"><a href="#">Şifremi Unuttum?</a></p>
                        <button class="button"><i class="fa fa-lock"></i> Giriş Yap</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ksozlesme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kullanıcı Sözleşmesi</h4>
      </div>
      <div class="modal-body">
        <?php echo $ayar->ksozlesme; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>