     <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Bize Ulaşın</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section aria-label="section">
                <div class="container">
						<div class="row">
							
							<div class="col-lg-8 mb-sm-30">
							<h3>Herhangi bir sorun var mı?</h3>

							  <form action="" method="POST" name="contactForm" id="contact_form">
								<div class="field-set">
									<input type="text" class="form-control input-sm" id="isim" name="isim" placeholder="Ad Soyad" />
								</div>

								<div class="field-set">
									<input type="text" class="form-control input-sm" id="email" name="email"   placeholder="E-Posta" />
								</div>
                           <div class="form-selector">

                            <label>Konu Başlığı</label>

                            <select class="form-control input-sm" id="konu" name="konu">

                                <option value="Genel Sorular">Genel Sorular</option>

                                <option value="Fiyat Hakkında">Fiyat Hakkında</option>

                                <option value="Diğer">Diğer</option>

                            </select>

                        </div>

								<div class="field-set">
									<textarea class="form-control input-sm" rows="10" id="mesaj" name="mesaj"  placeholder="Mesajınız"></textarea>
								</div>

								<div class="spacer-half"></div>

                                <button id="btn-send-contact" type="button" class="btn btn-main">Gönder</button>
								<div id="iletisimsonuc" class="success">Mesajınız başarıyla gönderilmiştir.</div>
							</form>
						</div>
						
						<div class="col-lg-4">

							<div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
								<h3>Adres</h3>
								<address class="s1">
									<span><i class="id-color fa fa-map-marker fa-lg"></i><?php echo $ayar->firma_adres; ?></span>
									<span><i class="id-color fa fa-phone fa-lg"></i><?php echo $ayar->firma_tel; ?></span>
									<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:<?php echo $ayar->firma_email; ?>"><?php echo $ayar->firma_email; ?></a></span>
								</address>
							</div>

						</div>
																<span><?php echo $ayar->google_maps; ?></span>
						</div>
					</div>

            </section>

        </div>
        <!-- content close -->