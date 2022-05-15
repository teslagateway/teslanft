 <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Bloglar</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row">
	          <?php 
				$page = @intval($_GET['s']);
				if(!$page) $page = 1;
				$total = mysql_num_rows(mysql_query("SELECT * FROM bloglar WHERE durum = '1'"));
				$limit= 4;
				$page_count = ceil($total/$limit);
				if($page > $page_count) $page = 1;
				$show = $page * $limit - $limit;
				$Sorgu = Sorgu("SELECT * FROM bloglar WHERE durum = '1' ORDER BY id DESC LIMIT $show,$limit");
				while($Sonuc = Sonuc($Sorgu)){?>
						<div class="col-lg-4 col-md-6 mb30">
							<div class="bloglist item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img alt="<?php echo $Sonuc->adi;?>" src="uploads/bloglar/thumb/<?php echo $Sonuc->resim;?>" class="lazy" style="height: 207px;>
                                        </div>
                                        <div class="post-text">
                                            <span class="p-tagline"> <i class="fa fa-eye"></i> <?php echo $Sonuc->hit;?></span>
                                            <span class="p-date"><?php echo $Sonuc->tarih;?></span>
                                            <h4><a href="#"><?php echo $Sonuc->adi;?><span></span></a></h4>
                                            <p><?php echo $Sonuc->aciklama;?></p>
                                        </div>
                                    </div>
                                </div>
						</div>
           <?php } ?>
                     
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->