 <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Tek Koleksiyon Oluştur</h1>
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
                        <div class="col-lg-7 offset-lg-1">
                            <form id="form-create-item" class="form-border" method="post" action="">
                                <div class="field-set">
                                    <h5>Dosya Yükleme</h5>

                                    <div class="d-create-file">
                                        <p id="file_name">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</p>
                                        <input type="button" id="get_file" class="btn-main" value="Gözat">
                                        <input type="file" id="upload_file">
                                    </div>

                                    <div class="spacer-40"></div>

                                    <h5>Yöntem Seç</h5>
                                    <div class="de_tab tab_methods">
                                        <ul class="de_nav">
                                            <li class="active"><span><i class="fa fa-tag"></i>Sabit Fiyat</span>
                                            </li>
                                            <li><span><i class="fa fa-hourglass-1"></i>Zamanlı Açık Artırma</span>
                                            </li>
                                            <li><span><i class="fa fa-users"></i>Tekliflere Açık</span>
                                            </li>
                                        </ul>

                                        <div class="de_tab_content">

                                            <div id="tab_opt_1">
                                                <h5>Fiyat</h5>
                                                <input type="text" name="item_price" id="item_price" class="form-control" placeholder="bir öğe için fiyat girin (ETH)" />
                                            </div>

                                            <div id="tab_opt_2">
                                                <h5>Minimum Teklif</h5>
                                                <input type="text" name="item_price_bid" id="item_price_bid" class="form-control" placeholder="minimum teklifi girin" />

                                                <div class="spacer-20"></div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5>Başlangıç Tarihi</h5>
                                                        <input type="date" name="bid_starting_date" id="bid_starting_date" class="form-control" min="2020-01-01" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Son Kullanma Tarihi</h5>
                                                        <input type="date" name="bid_expiration_date" id="bid_expiration_date" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab_opt_3">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="spacer-20"></div>

                                    <div class="switch-with-title">
                                        <h5><i class="fa fa- fa-unlock-alt id-color-2 icon_padlock"></i>Satın alındıktan sonra kilidini aç</h5>
                                        <div class="de-switch">
                                          <input type="checkbox" id="switch-unlock" class="checkbox">
                                          <label for="switch-unlock"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="p-info">Başarılı işlemden sonra içeriğin kilidini açın.</p>

                                        <div class="hide-content">
                                            <input type="text" name="item_unlock" id="item_unlock" class="form-control" placeholder="Erişim anahtarı, kullanılacak kod veya bir dosyaya bağlantı..." />             
                                        </div>
                                    </div>

                                    <div class="spacer-20"></div>

                                    <h5>Koleksiyon seçin</h5>
                                    <p class="p-info">Bu, öğenizin görüneceği koleksiyondur.</p>

                                    <div id="item_collection" class="dropdown fullwidth mb20">
                                        <a href="#" class="btn-selector">Koleksiyon Seç</a>
                                        <ul>
                                            <li><span>Soyutlama</span></li>
                                            <li><span>Desenli</span></li>
                                            <li><span>Özetleyin</span></li>
                                            <li><span>Karikatürizm</span></li>
                                            <li><span>Virtuland</span></li>
                                            <li><span>Kağıt Kesimi</span></li>
                                        </ul>
                                    </div>

                                    <div class="spacer-20"></div>

                                    <h5>Başlık</h5>
                                    <input type="text" name="item_title" id="item_title" class="form-control" placeholder="Örneğin. 'Kripto Funk'" />

                                    <div class="spacer-20"></div>

                                    <h5>Tanım</h5>
                                    <textarea data-autoresize name="item_desc" id="item_desc" class="form-control" placeholder="Örneğin. 'Bu çok sınırlı bir ürün'"></textarea>

                                    <div class="spacer-20"></div>

                                    <h5>Telif Hakları</h5>
                                    <input type="text" name="item_royalties" id="item_royalties" class="form-control" placeholder="önerilen: 0, %10, %20, %30. Maksimum %70" />

                                    <div class="spacer-single"></div>

                                    <input type="button" id="submit" class="btn-main" value="Öğe Oluştur">
                                    <div class="spacer-single"></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h5>Öğeyi Önizle</h5>
                                <div class="nft__item">
                                    <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                    <div class="author_list_pp">
                                        <a href="#">                                    
                                            <img class="lazy" src="images/author/author-1.jpg" alt="">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                    <div class="nft__item_wrap">
                                        <a href="#">
                                            <img src="images/collections/coll-item-3.jpg" id="get_file_2" class="lazy nft__item_preview" alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="#">
                                            <h4>Pinky Ocean</h4>
                                        </a>
                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                            0.08 ETH<span>1/20</span>
                                        </div>
                                        <div class="nft__item_action">
                                            <a href="#">Place a bid</a>
                                        </div>
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>50</span>
                                        </div>                            
                                    </div> 
                                </div>
                            </div>                                         
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->