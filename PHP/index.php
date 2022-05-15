<?php 

define("GUVENLIK",true);?>

<?php

include("yonetim/system/ayar.php");

include("yonetim/system/fonksiyon.php");

?>

<?php

if(isset($_GET['bosalt'])){

	session_destroy();

	 header('Location:'.$_SERVER['HTTP_REFERER']);

}?>

<?php

if(isset($_GET['cikis'])){

	unset($_SESSION['uyeid']);

	unset($_SESSION['email']);

	unset($_SESSION['isim']);

	header("Location:index.html");

}?>

<?php $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

	<base href="<?php echo $url;?>">
<head>
    <title><?php echo $ayar->site_title; ?></title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?php echo $ayar->site_desc; ?>" name="description" />
    <meta content="<?php echo $ayar->site_meta; ?>" name="keywords" />
    <meta content="<?php echo $ayar->firma_adi; ?>" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

</head>

        <!-- header begin -->
        <header class="transparent header-light scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo" style="background-size: cover;margin-left: -90px;">
                                        <a href="/">
                                            <img alt="<?php echo $ayar->firma_adi; ?>" class="logo" src="assets/images/<?php echo $ayar->firma_logo;?>" />
                                            <img alt="<?php echo $ayar->firma_adi; ?>" class="logo-2" src="assets/images/<?php echo $ayar->firma_logo;?>" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="öğeyi burada ara..." type="text" style="margin-left: 50px;">
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="/">Ana Sayfa<span></span></a>
                                    </li>
                                    <li>
                                        <a href="/">Kategoriler<span></span></a>
                                        <ul>
                           <?php $Sorgu = Sorgu("SELECT * FROM urun_kategori WHERE durum = '1' ORDER BY id ASC LIMIT 11");

							while($Sonuc = Sonuc($Sorgu)){?>

							<?php $varmi = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>

							<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>

                            <li>

                                <a class="<?php echo($varmi->id > 0 ? 'parent' : 'cat-link-orther');?>" href="Kategori/<?php echo $link->seo;?>.html"><i class="<?php echo $Sonuc->icon;?>"></i> <?php echo $Sonuc->kategori_adi;?></a>

									<?php $AltSorgu = Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' ORDER BY sira ASC");

										if(!mysql_affected_rows()){

											

										}else{

											echo '

											<div class="vertical-dropdown-menu" style="width: 100% !important;">

											<div class="vertical-groups col-sm-12">

											<div class="mega-group col-sm-12">

                                            <h4 class="mega-group-header"><span>Tüm Alt Kategoriler</span></h4>

                                            <ul class="group-link-default">';

											while($AltSonuc = Sonuc($AltSorgu)){?>

                                                <li><a href="Kategori/<?php echo $AltSonuc->seo;?>.html"><?php echo $AltSonuc->kategori_adi;?></a></li>

											<?php } echo '</ul></div></div></div>';?>

									<?php }?>       

                            </li>

							<?php }?>

							<?php $Sorgu = Sorgu("SELECT * FROM urun_kategori WHERE durum = '1' ORDER BY id ASC LIMIT 11 , 5000");

							while($Sonuc = Sonuc($Sorgu)){?>

							<?php $varmi = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>

							<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>

                            <li class="cat-link-orther">

                                <a class="<?php echo($varmi->id > 0 ? 'parent' : 'cat-link-orther');?>" href="Kategori/<?php echo $link->seo;?>.html"><i class="<?php echo $Sonuc->icon;?>"></i> <?php echo $Sonuc->kategori_adi;?></a>

								<?php $AltSorgu = Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' ORDER BY sira ASC");

										if(!mysql_affected_rows()){

											

										}else{

											echo '

											<div class="vertical-dropdown-menu" style="width: 100% !important;">

											<div class="vertical-groups col-sm-12">

											<div class="mega-group col-sm-12">

                                            <h4 class="mega-group-header"><span>Tüm Alt Kategoriler</span></h4>

                                            <ul class="group-link-default">';

											while($AltSonuc = Sonuc($AltSorgu)){?>

                                                <li><a href="Kategori/<?php echo $AltSonuc->seo;?>.html"><?php echo $AltSonuc->kategori_adi;?></a></li>

											<?php } echo '</ul></div></div></div>';?>

									<?php }?> 

                            </li>

							<?php } ?>
                                        </ul>
                                    </li>                                
                                    <li>
                                        <a href="blog.html">Blog<span></span></a>
                                    </li>
                                    <li>
                                </ul>
                                <div class="menu_side_area">
                                    <button onclick="userLoginOut()" id="buttonText" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span> Cüzdanı Bağla</span></button>
                                    <span id="menu-btn"></span>
                                </div>
                                <div class="menu_side_area">
                                    <a href="/satici/" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Satıcı Paneli</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                                <div class="menu_side_area">
                                    <a href="nft-olustur.html" class="btn-main btn-wallet"><i class="icon_wallet_alt" style="background: green;"></i><span>NFT Oluştur</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
  
