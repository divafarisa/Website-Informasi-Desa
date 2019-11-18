<!DOCTYPE html>
<html lang="en">

<head>
<title>Home-Desa Sumberejo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="Assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="Assets/css/agency.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>Assets/scss/style.css">

</head>

<body id="page-top">

  
  <!-- Header -->
  <header class="masthead">
    
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Selamat Datang</div>
        <div class="intro-heading text-uppercase">DESA SUMBEREJO</div>
      <h5 style="text-align: center; color: white;">-Mengabdi untuk Melayani-
                       </h5>
     
        </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="section-subheading text-muted" >
"Assalamualaikum Wr. Wb.
<br><br>Selamat datang di website Desa Sumberejo Batu. Situs ini dibuat sebagai wadah informasi seputar desa Sumberejo Batu. Semoga apa yang ada dalam site ini dapat bermanfaat bagi masyarakat desa pada khususnya dan masyarakat luar pada umumnya. 
<br><br>Jangan lupa untuk cek halaman Berita pada menu Informasi untuk informasi terbaru dan terupdate, jika ada saran, kritik, dan pertanyaan jangan sungkan untuk menyampaikannya pada menu halaman Kontak. Terakhir jangan lupa untuk like fans page kami di facebook untuk berita terupdate."
</h3>
        </div>
      </div>
        <!-- About Us Content -->
                   
                    <div class="about-us-content bg-white mb-30 ">
                        <!-- Section Title -->
                        <div class="section-home">
                            <h2 style=""><b>Visi Dan Misi</b></h2>
                        </div>
                        <br>
                        <h4 style="text-align: center;background-color: #ffc71f;">Visi </h4>
                        <p style="text-align: center;"><i>"Desa Sumberejo sebagai desa wisata berbasis pertanian didukung oleh sumber daya manusia serta pemerintahan yang kreatif, inovatif dan bersih yang dijiwai keimanan dan ketaqwaan kepada Tuhan yang maha esa."</i>
                       </p>
     
                      <h4 style="text-align: center;background-color: #ffc71f;">Misi </h4>
                           <p style="margin-left: 45px; margin-top: 20px">  <justify>
                            1. Menjamin berlangsungnya kehidupan keagamaan yang didasari oleh toleransi antar umat beragama.
                            <br>
2. Mendayagunakan secara optimal dan terkendali sumber daya manusia yang ada di desa.
<br>
3. Merevatiliasi apatur pemerintah dan menjalankan roda pemerintahan desa yang didasari sikap maupun tindakan kreatif dan inovatif guna mengoptimalkan pelayanan kepada masyarakat
<br>
4. Meningkatkan peran Desa Sumberejo sebagai Desa Pertanian, khususnya utuk jenis tanaman sayur, buah dan bunga serta menguatkan perdagangan hasil pertanian.
<br>
5. Menumbuhkembangkan kepekaan Apatur terhadap problem-problem yang aktual pada masyarakat.

                     </justify>  </p>
                       
                      </div>
                
 <br> 
  <div class="section-home">
                            <h2 style=""><b>Penduduk</b></h2>
                        </div>
 <br>    
  <div class="row text-center" style="margin-top: 25px;">

        <div class="col-md-4" >

          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-users fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">5566</h4>
          <p class="text-muted">JUMLAH PENDUDUK</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-male fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">2760</h4>
          <p class="text-muted">JUMLAH LAKI-LAKI</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-female fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">2806</h4>
          <p class="text-muted">JUMLAH WANITA</p>
        </div>
      </div>
    </div>
  </section>

   <!-- Portfolio Grid -->
  <section class="bg-white page-section" id="portfolio">
    <div class="container">
      <div class="row" >
        <div class="col-lg-12 text-center">
          <h2 class="section-home text-uppercase" style="margin-top: -100px;background-color: blue;">BERITA</h2>
          </div>
      </div>
      <div class="row" style="margin-top: -30px" >
       <?php 
          $no=1;
          if (is_array($berita) || is_object($berita)){
            foreach ($berita as $b){ ?>
       <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link"  href="<?php echo base_url();?>C_Berita/showSingleBerita?id_berita=<?php echo $b->id_berita?>">
            <div class="portfolio-hover" >
              <div class="portfolio-hover-content">
              <i class="fas fa-newspaper fa-3x"> </i>
              </div>
            </div>
           
            <img class="img-fluid" style="height: 200px; width: 400px;" src="<?php echo base_url();?>Assets/foto/<?php echo $b->foto_berita?>" alt="">
       
          </a>
          <div class="portfolio-caption" style="margin-top: -10px;">
            <a  style="font-size: 17px;  font-style: italic; color: black;"href="<?php echo base_url();?>C_Berita/showSingleBerita?id_berita=<?php echo $b->id_berita?>" class="post-title"><?php echo $b->judul_berita ?></a>
          </div>
        </div>
        
          
        <?php } } ?>
        
      </div>
    </div>
  </section>

 

  <!-- Bootstrap core JavaScript -->
  <script src="Assets/jquery/jquery.min.js"></script>
  <script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="Assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="Assets/js/jqBootstrapValidation.js"></script>
  <script src="Assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="Assets/js/agency.min.js"></script>
  <script src="<?php echo base_url();?>Assets/js/jquery/jquery-2.2.4.min.js"></script>
 
    <!-- All Plugins js -->
    <script src="<?php echo base_url();?>Assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>Assets/js/active.js"></script>

</body>

</html>
