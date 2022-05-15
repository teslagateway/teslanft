<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('baslik') && g('islem')=="duzenle")
{
	$baslik = p('baslik');
	$durum 	= p('durum');
	$d_id 	= g('id');
	
	$Yorum_duzenle_sorgu = Sorgu("UPDATE urun_yorum SET 
											durum	=	'$durum',  
											baslik	=	'$baslik' 
											where id=	'$d_id'");
	if($Yorum_duzenle_sorgu){
				  $bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Güncellenmiştir !
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

if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	$YorumSonuc = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE id='$sayfaid'"));
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-eye"></i>Ürün Yorum Düzenle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Ürün Yorum Düzenle</li>
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
                      <label for="baslik">Başlık</label>
                      <input type="text" class="form-control" name="baslik" value="<?php echo $YorumSonuc->baslik;?>" id="baslik" placeholder="Yorum Başlığı">
                    </div>
                    <div class="form-group">
                      <label for="mesaj">Yorum</label>
                      <input type="text" class="form-control" name="mesaj" value="<?php echo $YorumSonuc->yorum;?>" id="mesaj" placeholder="Yorum" style="height:auto;">
                    </div>
                    
                    <?php if($_GET['islem']=="duzenle"){?>
						<div class="form-group">
							<label>Durumu</label> <br> 
							<input type="checkbox" name="durum" <?php if($YorumSonuc->durum == '1') {?> checked <?php } ?> value="1">
						</div>
						<?php }else{?>
						<div class="form-group">
							<label>Durumu</label> <br> 
							<input type="checkbox" name="durum" value="1" checked>
						</div>
					<?php } ?>
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
    <link href="dist/css/bootstrap-switch.css" rel="stylesheet">
	<script src="dist/js/bootstrap-switch.js"></script>
	<script>
		$("[name='durum']").bootstrapSwitch();
	</script>
    
    