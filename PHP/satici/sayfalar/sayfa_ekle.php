<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('sayfaadi') && g('islem')=="")
{
	$sayfaadi 	= p('sayfaadi');
	$durum 		= p('durum');
	$aciklama	= $_POST['aciklama'];
	$seo		= seo($sayfaadi);
	include_once('class.upload.php');
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/sayfalar");
	if ($upload->processed){
	$sayfaresim=''.$upload->file_dst_name.'';
	}
	}
	$gitti=$sayfaresim=''.$upload->file_dst_name.'';
	
	$sayfa_sorgu	=	mysql_query("INSERT INTO sayfalar SET
										adi		=	'$sayfaadi', 
										resim	=	'$sayfaresim',
										seo		=	'$seo', 
										aciklama=	'$aciklama',
										durum	=	'$durum'");	
																								   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Eklenmiştir
                  </div>
		 ' ;
		
}


if(p('sayfaadi') && g('islem')=="duzenle")
{
	$sayfaadi 	= p('sayfaadi');
	$durum 		= p('durum');
	$d_id 		= g('id');
	$aciklama	= $_POST['aciklama'];
	$seo		= seo($sayfaadi);
	
	include_once('class.upload.php');	
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/sayfalar");
	if ($upload->processed){
	$sayfaresim=''.$upload->file_dst_name.'';
	}
	}
	if($sayfaresim!="")
	{
		$resim_bul=mysql_fetch_object(mysql_query("SELECT * FROM sayfalar WHERE id='$d_id'"));
		$resim_sil=unlink("../uploads/sayfalar/".$resim_bul->resim);
	
		$sayfa_duzenle_sorgu	=	Sorgu("UPDATE sayfalar SET 
											adi		=	'$sayfaadi', 
											resim	=	'$sayfaresim', 
											aciklama=	'$aciklama',
											seo		=	'$seo', 
											durum	=	'$durum' 
											WHERE id=	'$d_id'");
		$gitti=$sayfaresim=''.$upload->file_dst_name.'';
	}else{	
		$sayfa_duzenle_sorgu = Sorgu("UPDATE sayfalar SET 
											durum	=	'$durum', 
											aciklama=	'$aciklama', 
											seo		=	'$seo', 
											adi		=	'$sayfaadi' 
											where id=	'$d_id'");
	}
				  $bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Güncellenmiştir !
                  </div>
		 ' ;
}


if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	
	$SayfaSonuc = Sonuc(Sorgu("SELECT * FROM sayfalar WHERE id='$sayfaid'"));
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-edit"></i> Sayfa Ekle / Düzenle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Sayfa Ekle / Düzenle</li>
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
                      <label for="sayfaadi">Sayfa Adı</label>
                      <input type="text" class="form-control" name="sayfaadi" value="<?php echo $SayfaSonuc->adi;?>" id="sayfaadi" placeholder="Sayfa Adı">
                    </div>
                    
                    <div class="form-group ">
                                    <label>Sayfa Resmi</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                   <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <?php if($_GET['islem']=='duzenle'){?>
                                    <img src="../uploads/sayfalar/<?php echo $SayfaSonuc->resim;?>" style="width: 200px; height: 200px;" alt="" />
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
							<?php if($_GET['islem']=="duzenle"){?>
								<div class="form-group">
									<label>Durumu</label> <br> 
									<input type="checkbox" name="durum" <?php if($SayfaSonuc->durum == '1') {?> checked <?php } ?> value="1">
								</div>
								<?php }else{?>
								<div class="form-group">
									<label>Durumu</label> <br> 
									<input type="checkbox" name="durum" value="1" checked>
								</div>
							<?php } ?>
                  <div class="form-group">
                    <label for="icerik">İçerik</label>
                    <textarea class="ckeditor" id="summernote" name="aciklama" placeholder="İçerik Giriniz."><?php echo $SayfaSonuc->aciklama;?></textarea>
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
	<link href="dist/css/bootstrap-switch.css" rel="stylesheet">
	<script src="dist/js/bootstrap-switch.js"></script>
	<script>
		$("[name='durum']").bootstrapSwitch();
	</script>
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


    
    