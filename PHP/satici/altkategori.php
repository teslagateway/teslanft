<?php 
include("system/ayar.php");
include("system/fonksiyon.php");
?>  
<?php		
$kategori = $_POST['kategoriId'];
$query = mysql_query("SELECT * FROM alt_urun_kategori WHERE ust_id = ".$kategori."");
?>
<select class="form-control" name="altkategori" id="altkategori"   data-placeholder="Kategori Seçiniz" onchange="secenekGetir()">          
<?php
while($sonuc = mysql_fetch_object($query)){?>
<option value="<?php echo $sonuc->id;?>"><?php echo $sonuc->kategori_adi;?></option>
<?php }
?>
</select>
