<?php 

define("GUVENLIK",true);?>

<?php

include("yonetim/system/ayar.php");

include("yonetim/system/fonksiyon.php");

?>

<?php sepetekle();?>

<?php karsilastirmaekle();?>

<?php sepetsil();?>

<?php karsilastirmasil();?>

<?php

$STOPLAM = 0.00;

	if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 

		

     	 foreach($_SESSION["urunler"] as $key1 => $value1){

		   for($i=0; $i<count($key1)/2; $i++){

			$deger	= $value1["id"];

		   	$adet	= $value1["adet"];

		   	$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));

			if($SepetCek->yuzde == true){

                $sonuc = ($SepetCek->fiyat*$SepetCek->yuzde) / 100;

                $topla = intval($adet) * $SepetCek->fiyat-$sonuc;

				$STOPLAM += $topla;

                $topla = 0;

			}elseif($SepetCek->yuzde == "0"){

                $topla = intval($adet) * $SepetCek->fiyat;

				$STOPLAM += $topla;	

                $topla = 0;

				}

			}

		}

	}?>

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

<?php $url="https://".$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF']); ?>

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



<!-- HEADER -->
        <!-- header begin -->
        <header class="transparent header-light scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="/">
                                            <img alt="<?php echo $ayar->firma_adi; ?>" class="logo" src="assets/images/<?php echo $ayar->firma_logo;?>" />
                                            <img alt="<?php echo $ayar->firma_adi; ?>" class="logo-2" src="assets/images/<?php echo $ayar->firma_logo;?>" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
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
                                        <a href="#">Pages<span></span></a>
                                        <ul>
                                            <li><a href="author.html">Author</a></li>
                                            <li><a href="profile.html">Profile</a></li>
                                            <li><a href="wallet.html">Wallet</a></li>
                                            <li><a href="create-options.html">Create</a></li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="login-2.html">Login 2</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>                                    
                                    <li>
                                        <a href="#">Stats<span></span></a>
                                        <ul>
                                            <li><a href="activity.html">Activity</a></li>
                                            <li><a href="rankings.html">Rankings</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Elements<span></span></a>
                                        <ul>
                                            <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                            <li><a href="icons-etline.html">Etline Icons</a></li>
                                            <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                            <li><a href="accordion.html">Accordion</a></li> 
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="counters.html">Counters</a></li>
                                            <li><a href="modal.html">Modal</a></li>
                                            <li><a href="popover.html">Popover</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="progress-bar.html">Progress Bar</a></li>
                                            <li><a href="tabs.html">Tabs</a></li>
                                            <li><a href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="menu_side_area">
                                    <a href="wallet.html" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



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
                            <form action="" class="row form-dark" id="ebultenform" method="post" name="ebulten">
                                <div class="col text-center">
                                    <input class="form-control" id="ebulten" name="email" placeholder="E-posta Adresiniz" type="text"> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
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

    <!-- COOKIES NOTICE  -->
    <script src="js/cookit.js"></script>
     <script>
      $(document).ready(function() {
        $.cookit({
          backgroundColor: '#EEEEEE',
          messageColor: '#333333',
          linkColor: '#403f83',
          buttonColor: '#403f83',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "index.html",
          buttonText: "I accept",
        });
      });
    </script>

</body>


</html>