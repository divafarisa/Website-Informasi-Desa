<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Web Desa Sumberejo/title>
  
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>Assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>Assets/css/agency.min.css" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <img src="<?php echo base_url();?>Assets/img/logos/lambang_kota_batu.png" width="150" height="50">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PROFIL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">PROFIL DESA</a>
              <a class="dropdown-item" href="#">VISI MISI</a>
              <a class="dropdown-item" href="#">DEMOGRAFI</a>
              <a class="dropdown-item" href="#">PETA</a>
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="">APBD</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              INFORMASI
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url();?>C_Berita/ShowBerita">BERITA</a>
              <a class="dropdown-item" href="#">ARTIKEL</a>
              
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              KELEMBAGAAN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">BERITA</a>
              <a class="dropdown-item" href="#">ARTIKEL</a>
              
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="">KIM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="">GALERI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="">KONTAK</a>
          </li>
          <li class="nav-item">
            <?php if ($this->session->userdata('email_admin')==NULL) {?>
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Login/ShowFormLogin">LOGIN</a>
            <?php } 
             else { ?>
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>/C_Admin/ShowDashboardAdmin">Dashboard</a>
            <?php } ?>
          </li>
      </ul>
      </div>
    </div>
  </nav>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>Assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>Assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url();?>Assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url();?>Assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url();?>Assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url();?>Assets/js/agency.min.js"></script>
</body>
</html>
