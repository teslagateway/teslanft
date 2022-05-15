<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>

<?php if(isset($_SESSION["email"])){

	header("Location:index.html");

}?>

<!-- page wapper-->

<div class="columns-container">

    <div class="container" id="columns">

        <!-- breadcrumb -->

        <div class="breadcrumb clearfix">

            <a class="home" href="index.html" title="Anasayfaya Git">Anasyafa</a>

            <span class="navigation-pipe">&nbsp;</span>

            <span class="navigation_page">Giriş Yap</span>

        </div>

        <!-- ./breadcrumb -->

        <!-- page heading-->

        <h2 class="page-heading">

            <span class="page-heading-title2">GİRİŞ YAP</span>

        </h2>

        <!-- ../page heading-->

        <div class="page-content">

            <div class="row">

                <div class="col-sm-6">

				<form action="uye-ol.html" method="post">

                    <div class="box-authentication">

                        <h3>Hesap Oluştur</h3>

                        <p>Bir hesap oluşturmak için e-mail adresinizi girin.</p>

                        <label for="email">E-mail Adresiniz</label>

                        <input id="email" type="text" name="email" class="form-control input-sm" required>

                        <button name="btn" class="button"><i class="fa fa-user"></i> Hesap Oluşturun</button>

                    </div>

				</form>

                </div>

                <div class="col-sm-6">

                    <div class="box-authentication">

                        <h3>Zaten Üyeyim ?</h3>

						<div id="girisnote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>

						<form method="POST" id="girisform" name="girisform" >

                        <label for="email">E-mail Adresiniz</label>

                        <input id="email" type="text" name="email" class="form-control input-sm">

                        <label for="sifre">Şifre</label>

                        <input id="sfire" type="password" name="sifre" class="form-control input-sm">

                        <p class="forgot-pass"><a href="#">Şifremi Unuttum?</a></p>

                        <button type="button" class="button" id="giris"><i class="fa fa-lock"></i> Giriş Yap</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ./page wapper-->