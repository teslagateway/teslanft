<?php

if(('islem')=="siparisdurumu")

{

	$sayfa_onay_sorgu = Sorgu("UPDATE siparisler SET siparisdurumu=1");

	

	$bilgi = '	 <div class="alert alert-success">

										Sýpariþ baþarý ile onaylandý !

				  </div>' ;

	

}
?>