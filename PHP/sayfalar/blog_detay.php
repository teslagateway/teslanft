<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php $id = g('id');?>
<?php $blog = Sonuc(Sorgu("SELECT * FROM bloglar WHERE seo = '$id'"));?>
<?php $hit_artis = Sorgu("UPDATE bloglar SET hit=hit+1 WHERE seo = '$id' ");?>
<?php $yorumsayisi = Sorgu("SELECT * FROM yorumlar WHERE durum = '1' AND blog_id = '$blog->id' ORDER BY id DESC");?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="home" href="blog.html" title="Blog">Blog</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span> <?php echo $blog->adi;?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
                <div class="block left-module">
                    <p class="title_block">BLOG</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
								<?php $Sorgu = Sorgu("SELECT * FROM bloglar WHERE durum = '1' ORDER BY id DESC");
									while($Sonuc = Sonuc($Sorgu)){?>
                                    <li><span></span><a href="Blog/<?php echo $Sonuc->seo;?>.html"><?php echo $Sonuc->adi;?></a></li>
								<?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./blog category  -->
                <!-- Popular Posts -->
                <div class="block left-module">
                    <p class="title_block">EN ÇOK OKUNANLAR</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar clearfix">
								<?php $Sorgu = Sorgu("SELECT * FROM bloglar WHERE durum = '1' ORDER BY hit DESC LIMIT 3");
									while($Sonuc = Sonuc($Sorgu)){?>
									<?php $ys = Sorgu("SELECT * FROM yorumlar WHERE durum = '1' AND blog_id = '$Sonuc->id'");?>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="Blog/<?php echo $Sonuc->seo;?>.html"><img src="uploads/bloglar/thumb/<?php echo $Sonuc->resim;?>" alt="<?php echo $Sonuc->adi;?>"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title" style="font-size:12px;"><a href="Blog/<?php echo $Sonuc->seo;?>.html"><?php echo $Sonuc->adi;?></a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> <?php echo $Sonuc->tarih;?></span>
                                                <span class="comment-count">
                                                    <i class="fa fa-eye"></i> <?php echo $Sonuc->hit;?>
                                                </span>
												<span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> <?php echo mysql_num_rows($ys);?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
								<?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Popular Posts -->
                <!-- left silide -->
				<div class="block left-module">
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="false" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                     <?php reklam();?>
                    </ul>
                </div>
                </div>
                <!-- Recent Comments -->
                <div class="block left-module">
                    <p class="title_block">SON YORUMLAR</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="recent-comment-list">
								<?php $Sorgu = Sorgu("SELECT * FROM yorumlar WHERE durum = '1' ORDER BY id DESC LIMIT 3");
								while($Sonuc = Sonuc($Sorgu)){?> 
                                    <li>
                                        <h5><a href="javascript:void(0);"> <?php echo $Sonuc->isim;?></a></h5>
                                        <div class="comment">
                                            <?php echo $Sonuc->mesaj;?>
                                        </div>
                                    </li>
								<?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Recent Comments -->
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">ETİKETLER</p>
                    <div class="block_content">
                        <div class="tags">
						<?php $Sorgu = Sorgu("SELECT * FROM etiketler WHERE durum = '1' ORDER BY id DESC");
						while($Sonuc = Sonuc($Sorgu)){?>
                            <a href="<?php echo $Sonuc->url;?>"><span class="level<?php echo rand(1,5);?>"><?php echo $Sonuc->adi;?></span></a>
						<?php }?>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading">
                    <span class="page-heading-title2"><?php echo $blog->adi;?></span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
						<span class="comment-count">
                            <i class="fa fa-eye"></i> <?php echo $blog->hit;?>
                        </span>
                        <span class="comment-count">
                            <i class="fa fa-comment-o"></i> <?php echo mysql_num_rows($yorumsayisi);?>
                        </span>
                        <span class="date"><i class="fa fa-calendar"></i> <?php echo $blog->tarih;?></span>
                    </div>
                    <div class="entry-photo">
                        <img src="uploads/bloglar/<?php echo $blog->resim;?>" style="width:100%;" alt="<?php echo $blog->adi;?>">
                    </div>
                    <div class="content-text clearfix">
                        <?php echo $blog->aciklama;?>
                    </div>
                </article>
				<div class="entry-tags">
                        <span>Etiketler:</span>
						<?php 
						$parcala = explode("|" ,$blog->etiket);
						$index = end($parcala);
						foreach($parcala as $etiket){?>
							<a href="#"><?php echo $etiket;?><?php echo($etiket != $index ? ',' : '');?></a>
						<?php }?>
                    </div>
                <!-- Related Posts -->
                <div class="single-box">
                    <h2>DİĞER BLOGLAR</h2>
                    <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                     <?php $Sorgu = Sorgu("SELECT * FROM bloglar WHERE durum = '1' ORDER BY id DESC");
					 while($Sonuc = Sonuc($Sorgu)){?>   
						<li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="Blog/<?php echo $Sonuc->seo;?>.html">
                                        <img src="uploads/bloglar/thumb/<?php echo $Sonuc->resim;?>" alt="<?php echo $blog->adi;?>">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="Blog/<?php echo $Sonuc->seo;?>.html"><?php echo $Sonuc->adi;?></a></h3>
                                    <div class="entry-meta-data">
										<span class="comment-count">
                                            <i class="fa fa-eye"></i> <?php echo $Sonuc->hit;?>
                                        </span>
										<?php $yorumlar = Sorgu("SELECT * FROM yorumlar WHERE blog_id = '$Sonuc->id'");?>
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> <?php echo mysql_num_rows($yorumlar);?>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> <?php echo $Sonuc->tarih;?>
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="Blog/<?php echo $Sonuc->seo;?>.html">Devamını Oku</a>
                                    </div>
                                </div>
                            </article>
                        </li>
					 <?php }?>	
                    </ul>
                </div>
                <!-- ./Related Posts -->
                <!-- Comment -->
                <div class="single-box">
                    <h2 class="">YORUMLAR</h2>
                    <div class="comment-list">
                        <ul>
						<?php $Sorgu = Sorgu("SELECT * FROM yorumlar WHERE durum = '1' AND blog_id = '$blog->id' ORDER BY id DESC");
						 if(!mysql_affected_rows()){ 
							 echo '<div class="well margin-top-10">Henüz Yorum yazılmamış.İlk yorum bırakan sen ol..!</div>';
						}else{
							while($Sonuc = Sonuc($Sorgu)){?>
                            <li>
                                <div class="avartar">
                                    <img src="assets/images/avatar.jpg" alt="Avatar">
                                </div>
                                <div class="comment-body">
                                    <div class="comment-meta">
                                        <span class="author"><a href="javascript:void(0);"><?php echo $Sonuc->isim;?></a></span>
                                        <span class="date"><?php echo $Sonuc->tarih;?></span>
                                    </div>
                                    <div class="comment">
                                         <?php echo $Sonuc->mesaj;?> 
                                    </div>
                                </div>
                            </li>
							<?php }} ?>
                        </ul>
                    </div>
                </div>
                <div class="single-box">
                    <h2>BİR YORUM YAZ</h2>
                    <div class="coment-form">
					<div id="blognote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
					<form id="yorumform" method="post"  name="yrm">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="isim">İsim</label>
                                <input id="isim" name="isim" type="text" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">E-mail Adresiniz</label>
                                <input id="email" name="email" type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="message">Yorumunuz</label>
                                <textarea name="mesaj" id="mesaj"rows="8" class="form-control"></textarea>
                            </div>
                        </div>
						<input type="hidden" value="<?php echo $blog->id;?>" name="blogid" id="blogid">
                        <button id="submit" type="button" class="btn-comment">Gönder</button>
					</form>
                    </div>
                </div>
                <!-- ./Comment -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>