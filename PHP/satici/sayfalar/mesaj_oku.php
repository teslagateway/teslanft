<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php 
$mesajSorgu = Sorgu("SELECT * FROM iletisim");
$mesajSonuc = Sonuc($mesajSorgu);
?>
<?php
$duzenlenecek_id = g('id');
$mesajlar	=	Sonuc(Sorgu("SELECT * FROM iletisim WHERE id = '$duzenlenecek_id'"));
if($_GET['islem']=="sil")
{
	$id = g('id');	
	$mesajsil = mysql_query("DELETE FROM iletisim WHERE id='$id'");
	 header("Location:mesajlar.html");
	   $bilgi = '  <div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				Başarı ile Silinmiştir !
	  </div>
	' ;
	
}
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mesaj Oku
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Mesaj Oku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
          <?php echo $bilgi;?>
            <div class="col-md-3">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Klasörler</h3>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="mesajlar.html"><i class="fa fa-inbox"></i> Gelen Kutusu <span class="label label-primary pull-right"><?php echo say($mesajSorgu);?></span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Mesaj Oku</h3>
                  <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3>Mesaj Konusu <?php echo $mesajlar->konu;?></h3>
                    <h5>Gönderen: <?php echo $mesajlar->email;?> <span class="mailbox-read-time pull-right"><?php echo $mesajlar->tarih;?></span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="?islem=sil&id=<?php echo $mesajlar->id;?>" title="Sil" onclick="return confirm('Silmek istediğinize emin misiniz ?')"><i class="fa fa-trash-o"></i></a>

                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Yazdır">
                    <i class="fa fa-print"></i></button>
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    <p><?php echo $mesajlar->mesaj;?></p>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <!-- /.box-footer -->
                <div class="box-footer">
                  <div class="pull-right">
                  </div>
                  <a class="btn btn-default" href="?islem=sil&id=<?php echo $mesajlar->id;?>" onclick="return confirm('Silmek istediğinize emin misiniz ?')"><i class="fa fa-trash-o"></i> Sil</a>
                  <button class="btn btn-default"><i class="fa fa-print"></i> Yazdır</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
      <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>