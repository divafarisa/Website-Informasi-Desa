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
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- barang Grid -->
    <section class="bg-white page-section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">          
         <div class="section-home">
                      <h3>Daftar Foto Kegiatan Desa</h3>

                    </div>   
            <hr>         
          </div>
        </div>
        <div class="row">
          <?php foreach ($foto as $f){?>
            <div class="col-md-4 col-sm-6 barang-item">
              <a class="portfolio-link" data-toggle="modal" href="#porfolioModal<?php echo $f->id_foto; ?>">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    
                  </div>
                </div>
                <img class="img-fluid" src="<?php echo base_url();?>Assets/foto/<?php echo $f->foto_galeri?>" alt="">
                              
              </a>
              <div class="portfolio-caption">
             <center>  <h5><?php echo $f->judul_foto?></h5>
                <p class="text-muted"><?php echo $f->caption_foto?></p></center> 
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </section>
    <!-- Modal 1 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php foreach ($foto as $f){?>
      <div class="portfolio-modal modal fade" id="porfolioModal<?php echo $f->id_foto; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 class="text-uppercase"><?php echo $f->judul_foto; ?></h2>
                    <p class="item-intro text-muted"><?php echo $f->tanggal_foto?></p>
                    <p class="item-intro text-muted"><?php echo $f->caption_foto?></p>
                    <img class="img-fluid" src="<?php echo base_url();?>Assets/foto/<?php echo $f->foto_galeri?>" alt="">
                    <button>
                      
                    </button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }?>

  


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