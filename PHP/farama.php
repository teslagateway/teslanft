<?php if(isset($_POST)){
		include("yonetim/system/ayar.php");
		include("yonetim/system/fonksiyon.php");

		$mesaj['hata'] = false;
		$kategori = p("kategori");
		$marka = p("markalar");
		$fiyat = p("fiyat");
		$ozellikler = p("ozellik");
		$siralama = p("siralama");
		$bol_ozellik = explode(",", $ozellikler);
		$bol_fiyat = explode(",", $fiyat);
		$bol_kategori = explode(",", $kategori);
		$limit = p("gosterilecek");
		$sayfa = p("sayfa");

		if(is_null($sayfa ) || !is_numeric($sayfa)) $sayfa = 1;
		switch ($limit) {
			case '1':
				$limit = 10;
				break;
			case '2':
				$limit = 20;
				break;
			case '3':
				$limit = 50;
				break;
			case '4':
				$limit = 100;
				break;
			default:
				$limit = 10;
				break;
		}
		switch ($siralama) {
			case '0':
				$sirala = "ORDER BY adi";
				break;
			case '1':
				$sirala = "ORDER BY fiyat";
				break;
			default:
				$sirala = "";
				break;
		}
		if(is_array($bol_kategori) && count($bol_kategori) > 1){
			$kategoriler .= "AND altkategori IN(";
			for ($i=0; $i <count($bol_kategori); $i++) {
			$kadi = $bol_kategori[$i];
			if(is_numeric($kadi)){
				$al = Sorgu("SELECT * FROM alt_urun_kategori WHERE id = '$kadi'");
				if(say($al) == 1){
				$veri = Sonuc($al);
				if($i == 0 && 2 != count($bol_kategori)) $kategoriler .= "'".$veri->id."',";
				if($i == 0 && 2 == count($bol_kategori)) $kategoriler .= "'".$veri->id."'";
				if($i != 0 && $i+2 != count($bol_kategori)) $kategoriler .= "'".$veri->id."',";
				if($i != 0 && $i+2 == count($bol_kategori)) $kategoriler .= "'".$veri->id."'";
				}
			}
			}
			$kategoriler .= ")";
		}else{
			$kategoriler = "";
		}
		if(is_array($bol_ozellik) && count($bol_ozellik) > 1){
			$secenek .= "AND (";
			for ($i=0; $i <count($bol_ozellik); $i++) {
			$adi = $bol_ozellik[$i];
			if(is_numeric($adi)){
				$al = Sorgu("SELECT * FROM secenek WHERE id = '$adi'");
				if(say($al) == 1){
				$veri = Sonuc($al);
				if($i != 0) $secenek .= " OR secenek LIKE('%".$veri->adi."%')";
				if($i == 0) $secenek .= "secenek LIKE('%".$veri->adi."%')";
				}
			}
			}
			$secenek .= ")";
		}else{
			$secenek = "";
		}
		if(is_array($bol_fiyat) && count($bol_fiyat) > 1){
			$fiyat = "";
			for ($i=0; $i <count($bol_fiyat); $i++) {
		switch ($bol_fiyat[$i]) {
			case '0':
				$fiyat .= "";
				break;
			case '1':
				$fiyat .= ",10,50,";
				break;
			case '2':
				$fiyat .= ",50,100,";
				break;
			case '3':
				$fiyat .= ",100,250,";
				break;
			case '4':
				$fiyat .= ",250,500,";
				break;
			case '5':
				$fiyat .= ",500,1000,";
				break;
			case '6':
				$fiyat .= ",1000,2000,";
				break;
			case '7':
				$fiyat .= ",2000,2500,";
				break;
			case '8':
				$fiyat .= ",2500,999999999,";
				break;
			default:
				$fiyat .= "";
				break;
		}
	}
		$aralik_al = explode(",",$fiyat);
		if(is_array($aralik_al) && count($aralik_al) > 1){
			$enbuyuk = 0;
			$enkucuk = 999999999;
			for ($i=0; $i <count($aralik_al); $i++) {
				$fiyat_cevir = intval($aralik_al[$i]);
				if($fiyat_cevir <= $enkucuk && $fiyat_cevir != 0) $enkucuk = $fiyat_cevir;
				if($fiyat_cevir >= $enbuyuk) $enbuyuk = $fiyat_cevir;
			}
			$f_sonuc .= "AND fiyat BETWEEN $enkucuk AND $enbuyuk";
		}
		}else{
			$f_sonuc = "";
		}
		$sayfala_limit = ($sayfa - 1) * $limit;
		$ara = Sorgu("SELECT * FROM urunler WHERE durum = '1' $kategoriler $f_sonuc $secenek $sirala LIMIT $sayfala_limit,$limit");
		$say = say($ara);
		$toplam_urun = say(Sorgu("SELECT * FROM urunler WHERE durum = '1' $kategoriler $f_sonuc $secenek $sirala"));
		$mesaj['urunler'] = "";
		$mesaj['sayfala'] = "";
		if($say > 0){
		$sayfa_goster = 11; // gösterilecek sayfa sayısı
		$toplam_sayfa = ceil($toplam_urun / $limit);
        $en_az_orta = ceil($sayfa_goster/2);
        $en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
        $sayfa_orta = $sayfa;//Olduğu sayfa
        if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
        if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
        $sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
        $sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta);
        if($sol_sayfalar < 1) $sol_sayfalar = 1;
        if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
        if($sayfa != 1) $mesaj['sayfala'] .= '<li><a href="javascript:void(0)" onclick="Sayfa(\'1\')">İlk sayfa</a></li>';
        if($sayfa != 1) $mesaj['sayfala'] .= '<li><a href="javascript:void(0)" onclick="Sayfa(\''.($sayfa-1).'\')">Önceki Sayfa</a> '; 
        for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
        	if($sayfa == $s) {
                $mesaj['sayfala'] .= '<li class="active"><a href="javascript:void(0)" onclick="Sayfa(\''.$s.'\')">'.$s.'</a></li>';
            } else {
                $mesaj['sayfala'] .= '<li><a href="javascript:void(0)" onclick="Sayfa(\''.$s.'\')">'.$s.'</a></li>';
            }
        }
        if($sayfa != $toplam_sayfa) $mesaj['sayfala'] .= '<li><a href="javascript:void(0)" onclick="Sayfa(\''.($sayfa+1).'\')">Sonraki sayfa</a></li>';
        if($sayfa != $toplam_sayfa) $mesaj['sayfala'] .= '<li><a href="javascript:void(0)" onclick="Sayfa(\''.$toplam_sayfa.'\')">Son sayfa</a></li>';
		while($USonuc = Sonuc($ara)){
			$YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id' ORDER BY id DESC");
            $ytoplam = 0;
            $ysay = 0;
            while($YSonuc = Sonuc($YSorgu)){
            	$ytoplam+=$YSonuc->puan;
            	$ysay++;
            }
            $yorumorani = ($ytoplam) / ($ysay*5) * 100;
            if($yorumorani <= 20){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 30){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 40){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 50){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 60){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 70){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 80){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 90){
            $yorma = '
            <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            </div>
            ';
           }elseif($yorumorani <= 100){
            $yorma = '
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
		 $parcala = explode("|",$USonuc->ozellik);
			foreach($parcala as $ozellik){
			$ozellikyaz .= $ozellik;
		}
		
		if($USonuc->yuzde == true){									
		$fiyat1 	= $USonuc->fiyat - $USonuc->ifiyat; 
		$fiyat2 	= $USonuc->fiyat; 
		$yuzde 		= ($fiyat1 / $fiyat2) * 100;
			$yuzdeyaz = '<span class="product-sale"> %'.floor($USonuc->yuzde).' İNDİRİM</span>';
		}
                                            
		if($USonuc->secenek != ""){
			$postla  = '<form action="Urun/'.$USonuc->seo.'.html" method="post">';
		}else{
			$postla = '<form action="?ekle='.$USonuc->id.'" method="post">';
		}
		if($USonuc->yuzde == true){?>
			<?php  $sonuc = ($USonuc->fiyat*$USonuc->yuzde) / 100;
              $fiyat = '<span class="price product-price">'.number_format($USonuc->fiyat - $sonuc, 2, ',', '.').' TL</span><span class="price old-price">'.number_format($USonuc->fiyat, 2, ',', '.').' TL</span>';?>
			<?php }elseif($USonuc->yuzde == "0"){?>
			<?php $fiyat = '<span class="price product-price">'.number_format($USonuc->fiyat, 2, ',', '.').' TL</span>';?>
			<?php }
			$mesaj['urunler'] .= '<li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="Urun/'.$USonuc->seo.'.html">
                                        <img class="img-responsive" alt="'.$USonuc->adi.'" src="uploads/urunler/kucuk/'.$USonuc->resim.'" style="height:330px">
                                    </a>
									'.$postla.'
										<div class="quick-view">
                                            <a title="Karşılaştırmak için ekle" class="compare" href="?kekle='.$USonuc->id.'"></a>
                                            <a title="Ürün Detay" class="search" href="Urun/'.$USonuc->seo.'.html"></a>
										</div>
      
										<input type="hidden" name="adet" value="1" />
										<div class="add-to-cart">
											<button><i style="line-height: inherit;font-size: 20px;" class="fa fa-shopping-cart"></i> Sepete Ekle</button>
										</div>
										<div class="group-price">
										'.($USonuc->yuzde == true ? ''.$yuzdeyaz.'' : '').'
										</div>
									</form>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name kisalt" style="white-space: nowrap;"><a href="Urun/'.$USonuc->seo.'.html">'.$USonuc->adi.'</a></h5>
                                    <div class="content_price">'.$fiyat.'</div>
										'.$yorma.'
                                    <div class="info-orther">
                                        <p>Ürün Kodu:'.$USonuc->urun_kodu.'</p>
                                        <p class="availability">Stok Durumu: <span> '.$USonuc->stok.'</span></p>
                                        <div class="product-desc">
											'.$ozellikyaz.'
										</div>
                                    </div>
                                </div>
                            </div>
                        </li>'; 
                    }
                    }else{ 
					$mesaj['urunler'] = '<div class="alert alert-info" style="margin-top: 30px;margin-left:15px;margin-right:15px;">
						<button type="button" class="close" data-dismiss="alert">×</button> Aradığınız özelliklere ait ürün bulunamadı..</div>';
						
		}
	echo json_encode($mesaj,JSON_UNESCAPED_UNICODE);
} ?>