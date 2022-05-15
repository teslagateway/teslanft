<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h4>Satıcı Kodunuz: ( <strong><?=ucwords($_SESSION['satici_id'])?></strong> )</h4>
          <h1>
            <?=ucwords($_SESSION['satici_ad_soyad'])?>
            <small>Hoşgeldin | Satıcı Yönetim Paneline</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
             <?php $bilgi= Sorgu("SELECT * FROM satici");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Yöneticiler</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="yonetici-listele.html" class="small-box-footer">Yönetici Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM sayfalar");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Sayfa Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="sayfa-listele.html" class="small-box-footer">Sayfa Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM sss");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>S.S.S Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="sss-listele.html" class="small-box-footer">S.S.S Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6"style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM bilgiler");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Bilgiler Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="bilgiler-listele.html" class="small-box-footer">Bilgi Sayfa Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM reklam");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Reklam Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="reklam-listele.html" class="small-box-footer">Reklam Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM etiketler");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Etiket Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="etiket-listele.html" class="small-box-footer">Etiket Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM bloglar");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Blog Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-edit"></i>
                </div>
                <a href="blog-listele.html" class="small-box-footer">Blog Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
		           <?php $oranlar = Sorgu("SELECT * FROM oranlar");
                             $oranlarsonuc= Sonuc($oranlar);
                             ?>
		           <?php $saticiodeme = Sorgu("SELECT * FROM satici WHERE satici_id= '{$_SESSION['satici_id']}' ");
                               $odenentutar =0;
                               while($saticiodenen = Sonuc($saticiodeme)){

                                $odenentutar = $saticiodenen->satici_odenen;

                        }?>
             					<?php $SiparisSorguTopla = Sorgu("SELECT * FROM siparisler WHERE satici_kodu= '{$_SESSION['satici_id']}' ORDER BY id DESC");
                               $tutar =0;
                               while($SiparisSonucTopla = Sonuc($SiparisSorguTopla)){

                                $tutar = $tutar + $SiparisSonucTopla->fiyat*$oranlarsonuc->satici_orani/100;

                        } ?> 
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $tutar; ?> ETH</h3>
                  <p>Toplam Kazancım</p>
                </div>
                <div class="icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                <a href="kazanc-listele.html" class="small-box-footer">Kazanc Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM alt_urun_kategori");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $odenentutar; ?> ETH</h3>
                  <p>Toplam Ödenen</p>
                </div>
                <div class="icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                <a href="#" class="small-box-footer">Ödeme Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM urunler");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $tutar-$odenentutar; ?> ETH</h3>
                  <p>Kalan Kazanc</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tasks"></i>
                </div>
                <a href="#" class="small-box-footer">Kalan Kazanc Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM secenek_kategori");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Seçenek Kategori Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tasks"></i>
                </div>
                <a href="secenek-kategori-listele.html" class="small-box-footer">Seçenek Kategori Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM secenek");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Seçenek Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tasks"></i>
                </div>
                <a href="secenek-listele.html" class="small-box-footer">Seçenek Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
             <?php $bilgi= Sorgu("SELECT * FROM slider");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Slider Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-picture-o"></i>
                </div>
                <a href="slider-listele.html" class="small-box-footer">Slider Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM yorumlar");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Yorum Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-eye"></i>
                </div>
                <a href="yorum-listele.html" class="small-box-footer">Blog Yorum Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6" style="display: none">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM iletisim");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Mesaj Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <a href="mesajlar.html" class="small-box-footer">Mesajlar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <?php $bilgi= Sorgu("SELECT * FROM siparisler WHERE satici_kodu= '{$_SESSION['satici_id']}' ");
			 $mevcut = say($bilgi);?>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $mevcut; ?></h3>
                  <p>Sipariş Yönetimi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="siparis-listele.html" class="small-box-footer">Sipariş Listesi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <!-- /.row (main row) -->

        </section><!-- /.content -->
      </div>
      
      
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>