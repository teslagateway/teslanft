<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
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
                    <span class="page-heading-title">Hesabım</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<p id="inform" class="bg-info">
						Hoşgeldiniz Sayın <strong><?php echo $_SESSION['ad'];?> <?php echo $_SESSION['soyad'];?></strong> (<?php echo $_SESSION['email'];?>)<br><br>
						Üyelik menüsünden siparişlerinizi takip edebilir, bilgilerinizi güncelleyebilirsiniz.<br>
						Uygulamaya koyduğumuz ticket sistemi ile artık sormuş olduğunuz soruları kendi hesabınızdan takip edebileceksiniz.
					</p>
					<ul id="menu">
					<li>
						<a href="uye-bilgilerim.html">
							<span><i class="fa fa-user fa-5x"></i></span>
							<span>Üyelik Bilgilerim</span>
						</a>
					</li>
					
					<li>
						<a href="siparislerim.html">
							<span><i class="fa fa-truck fa-5x"></i></span>
							<span>Siparişlerim</span>
						</a>
					</li>
					
					<li>
						<a href="adres.html">
							<span><i class="fa fa-book fa-5x"></i></span>
							<span>Adres Defteri</span>
						</a>
					</li>

					<li>
						<a href="sifre-degistir.html">
							<span><i class="fa fa-key fa-5x"></i></span>
							<span>Şifre Değiştir</span>
						</a>
					</li>
					
					<li>
						<a href="ticket.html">
							<span><i class="fa fa-envelope fa-5x"></i></span>
							<span>Ticket İşlemleri</span>
						</a>
					</li>
					
					<li>
						<a href="hesap-numaralari.html">
							<span><i class="fa fa-credit-card fa-5x"></i></span>
							<span>Hesap Numaraları</span>
						</a>
					</li>
									
								
					<li>
						<a href="uyelik-iptal.html">
							<span><i class="fa fa-user-times fa-5x"></i></span>
							<span>Üyelik İptali</span>
						</a>
					</li>
				</ul>
                </div>
                <!-- ./Content page -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- ./page wapper-->