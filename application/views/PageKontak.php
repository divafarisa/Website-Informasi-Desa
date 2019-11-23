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

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>Assets/img/core-img/favicon.ico">

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
                        <h2>Saran</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <br><br>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
                        <?php 
                        $no=1;
                        if (is_array($kontak) || is_object($kontak)){
                            foreach ($kontak as $k){ ?>
                                <!-- Google Maps -->
                                <div class="map-area mb-30">
                                 <div class="section-heading">                                   
                                    <h5>Kritik dan Saran</h5>
                                </div>
                                <p>Silahkan masukkan kritik dan saran anda kepada kami</p>
                                <form action="<?php echo base_url();?>C_Saran/tambah" method="post">  
                                    <div class="card">
                                        <input type="text" name="email" class="form-control" placeholder="E-mail atau nomor hp" required>
                                    </div>
                                    <div class="card">
                                      <textarea name="isi" style="height: 300px;" class="form-control" aria-label="With textarea" placeholder="Saran anda..." required></textarea>
                                  </div>
                                  <br>
                                  <input id="btn-submit" class="btn btn-primary" type="submit" name="submit" value="Kirim">
                              </form>

                          </div>
                          

                          <!-- Section Title -->
                          <div class="section-heading">
                            <h5>Informasi Kontak</h5>
                        </div>
                        <div class="contact-information mb-30">
                         <!-- Single Contact Info -->
                         <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p>Lokasi Balaidesa:</p>
                                <h6>Jl. Indragiri No.30 Sumberejo Kec. Batu Kota Batu, Jawa Timur 65318</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p >Email:</p>
                                <h6><?php echo $k->email_kontak ?></h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p>No Telepon:</p>
                                <h6><?php echo $k->nohp_kontak ?></h6>
                            </div>
                        </div>
                        <div class="section-heading">
                            <h5>Media Sosial </h5>
                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fab fa-instagram" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p>Akun Instagram :</p>
                                <h6><?php echo $k->ig_kontak ?></h6>
                            </div>
                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fab fa-twitter" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p>Akun Twitter:</p>
                                <h6><?php echo $k->tw_kontak ?></h6>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fab fa-facebook-f" aria-hidden="true" style="color: #ffc71f"></i>
                            </div>
                            <div class="text">
                                <p>Akun Facebook:</p>
                                <h6><?php echo $k->fb_kontak ?></h6>
                            </div>
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

                        <!-- PETA -->
                        <div class="single-sidebar-widget p-30">
                         <div class="section-heading">
                            <h5>Peta Balai Kota</h5>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31618.277807340157!2d112.5197558783569!3d-7.865244006222836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788745708e5953%3A0x532ac55602463878!2sJl.+Indragiri+No.30%2C+Sumberejo%2C+Kec.+Batu%2C+Kota+Batu%2C+Jawa+Timur+65318%2C+Indonesia!5e0!3m2!1sen!2sus!4v1564625970221!5m2!1sen!2sus" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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