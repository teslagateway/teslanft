<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('kategori_adi') && g('islem')=="")
{
	$kategori_adi 	= $_POST['kategori_adi'];
	$icon		 	= $_POST['icon'];
	$durum 			= $_POST['durum'];
	$seo			= seo($kategori_adi);
	
	include_once('class.upload.php');
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/urunkategori");
	
	$upload->file_auto_rename = true;
	$upload->image_resize = true;
	$upload->image_ratio_crop = true;
	$upload->image_x = 167;
	$upload->image_y = 142;
	$upload->process("../uploads/urunkategori/kucuk");
	
	if ($upload->processed){
	$UrunKategoriResim=''.$upload->file_dst_name.'';
	}
	}
	$gitti1	=$UrunKategoriResim=''.$upload->file_dst_name.'';
	
	$kategori_sorgu	=	mysql_query("INSERT INTO urun_kategori SET
										kategori_adi	=	'$kategori_adi',
										resim			=	'$UrunKategoriResim', 
										icon			=	'$icon',
										seo				=	'$seo', 
										durum			=	'$durum'");	
																								   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Eklenmiştir
                  </div>
		 ' ;
		
}


if(p('kategori_adi') && g('islem')=="duzenle")
{
	$kategori_adi 	= $_POST['kategori_adi'];
	$icon		 	= $_POST['icon'];
	$durum 			= $_POST['durum'];
	$d_id 			= g('id');
	$seo			= seo($kategori_adi);
	
	include_once('class.upload.php');
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/urunkategori");
	
	$upload->file_auto_rename = true;
	$upload->image_resize = true;
	$upload->image_ratio_crop = true;
	$upload->image_x = 167;
	$upload->image_y = 142;
	$upload->process("../uploads/urunkategori/kucuk");
	
	if ($upload->processed){
	$UrunKategoriResim=''.$upload->file_dst_name.'';
	}
	}
	$gitti1	=$UrunKategoriResim=''.$upload->file_dst_name.'';
	
	if($UrunKategoriResim!="")
	{
		$resim_bul	=	Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE id='$d_id'"));
		$resim_sil	=	unlink("../uploads/urunkategori/kucuk/".$resim_bul->resim);
		$resim_sil	=	unlink("../uploads/urunkategori/".$resim_bul->resim);
	
		$kategori_duzenle_sorgu = Sorgu("UPDATE urun_kategori SET 
											kategori_adi	=	'$kategori_adi', 
											resim			=	'$UrunKategoriResim',
											icon			=	'$icon', 
											seo				=	'$seo', 
											durum			=	'$durum' 
											WHERE id		=	'$d_id'");
	}else{
		$kategori_duzenle_sorgu = Sorgu("UPDATE urun_kategori SET 
											kategori_adi	=	'$kategori_adi', 
											icon			=	'$icon', 
											seo				=	'$seo', 
											durum			=	'$durum' 
											WHERE id		=	'$d_id'");
		
	}if($kategori_duzenle_sorgu){
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Güncellenmiştir !
                  </div>
		 ' ;
	}
		  
}


if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	
	$KategoriSonuc = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE id='$sayfaid'"));	
}
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-sitemap"></i> Kategori Ekle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Kategori Ekle</li>
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
                      <label for="kategori_adi">Kategori Adı</label>
                      <input type="text" class="form-control" name="kategori_adi" value="<?php echo $KategoriSonuc->kategori_adi;?>" id="sayfaadi" placeholder="Kategori Adı">
                    </div>
					<div class="form-group">
                      <label for="icon">Kategori İcon</label>
					  <div class="input-group">
					  <span class="input-group-addon"><i class="<?php echo $KategoriSonuc->icon;?>"></i></span>
                      <input type="text" style="height: auto;" class="form-control" name="icon" value="<?php echo $KategoriSonuc->icon;?>" id="icon" placeholder="Kategori İcon">
					  </div>
                    </div>
					<!-------------------------------------------------------------------------------------->
                    <div class="form-group " style="float:left;">
						<label>Kategori Resmi</label>
							<div class="fileupload fileupload-new" data-provides="fileupload">
					   <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
						<?php if($_GET['islem']=='duzenle'){?>
						<img src="../uploads/urunkategori/<?php echo $KategoriSonuc->resim;?>" style="width: 200px;" alt="" />
						<?php } else { ?>
						<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
						<?php }?>
					   </div>
						<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
							   <span class="btn btn-default btn-file">
							   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Resim Seç</span>
							   <span class="fileupload-exists"><i class="fa fa-undo"></i> Değiştir</span>
							   <input name="resim" type="file" class="default" />
							   </span>
									<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Sil</a>
								</div>
							</div>
					</div>
					<div style="clear:both"></div>
                    <!-------------------------------------------------------------------------------------->
                    <?php if($_GET['islem']=="duzenle"){?>
                    <div class="form-group">
                        <label>Durumu</label>
                              <div class="square-green">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="1" <?php if($KategoriSonuc->durum == '1') {?> checked <?php } ?> name="durum">
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Açık</div>
                                </div>
                            </div>
                             <div class="square-red">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="0" <?php if($KategoriSonuc->durum == '0') {?> checked <?php } ?> name="durum"  >
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Kapalı</div>
                                </div>
                            </div>
                    </div>
                  <?php }else{?>
                  	<div class="form-group">
                        <label>Durumu</label>
                              <div class="square-green">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="1"  checked  name="durum">
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Açık</div>
                                </div>
                            </div>
                             <div class="square-red">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="0"  name="durum"  >
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Kapalı</div>
                                </div>
                            </div>
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
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>
    
    