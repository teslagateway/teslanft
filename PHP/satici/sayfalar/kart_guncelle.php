<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('g_id'))
{

	$id 	= p('g_id');
	$key 	= p('g_key');
	$salt 	= p('g_salt');
	$success= p('g_success');
	$fail   = p('g_fail');

  $secenek = json_encode(
    array(
    "merchant_id" => $id,
    "merchant_key" => $key,
    "merchant_salt" => $salt,
    "success" => $success,
    "fail" => $fail
    )
  );

	
	$Banka_sorgu	=	Sorgu("UPDATE poslar SET
							secenek 		='$secenek'
							WHERE yontem 	= '1'");	
	if($Banka_sorgu){																							   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Güncellendi
                  </div>
	' ;
	}else{
	$bilgi = '  <div class="alert alert-danger alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Hata oluştu.Tekrar Deneyiniz.
                  </div>
	' ;	
	}
}


	$paytr = Sorgu("SELECT * FROM poslar WHERE yontem='1'");
	if(Say($paytr) > 0){
    $paytr = Sonuc($paytr);
    $p_sonuc = json_decode($paytr->secenek,true);
    
  }

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-cc-visa"></i> Paytr Hesap bilgileri</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Kredi Kartı bilgileri güncelle</li>
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
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="banka_adi">Merchant id (Mağza idsi)</label>
                      <input type="text" class="form-control" name="g_id" value="<?=$p_sonuc['merchant_id'];?>" id="banka_adi" placeholder="Merchant id (Mağza idsi)">
                    </div>
                    
                    <div class="form-group">
                      <label for="alici">Merchant key (Mağza anahtarı)</label>
                      <input type="text" class="form-control" name="g_key" value="<?=$p_sonuc['merchant_key'];?>" id="alici" placeholder="Merchant key (Mağza anahtarı)">
                    </div>
                    
                    <div class="form-group">
                      <label for="sube_adi">Merchant Salt</label>
                      <input type="text" class="form-control" name="g_salt" value="<?=$p_sonuc['merchant_salt'];?>" id="sube_adi" placeholder="Merchant Salt">
                    </div>

                    <div class="form-group">
                      <label for="sube_adi">Success Url</label>
                      <input type="text" class="form-control" name="g_success" value="<?=$p_sonuc['success'];?>" id="sube_adi" placeholder="Success Url">
                    </div>

                    <div class="form-group">
                      <label for="sube_adi">Fail Url</label>
                      <input type="text" class="form-control" name="g_fail" value="<?=$p_sonuc['fail'];?>" id="sube_adi" placeholder="Fail Url">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
						  <button type="submit" onclick="submit();" class="btn btn-primary">Güncelle</button>	
                  </div>
                </form>
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
    
    