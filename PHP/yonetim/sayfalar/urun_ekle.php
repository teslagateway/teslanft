<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>

<?php

if(isset($_GET["act"]) && $_GET['act'] == "sil" && isset($_GET["sid"])) {

	$sid = $_GET['sid'];

	$rsil = mysql_query("DELETE FROM urun_resim WHERE id='$sid'");

	if($rsil){

		$resim_bul	=	Sonuc(Sorgu("SELECT * FROM urun_resim WHERE id='$sid'"));

		$resim_sil	=	unlink("../uploads/urunler/diger/orta/".$resim_bul->resim);

		$resim_sil	=	unlink("../uploads/urunler/diger/kucuk/".$resim_bul->resim);

		$resim_sil	=	unlink("../uploads/urunler/diger/".$resim_bul->resim);

	}else{

		$bilgi = '  <div class="alert alert-danger alert-dismissable">

					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

						Hata oluştu tekrar deneyiniz..!

			  </div>

	 ' ;

	}

		

}

if(p('urun_adi') && g('islem')=="")

{

	$urun_adi 	= $_POST['urun_adi'];

	$kategori	= $_POST['kategori'];

	$iade		= $_POST['iade'];

	$ozellik	= $_POST['ozellik'];

	$altkategori= $_POST['altkategori'];

	$markakategori= $_POST['markakategori'];

	$durum 		= $_POST['durum'];

	$indirim	= $_POST['indirim'];

	/* $urun_kodu	= $_POST['urun_kodu']; */

    $urun_barkod = $_POST['urun_barkod'];

	$secenek	= implode("||", $_POST["secenek"]);

	$stok		= $_POST['stok'];

	$fiyat 		= $_POST['fiyat'];

	$yuzde 	= $_POST['yuzde'];

	$aciklama	= addslashes($_POST['aciklama']);

	$seo		= seo($urun_adi);

	$tarih		= date("d-m-Y");

	

	include_once('class.upload.php');

	$upload = new upload($_FILES['resim']);

	if ($upload->uploaded){

	$upload->file_auto_rename = true;

	$upload->process("../uploads/urunler");

	

	$upload->file_auto_rename = true;

	$upload->image_resize = true;

	$upload->image_ratio_crop = true;

	$upload->image_x = 300;

	$upload->image_y = 366;

	$upload->process("../uploads/urunler/kucuk");

	

	

	$upload->file_auto_rename = true;

	$upload->image_resize = true;

	$upload->image_ratio_crop = true;

	$upload->image_x = 420;

	$upload->image_y = 512;

	$upload->process("../uploads/urunler/orta");

	if ($upload->processed){

	$UrunResim=''.$upload->file_dst_name.'';

	}

	}

	$gitti1	=$UrunResim=''.$upload->file_dst_name.'';

	

	$urun_sorgu	=	Sorgu("INSERT INTO urunler SET

								adi			=	'$urun_adi', 

								kategori	=	'$kategori',

								iade		=	'$iade',

								ozellik		=	'$ozellik',

								altkategori	=	'$altkategori',

	                            markakategori	=	'$markakategori',										

								resim		=	'$UrunResim', 

								aciklama	=	'$aciklama',

								tarih		=	'$tarih',

								seo			=	'$seo',

								secenek		=	'$secenek',

								/* urun_kodu	=	'$urun_kodu', */

								urun_barkod	=	'$urun_barkod',

								stok		=	'$stok',

								fiyat		=	'$fiyat',

								yuzde		=	'$yuzde',

								indirim		=	'$indirim',

								durum		=	'$durum'");	

		if($urun_sorgu){	

		$son_id = mysql_insert_id();

			foreach ($_SESSION["resimler"] as $r) {

				mysql_query("insert into urun_resim set resim_yolu='$r', urun_id='$son_id'");				

			}

			unset($_SESSION["resimler"]);

																				   

			$bilgi = '  <div class="alert alert-success alert-dismissable">

                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    		 Başarı Bir Şekilde Eklenmiştir

                  </div>

		 ' ;

		}else{

		$bilgi = '  <div class="alert alert-danger alert-dismissable">

                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    		Hata oluştu tekrar deneyiniz..!

                  </div>

		 ' ;	

		}

}





if(p('urun_adi') && g('islem')=="duzenle")

{

	$d_id 			= g('id');

	$urun_adi 		= $_POST['urun_adi'];

	$kategori	 	= $_POST['kategori'];

	$iade			= $_POST['iade'];

	$ozellik		= $_POST['ozellik'];

	$altkategori	= $_POST['altkategori'];

	$markakategori	= $_POST['markakategori'];

	$durum 			= $_POST['durum'];

	$indirim		= $_POST['indirim'];

/*	$urun_kodu		= $_POST['urun_kodu']; */

	$urun_barkod		= $_POST['urun_barkod'];

	$secenek		= implode("||", $_POST["secenek"]);

	$stok			= $_POST['stok'];

	$fiyat 			= $_POST['fiyat'];

	$yuzde 		= $_POST['yuzde'];

	$aciklama		= addslashes($_POST['aciklama']);

	$seo			= seo($urun_adi);

	$tarih			= date("d-m-Y");

	

	

	include_once('class.upload.php');

	$upload = new upload($_FILES['resim']);

	if ($upload->uploaded){

	$upload->file_auto_rename = true;

	$upload->process("../uploads/urunler");

	

	$upload->file_auto_rename = true;

	$upload->image_resize = true;

	$upload->image_ratio_crop = true;

	$upload->image_x = 300;

	$upload->image_y = 366;

	$upload->process("../uploads/urunler/kucuk");

	

	

	$upload->file_auto_rename = true;

	$upload->image_resize = true;

	$upload->image_ratio_crop = true;

	$upload->image_x = 420;

	$upload->image_y = 512;

	$upload->process("../uploads/urunler/orta");

	if ($upload->processed){

	$UrunResim=''.$upload->file_dst_name.'';

	}

	}

	if($UrunResim!="")

	{

		$resim_bul	=	Sonuc(Sorgu("SELECT * FROM urunler WHERE id='$d_id'"));

		$resim_sil	=	unlink("../uploads/urunler/orta/".$resim_bul->resim);

		$resim_sil	=	unlink("../uploads/urunler/kucuk/".$resim_bul->resim);

		$resim_sil	=	unlink("../uploads/urunler/".$resim_bul->resim);

	

		$urun_duzenle_sorgu	=	Sorgu("UPDATE urunler SET 

											adi			=	'$urun_adi', 

											kategori	=	'$kategori',

											iade		=	'$iade',

											ozellik		=	'$ozellik',

											altkategori	=	'$altkategori',

											markakategori	=	'$markakategori',												

											resim		=	'$UrunResim', 

											aciklama	=	'$aciklama',

											tarih		=	'$tarih',

											seo			=	'$seo',

											secenek		=	'$secenek',

											/* urun_kodu	=	'$urun_kodu', */

											urun_barkod	=	'$urun_barkod',

											stok		=	'$stok',

											fiyat		=	'$fiyat',

											yuzde		=	'$yuzde',

											indirim		=	'$indirim',

											durum		=	'$durum' 

											WHERE id	=	'$d_id'");

		$gitti=$UrunResim=''.$upload->file_dst_name.'';

		

	}else{	

		$urun_duzenle_sorgu = Sorgu("UPDATE urunler SET 

											adi			=	'$urun_adi', 

											kategori	=	'$kategori',

											iade		=	'$iade',

											ozellik		=	'$ozellik',

											altkategori	=	'$altkategori',

											markakategori	=	'$markakategori',

											aciklama	=	'$aciklama',

											tarih		=	'$tarih',

											seo			=	'$seo',

											secenek		=	'$secenek',

											/* urun_kodu	=	'$urun_kodu', */

											urun_barkod	=	'$urun_barkod',

											stok		=	'$stok',

											fiyat		=	'$fiyat',

											yuzde		=	'$yuzde',

											indirim		=	'$indirim',

											durum		=	'$durum' 

											WHERE id	=	'$d_id'");

	}

	if($urun_duzenle_sorgu){

		

		foreach ($_SESSION["resimler"] as $r) {

				mysql_query("insert into urun_resim set resim_yolu='$r', urun_id='$d_id'");				

			}

			unset($_SESSION["resimler"]);

		

				  $bilgi = '  <div class="alert alert-success alert-dismissable">

                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    		Başarı Bir Şekilde  Güncellenmiştir !

                  </div>

		 ' ;

	}else{

	$bilgi = '  <div class="alert alert-danger alert-dismissable">

                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    		Hata oluştu tekrar deneyiniz..!

                  </div>

		 ' ;	

	}

}



if($_GET['islem']=="duzenle")

{

	$sayfaid = $_GET['id'];	

	$durum = "duzenle" ;

	$UrunSonuc = Sonuc(Sorgu("SELECT * FROM urunler WHERE id='$sayfaid'"));

}



?>

<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            <small><i class="fa fa-tasks"></i> Ürün Ekle / Düzenle</small>

          </h1>

          <ol class="breadcrumb">

            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>

            <li class="active">Ürün Ekle / Düzenle</li>

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

                  <!-------------------------------------------------------------------------------------->

                    <div class="form-group">

                      <label for="urun_adi">Ürün Adı</label>

                      <input type="text" class="form-control" name="urun_adi" value="<?php echo $UrunSonuc->adi;?>" id="urun_adi" placeholder="Ürün Adı">

                    </div>

                    <!-------------------------------------------------------------------------------------->

                    <div class="form-group">

                      <label>Kategori</label>

                      <select class="form-control" name="kategori" id="kategori">

                      <option value="0">Seçiniz</option>

                      <?php $KategoriSorgu = Sorgu("SELECT * FROM urun_kategori ORDER BY id DESC");

					  while($KategoriSonuc = Sonuc($KategoriSorgu)){?>

                      <option value="<?=$KategoriSonuc->id;?>" <?php if($KategoriSonuc->id == $UrunSonuc->kategori) { ?> selected="selected" <?php } ?>><?=$KategoriSonuc->kategori_adi;?></option>

                                    

                       <?php } ?>

                      </select>

                    </div>

					<!-------------------------------------------------------------------------------------->

                    <div class="form-group" id="alt">

                      <label>Alt Kategori</label>

						<div id="xxx">

							<?php

								if($_GET['islem']=="duzenle") {?>

									<select class="form-control" name="altkategori" id="altkategori" onchange="secenekGetir()" data-placeholder="Kategori Seçiniz">';

									<?php $ss = mysql_Query("SELECT * FROM alt_urun_kategori WHERE ust_id='$UrunSonuc->kategori'");

									while($k = mysql_fetch_Array($ss)){?> 

										<option value="<?php echo $k['id'];?>" <?php if($k['id'] == $UrunSonuc->altkategori) { ?> selected="selected" <?php } ?>><?php echo $k['kategori_adi'];?></option>

									<?php }?>

									</select>

								<?php }

							?>

						</div>

                    </div>

                    <!-------------------------------------------------------------------------------------->

                    <div class="form-group">

                      <label for="urun_barkod">ISBN / Barkod</label>

                      <input type="text" class="form-control" name="urun_barkod" value="<?php echo $UrunSonuc->urun_barkod;?>" id="urun_barkod" placeholder="ISBN / Barkod">

                    </div>

					<!-------------------------------------------------------------------------------------->

                    <div class="form-group">

                      <label>Marka / Yayınlar</label>

                      <select class="form-control" name="markakategori" id="markakategori">

                      <option value="0">Seçiniz</option>

                      <?php $MarkaSorgu = Sorgu("SELECT * FROM marka_kategori ORDER BY id DESC");

					  while($MarkaSonuc = Sonuc($MarkaSorgu)){?>

                      <option value="<?=$MarkaSonuc->id;?>" <?php if($MarkaSonuc->id == $UrunSonuc->markakategori) { ?> selected="selected" <?php } ?>><?=$MarkaSonuc->kategori_adi;?></option>

                                    

                       <?php } ?>

                      </select>

                    </div>

                    <!----------------------------------------------------------------------
                    <div class="form-group">

                      <label for="urun_kodu">Ürün Kodu</label>

                      <input type="text" class="form-control" name="urun_kodu" value="<?php echo $UrunSonuc->urun_kodu;?>" id="urun_kodu" placeholder="Ürün Kodu">

                    </div>

	---------------------------------------------------------------------------->

					<div id="xnxx">

					<?php 

						if($_GET['islem'] == "duzenle"){

						$altkategoriler = mysql_query("SELECT * FROM alt_urun_kategori WHERE id='$UrunSonuc->altkategori'");

						$altkategoriler = Sonuc($altkategoriler);

						$secililer = explode("||",$altkategoriler->sec_kat);

						$sor = "";

						if(is_array($secililer)){

							$sor .= " WHERE kategori_adi in(";

							$q = count($secililer);

							$q -=1;

							for ($i=0; $i < count($secililer) ; $i++) { 

								if($q != $i) $sor .= "'".$secililer[$i]."',";

								if($q == $i) $sor .= "'".$secililer[$i]."')";

							}

						}

						$SecenekSorgu = Sorgu("SELECT * FROM secenek_kategori $sor ORDER BY id ASC");

						while($SecenekSonuc = Sonuc($SecenekSorgu)){?>

						 <!-------------------------------------------------------------------------------------->

						<?php $dahiller = explode("||", $UrunSonuc->secenek);?>

						<div class="form-group">

						 <label><?php echo $SecenekSonuc->kategori_adi;?></label>

						<div class="row">

						<?php $Sorgu = Sorgu("SELECT * FROM secenek WHERE kategori = '$SecenekSonuc->id' ORDER BY id ASC");

						while($Sonuc = Sonuc($Sorgu)){?>

						<div class="col-lg-3">

						  <div class="input-group">

							<span class="input-group-addon">	

							  <input name="secenek[]" type="checkbox" value="<?php echo $Sonuc->adi;?>" <?php if(in_array($Sonuc->adi,$dahiller)){echo "checked";}?>>

							</span>

							<input type="text" disabled class="form-control" value="<?php echo $Sonuc->adi;?>">

						  </div><!-- /input-group -->

						</div><!-- /.col-lg-6 -->

						<?php }?>

						</div>

						</div>

						<?php 

					}

					}//Get sonu

					?>

					</div>

                    <!-------------------------------------------------------------------------------------->

                    <div class="form-group">

                      <label>Stok</label>

                      <input type="text" class="form-control" name="stok" value="<?php echo $UrunSonuc->stok;?>" id="stok" placeholder="Stok">

                    </div>

                    <!-------------------------------------------------------------------------------------->

                    <div class="form-group " style="float:left;">

                                    <label>Kapak Resmi</label>

                                        <div class="fileupload fileupload-new" data-provides="fileupload">

                                   <div class="fileupload-new thumbnail" style="width: 200px;">

                                    <?php if($_GET['islem']=='duzenle'){?>

                                    <img src="../uploads/urunler/<?php echo $UrunSonuc->resim;?>" style="width: 200px; height: 200px;" alt="" />

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

                                

                                 <!-------------------------------------------------------------------------------------->

                  

                                <style type="text/css">

                                .resimler {

									display:block;

									overflow:hidden;

									width:100%;

									list-style-type: none;

									margin-left: -40px;

								}

                                	.resimler li {

										float:left;

										border: 1px solid #ddd;

										margin-right:5px;

									}

                                </style>

                                <ul class="resimler">

                                <?php 

                                if($_GET['islem']=="duzenle"){

                                	

                                	$ss = mysql_Query("select * from urun_resim where urun_id='".$UrunSonuc->id."'");

                                	while($resim = mysql_Fetch_array($ss)) {

										echo ' <li>  <img src="../uploads/urunler/diger/'.$resim['resim_yolu'].'" style="width:200px" alt="" />

										<br/><a href="?sayfa=urun-ekle&islem=duzenle&id='.$UrunSonuc->id.'&act=sil&sid='.$resim['id'].'">Sil</a></li>';

										}

									} 



                                ?>

                                </ul>

                                <iframe src="upload/demos/" style="width:100%;height:265px;" frameborder="0"></iframe>

                                <!-------------------------------------------------------------------------------------->

                                <div style="clear:both"></div>

                                <hr>

								<?php if($_GET['islem']=="duzenle"){?>

								<div class="form-group">

									<label>Durumu</label> <br> 

									<input type="checkbox" name="durum" <?php if($UrunSonuc->durum == '1') {?> checked <?php } ?> value="1">

								</div>

								<?php }else{?>

								<div class="form-group">

									<label>Durumu</label> <br> 

									<input type="checkbox" name="durum" value="1" checked>

								</div>

							  <?php } ?>

						<hr>

                   <!------------------------------------------------------------------------------->
				  <?php if($_GET['islem']=="duzenle"){?>

                   <!-------------------------------------------------
                    <div class="form-group">

						<label>İndirim Yüzdesi</label> <br> 

						<input type="checkbox" name="indirim" id="indirim" <?php if($UrunSonuc->indirim == '1') {?> checked <?php } ?> value="1">

					</div>

					<?php }else{?>

                  	<div class="form-group">

						<label>İndirim Yüzdesi</label> <br> 

						<input type="checkbox" name="indirim" id="indirim">

					</div>

                  <?php } ?>

                  <hr>

            <!----------------------------------------------------------------------------------->

                 <div class="form-group" >

                    <label>Ürün Fiyatı</label>

                    <div class="input-group">

                    <span class="input-group-addon">₺</span>

                    	<input type="text" class="form-control" name="fiyat" value="<?php echo $UrunSonuc->fiyat;?>" id="fiyat" placeholder="0,00">

                  </div>

                  </div>

                 <div class="form-group"  id="indirimgoster">

                    <label>İndirim Yüzdesi</label>

                    <div class="input-group">

                    <span class="input-group-addon">%</span>

                    	<input type="text" class="form-control" name="yuzde" value="<?php echo $UrunSonuc->yuzde;?>">

                  </div>

           <!-------------------------------------------------------------------------------------->

                  </div>

					<div class="form-group">

						<label for="tags_3">Ürün Özellikleri</label>

						<input id='tags_3' name="ozellik" type='text' value="<?php echo $UrunSonuc->ozellik;?>" class='tags'>

                    </div>

                   <!--------------------------------------------------------------------------------------> 

                   <!-------------------------------------------------------------------------------------->

                  </div>

					<div class="form-group">

						<label for="tags_3">Ürün Özellikleri</label>

						<input id='tags_3' name="ozellik" type='text' value="<?php echo $UrunSonuc->ozellik;?>" class='tags'>

                    </div>

                   <!--------------------------------------------------------------------------------------> 

					<div class="form-group">

                    <label for="icerik">Ürün Açıklama</label>

                    <textarea class="ckeditor" id="summernote" style="width:100%;" id="icerik" name="aciklama" placeholder="İçerik Giriniz."><?php echo $UrunSonuc->aciklama;?></textarea>

                    </div>

                    <!-------------------------------------------------------------------------------------->

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



	<script src='plugins/jquery.price_format.2.0.js'></script>

	

	<script type="text/javascript">

	

		$('#fiyat').priceFormat({

			prefix: '',

			thousandsSeparator: ''

		});

		$('#indirim').priceFormat({

			prefix: '',

			thousandsSeparator: ''

		});

	</script>

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

		$("[name='indirim']").bootstrapSwitch();

	</script>

	<script>

	$(document).ready(function(){

		$('input[name="indirim"]').on('switchChange.bootstrapSwitch', function(event, state) {

		  if(state == true){

			  $("#indirimgoster").css("display","block");

		  }else{

			  $("#indirimgoster").css("display","none");

		  }

		});

	});

	</script>

	

	<script type="text/javascript" src="dist/jquery.tagsinput.js"></script>

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



	



    