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
                    <span class="page-heading-title"><a href="hesabim.html">Hesabım </a> » Ticket İşlemleri</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
					<div class="box-authentication">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-"><a class="btn btn-success pull-right" href="ticket-olustur.html"><i style="margin-top: 3px;" class="fa fa-plus-circle"></i> Yeni Destek Talebi Gönderin</a></div>
						</div>
						<table id="example1" style="margin-top:10px;" class="table table-bordered table-hover">
                    <thead id="ticket" style="background: #F6F6F6;">
                      <tr>
                        <th>Tarih</th>
                        <th>Departman</th>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>Son Güncelleme</th>
                        <th style="width:100px;">İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $Sorgu = Sorgu("SELECT * FROM ticket WHERE uyeid = '{$_SESSION['uyeid']}' ORDER BY id DESC");
					while($Sonuc = Sonuc($Sorgu)){?>
                      <tr>
                        <td><?php echo $Sonuc->tarih;?></td>
                        <td>
						<?php if($Sonuc->departman=='1'){?>
							Ödeme İşlemleri
						<?php }elseif($Sonuc->departman=='2'){?>
							Üyelik İşlemleri
						<?php }elseif($Sonuc->departman=='3'){?>
						
						<?php }?>
						</td>
                        <td><a href="ticket-oku.html?id=<?php echo $Sonuc->id;?>"><?php echo $Sonuc->baslik;?></a></td>
                        <td style="text-align: center;">
						<?php
			 				if($Sonuc->durum=='0'){?>
                             <span class="label label-danger">Yanıtlandı</span>
                             <?php } else { ?>
                             <span class="label label-success">Açık</span>
						 <?php } ?>
						</td>
                        <td><?php echo $Sonuc->guncelleme;?></td>
                        <td style="text-align: center;">
						 <a href="ticket-oku.html?id=<?php echo $Sonuc->id;?>" class="btn btn-info btn-xs" title="Düzenle" id="add-sticky">
						 Bildirimi Görüntüle
						 </a>
                        </td>
                      </tr>
					<?php }?>  
                    </tbody>
                  </table>
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