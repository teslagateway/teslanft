<?php 
	@session_start();
	ob_start();
	
	## Hataları Gizle ##
	error_reporting(0);
	

	## Bağlantı Değişkenleri ##

	$host 	=	"localhost";

	$user 	=	"teslaga_nft";

	$pass 	=	"123456";

	$db		=	"teslaga_nft";

	

	## Mysql Bağlantısı ##

	$baglan = mysql_connect($host, $user, $pass) or die (mysql_Error());

	

	## Veritabanı Seçimi ##

	mysql_select_db($db, $baglan) or die (mysql_Error());

	



	## Karakter Sorunu ##

	mysql_query("SET CHARACTER SET 'utf8'");

	mysql_query("SET NAMES 'utf8'");

	

	

?>