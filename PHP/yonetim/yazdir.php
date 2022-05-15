<?php

include("system/ayar.php");

include("system/fonksiyon.php");

oturumkontrolana();

?>

<?php $id = g('id'); ?>

<?php $Siparis = Sonuc(Sorgu("SELECT * FROM siparisler WHERE id = '$id'"))?>

<?php $uyeler = Sonuc(Sorgu("SELECT * FROM uyeler WHERE id = '$Siparis->uyeid'"))?>

<?php $ogretmen= Sonuc(Sorgu("SELECT * FROM siparisler WHERE id = '$Siparis->ogretmen_kodu'"))?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">

    <title>Siparisler</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome Icons -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->

    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->

    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

  </head>

  <body onload="window.print();">

    <div class="wrapper">

      <!-- Main content -->

      <section class="invoice">

        <!-- title row -->

        <div class="row">

            <div class="col-xs-12">

              <h2 class="page-header">

                <i class="fa fa-arrow-circle-right"></i> Siparis bilgileri

                <small class="pull-right">Siparis Tarihi : <?php echo $Siparis->tarih;?></small>

              </h2>

            </div><!-- /.col -->

          </div>

        <!-- info row -->

        <div class="row invoice-info">

            <div class="col-sm-5 invoice-col">

              <h4>Müşteri Bilgileri</h4>

              <address>

                <strong>Ad Soyad </strong>: <?php echo $uyeler->ad;?> <?php echo $uyeler->soyad;?><br>

              	<strong>Telefon </strong>: <?php echo $uyeler->telefon;?><br>

                <strong>E-Mail </strong>: <?php echo $uyeler->email;?><br>

                <strong>Adres </strong>:  <address>

              	<?php $Sorgu = Sorgu("SELECT * FROM adres WHERE id = '$Siparis->adres'");

				while($Sonuc = Sonuc($Sorgu)){?>

				<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>

				<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>

				<?php echo $Sonuc->adres;?><br><?php echo $ilce->baslik;?> - <?php echo $il->baslik;?> <?php echo $Sonuc->postakodu;?>

				<?php }?>

              </address><br>

                <strong>IP </strong>: <?php echo $Siparis->ip;?><br>

              </address>

            </div><!-- /.col -->

            <div class="col-sm-7 invoice-col">

              <strong>Notunuz</strong>: <br><?php echo $Siparis->notunuz;?><br>

            </div><!-- /.col -->

          </div><!-- /.row -->



        <!-- Table row -->

        <div class="row">

            <div class="col-xs-12 table-responsive">

              <table class="table table-striped">

                <thead>

                  <tr>

                    <th>Ürün Adı</th>

                    <th>Adet</th>

                    <th>Fiyat</th>

                    <th style="width:90px;">Toplam</th>

                  </tr>

                </thead>

                <tbody>

                  <tr>
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

                  </tr>

                </tbody>

              </table>

            </div><!-- /.col -->

          </div><!-- /.row -->



        <div class="row">

          <!-- accepted payments column -->

          <div class="col-xs-8">

            <p class="lead">NOT</p>



              Bu bir fatura değildir. Siparisler bilgilerini kolayca görebilmeniz ve yazdırabilmeniz için oluşturulmuş bir sayfadır.

            </p>

          </div><!-- /.col -->

          <div class="col-xs-4">

              <p class="lead">Genel Toplam</p>

              <div class="table-responsive">

                <div class="table-responsive">

                <table class="table">

                  <tr>

                    <td style="font-size:30px;"><?php echo $Siparis->fiyat;?> ₺</td>

                  </tr>

                </table>

              </div>

              </div>

            </div><!-- /.col -->

        </div><!-- /.row -->

      </section><!-- /.content -->

    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->

    <script src="dist/js/app.min.js" type="text/javascript"></script>

  </body>

</html>