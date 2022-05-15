<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php $id = g('k');
if($id == "" && !is_numeric($id) && $id <= 0){
    $idsorgu = "1";
    $katesorgu = "";
}else{
    $idsorgu = "id = '$id'";
    $katesorgu = "AND kategori = '$id'";
}
 $adi = g('a');
 $altkategori = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE $idsorgu"));
 if($adi != "" && !is_null($adi)){
    $adi = "AND adi LIKE '%$adi%'";
 }else{
    $adi = "";
 }
 $kategori = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE $ksorgu"));
 $link = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE durum = '1'"));
 ?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
			<span class="navigation-pipe">&nbsp;</span>
            <a href="Kategori/<?php echo $link->seo;?>.html" title="Kategoriye Git"><?php echo $kategori->kategori_adi;?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php echo $kategori->kategori_adi;?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">ÜRÜN KATEGORİSİ</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
							<ul class="tree-menu">
							<?php $Sorgu = Sorgu("SELECT * FROM urun_kategori WHERE durum = '1' ORDER BY id ASC");
								while($Sonuc = Sonuc($Sorgu)){?>
								<?php $varmi = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>
                                    <li class="">
                                        <span></span><a href="Kategori/<?php echo $varmi->seo;?>.html"><?php echo $Sonuc->kategori_adi;?></a>
										<?php $AltSorgu = Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' ORDER BY sira ASC");
										if(!mysql_affected_rows()){
											
										}else{
                                            $ac = ($Sonuc->id == 0) ? 'style="display:block;"' : '';
											echo '<ul '.$ac.'>';
											while($AltSonuc = Sonuc($AltSorgu)){?>
												<li class=""><span></span><a href="Kategori/<?php echo $AltSonuc->seo;?>.html"><?php echo $AltSonuc->kategori_adi;?></a></li>
											<?php } echo '</ul>';?>
										<?php }?>       
                                    </li>
								<?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">ÜRÜN FİLTRESİ</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">
                            <!-- ./filter categgory -->
                            <!-- filter price -->
                            <div class="layered_subtitle">FİYAT </div>
                            <div class="layered-content slider-range">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1" name="ff" value="1" />
                                        <label for="p1">
                                        <span class="button"></span>
                                        10 TL - 50 TL
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="ff" value="2" />
                                        <label for="p2">
                                        <span class="button"></span>
                                        50 TL - 100 TL
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="ff" value="3" />
                                        <label for="p3">
                                        <span class="button"></span>
                                        100 TL - 250 TL
                                        </label>   
                                    </li>
									<li>
                                        <input type="checkbox" id="p4" name="ff" value="4" />
                                        <label for="p4">
                                        <span class="button"></span>
                                        250 TL - 500 TL
                                        </label>   
                                    </li>
									<li>
                                        <input type="checkbox" id="p5" name="ff" value="5" />
                                        <label for="p5">
                                        <span class="button"></span>
                                        500 TL - 1000 TL
                                        </label>   
                                    </li>
									<li>
                                        <input type="checkbox" id="p6" name="ff" value="6" />
                                        <label for="p6">
                                        <span class="button"></span>
                                        1000 TL - 2000 TL
                                        </label>   
                                    </li>
									<li>
                                        <input type="checkbox" id="p7" name="ff" value="7" />
                                        <label for="p7">
                                        <span class="button"></span>
                                        2000 TL - 2500 TL
                                        </label>   
                                    </li>
									<li>
                                        <input type="checkbox" id="p8" name="ff" value="8" />
                                        <label for="p8">
                                        <span class="button"></span>
                                        2500 TL - Üzerinde
                                        </label>   
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter price -->
	
                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
                <!-- ./block filter  -->
                
                <!-- left silide -->
				<div class="block left-module">
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="false" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                     <?php reklam();?>
                    </ul>
                </div>
                </div>
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">ETİKETLER</p>
                    <div class="block_content">
                        <div class="tags">
						<?php $Sorgu = Sorgu("SELECT * FROM etiketler WHERE durum = '1' ORDER BY id DESC");
						while($Sonuc = Sonuc($Sorgu)){?>
                            <a href="<?php echo $Sonuc->url;?>"><span class="level<?php echo rand(1,5);?>"><?php echo $Sonuc->adi;?></span></a>
						<?php }?>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title"><?php echo (!isset($id) || $id == "") ? "Tüm Kategoriler" : $altkategori->kategori_adi;?></span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>Tablo</span>
                        </li>
                        <li class="view-as-list">
                            <span>Liste</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid" name="uubry">
					<?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' $katesorgu $adi ORDER BY id DESC LIMIT 0,500");
					if(!mysql_affected_rows()){?>
					<div class="center_column col-xs-12 col-sm-12" id="center_column" style="margin-top:20px;">
					<div class="well margin-top-10"><b>Üzgünüz,</b>
						<br>Mağazamızda seçtiğiniz kriterlere ait ürün bulunamadı.
						<br>
						<br>
						<button type="button" class="btn btn-primary btn-sm margin-top-10" onclick="window.history.back();">Önceki Sayfaya Dön</button>
					</div>
					</div>
					<?php }else{
                        $sayfa = 1;
                        $sayfa_goster = 11; // gösterilecek sayfa sayısı
                        $toplam_sayfa = ceil(say($USorgu) / 10);
                        $en_az_orta = ceil($sayfa_goster/2);
                        $en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
                        $sayfa_orta = $sayfa;//Olduğu sayfa
                        if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
                        if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
                        $sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
                        $sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta);
                        if($sol_sayfalar < 1) $sol_sayfalar = 1;
                        if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
						while($USonuc = Sonuc($USorgu)){?> 
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="Urun/<?php echo $USonuc->seo;?>.html">
                                        <img class="img-responsive" alt="<?php echo $USonuc->adi;?>" src="uploads/urunler/kucuk/<?php echo $USonuc->resim;?>" style="height:330px">
                                    </a>
                                    <div class="quick-view">
                                            <a title="Karşılaştırmak için ekle" class="compare" href="?kekle=<?php echo $USonuc->id;?>"></a>
                                            <a title="Ürün Detay" class="search" href="Urun/<?php echo $USonuc->seo;?>.html"></a>
                                    </div>
                                    <?php if($USonuc->secenek != ""){?>
										<form action="Urun/<?php echo $USonuc->seo;?>.html" method="post">
										<?php }else{?>
										<form action="?ekle=<?php echo $USonuc->id;?>" method="post">
										<?php }?>
										<input type="hidden" name="adet" value="1" />
										<div class="add-to-cart">
											<button><i style="line-height: inherit;font-size: 20px;" class="fa fa-shopping-cart"></i> Sepete Ekle</button>
										</div>
									</form>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name kisalt"><a href="Urun/<?php echo $USonuc->seo;?>.html"><?php echo $USonuc->adi;?></a></h5>
                                    <div class="content_price">
										<?php if($USonuc->yuzde == true){?>
										<span class="price product-price"> <?php 
                                     $sonuc = ($USonuc->fiyat*$USonuc->yuzde) / 100;

                                      echo number_format($USonuc->fiyat - $sonuc, 2, ',', '.'); ?> TL</span>
										<span class="price old-price"> <?php echo number_format($USonuc->fiyat, 2, ',', '.');?> TL</span>
										<?php }elseif($USonuc->yuzde == "0"){?>
										<span class="price product-price"> <?php echo number_format($USonuc->fiyat, 2, ',', '.');?> TL</span>
										<?php }?>				
									</div>
									<?php $YorumVarmi = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id'"));?>
											<?php if($YorumVarmi > 0){?>
												<?php $YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id' ORDER BY id DESC");
												$ytoplam = 0;
												$ysay = 0;
												while($YSonuc = Sonuc($YSorgu)){?>
												<?php $ytoplam+=$YSonuc->puan;?>
												<?php $ysay++;?>
												<?php }?>
											<?php $yorumorani = ($ytoplam) / ($ysay*5) * 100;?>
											<?php 
											if($yorumorani <= 20){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 30){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 40){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 50){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 60){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 70){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 80){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												</div>
												';
											}elseif($yorumorani <= 90){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												</div>
												';
											}elseif($yorumorani <= 100){
												echo '
												<div class="product-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												</div>
												';
											}
											?>
											
											<?php }else{?>
											<div class="product-star">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<?php }?>
                                    <div class="info-orther">
                                        <p>Ürün Kodu: <?php echo $USonuc->urun_kodu;?></p>
                                        <p class="availability">Stok Durumu: <span> <?php echo $USonuc->stok;?></span></p>
                                        <div class="product-desc">
										<?php 
										 $parcala = explode("|",$USonuc->ozellik);
										 $index = end($parcala);
										 foreach($parcala as $ozellik){?>
											 <?php echo $ozellik;?><?php echo($ozellik != $index ? ',' : '');?>
										 <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
					<?php }}?>
					<div class="clearfix"></div>
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
				<?php $urunvarmi = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$altkategori->id'");
				if(mysql_affected_rows()){?>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination" name="sayfala">
                        <?php 
                    if($sayfa != 1) echo '<li><a href="javascript:void(0)" onclick="Sayfa(\'1\')">İlk sayfa</a></li>';
                    if($sayfa != 1) echo '<li><a href="javascript:void(0)" onclick="Sayfa(\''.($sayfa-1).'\')">Önceki Sayfa</a> '; 
                    ?>
                    <?php
                    for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
                        if($sayfa == $s) {
                            echo '<li class="active"><a href="javascript:void(0)" onclick="Sayfa(\''.$s.'\')">'.$s.'</a></li>';
                        } else {
                             echo '<li><a href="javascript:void(0)" onclick="Sayfa(\''.$s.'\')">'.$s.'</a></li>';
                        }
                    }
                    if($sayfa != $toplam_sayfa) echo '<li><a href="javascript:void(0)" onclick="Sayfa(\''.($sayfa+1).'\')">Sonraki sayfa</a></li>';
                    if($sayfa != $toplam_sayfa) echo '<li><a href="javascript:void(0)" onclick="Sayfa(\''.$toplam_sayfa.'\')">Son sayfa</a></li>';

                    ?>
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="gosterim">
                            <option value="1">Göster 10</option>
                            <option value="2">Göster 20</option>
                            <option value="3">Göster 50</option>
                            <option value="4">Göster 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select name="neyeg">
                            <option value="0">Ürün İsmi</option>
                            <option value="1">Fiyat</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>