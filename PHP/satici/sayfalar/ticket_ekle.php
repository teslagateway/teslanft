<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php
if(p('mesaj') && g('islem')=="duzenle")
{
	$mesaj 		= $_POST['mesaj'];
	$uyeid 		= p('uye_id');
	$rutbe 		= "1";
	$ticketid 	= p('ticket_id');
	$durum 		= "0";
	$t			= date("Y-m-d H:i:s");
	$k_tarih	= tarih($t);
	
	$Ticket_sorgu	=	Sorgu("INSERT INTO ticket_cevap SET
										ticket_id	=	'$ticketid', 
										uye_id		=	'$uyeid',
										rutbe		=	'$rutbe',
										mesaj		=	'$mesaj', 
										guncelleme	=	'$k_tarih',
										durum		=	'$durum'");	
	$ticket_durum	=	Sorgu("UPDATE ticket SET 
										durum		=	'$durum',
										guncelleme  =	'$k_tarih'
										WHERE id	=	'$ticketid'");
	if($Ticket_sorgu){																							   
		
	}else{
	$bilgi = '  <div class="alert alert-danger alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    		Hata oluştu.Tekrar Deneyiniz.
                  </div>
	' ;	
	}
}
if(g('islem')=="sil")
{
	$id = g('id');
	$ticketid 	= g('ticketid');
	$ticket_sil_sorgu = Sorgu("DELETE FROM ticket_cevap WHERE id='$id'");
	if($ticket_sil_sorgu){
		header("Location:ticket-cevapla.html?islem=duzenle&id=".$ticketid."");
	}
}
if($_GET['islem']=="duzenle")
{
	$sayfaid = $_GET['id'];	
	$durum = "duzenle" ;
	$TicketSonuc = Sonuc(Sorgu("SELECT * FROM ticket WHERE id='$sayfaid'"));
}

?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small><i class="fa fa-ticket"></i> Ticket Cevapla</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Ticket Cevapla</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <?php echo $bilgi;?>
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="row">  
              <div class="col-md-12">
                <!-- form start -->
          <!-- DIRECT CHAT PRIMARY -->
          <div class="direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $TicketSonuc->baslik;?></h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
			  
              <div class="direct-chat-messages">
			  
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?php echo $TicketSonuc->isim;?></span>
                    <span class="direct-chat-timestamp pull-right"><?php echo $TicketSonuc->guncelleme;?></span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="dist/img/avatar1.jpg" alt="<?php echo $TicketSonuc->isim;?>"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    <?php echo $TicketSonuc->mesaj;?>
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
				<?php $Sorgu = Sorgu("SELECT * FROM ticket_cevap WHERE ticket_id = '{$TicketSonuc->id}' ORDER BY id ASC");
				while($Sonuc = Sonuc($Sorgu)){?>
				<?php $uye   = Sonuc(Sorgu("SELECT * FROM uyeler WHERE id = '{$Sonuc->uye_id}'"));?>
                <!-- Message to the right -->
                <div class="direct-chat-msg <?php echo($Sonuc->rutbe == "1" ? 'right' : '');?> ">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right"><?php echo($Sonuc->rutbe == "1" ? 'Yetkili' : ''.$uye->ad.' '.$uye->soyad.'');?></span>
                    <span class="direct-chat-timestamp pull-left"><?php echo $Sonuc->guncelleme;?></span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="dist/img/avatar1.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    <?php echo $Sonuc->mesaj;?> 
					<?php if($Sonuc->rutbe == "1"){?>
					<a href="?islem=sil&id=<?php echo $Sonuc->id;?>&ticketid=<?php echo $TicketSonuc->id;?>" title="Sil" class="btn btn-box-tool" onclick="return confirm('Silmek istediğinize emin misiniz ?')" id="remove-all">
						<i style="color:#fff;" class="fa fa-trash"></i>
					</a>
					<?php }?>
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
				<?php }?>
				
              </div>
              <!--/.direct-chat-messages-->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="input-group">
                  <input type="text" name="mesaj" placeholder="Cevapla ..." class="form-control">
                  <input type="hidden" name="uye_id" value="<?php echo $TicketSonuc->uyeid;?>">
                  <input type="hidden" name="ticket_id" value="<?php echo $TicketSonuc->id;?>">
                      <span class="input-group-btn">
                        <button type="submit" onclick="submit();" class="btn btn-primary btn-flat">Gönder</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->

              </div><!-- /.box -->
              </div>
</div>
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>
      
      <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>
    
    