<?php

@$baglanti = new mysqli('localhost', 'teslaga_nft', '123456', 'teslaga_nft'); // Veritabanı bağlantımızı yapıyoruz.
	if(mysqli_connect_error())
	{
		echo mysqli_connect_error();
		exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
	}

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>