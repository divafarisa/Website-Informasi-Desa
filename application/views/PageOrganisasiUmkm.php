<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/css/style.css">

</head>

<body>

    <!-- Preloader -->
  
    <!-- ##### Breadcrumb Area Start ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-color: black;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>UMKM</h2>
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
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
                     <!-- Section Title -->
                        <div class="section-heading">
                            <h5>UMKM</h5>
                        </div>
                    <?php 
                    $no=1;
                    if (is_array($umkm) || is_object($umkm)){
                    foreach ($umkm as $k){ ?>
                       
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(Assets/foto/<?php echo $k->foto_umkm?>);">
                                <a href="<?php echo base_url();?>C_Umkm/showSingleUmkm?id_umkm=<?php echo $k->id_umkm?>"><img src="<?php echo base_url();?>Assets/foto/<?php echo $k->foto_umkm?>" width="100" height="100" >
                                </a>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <a href="<?php echo base_url();?>C_Umkm/showSingleUmkm?id_umkm=<?php echo $k->id_umkm?>" class="post-title"><?php echo $k->nama_umkm ?></a>
                                <!-- Post Meta -->
                                
                                
                            </div>
                        </div>
                         
                <?php } } ?> 
                <!-- Section Title -->
                        <div class="section-heading">
                            <h5>ORGANISASI</h5>
                        </div>
                <?php 
                    $no=1;
                    if (is_array($org) || is_object($org)){
                    foreach ($org as $k){ ?>
                        
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(Assets/foto/<?php echo $k->foto_org?>);">
                                 <a href="<?php echo base_url();?>C_Organisasi/showSingleOrganisasi?id_org=<?php echo $k->id_org?>">
                                <img src="<?php echo base_url();?>Assets/foto/<?php echo $k->foto_org?>" width="100" height="100" >
                                </a>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <a href="<?php echo base_url();?>C_Organisasi/showSingleOrganisasi?id_org=<?php echo $k->id_org?>" class="post-title"><?php echo $k->nama_org ?></a>
                                <!-- Post Meta -->
                                
                                
                            </div>
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