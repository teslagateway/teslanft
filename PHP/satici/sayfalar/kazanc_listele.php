<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(g('islem')=="sil")
{
	$id = g('id');
	
	$sayfa_sil_sorgu = Sorgu("DELETE FROM siparisler WHERE id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-shopping-cart"></i> Tüm Siparişler</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Tüm Siparişler</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="padding:0;">
                
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sıra</th>
                        <th>Sipariş Tarihi</th>
                        <th>Ödeme Şekli</th>
                        <th>Sipariş Tutarı</th>
                     </tr>
                    </thead>
                    <tbody>
					<?php $SiparisSorgu = Sorgu("SELECT * FROM siparisler WHERE satici_kodu= '{$_SESSION['satici_id']}' ORDER BY id DESC");
					$say = 1;
					while($SiparisSonuc = Sonuc($SiparisSorgu)){?>
                      <tr>
                        <td><?php echo $say++; ?></td>
                        <td><?php echo $SiparisSonuc->tarih; ?></td>
                        <td><?php echo $SiparisSonuc->odeme_sekli; ?></td>
                        <td><?php echo $SiparisSonuc->fiyat; ?> ETH</td>
                      </tr>
					<?php } ?> 
		           <?php $oranlar = Sorgu("SELECT * FROM oranlar");
                             $oranlarsonuc= Sonuc($oranlar);
                             ?>
					<?php $SiparisSorguTopla = Sorgu("SELECT * FROM siparisler WHERE satici_kodu= '{$_SESSION['satici_id']}' ORDER BY id DESC");
                               $tutar =0;
                               while($SiparisSonucTopla = Sonuc($SiparisSorguTopla)){

                                $tutar = $tutar + ($SiparisSonucTopla->fiyat*$oranlarsonuc->satici_orani) /100;
                        } ?> 
                        <th>Toplam Kazancım: </th> 
                        <td style="color:red;font-size: large;font-weight: bold;"><?php  echo $tutar; ?> ETH</td>    
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>