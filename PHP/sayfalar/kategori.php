<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>

<?php $id = g('id');?>

<?php $altkategori = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE seo = '$id'"));?>

<?php $kategori = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE id = '$altkategori->ust_id'"));?>

<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1'"));?>
      <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img class="jarallax-img" src="images/background/subheader.jpg" alt="" />
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Explore</h1>
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
                    <div class="row wow fadeIn">
                        <div class="col-lg-12">

                            <div class="items_filter">
                                <form action="https://gigaland.io/blank.php" class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="search item here..." type="text" /> <a href="#" id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>

                                <div id="item_category" class="dropdown">
                                    <a href="#" class="btn-selector">All categories</a>
                                    <ul>
                                        <li class="active"><span>All categories</span></li>
                                        <li><span>Art</span></li>
                                        <li><span>Music</span></li>
                                        <li><span>Domain Names</span></li>
                                        <li><span>Virtual World</span></li>
                                        <li><span>Trading Cards</span></li>
                                        <li><span>Collectibles</span></li>
                                        <li><span>Sports</span></li>
                                        <li><span>Utility</span></li>
                                    </ul>
                                </div>

                                <div id="buy_category" class="dropdown">
                                    <a href="#" class="btn-selector">Buy Now</a>
                                    <ul>
                                        <li class="active"><span>Buy Now</span></li>
                                        <li><span>On Auction</span></li>
                                        <li><span>Has Offers</span></li>
                                    </ul>
                                </div>

                                <div id="items_type" class="dropdown">
                                    <a href="#" class="btn-selector">All Items</a>
                                    <ul>
                                        <li class="active"><span>All Items</span></li>
                                        <li><span>Single Items</span></li>
                                        <li><span>Bundles</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>                     
                        <!-- nft item begin -->
                       <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' ");

						while($USonuc = Sonuc($USorgu)){?>
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item">
                                <div class="author_list_pp">
                                    <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Monica Lucas">                                    
                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='Urun/<?php echo $USonuc->seo;?>.html'">Satın Al</button>
                                            <div class="nft__item_share">
                                                <h4>Paylaş</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.teslagateway.com" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://www.teslagateway.com" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="Urun/<?php echo $USonuc->seo;?>.html">
                                        <img src="uploads/urunler/kucuk/<?php echo $USonuc->resim;?>" class="lazy nft__item_preview" alt="<?php echo $USonuc->adi;?>">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="Urun/<?php echo $USonuc->seo;?>.html">
                                        <h4><?php echo $USonuc->adi;?></h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        <?php echo number_format($USonuc->fiyat, 2, ',', '.'); ?> ETH<span>1/20</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="Urun/<?php echo $USonuc->seo;?>.html">Hemen Al</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>50</span>
                                    </div>                            
                                </div> 
                            </div>
                        </div>                 
                         <?php }?>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Daha fazlası</a>
                        </div>                                              
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->