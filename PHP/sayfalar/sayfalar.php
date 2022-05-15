<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM sayfalar WHERE durum = '1' AND seo = '$id'"));?>
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php echo $sayfa->adi;?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">KURUMSAL</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
								<?php $Sorgu = Sorgu("SELECT * FROM sayfalar WHERE durum = '1' ORDER BY id ASC");
								while($Sonuc = Sonuc($Sorgu)){?>
                                    <li <?php echo($Sonuc->seo == $id ? 'class="active"' : '');?>><span></span><a href="Sayfa/<?php echo $Sonuc->seo;?>.html"><?php echo $Sonuc->adi;?></a></li>
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
                    <span class="page-heading-title"><?php echo $sayfa->adi;?></span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
					<?php if($sayfa->resim){?>
                    <img src="uploads/sayfalar/<?php echo $sayfa->resim;?>" class="alignleft" width="310" alt="<?php echo $sayfa->adi;?>">
					<?php }?>
                    <?php echo $sayfa->aciklama;?>

                </div>
                <!-- ./Content page -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- ./page wapper-->