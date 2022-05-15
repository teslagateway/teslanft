<?php
include("system/ayar.php");
include("system/fonksiyon.php");
oturumkontrolana();
?>
<?php $id = g('id'); ?>
<?php $Siparis = Sonuc(Sorgu("SELECT * FROM siparisler WHERE id = '$id'"))?>
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
              	<strong>Ad Soyad </strong>: <?php echo $Siparis->isim;?><br>
              	<strong>Telefon </strong>: <?php echo $Siparis->telefon;?><br>
				<strong>Şehir </strong>: <?php echo $Siparis->sehir;?><br>
                <strong>İlçe </strong>: <?php echo $Siparis->ilce;?><br>
                <strong>Adres </strong>: <?php echo $Siparis->adres;?><br>
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
                    <th style="width:50px;">ID</th>
                    <th>Ürün Bilgisi</th>
                    <th style="width:90px;">Toplam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $Siparis->id;?></td>
                    <td><?php echo $Siparis->urun;?></td>
                    <td><?php echo number_format($Siparis->fiyat, 2, ',', '.');?> ₺</td>
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
                    <td style="font-size:30px;"><?php echo number_format($Siparis->fiyat, 2, ',', '.');?> ₺</td>
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