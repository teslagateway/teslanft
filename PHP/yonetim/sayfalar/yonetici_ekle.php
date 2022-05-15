<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('kadi') && g('islem')=="")
{
	$adsoyad 	= p('adsoyad');
	$email 		= p('email');
	$kadi 		= p('kadi');
	$sifre 		= p('sifre');
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	
	$yonetici_ekle_sorgu	=	Sorgu("INSERT INTO yonetici SET
										yonetici_ad_soyad	=	'$adsoyad',
										yonetici_kullanici	=	'$kadi', 
										yonetici_sifre		=	'$sifre', 
										yonetici_email		=	'$email',
										yonetici_son_giris	=	'$tarih'");	
																								   
	$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Yönetici Başarı ile Eklenmiştir !
                  </div>
		' ;
		
}


if(p('kadi') && g('islem')=="duzenle")
{
	$d_id 		= g('id');
	$adsoyad 	= p('adsoyad');
	$email 		= p('email');
	$kadi 		= p('kadi');
	$sifre 		= p('sifre');
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	$yonetici_duzenle_sorgu = Sorgu("UPDATE yonetici SET 
									yonetici_ad_soyad	=	'$adsoyad',
									yonetici_kullanici	=	'$kadi', 
									yonetici_sifre		=	'$sifre', 
									yonetici_email		=	'$email',
									yonetici_son_giris	=	'$tarih'
									WHERE yonetici_id	=	'$d_id'");
				  $bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Yönetici Başarı ile Güncellenmiştir !
                  </div>
		 ' ;
}

if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	$Yonetici = Sonuc(Sorgu("SELECT * FROM yonetici WHERE yonetici_id='$sayfaid'"));
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-users"></i> Yönetici Ekle / Güncelle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Yönetici Ekle</li>
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
                      <label for="adsoyad">Ad Soyad</label>
                      <input type="text" class="form-control" name="adsoyad" value="<?php echo $Yonetici->yonetici_ad_soyad;?>" id="adsoyad" placeholder="Ad Soyad">
                    </div>
                    
                    <div class="form-group">
                      <label for="email">E-Mail</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $Yonetici->yonetici_email;?>" id="email" placeholder="E-Mail">
                    </div>
                    
                    <div class="form-group">
                      <label for="kadi">Kullanıcı Adı</label>
                      <input type="text" class="form-control" name="kadi" value="<?php echo $Yonetici->yonetici_kullanici;?>" id="kadi" placeholder="Kullanıcı Adı">
                    </div>
                    
                    <div class="form-group">
                      <label for="sifre">Şifre</label>
                      <input type="text" class="form-control" name="sifre" value="<?php echo $Yonetici->yonetici_sifre;?>" id="sifre" placeholder="Şifre">
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
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>
    
    