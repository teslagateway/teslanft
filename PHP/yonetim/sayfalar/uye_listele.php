<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(g('islem')=="sil")
{
	$id = g('id');
	
	$slider_sil_sorgu = Sorgu("DELETE FROM uyeler WHERE id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-users"></i> Üye Listesi</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Üye Listesi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="padding:0;">
                <a href="uye-ekle.html" class="btn bg-navy margin"><i class="fa fa-plus"></i> Üye Ekle</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sıra</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>E-mail</th>
                        <th>Şifre</th>
                        <th>Gün</th>
                        <th>Ay</th>
                        <th>Yıl</th>
                        <th>Cinsiyet</th>
                        <th>IP</th>
                        <th>Durum</th>
                        <th style="width:150px;">Son Giriş</th>
                        <th style="width:100px;">İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
        <?php $uyelerSorgu = Sorgu("SELECT * FROM uyeler ORDER BY id DESC");
        while($uyelerSonuc = Sonuc($uyelerSorgu)){?>
                      <tr>
                        <td><?php echo $uyelerSonuc->id; ?></td>
                        <td><?php echo $uyelerSonuc->ad; ?></td>
                        <td><?php echo $uyelerSonuc->soyad; ?></td>
                        <td><?php echo $uyelerSonuc->email; ?></td>
                        <td><?php echo $uyelerSonuc->sifre; ?></td>
                        <td><?php echo $uyelerSonuc->gun; ?></td>
                        <td><?php echo $uyelerSonuc->ay; ?></td>
                        <td><?php echo $uyelerSonuc->yil; ?></td>
                        <td><?php echo $uyelerSonuc->cinsiyet; ?></td>
                        <td><?php echo $uyelerSonuc->ip; ?></td>
                        <td><?php echo $uyelerSonuc->durum; ?></td>
                        <td><?php echo $uyelerSonuc->tarih; ?></td>
                        <td>
                        <a href="?islem=sil&id=<?php echo $uyelerSonuc->id;?>" title="Sil" class="btn btn-danger  btn-xs" onclick="return confirm('Silmek istediğinize emin misiniz ?')" id="remove-all">
			 Sil
			 </a>
			 
			 <a href="?sayfa=uye-ekle&islem=duzenle&id=<?php echo $uyelerSonuc->id;?>" class="btn btn-info btn-xs" title="Düzenle" id="add-sticky">
			 Düzenle
			 </a>
                        </td>
                      </tr>
         <?php } ?>             

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