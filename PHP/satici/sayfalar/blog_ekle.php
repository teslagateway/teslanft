<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('blog_adi') && g('islem')=="")
{
	$blog_adi 	= $_POST['blog_adi'];
	$etiket 	= $_POST['etiket'];
	$durum 		= p('durum');
	$aciklama	= addslashes($_POST['aciklama']);
	$seo		= seo($blog_adi);
	$t			= date("Y-m-d H:i:s");
	$k_tarih	= tarih($t);
	
	include_once('class.upload.php');
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/bloglar");
	
	$upload->file_auto_rename = true;
	$upload->image_resize = true;
	$upload->image_ratio_crop = true;
	$upload->image_x = 345;
	$upload->image_y = 243;
	$upload->process("../uploads/bloglar/thumb");
	
	if ($upload->processed){
	$blogResim=''.$upload->file_dst_name.'';
	}
	}
	$gitti=$blogResim=''.$upload->file_dst_name.'';
	
	$blog_sorgu	=	Sorgu("INSERT INTO bloglar SET
										adi		=	'$blog_adi', 
										resim	=	'$blogResim',
										seo		=	'$seo',
										etiket	=	'$etiket', 										
										aciklama=	'$aciklama',
										durum	=	'$durum',
										tarih	=	'$k_tarih'");	
																								   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Eklenmiştir
                  </div>
		 ' ;
		
}


if(p('blog_adi') && g('islem')=="duzenle")
{
	$blog_adi 	= $_POST['blog_adi'];
	$etiket 	= $_POST['etiket'];
	$durum 		= p('durum');
	$d_id 		= g('id');
	$aciklama	= addslashes($_POST['aciklama']);
	$seo		= seo($blog_adi);
	$t			= date("Y-m-d H:i:s");
	$k_tarih	= tarih($t);
	
	include_once('class.upload.php');
	$upload = new upload($_FILES['resim']);
	if ($upload->uploaded){
	$upload->file_auto_rename = true;
	$upload->process("../uploads/bloglar");
	
	
	$upload->file_auto_rename = true;
	$upload->image_resize = true;
	$upload->image_ratio_crop = true;
	$upload->image_x = 345;
	$upload->image_y = 243;
	$upload->process("../uploads/bloglar/thumb");
	
	if ($upload->processed){
	$blogResim=''.$upload->file_dst_name.'';
	}
	}
	if($blogResim!="")
	{
		$resim_bul	=Sonuc(Sorgu("SELECT * FROM bloglar WHERE id='$d_id'"));
		$resim_sil	=unlink("../uploads/bloglar/".$resim_bul->resim);
		$resim_sil	=unlink("../uploads/bloglar/thumb/".$resim_bul->resim);
	
		$blog_duzenle_sorgu	=	Sorgu("UPDATE bloglar SET 
											adi		=	'$blog_adi', 
											resim	=	'$blogResim', 
											aciklama=	'$aciklama',
											seo		=	'$seo', 
											etiket	=	'$etiket', 
											durum	=	'$durum', 
											tarih	=	'$k_tarih'
											WHERE id=	'$d_id'");
		$gitti=$blogResim=''.$upload->file_dst_name.'';
	}else{	
		$blog_duzenle_sorgu = Sorgu("UPDATE bloglar SET 
											durum	=	'$durum', 
											aciklama=	'$aciklama', 
											seo		=	'$seo', 
											etiket	=	'$etiket', 
											adi		=	'$blog_adi', 
											tarih	=	'$k_tarih' 
											WHERE id=	'$d_id'");
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
	
	$blogSonuc = Sonuc(Sorgu("SELECT * FROM bloglar WHERE id='$sayfaid'"));
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-bullhorn"></i> Blog Ekle / Güncelle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Blog Ekle / Güncelle</li>
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
                      <label for="blog_adi">Blog Adı</label>
                      <input type="text" class="form-control" name="blog_adi" value="<?php echo $blogSonuc->adi;?>" id="blog_adi" placeholder="Blog Adı">
                    </div>
                    
                    <div class="form-group ">
						<label>Blog Resmi</label>
							<div class="fileupload fileupload-new" data-provides="fileupload">
					   <div class="fileupload-new thumbnail" style="width: 200px;">
						<?php if($_GET['islem']=='duzenle'){?>
						<img src="../uploads/bloglar/<?php echo $blogSonuc->resim;?>" style="width: 200px;" alt="" />
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
									<input type="checkbox" name="durum" <?php if($blogSonuc->durum == '1') {?> checked <?php } ?> value="1">
								</div>
								<?php }else{?>
								<div class="form-group">
									<label>Durumu</label> <br> 
									<input type="checkbox" name="durum" value="1" checked>
								</div>
							<?php } ?>
					<div class="form-group">
						<label for="tags_3">Etiketler</label>
						<input id='tags_3' name="etiket" type='text' value="<?php echo $blogSonuc->etiket;?>" class='tags'>
                    </div>
                  <div class="form-group">
                    <label for="icerik">İçerik</label>
                    <textarea class="ckeditor" id="summernote" name="aciklama" placeholder="İçerik Giriniz."><?php echo $blogSonuc->aciklama;?></textarea>
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
		<script type="text/javascript" src="dist/jquery.etiket.js"></script>
		<script type='text/javascript' src='dist/jquery-ui.min.js'></script>
		<script type="text/javascript">

			function onAddTag(tag) {
				alert("Özellik Ekle: " + tag);
			}
			function onRemoveTag(tag) {
				alert("Özelliği Kaldır: " + tag);
			}

			function onChangeTag(input,tag) {
				alert("Özelliği Değiştir: " + tag);
			}

			$(function() {
				$('#tags_3').tagsInput({
					width: 'auto',
					autocomplete_url:'test/fake_json_endpoint.html'
				});
			});

		</script>
    
    