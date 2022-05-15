<?php 

session_start();

if( substr($_SERVER["HTTP_HOST"], 0, 4) == "www." ) 

{

$www = "www.";

$domainadi = $_SERVER["HTTP_HOST"];

}

else

{

$www = "";

$domainadi = $_SERVER["HTTP_HOST"];

}



$site = $www . "localhost";

if( $domainadi !== $site ) 

{

echo "Lisans�z Kullan�m Tespit Edildi.";

}

else

{

function p($par, $st = false)

{

if( $st ) 

{

return mysql_real_escape_string($_POST[$par]);

}



return mysql_real_escape_string($_POST[$par]);

}



function g($par)

{

return strip_tags(trim(addslashes(htmlentities($_GET[$par]))));

}



function kisalt($par, $uzunluk = 50)

{

if( $uzunluk < strlen($par) ) 

{

$par = mb_substr($par, 0, $uzunluk, "UTF-8") . "...";

}



return $par;

}



function session_olustur($par)

{

foreach( $par as $anahtar => $deger ) 

{

$_SESSION[$anahtar] = $deger;

}

}



function seo($tr1)

{

$turkce = array( "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�" );

$duzgun = array( "s", "S", "i", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U" );

$tr1 = str_replace($turkce, $duzgun, $tr1);

$tr1 = preg_replace("@[^a-z0-9\\-_����������]+@i", "-", $tr1);

return $tr1;

}



function kategoriler()

{

$kategoriSorgu = mysql_query("SELECT * FROM urun_kategori WHERE durum = 1 ORDER BY id ASC");

while( $kategoriSonuc = mysql_fetch_object($kategoriSorgu) ) 

{

echo " \t<li><a title=\"";

echo $kategoriSonuc->kategori_adi;

echo "\" href=\"kategori-";

echo $kategoriSonuc->seo;

echo "\">";

echo $kategoriSonuc->kategori_adi;

echo "</a></li>\r\n ";

}

}



function slider()

{

$SliderSorgu = mysql_query("SELECT * FROM slider WHERE durum = 1 ORDER BY id ASC");

while( $SliderSonuc = mysql_fetch_object($SliderSorgu) ) 

{

echo "\t\t\t<li><img alt=\"";

echo $SliderSonuc->adi;

echo "\" src=\"uploads/slider/";

echo $SliderSonuc->resim;

echo "\" title=\"";

echo $SliderSonuc->adi;

echo "\" /></li>\r\n ";

}

}



function sepetekle()

{

if( isset($_GET["ekle"]) ) 

{

$gelen = $_GET["ekle"];

$secenek = implode("|", $_POST["secenek"]);

$bulundu = false;

$i = 0;

if( !isset($_SESSION["urunler"]) || count($_SESSION["urunler"]) < 1 ) 

{

$_SESSION["urunler"][] = array( "id" => $gelen, "adet" => intval($_POST["adet"]), "secenek" => $secenek );

}

else

{

for( $i = 0; $i < count($_SESSION["urunler"]); $i++ ) 

{

if( $_SESSION["urunler"][$i]["id"] == $gelen ) 

{

$_SESSION["urunler"][$i]["adet"] += intval($_POST["adet"]);

$_SESSION["urunler"][$i]["secenek"] = $secenek;

$bulundu = true;

}



}

if( $bulundu == false ) 

{

$_SESSION["urunler"][] = array( "id" => $gelen, "adet" => intval($_POST["adet"]), "secenek" => $secenek );

}



}



header("Location:sepet.html");

exit();

}



}



function karsilastirmaekle()

{

if( isset($_GET["kekle"]) ) 

{

$kgelen = $_GET["kekle"];

$bulundu = false;

$i = 0;

if( !isset($_SESSION["karsilastirmalar"]) || count($_SESSION["karsilastirmalar"]) < 1 ) 

{

$_SESSION["karsilastirmalar"][] = array( "id" => $kgelen );

}

else

{

for( $i = 0; $i < count($_SESSION["karsilastirmalar"]); $i++ ) 

{

if( $_SESSION["karsilastirmalar"][$i]["id"] == $kgelen ) 

{

$bulundu = true;

}



}

if( $bulundu == false ) 

{

$_SESSION["karsilastirmalar"][] = array( "id" => $kgelen );

}



}



header("Location:karsilastir.html");

exit();

}



}



function upla()

{

if( $_POST["sid"] ) 

{

$urun_id = $_POST["sid"];

$mesaj["mesaj"] = "Gelen id" . $urun_id;

echo json_encode($mesaj, JSON_UNESCAPED_UNICODE);

}



}



function sepetsil()

{

if( isset($_GET["sil"]) && isset($_GET["sil"]) != "" ) 

{

$i = 0;

$gelen = $_GET["sil"];

foreach( $_SESSION["urunler"] as $item ) 

{

$i++;

while( list($key, $value) = each($item) ) 

{

if( $key == "id" && $value == $gelen ) 

{

array_splice($_SESSION["urunler"], $i - 1, 1);

}



}

header("Location:" . $_SERVER["HTTP_REFERER"]);

}

if( $gelen == "" ) 

{

unset($_SESSION["urunler"]);

}



}



}



function karsilastirmasil()

{

if( isset($_GET["ksil"]) && isset($_GET["ksil"]) != "" ) 

{

$i = 0;

$gelen = $_GET["ksil"];

foreach( $_SESSION["karsilastirmalar"] as $item ) 

{

$i++;

while( list($key, $value) = each($item) ) 

{

if( $key == "id" && $value == $gelen ) 

{

array_splice($_SESSION["karsilastirmalar"], $i - 1, 1);

}



}

header("Location:" . $_SERVER["HTTP_REFERER"]);

}

if( $gelen == "" ) 

{

unset($_SESSION["karsilastirmalar"]);

}



}



}



function sayfalar()

{

$SayfaSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 ORDER BY id ASC");

while( $SayfaSonuc = mysql_fetch_object($SayfaSorgu) ) 

{

echo "\t\t\t <li class=\"link_container\"><a href=\"Sayfa/";

echo $SayfaSonuc->seo;

echo ".html\">";

echo $SayfaSonuc->adi;

echo "</a></li>\r\n ";

}

}



function bilgiler()

{

$SayfaSorgu = mysql_query("SELECT * FROM bilgiler WHERE durum = 1 ORDER BY id ASC");

while( $SayfaSonuc = mysql_fetch_object($SayfaSorgu) ) 

{

echo "\t\t\t <li class=\"link_container\"><a href=\"Bilgiler/";

echo $SayfaSonuc->seo;

echo ".html\">";

echo $SayfaSonuc->adi;

echo "</a></li>\r\n ";

}

}



function reklam()

{

$Sorgu = Sorgu("SELECT * FROM reklam WHERE durum = '1' ORDER BY id DESC");

while( $Sonuc = Sonuc($Sorgu) ) 

{

echo " \r\n\t\t\t<li><a href=\"";

echo $Sonuc->url;

echo "\"><img src=\"uploads/reklam/kucuk/";

echo $Sonuc->resim;

echo "\" alt=\"slide-left\"></a></li>\r\n\t\t";

}

}



function haberler()

{

$HaberSorgu = mysql_query("SELECT * FROM haberler WHERE durum = 1 ORDER BY id ASC");

while( $HaberSonuc = mysql_fetch_object($HaberSorgu) ) 

{

echo "<li>\r\n\t\t\t\t<a href=\"haber-detay-" . $HaberSonuc->seo . "\">" . kisalt($HaberSonuc->adi, 30) . "</a>\r\n\t\t\t </li>";

}

}



function Sorgu($sorgu)

{

return mysql_query($sorgu);

}



function Sonuc($sonuc)

{

return mysql_fetch_object($sonuc);

}



function say($say)

{

return mysql_num_rows($say);

}



function kod($uzunluk = 8, $buyuk_harf = 1, $kucuk_harf = 1, $sayi_kullan = 1, $ozel_karakter = "")

{

$buyukler = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$kucukler = "abcdefghijklmnopqrstuvwxyz";

$sayilar = "0123456789";

if( $buyuk_harf ) 

{

$seed_length += 26;

$seed .= $buyukler;

}



if( $kucuk_harf ) 

{

$seed_length += 26;

$seed .= $kucukler;

}



if( $sayi_kullan ) 

{

$seed_length += 10;

$seed .= $sayilar;

}



if( $ozel_karakter ) 

{

$seed_length += strlen($ozel_karakter);

$seed .= $ozel_karakter;

}



for( $x = 1; $x <= $uzunluk; $x++ ) 

{

$sifre .= $seed[rand(0, $seed_length - 1)];

}

return $sifre;

}



function ip()

{

if( getenv("HTTP_CLIENT_IP") ) 

{

$ip = getenv("HTTP_CLIENT_IP");

}

else

{

if( getenv("HTTP_X_FORWARDED_FOR") ) 

{

$ip = getenv("HTTP_X_FORWARDED_FOR");

if( strstr($ip, ",") ) 

{

$tmp = explode(",", $ip);

$ip = trim($tmp[0]);

}



}

else

{

$ip = getenv("REMOTE_ADDR");

}



}



return $ip;

}



function tarih($par)

{

$explode = explode(" ", $par);

$explode2 = explode("-", $explode[0]);

$zaman = substr($explode[1], 0, 5);

if( $explode2[1] == "01" ) 

{

$ay = "Ocak";

}

else

{

if( $explode2[1] == "02" ) 

{

$ay = "�ubat";

}

else

{

if( $explode2[1] == "03" ) 

{

$ay = "Mart";

}

else

{

if( $explode2[1] == "04" ) 

{

$ay = "Nisan";

}

else

{

if( $explode2[1] == "05" ) 

{

$ay = "May�s";

}

else

{

if( $explode2[1] == "06" ) 

{

$ay = "Haziran";

}

else

{

if( $explode2[1] == "07" ) 

{

$ay = "Temmuz";

}

else

{

if( $explode2[1] == "08" ) 

{

$ay = "A�ustos";

}

else

{

if( $explode2[1] == "09" ) 

{

$ay = "Eyl�l";

}

else

{

if( $explode2[1] == "10" ) 

{

$ay = "Ekim";

}

else

{

if( $explode2[1] == "11" ) 

{

$ay = "Kas�m";

}

else

{

if( $explode2[1] == "12" ) 

{

$ay = "Aral�k";

}



}



}



}



}



}



}



}



}



}



}



}



return $explode2[2] . " " . $ay . " " . $explode2[0] . ", " . $zaman;

}



function taksit($fiyat, $taksit, $faiz)

{

$sonuc = array( );

$sonuc[0] = $taksit;

$sonuc[1] = number_format((double) $fiyat + $fiyat / 100 * $faiz, 2, ".", "");

$sonuc[2] = number_format((double) $sonuc[1] / $taksit, 2, ".", "");

return $sonuc;

}



function aktif($urlsi)

{

$mesaj = "";

if( strstr($_SERVER[HTTP_HOST] . "/" . $_SERVER[REQUEST_URI], $urlsi) ) 

{

$mesaj = "active";

}



return $mesaj;

}



function oturumkontrolana()

{

$kullanici = $_SESSION["satici_kullanici"];

$sifre = $_SESSION["satici_sifre"];

$oturumkontrol = mysql_query("select * from satici where satici_kullanici ='" . $kullanici . "' and satici_sifre ='" . $sifre . "'");

$durum = mysql_fetch_array($oturumkontrol);

if( $durum ) 

{

return NULL;

}



echo "<script language=\"javascript\">window.location=\"index.php\";</script>";

exit();

}



$ayarlar = Sorgu("SELECT * FROM site_ayar WHERE id ='1'");

$ayar = Sonuc($ayarlar);

}