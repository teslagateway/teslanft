<?php 
include("system/ayar.php");
include("system/fonksiyon.php");
$kategori = $_POST['kategoriId'];
	$altkategoriler = mysql_query("SELECT * FROM alt_urun_kategori WHERE id='$kategori'");
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
?>