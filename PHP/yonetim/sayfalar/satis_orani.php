<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('satici_indirim_orani') && g('islem')=="")
{
	$satici_indirim_orani 	= p('satici_indirim_orani');
	$satici_orani 		= p('satici_orani');

	
	$oranlar_ekle_sorgu	=	Sorgu("UPDATE oranlar SET 
								        satici_indirim_orani	=	'$satici_indirim_orani',
									    satici_orani	=	'$satici_orani'");	
																								   
	$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Oranlar Başarı ile Güncellenmiştir !
                  </div>
		' ;
		
}

if(p('satici_indirim_orani') && g('islem')=="duzenle")
{
	$d_id 		= g('id');
	$satici_indirim_orani 	= p('satici_indirim_orani');
	$satici_orani 		= p('satici_orani');
	
	$oranlar_duzenle_sorgu = Sorgu("UPDATE oranlar SET 
									satici_indirim_orani	=	'$satici_indirim_orani',
									satici_orani	=	'$satici_orani', 
									WHERE oranlar_id	=	'$d_id'");
				  $bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Oranlar Başarı ile Güncellenmiştir !
                  </div>
		 ' ;
}

if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	$oranlar = Sonuc(Sorgu("SELECT * FROM oranlar WHERE oranlar_id='$sayfaid'"));
}

?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-users"></i> Satış Oranı Düzenleme / Güncelle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Satış Oranı Düzenle</li>
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
                      <label for="satici_indirim_orani">Satıcı İndirim Oranı</label>
                      <input type="text" class="form-control" name="satici_indirim_orani" value="<?php echo $oranlar->satici_indirim_orani;?>" id="satici_indirim_orani" placeholder="Satıcı İndirim Yüzdeliği">
                    </div>
                    
                    <div class="form-group">
                      <label for="satici_orani">Satıcı Yüzdelik Oranı</label>
                      <input type="text" class="form-control" name="satici_orani" value="<?php echo $oranlar->satici_orani;?>" id="satici_orani" placeholder="Satıcı Yüzdeliği">
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <?php if($_GET['islem']=="duzenle"){?>
						  <button type="submit" onclick="submit();" class="btn btn-primary">Kaydet</button>	
                    <?php }else{?>
						  <button type="submit" onclick="submit();" class="btn btn-primary">Güncelle</button>						
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
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>
    
    