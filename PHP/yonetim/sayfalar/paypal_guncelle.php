<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('p_tc'))
{

	$p_tc 	= p('p_tc');
  $success   = p('g_success');
  $fail   = p('g_fail');

  $secenek = json_encode(
    array(
    "p_tc" => $p_tc,
    "success" => $success,
    "fail" => $fail
    )
  );

	
	$Banka_sorgu	=	Sorgu("UPDATE poslar SET
										secenek 	='$secenek'
                    WHERE
                    yontem = '2'
                    ");	
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


	$paypal = Sorgu("SELECT * FROM poslar WHERE yontem='2'");
  if(Say($paypal) > 0){
    $paypal = Sonuc($paypal);
    $p_sonuc = json_decode($paypal->secenek,true);
    
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
                      <label for="banka_adi">Paypal business (Ticari) hesap</label>
                      <input type="text" class="form-control" name="p_tc" value="<?=$p_sonuc['p_tc'];?>" id="banka_adi" placeholder="Paypal business (Ticari) hesap">
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
    
    