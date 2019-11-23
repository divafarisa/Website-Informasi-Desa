<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin - Desa Mojorejo</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>Assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>Assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>Assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">
 <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowDashboardAdmin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowHalamanBerita">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Berita Desa</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Artikel/ShowHalamanArtikel">
          <i class="fas fa-fw fa-book"></i>
          <span>Artikel Desa</span>
        </a>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Comment/ShowComment">
          <i class="fas fa-fw fa-book"></i>
          <span>Daftar Komen</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_APBD/ShowHalamanApbd">
          <i class="fas fa-fw fa-cart-plus"></i>
          <span>APBD</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Galeri/ShowHalamanGaleri">
          <i class="fas fa-fw fa-file-image"></i>
          <span>Gambar</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Umkm/ShowHalamanUmkm">
          <i class="fas fa-fw fa-industry"></i>
          <span>UMKM</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Organisasi/ShowHalamanOrganisasi">
          <i class="fas fa-fw fa-users"></i>
          <span>Organisasi</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_PerangkatDesa/ShowHalamanPerangkatDesa">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Perangkat Desa</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Demografis/ShowHalamanDemografis">
          <i class="fas fa-fw fa-home"></i>
          <span>Demografis Warga</span>
        </a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>C_Kontak/ShowHalamanKontak">
          <i class="fas fa-fw fa-phone"></i>
          <span>Kontak</span>
        </a>
      </li>
      
      
    </ul>
    <!--end of Sidebar-->

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h4>Berita</h4>
          </li>
          
        </ol>
        <a href="<?php echo base_url();?>C_Admin/ShowHalamanTambahBerita" class="btn btn-primary btn-md">Tambah Berita</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id Berita</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Tanggal Unggah</th>
                <th scope="col">Status</th>
                <th scope="col">Foto</th>
                <th scope="col">Hapus</th>
                </tr>
            </thead>
          <?php 
          $no=1;
          if (is_array($berita) || is_object($berita)){
              foreach ($berita as $b){ ?>
              <tbody>
              <td><?php echo $b->id_berita ?></td>
              <td><a href="<?php echo base_url();?>C_Berita/showDetailBerita?id_berita=<?php echo $b->id_berita?>" class="post-title"><?php echo $b->judul_berita ?></a></td>
              <td><?php echo $b->tanggal_berita?></td>
              <td><?php echo $b->status?></td>
              <td><img src="<?php echo base_url();?>Assets/foto/<?php echo $b->foto_berita?>" width="100" height="100"></td>
              <td>
              <a href="<?php echo base_url();?>C_Berita/hapusBerita?id_berita=<?php echo $b->id_berita?>">Delete</a>
              <a href="<?php echo base_url();?>C_Berita/showHalamanEditBerita?id_berita=<?php echo $b->id_berita?>">Edit</a>
              </td>
              </tbody>
          <?php } } ?>
      </table>    
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>Assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>Assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>Assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url();?>Assets/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>Assets/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>Assets/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>Assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url();?>Assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url();?>Assets/js/demo/chart-area-demo.js"></script>

</body>

</html>
