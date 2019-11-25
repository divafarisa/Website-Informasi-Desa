<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mag - Video &amp; Magazine HTML Template</title>

  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/css/style.css">

</head>

<body>
    <!-- Preloader -->
  
       <section class="breadcrumb-area bg-dark bg-overlay" style="background-color: black;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 style="color: white;">Daftar Layanan Kependudukan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br><br> <br>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <h2 style="color: black;">Daftar Layanan Kependudukan</h2> 
                      <br>
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
                    <?php 
                    $no= $this->uri->segment('3') + 1;
                    if (is_array($layanan) || is_object($layanan)){
                    foreach ($layanan as $l){ ?>
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(Assets/foto/<?php echo $l->foto_layanan?>);">
                                <img src="<?php echo base_url();?>Assets/foto/<?php echo $l->foto_layanan?>" width="300" height="300">
                                
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a ><?php echo $l->tanggal_layanan?></a>
                                    
                                </div>
                                <a href="<?php echo base_url();?>C_Layanan/showSingleLayanan?id_layanan=<?php echo $l->id_layanan?>" class="post-title"><?php echo $l->judul_layanan ?></a>
                                <!-- Post Meta -->
                                
                                
                            </div>
                        </div>
                <?php } } ?>

                        <!-- Pagination -->
                        <nav>
                            <ul class="pagination">

                                <?php echo $this->pagination->create_links();
                                ?>
                                
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
<br>
                <br> 
                <br>
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
                            if (is_array($berita2) || is_object($berita2)){
                            foreach ($berita2 as $b){ ?>

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