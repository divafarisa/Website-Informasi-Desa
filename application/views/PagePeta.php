<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    
    <title>Halaman Peta-Desa Sumberejo</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/css/style.css">

</head>

<body>
    <!-- Preloader -->
    

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-black bg-overlay" style="background-color: black;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Peta Desa</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30" style="margin-top: -80px;">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Peta Desa</h4>
                        </div>
                        <img src="<?php echo base_url();?>Assets/img/peta.jpg" width="1300" height="1300">
                        
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow" style="margin-top: -80px;">
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

                                    <li><a href="<?php echo base_url();?>C_Berita/showSingleBerita?id_berita=<?php echo $b->id_berita?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $b->judul_berita ?></span></a></li>
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

                                        <li><a href="<?php echo base_url();?>C_Artikel/showSingleArtikel?id_artikel=<?php echo $a->id_artikel?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $a->judul_artikel ?></span></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### About Us Area End ##### -->

        
        
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="<?php echo base_url();?>Assets/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?php echo base_url();?>Assets/js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url();?>Assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="<?php echo base_url();?>Assets/js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="<?php echo base_url();?>Assets/js/active.js"></script>
    </body>

    </html>