<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php
if(g('islem')=="iptal")
{
	$confirmCancellation = p('confirmCancellation');
	if($confirmCancellation){
		$id = p('customerID');
		$uye_sil_sorgu = Sorgu("DELETE FROM uyeler WHERE id='$id'");
		$adres_sil_sorgu = Sorgu("DELETE FROM adres WHERE uyeid='$id'");
		unset($_SESSION['uyeid']);
		unset($_SESSION['email']);
		unset($_SESSION['isim']);
		header("Location:index.html");
	}else{
		$bilgi = '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong><i style="margin-top:2px;font-size:16px;" class="fa fa-exclamation-triangle"></i></strong> İptal işlemini onaylamanız gerekmektedir.
				</div>';
	}
	
}
?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns" style="margin-bottom: 20px;">
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
				
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2"><a href="hesabim.html">Hesabım </a> » Üyelik İptali</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
						<form class="accountCancel" action="uyelik-iptal.html?islem=iptal" method="post" id="myForm" name="myForm" onsubmit="return Validator(this);">
						<?php echo $bilgi;?>
						<div class="checkbox">
							<label for="confirmCancellation" class="text-center">
								<input class="bigscale" style="margin-top: 3px;" type="checkbox" id="confirmCancellation" name="confirmCancellation" value="1"> 
								Hesabımı iptal ettikten sonra <?php echo $ayar->firma_adi; ?> 
								altyapısı üzerindeki hesabımla ilgili hiçbir veriye tekrar erişim sağlayamayacağımı ve 
								bu işlemden ötürü <?php echo $ayar->firma_adi; ?>'ün sorumluluğu olmadığını 
								<span style="text-decoration:underline;">kabul ediyorum</span> 
								ve hesabımın iptal edilmesini <span style="text-decoration:underline;">onaylıyorum</span>.
							</label>
						</div>
							
						<div class="form-group text-center">
							<button type="submit" class="btn btn-danger">Hesabımı İptal Et</button>
						</div>

						<input type="hidden" name="customerID" value="<?php echo $_SESSION['uyeid'];?>">
					</form>
							
						</div>
					</div>
				</div>
                </div>
                <!-- ./Content page -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- ./page wapper-->