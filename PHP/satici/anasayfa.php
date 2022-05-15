<?php define("GUVENLIK",true);?>
<?php
include("system/ayar.php");
include("system/fonksiyon.php");
oturumkontrolana();
?>
<?php 
$mesajSorgu = Sorgu("SELECT * FROM iletisim");
$mesajSonuc = Sonuc($mesajSorgu);
?>
<?php
if(isset($_GET['cikis'])){
	session_destroy();
	header("Location:anasayfa.html");
}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TeslaGate ® | Yönetim Paneli</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
     <!-- fileUploads -->
     <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-fileupload.min.css" />
      <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="dist/js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="dist/js/iCheck/skins/square/green.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="dist/jquery-ui.css" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="layout-boxed fixed skin-green">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="anasayfa.html" class="logo"><b>TeslaGate ® | </b>Satıcı</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu" style="display: none;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"><?php echo say($mesajSorgu);?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?php echo say($mesajSorgu);?> Mesaj Var</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                     <?php $MesajSorgu = Sorgu("SELECT * FROM iletisim");
					 while($MesajSonuc = Sonuc($MesajSorgu)){?>
                      <li><!-- start message -->
                        <a href="mesaj-oku.html?id=<?php echo $MesajSonuc->id; ?>">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            <?php echo $MesajSonuc->isim; ?>
                            <small><i class="fa fa-clock-o"></i> <?php echo $MesajSonuc->tarih; ?></small>
                          </h4>
                          <p><?php echo kisalt($MesajSonuc->mesaj,30); ?></p>
                        </a>
                      </li><!-- end message -->
                      <?php }?>
                    </ul>
                  </li>
                  <li class="footer"><a href="mesajlar.html">Tüm Mesajları Gör</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu" style="display: none;">
                <a href="site-ayar.html" class="dropdown-toggle">
                  <i class="fa fa-wrench"></i>
                </a>
              </li>
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a target="_blank" href="../anasayfa.html" class="dropdown-toggle">
                  <i class="fa fa-hand-o-right"></i>
                  <span class="hidden-xs">Site Önizleme</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÜLER</li>
            <!---------------------------------------------------------------------------->
            <li class="treeview">
              <a href="anasayfa.html">
                <i class="fa fa-home"></i>
                <span>Anasayfa</span>
              </a>
            </li>
            <!---------------------------------------------------------------------------->
            <li class="treeview <?php echo aktif("siparis.html"); ?> <?php echo aktif("siparis-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Sipariş Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("siparis-listele.html"); ?>">
                	<a href="siparis-listele.html"><i class="fa fa-circle-o"></i> Sipariş Listesi</a>
                </li>
              </ul>
            </li>
            <!------------------------------------------------------------------------
            <li class="treeview <?php echo aktif("sayfa-ekle.html"); ?> <?php echo aktif("sayfa-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Sayfa Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("sayfa-ekle.html"); ?>">
                	<a href="sayfa-ekle.html"><i class="fa fa-circle-o"></i> Sayfa Ekle</a>
                </li>
                <li class="<?php echo aktif("sayfa-listele.html"); ?>">
                	<a href="sayfa-listele.html"><i class="fa fa-circle-o"></i> Sayfa Listesi</a>
                </li>
              </ul>
            </li>
			<!------------------------------------------------------------------------
            <li class="treeview <?php echo aktif("sss-ekle.html"); ?> <?php echo aktif("sss-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-book"></i> <span>S.S.S Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("sss-ekle.html"); ?>">
                	<a href="sss-ekle.html"><i class="fa fa-circle-o"></i> S.S.S Ekle</a>
                </li>
                <li class="<?php echo aktif("sss-listele.html"); ?>">
                	<a href="sss-listele.html"><i class="fa fa-circle-o"></i> S.S.S Listesi</a>
                </li>
              </ul>
            </li>
			<!---------------------------------------------------------------------
            <li class="treeview <?php echo aktif("bilgiler-ekle.html"); ?> <?php echo aktif("bilgiler-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Bilgiler Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("bilgiler-ekle.html"); ?>">
                	<a href="bilgiler-ekle.html"><i class="fa fa-circle-o"></i> Bilgi Sayfa Ekle</a>
                </li>
                <li class="<?php echo aktif("bilgiler-listele.html"); ?>">
                	<a href="bilgiler-listele.html"><i class="fa fa-circle-o"></i>Bilgi Sayfa Listesi</a>
                </li>
              </ul>
            </li>
			<!--------------------------------------------------------------------
            <li class="treeview <?php echo aktif("nft-ekle.html"); ?> <?php echo aktif("nft-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-eye"></i> <span>NFT Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="<?php echo aktif("nft-ekle.html"); ?>">
                	<a href="nft-ekle.html"><i class="fa fa-circle-o"></i> NFT Ekle</a>
                </li>
                <li class="<?php echo aktif("nft-listele.html"); ?>">
                	<a href="nft-listele.html"><i class="fa fa-circle-o"></i> NFT Listesi</a>
                </li>
              </ul>
            </li>
			<!----------------------------------------------------------------------
           
            <li class="treeview <?php echo aktif("blog-ekle.html"); ?> <?php echo aktif("blog-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-bullhorn"></i> <span>Blog Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("blog-ekle.html"); ?>">
                	<a href="blog-ekle.html"><i class="fa fa-circle-o"></i> Blog Ekle</a>
                </li>
                <li class="<?php echo aktif("blog-listele.html"); ?>">
                	<a href="blog-listele.html"><i class="fa fa-circle-o"></i> Blog Listesi</a>
                </li>
              </ul>
            </li>
            <!----------------------------------------------------------->
            <li class="treeview <?php echo aktif("urun-kategori-ekle.html"); ?> <?php echo aktif("urun-kategori-listele.html"); ?> <?php echo aktif("urun-alt-kategori-ekle.html"); ?> <?php echo aktif("urun-alt-kategori-listele.html"); ?> <?php echo aktif("urun-ekle.html"); ?> <?php echo aktif("urun-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Ürün Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("urun-kategori-ekle.html"); ?>">
                	<a href="urun-kategori-ekle.html"><i class="fa fa-circle-o"></i> Kategori Ekle</a>
                </li>
                <li class="<?php echo aktif("urun-kategori-listele.html"); ?>">
                	<a href="urun-kategori-listele.html"><i class="fa fa-circle-o"></i> Kategori Listesi</a>
                </li>
				<li class="<?php echo aktif("urun-alt-kategori-ekle.html"); ?>">
                	<a href="urun-alt-kategori-ekle.html"><i class="fa fa-circle-o"></i>Alt Kategori Ekle</a>
                </li>
                <li class="<?php echo aktif("urun-alt-kategori-listele.html"); ?>">
                	<a href="urun-alt-kategori-listele.html"><i class="fa fa-circle-o"></i>Alt Kategori Listesi</a>
                </li>
                <li class="<?php echo aktif("urun-ekle.html"); ?>">
                	<a href="urun-ekle.html"><i class="fa fa-circle-o"></i> Ürün Ekle</a>
                </li>
                <li class="<?php echo aktif("urun-listele.html"); ?>">
                	<a href="urun-listele.html"><i class="fa fa-circle-o"></i> Ürün Listesi</a>
                </li>
              </ul>
            </li>
			<!----------------------------------------------------------------
            <li class="treeview <?php echo aktif("secenek-kategori-ekle.html"); ?> <?php echo aktif("secenek-kategori-listele.html"); ?> <?php echo aktif("secenek-ekle.html"); ?> <?php echo aktif("secenek-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-check-square-o"></i> <span>Seçenek Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="<?php echo aktif("secenek-kategori-ekle.html"); ?>">
                	<a href="secenek-kategori-ekle.html"><i class="fa fa-circle-o"></i> Seçenek Kategori Ekle</a>
                </li>
				<li class="<?php echo aktif("secenek-kategori-listele.html"); ?>">
                	<a href="secenek-kategori-listele.html"><i class="fa fa-circle-o"></i> Seçenek Kategori Listele</a>
                </li>
                <li class="<?php echo aktif("secenek-ekle.html"); ?>">
                	<a href="secenek-ekle.html"><i class="fa fa-circle-o"></i> Seçenek Ekle</a>
                </li>
                <li class="<?php echo aktif("secenek-listele.html"); ?>">
                	<a href="secenek-listele.html"><i class="fa fa-circle-o"></i> Seçenek Listesi</a>
                </li>
              </ul>
            </li>
            <!-------------------------------------------------------
            <li class="treeview <?php echo aktif("slider-ekle.html"); ?> <?php echo aktif("slider-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-picture-o"></i> <span>Slider Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("slider-ekle.html"); ?>">
                	<a href="slider-ekle.html"><i class="fa fa-circle-o"></i> Slider Ekle</a>
                </li>
                <li class="<?php echo aktif("slider-listele.html"); ?>">
                	<a href="slider-listele.html"><i class="fa fa-circle-o"></i> Slider Listesi</a>
                </li>
              </ul>
            </li>
            <!---------------------------------------------------->
            <li class="treeview <?php echo aktif("yorum-ekle.html"); ?> <?php echo aktif("yorum-listele.html"); ?> <?php echo aktif("urun-yorum-ekle.html"); ?> <?php echo aktif("kazanc-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-eye"></i> <span>Kazanç Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("yorum-listele.html"); ?> <?php echo aktif("yorum-ekle.html"); ?>">
