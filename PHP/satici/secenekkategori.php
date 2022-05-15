<?php 
include("system/ayar.php");
include("system/fonksiyon.php");
?>  
<?php		
$kategori = $_POST['kategoriId'];
$query = mysql_query("SELECT * FROM secenek_kategori WHERE id = ".$kategori."");
?>
<select class="form-control" name="secenekkategori" id="secenekkategori"   data-placeholder="Kategori Seçiniz">          
<?php
while($sonuc = mysql_fetch_object($query)){?>
<option value="<?php echo $sonuc->id;?>"><?php echo $sonuc->kategori_adi;?></option>
<?php }
?>
</select>
