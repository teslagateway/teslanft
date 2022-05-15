<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(g('islem')=="sil")
{
	$id = g('id');
	
	$slider_sil_sorgu = Sorgu("DELETE FROM yonetici WHERE yonetici_id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-users"></i> Yönetici Listesi</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="anasayfa.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Yönetici Listesi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="padding:0;">
                <a href="yonetici-ekle.html" class="btn bg-navy margin"><i class="fa fa-plus"></i> Yönetici Ekle</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sıra</th>
                        <th>Yönetici Ad Soyad</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-mail</th>
                        <th style="width:150px;">Son Giriş</th>
                        <th style="width:100px;">İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
        <?php $YoneticiSorgu = Sorgu("SELECT * FROM yonetici ORDER BY yonetici_id DESC");
        while($YoneticiSonuc = Sonuc($YoneticiSorgu)){?>
                      <tr>
                        <td><?php echo $YoneticiSonuc->yonetici_id; ?></td>
                        <td><?php echo $YoneticiSonuc->yonetici_ad_soyad; ?></td>
                        <td><?php echo $YoneticiSonuc->yonetici_kullanici; ?></td>
                        <td><?php echo $YoneticiSonuc->yonetici_email; ?></td>
                        <td><?php echo $YoneticiSonuc->yonetici_son_giris; ?></td>
                        <td>
                        <a href="?islem=sil&id=<?php echo $YoneticiSonuc->yonetici_id;?>" title="Sil" class="btn btn-danger  btn-xs" onclick="return confirm('Silmek istediğinize emin misiniz ?')" id="remove-all">
			 Sil
			 </a>
			 
			 <a href="?sayfa=yonetici-ekle&islem=duzenle&id=<?php echo $YoneticiSonuc->yonetici_id;?>" class="btn btn-info btn-xs" title="Düzenle" id="add-sticky">
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