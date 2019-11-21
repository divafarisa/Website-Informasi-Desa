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
                        <h2>Tambah Berita</h2>
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
        <div id="content-wrapper">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8">

                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a >Anda dapat menerbitkan berita pada website kami. Berita yang anda unggah akan kami periksa terlebih dahulu sebelum diunggah pada website</a>
                      </li>

                  </ol>

                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>C_Berita/userTambah">
                    <input  type="hidden" value="pending" name="status">
                    <p>Judul Berita : </p>
                    <div class="form-group">
                      <input class="form-control" name="judul_berita" id="judul_berita" type="text"  required="required" >
                      <p class="help-block text-danger"></p>
                  </div>
                  <p>Nama Penulis Berita : </p>
                  <div class="form-group">
                      <input class="form-control" name="nama_penulis" id="nama_penulis" type="text"  required="required" >
                      <p class="help-block text-danger"></p>
                  </div>
                  <p>Isi Berita : </p>
                  <div class="form-group">
                      <textarea class="form-control" name="isi_berita" id="isi_berita" required="required" ></textarea>
                      <p class="help-block text-danger"></p>
                  </div>
                  <p>Foto Berita : </p>
                  <div class="form-group">
                      <input type="file" id="foto_berita" name="foto_berita" required="required">
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-lg-12 text-center">
                      <div id="success"></div>
                      <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Unggah</button>
                  </div>
                  <br/>
                  <br/>
                  <br/>
              </form>

          </div>
          <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->
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