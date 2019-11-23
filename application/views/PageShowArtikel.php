<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Artikel-Desa Sumberejo</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/css/style.css">

</head>

<body>
    <!-- Preloader -->
    
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-color: black;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>/C_Home"><i class="fa fa-home" aria-hidden="true"></i>Beranda</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>/C_Artikel/ShowArtikel">Artikel</a></li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                  <div class="post-details-content bg-white mb-30 " style="margin-top: -20px;"> 
                    <?php 
                    $no=1;
                    if (is_array($artikel2) || is_object($artikel2)){
                        foreach ($artikel2 as $a){ ?>
                          <div class="section-home">
                            <h4 class="post-title" style="text-align: center;"><?php echo $a->judul_artikel?></h4>
                        </div>  

                        <div class="post-meta">
                            <a><?php echo $a->tanggal_artikel?></a>
                        </div>
                        
                        <div class="blog-thumb mb-30">
                            <img src="<?php echo base_url();?>Assets/foto/<?php echo $a->foto_artikel?>" alt="">
                        </div>
                        <!-- Single Catagory Post -->

                        <div class="blog-content">
                         
                            <p><?php echo $a->isi_artikel?></p> 
                        </div>
                    <?php } } ?>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Berita Terbaru</h5>
                        </div>
                        <ul class="catagory-widgets">
                            <?php 
                            $no=1;
                            if (is_array($berita) || is_object($berita)){
                                foreach ($berita as $b){ ?>

                                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $b->judul_berita ?></span></a></li>
                                <?php } } ?>
                            </ul>
                        </div>

                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Artikel Terbaru</h5>
                            </div>
                            <ul class="catagory-widgets">
                                <?php 
                                $no=1;
                                if (is_array($artikel) || is_object($artikel)){
                                    foreach ($artikel as $a){ ?>

                                        <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $a->judul_artikel ?></span></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Archive Post Area End ##### -->
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="<?php echo base_url();?>Assets/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?php echo base_url();?>Assets/js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url();?>Assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="<?php echo base_url();?>Assets/js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="<?php echo base_url();?>Assets/js/active.js"></script>
    </body>

    </html>