<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('sssadi') && g('islem')=="")
{
	$sssadi 	= $_POST['sssadi'];
	$durum 		= p('durum');
	$aciklama	= $_POST['aciklama'];
	$seo		= seo($sssadi);
	
	$sss_sorgu	=	mysql_query("INSERT INTO sss SET
										adi		=	'$sssadi', 
										seo		=	'$seo', 
										aciklama=	'$aciklama',
										durum	=	'$durum'");	
																								   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Eklenmiştir
                  </div>
		 ' ;
		
}


if(p('sssadi') && g('islem')=="duzenle")
{
	$sssadi 	= $_POST['sssadi'];
	$durum 		= p('durum');
	$d_id 		= g('id');
	$aciklama	= $_POST['aciklama'];
	$seo		= seo($sssadi);
	
		
	$sss_duzenle_sorgu = Sorgu("UPDATE sss SET 
								durum	=	'$durum', 
								aciklama=	'$aciklama', 
								seo		=	'$seo', 
								adi		=	'$sssadi' 
								where id=	'$d_id'");
	
				  $bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Güncellenmiştir !
                  </div>
		 ' ;
}


if($_GET['islem']=="duzenle")
{
	$sssid = $_GET['id'];	
	$durum = "duzenle" ;
	
	$sssSonuc = Sonuc(Sorgu("SELECT * FROM sss WHERE id='$sssid'"));
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-edit"></i> S.S.S Ekle / Güncelle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">S.S.S Ekle / Güncelle</li>
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
                      <label for="sssadi">S.S.S Adı</label>
                      <input type="text" class="form-control" name="sssadi" value="<?php echo $sssSonuc->adi;?>" id="sssadi" placeholder="S.S.S Adı">
                    </div>
                    
                    <?php if($_GET['islem']=="duzenle"){?>
					<div class="form-group">
						<label>Durumu</label> <br> 
						<input type="checkbox" name="durum" <?php if($sssSonuc->durum == '1') {?> checked <?php } ?> value="1">
					</div>
					<?php }else{?>
					<div class="form-group">
						<label>Durumu</label> <br> 
						<input type="checkbox" name="durum" value="1" checked>
					</div>
				  <?php } ?>
                  <div class="form-group">
                    <label for="icerik">İçerik</label>
                    <textarea class="ckeditor" id="summernote" name="aciklama" placeholder="İçerik Giriniz."><?php echo $sssSonuc->aciklama;?></textarea>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <?php if($_GET['islem']=="duzenle"){?>
						  <button type="submit" onclick="submit();" class="btn btn-primary">Güncelle</button>	
                    <?php }else{?>
						  <button type="submit" onclick="submit();" class="btn btn-primary">Kaydet</button>						
                   <?php } ?>
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
    <!-- include summernote css/js-->
	<link href="dist/css/summernote.css" rel="stylesheet">
	<script src="dist/js/summernote.js"></script>
    <script>
		var isEmpty = $('.summernote').summernote('isEmpty');
		$('#summernote').summernote({
		  height: 300,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                 // set focus to editable area after initializing summernote

		});
		
	</script>
	<link href="dist/css/bootstrap-switch.css" rel="stylesheet">
	<script src="dist/js/bootstrap-switch.js"></script>
	<script>
		$("[name='durum']").bootstrapSwitch();
	</script>

    
    