<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('banka_adi') && g('islem')=="")
{
	$banka_adi 	= p('banka_adi');
	$alici 		= p('alici');
	$sube_adi 	= p('sube_adi');
	$sube_kodu 	= p('sube_kodu');
	$hesap_no 	= p('hesap_no');
	$IBAN 		= p('IBAN');
	$durum 		= p('durum');

	
	$Banka_sorgu	=	Sorgu("INSERT INTO banka_hesaplari SET
										banka_adi 	='$banka_adi',
										alici 		='$alici',
										sube_adi 	='$sube_adi',
										sube_kodu 	='$sube_kodu',
										hesap_no 	='$hesap_no',
										IBAN 		='$IBAN',
										logo		='$BankaLogo', 
										durum		='$durum'");	
	if($Banka_sorgu){																							   
		$bilgi = '  <div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Başarı ile Eklenmiştir
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


if(p('banka_adi') && g('islem')=="duzenle")
{
	$d_id 		= g('id');
	$banka_adi 	= p('banka_adi');
	$alici 		= p('alici');
	$sube_adi 	= p('sube_adi');
	$sube_kodu 	= p('sube_kodu');
	$hesap_no 	= p('hesap_no');
	$IBAN 		= p('IBAN');
	$durum 		= p('durum');
	
		
	$banka_duzenle_sorgu = Sorgu("UPDATE banka_hesaplari SET 
											banka_adi 	='$banka_adi',
											alici 		='$alici',
											sube_adi 	='$sube_adi',
											sube_kodu 	='$sube_kodu',
											hesap_no 	='$hesap_no',
											IBAN 		='$IBAN',
											durum		='$durum'  
											where id	='$d_id'");
	
	if($banka_duzenle_sorgu){
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
	$BankaSonuc = Sonuc(Sorgu("SELECT * FROM banka_hesaplari WHERE id='$sayfaid'"));
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-cc-visa"></i> Hesap Ekle / Düzenle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active"> Hesap Ekle / Düzenle</li>
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
                      <label for="banka_adi">Banka Adı</label>
                      <input type="text" class="form-control" name="banka_adi" value="<?php echo $BankaSonuc->banka_adi;?>" id="banka_adi" placeholder="Banka Adı">
                    </div>
                    
                    <div class="form-group">
                      <label for="alici">Hesap Sahibi</label>
                      <input type="text" class="form-control" name="alici" value="<?php echo $BankaSonuc->alici;?>" id="alici" placeholder="Alıcı">
                    </div>
                    
                    <div class="form-group">
                      <label for="sube_adi">Şube Adı</label>
                      <input type="text" class="form-control" name="sube_adi" value="<?php echo $BankaSonuc->sube_adi;?>" id="sube_adi" placeholder="Şube Adı">
                    </div>
                    
                    <div class="form-group">
                      <label for="sube_kodu">Şube Kodu</label>
                      <input type="text" class="form-control" name="sube_kodu" value="<?php echo $BankaSonuc->sube_kodu;?>" id="sube_kodu" placeholder="Şube Kodu">
                    </div>
                    
                    <div class="form-group">
                      <label for="hesap_no">Hesap No</label>
                      <input type="text" class="form-control" name="hesap_no" value="<?php echo $BankaSonuc->hesap_no;?>" id="hesap_no" placeholder="Hesap No">
                    </div>
                    
                    <div class="form-group">
                      <label for="IBAN">IBAN</label>
                      <input type="text" class="form-control" name="IBAN" value="<?php echo $BankaSonuc->IBAN;?>" id="IBAN" placeholder="IBAN">
                    </div>
                    
                    

                    <?php if($_GET['islem']=="duzenle"){?>
                    <div class="form-group">
                        <label>Durumu</label>
                              <div class="square-green">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="1" <?php if($BankaSonuc->durum == '1') {?> checked <?php } ?> name="durum">
                                    <div style="margin-left:30px;position:absolute;margin-top:-20px;">Açık</div>
                                </div>
                            </div>
                             <div class="square-red">
                                <div class="radio">
                                    <input tabindex="3" type="radio" value="0" <?php if($BankaSonuc->durum == '0') {?> checked <?php } ?> name="durum"  >
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
    
    