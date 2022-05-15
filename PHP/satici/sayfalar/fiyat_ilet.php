<?php include("system/ayar.php"); ?>
<?php include("system/fonksiyon.php"); ?>
<?php
$isim 	=(trim($_POST["isim"]));
$email		=(trim($_POST["email"]));
$konu	=(trim($_POST["mail"]));
$mesaj	=(trim($_POST["konu"]));
$tarih	=(trim(date("d.m.Y")));
$ip		=(trim($_SERVER['REMOTE_ADDR']));

if($konu=="" or $isim=="" or $mail=="" or $mesaj==""){
	echo "LÜTFEN BOŞ ALAN BIRAKMAYINIZ...";
}else{
	$ekle = mysql_query("INSERT INTO iletisim SET
							isim	=	'$isim',
							email	=	'$email',
							konu	=	'$konu',
							ip		=	'$ip',
							tarih	=	'$tarih',
							mesaj	=	'$mesaj'");
	echo "MAİLİN GÖNDERİLMİŞTİR EN YAKIN ZAMANDA SİZE GERİ DÖNÜŞ YAPILACAKTIR...<br><a href='oku.php'>Gelen Mailler</a>";
}
	?>