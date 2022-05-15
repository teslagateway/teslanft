<!DOCTYPE html>

<html>



<head>

    <title><?php echo $ayar->site_title; ?></title>

    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="<?php echo $ayar->site_desc; ?>" name="description" />

    <meta content="<?php echo $ayar->site_meta; ?>" name="keywords" />

    <meta content="<?php echo $ayar->firma_adi; ?>" name="author" />

    <!-- CSS Files

    <!-- CSS Files

    ================================================== -->

    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    

    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->

    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />

    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

</head>



<body>

    <div id="wrapper">



        <!-- header begin -->

        <header class="transparent">

            <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="de-flex sm-pt10">

                        <div class="de-flex-col">

                            <div class="de-flex-col">

                                <!-- logo begin -->

                                <div id="logo">

                                    <a href="index-2.html">

                                        <img alt="" class="logo" src="images/logo-light.png" />

                                        <img alt="" class="logo-2" src="images/logo.png" />

                                    </a>

                                </div>

                                <!-- logo close -->

                            </div>

                            <div class="de-flex-col">

                                <input id="quick_search" class="xs-hide" name="quick_search" placeholder="öğeyi burda arayın..." type="text" />

                            </div>

                        </div>

                        <div class="de-flex-col header-col-mid">

                            <!-- mainmenu begin -->

                            <ul id="mainmenu">

                                    <li>

											<a href="/">Anasayfa<span></span></a>

                                    </li>

                                </ul>

								    <div class="menu_side_area">

                                    <a href="nft-olustur.html" class="btn-main btn-wallet"><i class="icon_wallet_alt" style="background: green;"></i><span>NFT Oluştur</span></a>

                                    <span id="menu-btn"></span>

                                </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </header>

        <!-- header close -->

        <!-- content begin -->

        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            

            <!-- section begin -->

            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">

                    <div class="center-y relative text-center">

                        <div class="container">

                            <div class="row">

                                

                                <div class="col-md-12 text-center">

									<h1>Satıcı Hesap Oluştur</h1>

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

						<div class="col-md-8 offset-md-2">

							<h3>Hesabınız yok mu? Şimdi üye Ol.</h3>

							

							<div class="spacer-10"></div>

							

							<form name="contactForm" id='contact_form' class="form-border" method="post" action=''>



                                <div class="row">



                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Ad-Soyad:</label>

                                            <input type='text' name='name' id='name' class="form-control">

                                        </div>

                                    </div>



                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Email :</label>

                                            <input type='text' name='email' id='email' class="form-control">

                                        </div>

                                    </div>



                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Kullanıcı Adı:</label>

                                            <input type='text' name='username' id='username' class="form-control">

                                        </div>

                                    </div>

										<div>

										</div>

                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Telefon:</label>

                                            <input type='text' name='phone' id='phone' class="form-control">

                                        </div>

                                    </div>



                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Parola:</label>

                                            <input type='text' name='password' id='password' class="form-control">

                                        </div>

                                    </div>



                                    <div class="col-md-6">

                                        <div class="field-set">

                                            <label>Şifrenizi tekrar girin:</label>

                                            <input type='text' name='re-password' id='re-password' class="form-control">

                                        </div>

                                    </div>





                                    <div class="col-md-12">



                                        <div id='submit' class="pull-left">

                                            <input type='submit' id='send_message' value='Üye Ol' class="btn btn-main color-2">

                                        </div>



                                        <div id='mail_success' class='success'>Mesajınız başarıyla gönderilmiştir.</div>

                                        <div id='mail_fail' class='error'>Üzgünüz, bu sefer mesajınızı gönderirken bir hata oluştu.</div>

                                        <div class="clearfix"></div>



                                    </div>



                                </div>

                            </form>

							

						</div>

                    </div>

				</div>

            </section>

			

			

        </div>

        <!-- content close -->



        <a href="#" id="back-to-top"></a>

        

        <!-- footer begin -->

        

        </footer>

        <!-- footer close -->

        

    </div>

    

    <!-- Javascript Files

    ================================================== -->

    <script src="js/plugins.js"></script>

    <script src="js/designesia.js"></script>





</body>

</html>