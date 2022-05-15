<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-ticket"></i> Ödeme Talep Formu</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Ödeme Talebi / Teknik Destek</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <?php echo $bilgi;?>
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="row">  
              <div class="col-md-12">
                <!-- form start -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
            <div class="box-footer">
            <form action="" method="POST" name="contactForm" id="contact_form">

                        <div class="form-selector">

                            <label>Satıcı Adı</label>

                            <input type="text" class="form-control input-sm" id="isim" name="isim" value="<?=ucwords($_SESSION['satici_ad_soyad'])?>" disabled>

                        </div>

                        <div class="form-selector">

                            <label>E-Mail Adresi</label>

                            <input type="text" class="form-control input-sm" id="email" name="email"  value="<?=ucwords($_SESSION['satici_email'])?>" disabled>

                        </div>

						<div class="form-selector">

                            <label>Konu Başlığı</label>

                            <select class="form-control input-sm" id="konu" name="konu">

                                <option value="Ödeme Talebi">Ödeme Talebi</option>

                                <option value="Teknik Destek">Teknik Destek</option>

                                <option value="Diğer">Diğer</option>

                            </select>

                        </div>

                        <div class="form-selector">

                            <label>Mesajınız</label>

                            <textarea class="form-control input-sm" rows="10" id="mesaj" name="mesaj"></textarea>

                        </div>

                        <div class="form-selector">

                            <button id="btn-send-contact" type="submit" class="btn">Gönder</button>

                        </div>

						</form>

<!-- Ödeme Bildirim -->
<?php 
include("system/vt.php"); 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
	
	$isim = $_POST['isim'];
	$email = $_POST['email'];
	$konu = $_POST['konu'];
	$mesaj = $_POST['mesaj'];
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
		
		if ($baglanti->query("INSERT INTO iletisim (isim, email, konu, mesaj, tarih, ip) VALUES ('$isim','$email','$konu','$mesaj','$tarih','$ip')")) // Veri ekleme sorgumuzu yazıyoruz.
		{
			echo "Talep Alındı. En Kısa Sürede Geri Dönüş Sağlanacaktır."; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
		}
		else
		{
			echo "Hata oluştu";
		}

	}



?>


            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->

              </div><!-- /.box -->
              </div>
</div>
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>
      
      <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>