<?php 

	if(isset($_GET['sayfa'])){

		$s = $_GET['sayfa'];

		switch($s){

			

		case 'anasayfa';

		require_once("sayfalar/anasayfa.php");

		break;

		

		case 'ara';

		require_once("sayfalar/ara.php");

		break;

		

		case 'blog';

		require_once("sayfalar/blog.php");

		break;

		

		case 'blog-detay';

		require_once("sayfalar/blog_detay.php");

		break;

		

		case 'kategori';

		require_once("sayfalar/kategori.php");

		break;
		

		case 'sss';

		require_once("sayfalar/sss.php");

		break;

		

		case 'urun-detay';

		require_once("sayfalar/urun_detay.php");

		break;

		

		case 'uye-bilgilerim';

		require_once("sayfalar/uye_bilgilerim.php");

		break;

		

		case 'siparislerim';

		require_once("sayfalar/siparislerim.php");

		break;

		

		case 'siparis-detay';

		require_once("sayfalar/siparis_detay.php");

		break;

		

		case 'sifre-degistir';

		require_once("sayfalar/sifre_degistir.php");

		break;

		

		case 'iletisim';

		require_once("sayfalar/iletisim.php");

		break;


		case 'hesabim';

		require_once("sayfalar/hesabim.php");

		break;
		

		case 'giris';

		require_once("sayfalar/giris.php");

		break;

		case 'nft-olustur';

		require_once("sayfalar/nft_olustur.php");

		break;


		case 'uye-ol';

		require_once("sayfalar/uyeol.php");

		break;

		

		case 'sayfalar';

		require_once("sayfalar/sayfalar.php");

		break;

		

		case 'bilgiler';

		require_once("sayfalar/bilgiler.php");

		break;

		

		case 'ticket';

		require_once("sayfalar/ticket.php");

		break;

		

		case 'ticket-olustur';

		require_once("sayfalar/ticket_olustur.php");

		break;

		

		case 'ticket-oku';

		require_once("sayfalar/ticket_oku.php");

		break;



		case 'ara';

		require_once("sayfalar/ara.php");

		break;

		

		default:

		require_once("sayfalar/anasayfa.php");

		}

	}else{

	require_once("sayfalar/anasayfa.php");

}

?> 



<!-- Footer -->
    <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Kurumsal</h5>
                            <ul>
                              <?php sayfalar();?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Bilgiler</h5>
                            <ul>
                               <?php bilgiler();?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>YARDIM & DESTEK</h5>
                            <ul>
                                <li><a href="sss-html">Sıkça Sorulan Sorular</a></li>

                                <li><a href="ticket.html">Destek Talebi Gönder</a></li>

                                <li><a href="iletisim.html">Bize Ulaşın</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>E-BÜLTEN ABONELİĞİ</h5>
                            <p>Gelen kutunuzda en son haberleri almak için bültenimize kaydolun.</p>
                            <form action="" class="row form-dark" id="form_subscribe" method="post" name="ebulten">
                                <div class="col text-center" style="background-size: cover;">
                                    <input class="form-control" id="ebulten" name="email" placeholder="e-posta adresiniz" type="text"> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix" style="background-size: cover;"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>E-postanız bizimle güvende. Spam yapmıyoruz.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="/">
                                        <span class="copy"><?php echo $ayar->copyright; ?></span> 
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="<?php echo $ayar->facebook; ?>"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="<?php echo $ayar->twitter; ?>"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="<?php echo $ayar->gplus; ?>"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="<?php echo $ayar->pinterest; ?>"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="<?php echo $ayar->instagram; ?>"><i class="fa fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
		
	<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
	<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script src="api/frontend/web3-login.js?v=009"></script>
	<script src="api/frontend/web3-modal.js?v=001"></script>

    <!-- COOKIES NOTICE  -->
    <script src="js/cookit.js"></script>
     <script>
      $(document).ready(function() {
        $.cookit({
          backgroundColor: '#EEEEEE',
          messageColor: '#333333',
          linkColor: '#403f83',
          buttonColor: '#403f83',
          messageText: "Bu web sitesi, web sitemizde en iyi deneyimi yaşamanızı sağlamak için çerezleri kullanır.",
          linkText: "Learn more",
          linkUrl: "index.html",
          buttonText: "Kabul ediyorum",
        });
      });
    </script>

</body>

</html>