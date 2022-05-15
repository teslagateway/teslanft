<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('kategori_adi') && g('islem')=="")
{
	$kategori_adi 	= $_POST['kategori_adi'];
	$kategori 		= $_POST['kategori'];
	$sec_kat 		= implode("||", $_POST["secenek_kategori"]);
	$durum 			= $_POST['durum'];
	$sira 			= $_POST['sira'];
	$seo			= seo($kategori_adi);
	
	$kategori_sorgu	=	mysql_query("INSERT INTO alt_urun_kategori SET
										kategori_adi	=	'$kategori_adi',
										ust_id			=	'$kategori',
										sec_kat			=	'$sec_kat',
										sira			=	'$sira',
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
	$kategori 		= $_POST['kategori'];
	$sec_kat 		= implode("||", $_POST["secenek_kategori"]);
	$durum 			= $_POST['durum'];
	$d_id 			= g('id');
	$sira 			= $_POST['sira'];
	$seo			= seo($kategori_adi);
	
	

	$kategori_duzenle_sorgu = Sorgu("UPDATE alt_urun_kategori SET 
											kategori_adi	=	'$kategori_adi',
											ust_id			=	'$kategori',
											sec_kat			=	'$sec_kat',											
											seo				=	'$seo', 
											sira			=	'$sira',
											durum			=	'$durum' 
											WHERE id		=	'$d_id'");

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
	
	$Sonuc = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE id='$sayfaid'"));
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-tasks"></i> Alt Kategori Ekle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active"> Alt Kategori Ekle</li>
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
                      <label for="sira">Kategori Sırası</label>
                      <input type="text" class="form-control" name="sira" value="<?php echo $Sonuc->sira;?>" id="sira" placeholder="Kategori Sırası">
                    </div>
					<!-------------------------------------------------------------------------------------->
					<div class="form-group">
                      <label for="kategori_adi">Kategori Adı</label>
                      <input type="text" class="form-control" name="kategori_adi" value="<?php echo $Sonuc->kategori_adi;?>" id="sayfaadi" placeholder="Kategori Adı">
                    </div>
					
					 <!-------------------------------------------------------------------------------------->
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="kategori" id="kategori">
                      <option value="0">Seçiniz</option>
                      <?php $KategoriSorgu = Sorgu("SELECT * FROM urun_kategori ORDER BY id DESC");
					  while($KategoriSonuc = Sonuc($KategoriSorgu)){?>
                      <option value="<?=$KategoriSonuc->id;?>" <?php if($KategoriSonuc->id == $Sonuc->ust_id) { ?> selected="selected" <?php } ?>><?=$KategoriSonuc->kategori_adi;?></option>
                                    
                       <?php } ?>
                      </select>
                    </div>
					
					<!-------------------------------------------------------------------------------------->
                    <?php $dahiller = explode("||", $Sonuc->sec_kat);?>
                    <div class="form-group">
                     <label>Seçenek Kategori</label>
                    <div class="row">
                    <?php $SecenekSorgu = Sorgu("SELECT * FROM secenek_kategori ORDER BY id ASC");
					while($SecenekSonuc = Sonuc($SecenekSorgu)){?>
                    <div class="col-lg-3">
                      <div class="input-group">
                        <span class="input-group-addon">	
                          <input name="secenek_kategori[]" type="checkbox" value="<?php echo $SecenekSonuc->kategori_adi;?>" <?php if(in_array($SecenekSonuc->kategori_adi,$dahiller)){echo "checked";}?>>
                        </span>
                        <input type="text" disabled class="form-control" value="<?php echo $SecenekSonuc->kategori_adi;?>">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <?php }?>
                  </div>
                  </div>
                    
                   <!-------------------------------------------------------------------------------------->  
                    
                    <?php if($_GET['islem']=="duzenle"){?>
                    <div class="form-group">
                        <label>Durumu</label>
                              <div class="square-green">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="1" <?php if($Sonuc->durum == '1') {?> checked <?php } ?> name="durum">
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Açık</div>
                                </div>
                            </div>
                             <div class="square-red">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="0" <?php if($Sonuc->durum == '0') {?> checked <?php } ?> name="durum"  >
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
                  <div style="clear:both;"></div>
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
    
    