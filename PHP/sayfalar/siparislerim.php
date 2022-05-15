<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>

<?php if(!isset($_SESSION["email"])){

	header("Location:giris.html");

}?>

<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '{$_SESSION['uyeid']}'"));?>

<!-- page wapper-->

<div class="columns-container">

    <div class="container" id="columns">

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

                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » Siparişlerim</span>

                </h2>

                <!-- Content page -->

                <div class="content-text clearfix">

					<div class="row">

					<div class="col-sm-12">

						<div class="box-authentication">

							<div class="content-page" style="margin-top:0px;">

							<table class="table table-striped table-hover">

								<thead>

								<tr>

									<th>

										 # Sipariş NO

									</th>

									<th>

										 Sipariş Tarihi

									</th>

									<th>

										 Ödeme Şekli

									</th>										

									<th>

										 Sipariş Tutarı

									</th>

									<th>

										 Durum

									</th>

									<th>

										 İşlemler

									</th>									

								</tr>

								</thead>

								<tbody>

								<?php $Sorgu = Sorgu("SELECT * FROM siparisler WHERE uyeid = '{$_SESSION['uyeid']}' ORDER BY id DESC");

								if(!mysql_affected_rows()){?>

								<tr>

								<td colspan="7">

									Siparişiniz bulunmuyor

								</td>	

								</tr>

								<?php }else{

								while($Sonuc = Sonuc($Sorgu)){?>

								<tr>

									<td>

										<a href="Siparis/<?php echo $Sonuc->id;?>.html"><b># <?php echo $Sonuc->sno;?></b></a>

									</td>								

									<td>

										<?php echo $Sonuc->tarih;?>

									</td>

									<td>

										 <?php echo $Sonuc->odeme_sekli;?>

									</td>									

									<td>

										 <?php echo $Sonuc->fiyat;?> TL

									</td>

									<td>
<?php if($Sonuc->durum == 0){

										echo "<span class='label label-sm label-warning'> Onay Bekliyor </span>";
}elseif($Sonuc->durum == 1){

										echo "<span class='label label-sm label-success'> Onaylandı </span>";
}elseif($Sonuc->durum == 2){

										echo "<span class='label label-sm label-danger'> Hatalı Ödeme </span>";
}elseif($Sonuc->durum == 3){

										echo "<span class='label label-sm label-info'> İade Edilmiş Ödeme </span>";
}elseif($Sonuc->durum == 4){

										echo "<span class='label label-sm label-danger'> İptal Edilmiş Ödeme </span>";
}
?>
									</td>

									<td>

										<a href="Siparis/<?php echo $Sonuc->id;?>.html" class="btn btn-xs btn-success">

											<i style="margin-top: 2px;" class="fa fa-eye"></i> Detaylar 

										</a>

									</td>

								</tr>

								<?php }}?>

								</tbody>

								</table>

			

							<div class="clearfix"></div>

							</div>



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