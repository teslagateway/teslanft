<?php $id = g('id'); ?>

<?php $Siparis = Sonuc(Sorgu("SELECT * FROM siparisler WHERE id = '$id'"))?>

<?php $uyeler = Sonuc(Sorgu("SELECT * FROM uyeler WHERE id = '$Siparis->uyeid'"))?>

<?php $ogretmen= Sonuc(Sorgu("SELECT * FROM siparisler WHERE id = '$Siparis->ogretmen_kodu'"))?>

<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            <small><i class="fa fa-th-list"></i> Tüm Siparişler</small>

          </h1>

          <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-home"></i> Anasayfa</a></li>

            <li class="active">Tüm Siparişler</li>

          </ol>

        </section>



        <!-- Main content -->

        <section class="invoice">

          <!-- title row -->

          <div class="row">

            <div class="col-xs-12">

              <h2 class="page-header">

                <i class="fa fa-arrow-circle-right"></i> Sipariş bilgileri

                <small class="pull-right">Sipariş Tarihi : <?php echo $Siparis->tarih;?></small>

              </h2>

            </div><!-- /.col -->

          </div>

          <!-- info row -->

          <div class="row invoice-info">

		  <div class="col-sm-6 invoice-col">

              <h4>Fatura ve Teslimat Bilgileri</h4>

              <address>

              	<?php $Sorgu = Sorgu("SELECT * FROM adres WHERE id = '$Siparis->adres'");

				while($Sonuc = Sonuc($Sorgu)){?>

				<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>

				<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>

				<?php echo $Sonuc->adres;?><br><?php echo $ilce->baslik;?> - <?php echo $il->baslik;?> <?php echo $Sonuc->postakodu;?>

				<?php }?>

              </address>

            </div><!-- /.col -->

            <div class="col-sm-6 invoice-col">

              <h4>Üye Müşteri Bilgisi</h4>

              <address>

              	<strong>Ad Soyad </strong>: <?php echo $uyeler->ad;?> <?php echo $uyeler->soyad;?><br>

              	<strong>Telefon </strong>: <?php echo $uyeler->telefon;?><br>

                <strong>E-Mail </strong>: <?php echo $uyeler->email;?><br>

                <strong>Cinsiyet </strong>: <?php echo $uyeler->cinsiyet;?><br>

                <strong>Doğum Tarihi </strong>: <?php echo $uyeler->gun;?> <?php echo $uyeler->ay;?> <?php echo $uyeler->yil;?><br>

                <strong>IP </strong>: <?php echo $Siparis->ip;?><br>

                 <h4>Öğretmen Bilgisi</h4>

                <strong>Üye Öğretmen Kodu </strong>: <span style="color:red; font-weight: bold;"><?php echo $Siparis->ogretmen_kodu;?> (Eğer 0 Değilse %10 İndirim Uygulanmıştır)</span>

                 <h4>Üyeliksiz Müşteri Bilgisi</h4>

              	<?php $Sorgu = Sorgu("SELECT * FROM adres WHERE adres_tipi = 'uyeliksiz'");

				while($Sonuc = Sonuc($Sorgu)){?>

				<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>

				<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>

				<strong>Ad Soyad :</strong> <?php echo $Sonuc->ad;?> <?php echo $Sonuc->soyad;?><br><strong>Telefon :</strong> <?php echo $Sonuc->ceptel;?><br><strong>Adres : </strong><?php echo $Sonuc->adres;?><br><?php echo $ilce->baslik;?> - <?php echo $il->baslik;?> <?php echo $Sonuc->postakodu;?>

				<?php }?> <br>

                <strong>Üyeliksiz Öğretmen Kodu </strong>: <span style="color:red; font-weight: bold;"><?php echo $Siparis->ogretmen_kodu;?> (Eğer 0 Değilse %10 İndirim Uygulanmıştır)</span>

              </address>

            </div><!-- /.col -->

          </div><!-- /.row -->



          <!-- Table row -->

          <div class="row">

            <div class="col-xs-12 table-responsive">

              <table class="table table-striped">

                <thead>

                  <tr>

                    <th>Ürün Bilgisi</th>

                    <th>Adet</th>

                    <th>Fiyat</th>

                    <th style="width:90px;">Toplam</th>

                  </tr>

                </thead>

                <tbody>

				<?php 

					$aratoplam = 0;

					$bol = explode("//",$Siparis->urun);

					foreach ($bol as $b) {

						$b = explode("|",$b);

						$c = explode("|",$b);

						if(gettype($b) == "array"){

							$sorguu = mysql_query("SELECT * FROM urunler WHERE id='$b[0]'");

							if(isset($secenekler) && is_array($secenekler)) $secenekler = "";

							$secenek  = json_decode($Siparis->secenek, true);

							if(is_array($secenek[$b[0]]) && count($secenek[$b[0]]) > 0){

								$secenek[$b[0]]['id'] = explode("|",$secenek[$b[0]]['id']);

								for ($i=0; $i < count($secenek[$b[0]]['id']) ; $i++) {

									$y = isset($secenek[$b[0]]['id'][$i]) ? $secenek[$b[0]]['id'][$i] : "0";

									$secbak = mysql_fetch_array(mysql_query("SELECT * FROM secenek WHERE id='$y'"));

									if($secbak){

										$xx = $secbak['kategori'];

										$baslik =mysql_fetch_array(mysql_query("SELECT * FROM secenek_kategori WHERE id='$xx'"));

										if($baslik){

											$secenekler[] = array("adi" => $secbak['adi'],"baslik" => $baslik['kategori_adi']);

										}

									}

								}	

							}

							if(mysql_num_rows($sorguu)>0) {?>

					<?php $uu = mysql_fetch_array($sorguu);?>

                  <tr>

                    <td><?php echo $uu['adi'];?> </br><?php 

					if(isset($secenekler) && is_array($secenekler)){

					foreach ($secenekler as $k) {

						echo "<strong>".$k['baslik']." :".$k['adi']."</strong><br>";

					 }

					} ?></td>

					<td><?php echo $b[1];?></td>

					<td><?php echo($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat'], 2, ',', '.').'' : ''.number_format($uu['fiyat'], 2, ',', '.').'');?> ₺</td>

                    <td><?php echo($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat']*$b[1], 2, ',', '.').'' : ''.number_format($uu['fiyat']*$b[1], 2, ',', '.').'');?> ₺</td>

                  </tr>

				<?php }}}?>

                </tbody>

              </table>

            </div><!-- /.col -->

          </div><!-- /.row -->



          <div class="row">

            <!-- accepted payments column -->

            <div class="col-xs-9">

              <p class="lead">Not</p>       

              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">

                Bu bir fatura değildir. Siparis bilgilerini kolayca görebilmeniz ve yazdırabilmeniz için oluşturulmuş bir sayfadır.

              </p>

            </div><!-- /.col -->

            <div class="col-xs-3">

              <p class="lead">Genel Toplam</p>

              <div class="table-responsive">

                <table class="table">

                  <tr>

                    <td style="font-size:30px;"><?php echo $Siparis->fiyat;?> ₺</td>

                  </tr>

                </table>

              </div>

            </div><!-- /.col -->

          </div><!-- /.row -->



          <!-- this row will not appear when printing -->
          <a href="yazdir.php?id=<?php echo $Siparis->id;?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Yazdır</a>

          <div class="row no-print">

        </section><!-- /.content -->

        <div class="clearfix"></div>

      </div><!-- /.content-wrapper -->

       <!-- jQuery 2.1.3 -->

    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>

    <!-- Bootstrap 3.3.2 JS -->

    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- DATA TABES SCRIPT -->

    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>

    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <!-- SlimScroll -->

    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- FastClick -->

    <script src='plugins/fastclick/fastclick.min.js'></script>

    <!-- AdminLTE App -->

    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->

    <script src="dist/js/demo.js" type="text/javascript"></script>

    <!-- page script -->

    <script type="text/javascript">

      $(function () {

        $("#example1").dataTable();

        $('#example2').dataTable({

          "bPaginate": true,

          "bLengthChange": false,

          "bFilter": false,

          "bSort": true,

          "bInfo": true,

          "bAutoWidth": false

        });

      });

    </script>