<!--                 	<a href="yorum-listele.html"><i class="fa fa-circle-o"></i>Blog Yorum Listesi</a>
 -->                </li> 
				<li class="<?php echo aktif("kazanc-ekle.html"); ?> <?php echo aktif("kazanc-listele.html"); ?>">
                	<a href="kazanc-listele.html"><i class="fa fa-circle-o"></i>Toplam Kazancım</a>
                </li>
              </ul>
            </li>
			<!---------------------------------------------------------------------------->
            <li class="treeview <?php echo aktif("fiyat-talebi.html"); ?>">
              <a href="#">
                <i class="fa fa-ticket"></i> <span>Ödeme Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("fiyat-talebi.html"); ?>">
                	<a href="fiyat-talebi.html"><i class="fa fa-circle-o"></i> Ödeme Talebinde Bulun</a>
                </li>
              </ul>
            </li>
            <!---------------------------------------------------------------------
             <li class="<?php echo aktif("mesajlar.html"); ?> <?php echo aktif("mesaj-oku.html"); ?>">
              <a href="mesajlar.html">
                <i class="fa fa-envelope-o"></i> <span>Mesajlar</span>
              </a>
            </li>
			<!----------------------------------------------------------
            <li class="treeview <?php echo aktif("hesap-ekle.html"); ?> <?php echo aktif("hesap-listele.html"); ?> <?php echo aktif("paypal-guncelle.html"); ?> <?php echo aktif("kart-guncelle.html"); ?>">
              <a href="#">
                <i class="fa fa-credit-card"></i> <span>Ödeme Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("hesap-ekle.html"); ?>">
                	<a href="hesap-ekle.html"><i class="fa fa-circle-o"></i> Hesap Numarası Ekle</a>
                </li>
				<li class="<?php echo aktif("hesap-listele.html"); ?>">
                	<a href="hesap-listele.html"><i class="fa fa-circle-o"></i> Hesap Numarası Listele</a>
                </li>
				<li class="<?php echo aktif("kart-guncelle.html"); ?>">
                	<a href="kart-guncelle.html"><i class="fa fa-circle-o"></i> Kredi Kartı Bilgi Güncelle</a>
                </li>
				<li class="<?php echo aktif("paypal-guncelle.html"); ?>">
                	<a href="paypal-guncelle.html"><i class="fa fa-circle-o"></i> Paypal Bilgi Güncelle</a>
                </li>
              </ul>
            </li>
            <!-------------------------------------------------------------
            <li class="treeview <?php echo aktif("site-ayar.html"); ?> <?php echo aktif("yonetici-ekle.html"); ?> <?php echo aktif("yonetici-listele.html"); ?>">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Site Yönetimi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo aktif("site-ayar.html"); ?>">
                	<a href="site-ayar.html"><i class="fa fa-circle-o"></i> Site Ayarları</a>
                </li>
                <li class="<?php echo aktif("yonetici-ekle.html"); ?>">
                	<a href="yonetici-ekle.html"><i class="fa fa-circle-o"></i> Yeni Yönetici Ekleme</a>
                </li>
                <li class="<?php echo aktif("yonetici-listele.html"); ?>">
                	<a href="yonetici-listele.html"><i class="fa fa-circle-o"></i> Yönetici Listesi</a></li>
              </ul>
            </li>
            <!---------------------------------------------------------------------------->
            <li>
              <a href="?cikis=1">
                <i class="fa fa-sign-out"></i> <span>Oturumu Kapat</span>
              </a>
            </li>
            <!---------------------------------------------------------------------------->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <?php 
	if(isset($_GET['sayfa'])){
		$s = $_GET['sayfa'];
		switch($s){
			
		case 'anasayfa';
		require_once("sayfalar/home.php");
		break;
		
		case 'sayfa-ekle';
		require_once("sayfalar/sayfa_ekle.php");
		break;
		
		case 'fiyat-talebi';
		require_once("sayfalar/fiyat_talebi.php");
		break;

		case 'fiyat-ilet';
		require_once("sayfalar/fiyat_ilet.php");
		break;

		case 'sayfa-listele';
		require_once("sayfalar/sayfa_listele.php");
		break;
		
		case 'etiket-ekle';
		require_once("sayfalar/etiket_ekle.php");
		break;
		
		case 'etiket-listele';
		require_once("sayfalar/etiket_listele.php");
		break;
		
		case 'ticket-cevapla';
		require_once("sayfalar/ticket_ekle.php");
		break;
		
		case 'ticket-listele';
		require_once("sayfalar/ticket_listele.php");
		break;
		
		case 'reklam-ekle';
		require_once("sayfalar/reklam_ekle.php");
		break;
		
		case 'reklam-listele';
		require_once("sayfalar/reklam_listele.php");
		break;
		
		case 'bilgiler-ekle';
		require_once("sayfalar/bilgiler_ekle.php");
		break;
		
		case 'bilgiler-listele';
		require_once("sayfalar/bilgiler_listele.php");
		break;
		
		case 'blog-ekle';
		require_once("sayfalar/blog_ekle.php");
		break;
		
		case 'blog-listele';
		require_once("sayfalar/blog_listele.php");
		break;
		
		case 'siparis-listele';
		require_once("sayfalar/siparis_listele.php");
		break;
		
		case 'siparis';
		require_once("sayfalar/siparis.php");
		break;

		case 'secenek-kategori-ekle';
		require_once("sayfalar/secenek_kategori_ekle.php");
		break;
		
		case 'secenek-kategori-listele';
		require_once("sayfalar/secenek_kategori_listele.php");
		break;
		
		case 'secenek-ekle';
		require_once("sayfalar/secenek_ekle.php");
		break;
		
		case 'secenek-listele';
		require_once("sayfalar/secenek_listele.php");
		break;
		
		case 'urun-kategori-ekle';
		require_once("sayfalar/urun_kategori_ekle.php");
		break;
		
		case 'urun-kategori-listele';
		require_once("sayfalar/urun_kategori_listele.php");
		break;
		
		case 'urun-alt-kategori-ekle';
		require_once("sayfalar/urun_alt_kategori_ekle.php");
		break;
		
		case 'urun-alt-kategori-listele';
		require_once("sayfalar/urun_alt_kategori_listele.php");
		break;
		
		case 'urun-ekle';
		require_once("sayfalar/urun_ekle.php");
		break;
		
		case 'urun-listele';
		require_once("sayfalar/urun_listele.php");
		break;
		
		case 'slider-ekle';
		require_once("sayfalar/slider_ekle.php");
		break;
		
		case 'slider-listele';
		require_once("sayfalar/slider_listele.php");
		break;
		
		case 'yorum-ekle';
		require_once("sayfalar/yorum_ekle.php");
		break;
		
		case 'kazanc-listele';
		require_once("sayfalar/kazanc_listele.php");
		break;
		
		case 'urun-yorum-ekle';
		require_once("sayfalar/urun_yorum_ekle.php");
		break;
		
		case 'urun-yorum-listele';
		require_once("sayfalar/urun_yorum_listele.php");
		break;
		
		case 'site-ayar';
		require_once("sayfalar/site_ayar.php");
		break;
		
		case 'mesajlar';
		require_once("sayfalar/mesajlar.php");
		break;
		
		case 'mesaj-oku';
		require_once("sayfalar/mesaj_oku.php");
		break;
		
		case 'yonetici-ekle';
		require_once("sayfalar/yonetici_ekle.php");
		break;
		
		case 'yonetici-listele';
		require_once("sayfalar/yonetici_listele.php");
		break;
		
		case 'sss-ekle';
		require_once("sayfalar/sss_ekle.php");
		break;
		
		case 'sss-listele';
		require_once("sayfalar/sss_listele.php");
		break;
		
		case 'hesap-ekle';
		require_once("sayfalar/hesap_ekle.php");
		break;
		
		case 'hesap-listele';
		require_once("sayfalar/hesap_listele.php");
		break;
		
		case 'kart-guncelle';
		require_once("sayfalar/kart_guncelle.php");
		break;

		case 'paypal-guncelle';
		require_once("sayfalar/paypal_guncelle.php");
		break;
					
		default:
		require_once("sayfalar/home.php");
		}
	}else{
	require_once("sayfalar/home.php");
}
?> 
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">

        </div>
        <strong><a href="https://www.teslagateway.com/" target="_blank">Copyright 2001 - 2022 TeslaGate® - Robotic Coding and Information Technologies All Rights Reserved.</a></strong>
      </footer>
    </div><!-- ./wrapper -->
    <!--file upload-->
	<script type="text/javascript" src="dist/js/bootstrap-fileupload.min.js"></script>
    <!--icheck -->
	<script src="dist/js/iCheck/jquery.icheck.js"></script>
	<script src="dist/js/icheck-init.js"></script>
	<script src="kategori.js" type="text/javascript"></script> 
  </body>
</html>