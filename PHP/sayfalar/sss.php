<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM bilgiler WHERE durum = '1' AND seo = '$id'"));?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Sıkça Sorulan Sorular</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">BİLGİLER</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
								<?php $Sorgu = Sorgu("SELECT * FROM bilgiler WHERE durum = '1' ORDER BY id ASC");
								while($Sonuc = Sonuc($Sorgu)){?>
                                    <li <?php echo($Sonuc->seo == $id ? 'class="active"' : '');?>><span></span><a href="Bilgiler/<?php echo $Sonuc->seo;?>.html"><?php echo $Sonuc->adi;?></a></li>
								<?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                <!-- left silide -->
				<div class="block left-module">
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="false" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                     <?php reklam();?>
                    </ul>
                </div>
                </div>
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title">Sıkça Sorulan Sorular</span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<div class="tab-content margin-top-10" style="padding:0; background: #fff;">

					<div class="tab-pane active" id="tab_1">
						<div class="panel-group" id="accordion1">
						<?php $Sorgu = Sorgu("SELECT * FROM sss WHERE durum = '1' ORDER BY id DESC");
						$say = 1;
						$sayy = 1;
						$collapsed = 1;
						$in = 1;
						while($Sonuc = Sonuc($Sorgu)){?> 
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#accordion1_<?php echo $Sonuc->id;?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle <?php echo($collapsed++ == "1" ? '' : 'collapsed');?>" aria-expanded="<?php echo($sayy++ == "1" ? 'true' : 'false');?>">
										 <?php echo $Sonuc->adi;?>
										</a>
									</h4>
								</div>
								<div class="panel-collapse collapse <?php echo($in++ == "1" ? 'in' : '');?>" id="accordion1_<?php echo $Sonuc->id;?>" aria-expanded="<?php echo($say++ == "1" ? 'true' : 'false');?>">
									<div class="panel-body">
										<?php echo $Sonuc->aciklama;?>
									</div>
								</div>
							</div>
						<?php }?> 	
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