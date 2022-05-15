<?php include("yonetim/system/ayar.php"); ?>
<?php include("yonetim/system/fonksiyon.php"); ?>
<?php
$adresb = Sonuc(Sorgu("SELECT * FROM adres WHERE uyeid = '{$_SESSION['uyeid']}'"));
if($_POST){
	$id = p('id');
	$bul= Sorgu("SELECT * FROM ilceler WHERE il_id = '$id'");
	while($goster = Sonuc($bul)){?>
		<option <?php echo($goster->id == $adresb->semt ? 'selected' : '')?> value="<?php echo $goster->id;?>"><?php echo $goster->baslik;?></option>
	<?php }
}
?>