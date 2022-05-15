<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>

<?php $id = g('id');?>

<?php $urun = Sonuc(Sorgu("SELECT * FROM urunler WHERE durum = '1' AND seo = '$id'"));?>

<?php $kategori = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE id = '$urun->kategori'"));?>

<?php $altkategori = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE id = '$urun->altkategori'"));?>

<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1'"));?>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            

            <section id="nft-item-details" aria-label="section" class="sm-mt-0">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-md-6 text-center">
                            <div class="nft-image-wrapper">
                                <img src="uploads/urunler/<?php echo $urun->resim;?>" class="image-autosize img-fluid img-rounded mb-sm-30" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item_info">
                                <h2><?php echo $urun->adi;?></h2>
                                <div class="item_info_counts">
                                    <div class="item_info_type"><i class="fa fa-image"></i><?php echo $kategori->kategori_adi;?></div>
                                    <div class="item_info_like"><i class="fa fa-heart"></i>18</div>
                                </div>
                                <p><?php echo $urun->aciklama;?></p>

                                <div class="d-flex flex-row">
                                    <div class="mr40">
                                        <h6>Yaratıcı</h6>
                                        <div class="item_author">                                    
                                            <div class="author_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="author_list_info">
                                                <a href="author.html">Monica Lucas</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>Koleksiyon</h6>
                                        <div class="item_author">                                    
                                            <div class="author_list_pp">
                                                <a href="collection.html">
                                                    <img class="lazy" src="images/collections/coll-thumbnail-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="author_list_info">
                                                <a href="collection.html">AnimeSailorClub</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="spacer-40"></div>

                                <div class="de_tab tab_simple">
    
                                <ul class="de_nav">
                                    <li class="active"><span>Detaylar</span></li>
                                    <li><span>Teklifler</span></li>
                                    <li><span>Geçmiş</span></li>
                                </ul>
                                
                                <div class="de_tab_content">
                                    <div class="tab-1">
                                        <h6>Sahip</h6>
                                        <div class="item_author">                                    
                                            <div class="author_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-10.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="author_list_info">
                                                <a href="author.html">Stacy Long</a>
                                            </div>
                                        </div>

                                        <div class="spacer-40"></div>
                                        <h6>Seçenekler</h6>
                                        <div class="row gx-2">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Background</h5>
                                                    <h4>Yellowish Sky</h4>
                                                    <span>85% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Eyes</h5>
                                                    <h4>Purple Eyes</h4>
                                                    <span>14% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Nose</h5>
                                                    <h4>Small Nose</h4>
                                                    <span>45% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Mouth</h5>
                                                    <h4>Smile Red Lip</h4>
                                                    <span>61% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Neck</h5>
                                                    <h4>Pink Ribbon</h4>
                                                    <span>27% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Hair</h5>
                                                    <h4>Pink Short</h4>
                                                    <span>35% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Accessories</h5>
                                                    <h4>Heart Necklace</h4>
                                                    <span>33% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Hat</h5>
                                                    <h4>Cute Panda</h4>
                                                    <span>62% have this trait</span>
                                                </a>
                                            </div>      
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Clothes</h5>
                                                    <h4>Casual Purple</h4>
                                                    <span>78% have this trait</span>
                                                </a>
                                            </div>                                   
                                        </div>
                                        <div class="spacer-30"></div>
                                    </div>

                                    <div class="tab-2">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-3">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-5.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Jimmy Wright</b> at 6/14/2021, 6:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="author.html">
                                                    <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>                                    
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="spacer-10"></div>

                                <h6>Fiyat</h6>
                                <div class="nft-item-price"><img src="images/misc/ethereum.svg" alt=""><span><span class="price"> <?php echo number_format($urun->fiyat, 2, ',', '.'); ?> </span></span>($253.67)</div>

                                <!-- Button trigger modal -->
                                <a href="#" class="btn-main btn-lg" data-bs-toggle="modal" data-bs-target="#buy_now">
                                  Satın Al
                                </a>
                                &nbsp;
                                <a href="#" class="btn-main btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#place_a_bid">
                                  Teklif Yap
                                </a>
                                
                            </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->

        <!-- buy now -->
        <div class="modal fade" id="buy_now" tabindex="-1" aria-labelledby="buy_now" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="p-3 form-border">
                    <h3>Kasa</h3>
                    <b>Monica Lucas</b>'tan bir <b>Anime Sailor Club #304</b> satın almak üzeresiniz
                    <div class="spacer-single"></div>
                    <h6>Miktar girin. <span class="id-color-2">10 mevcut</span></h6>
                    <input type="text" name="buy_now_qty" id="buy_now_qty" class="form-control" value="1" />
                    <div class="spacer-single"></div>
                    <div class="de-flex">
                        <div>Bakiyeniz</div>
                        <div><b>10.67856 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Hizmet Bedeli %2,5</div>
                        <div><b>0.00325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Ödenecek</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="spacer-single"></div>
                    <button onclick="userLoginOut()" id="buttonText" class="btn-main btn-fullwidth"><i class="icon_wallet_alt"></i><span> Ödeme Yap</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- place a bid -->
        <div class="modal fade" id="place_a_bid" tabindex="-1" aria-labelledby="place_a_bid" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="p-3 form-border">
                    <h3>Teklif Yap</h3>
                    <b>Monica Lucas</b>'tan <b>Anime Sailor Club #304</b> için bir teklif vermek üzeresiniz
                    <div class="spacer-single"></div>
                    <h6>Teklifiniz (ETH)</h6>
                    <input type="text" name="bid_value" id="bid_value" class="form-control" placeholder="Teklif girin" />
                    <div class="spacer-single"></div>
                    <h6>Miktar girin. <span class="id-color-2">10 available</span></h6>
                    <input type="text" name="bid_qty" id="bid_qty" class="form-control" value="1" />
                    <div class="spacer-single"></div>
                    <div class="de-flex">
                        <div>Your bidding balance</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Your balance</div>
                        <div><b>10.67856 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Service fee 2.5%</div>
                        <div><b>0.00325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>You will pay</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="spacer-single"></div>
                    <button onclick="userLoginOut()" id="buttonText" class="btn-main btn-fullwidth"><i class="icon_wallet_alt"></i><span> Ödeme Yap</span></button>
                </div>
              </div>
            </div>
          </div>