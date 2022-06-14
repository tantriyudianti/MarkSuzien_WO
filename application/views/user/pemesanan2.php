<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylePemesanan.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.min.css');?>">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-ebfJO0IAn0EbZPqq"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <title>Wedding Galery</title>
  </head>
  <body>
 
    <!-- Awal Navbar />-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.html">
    <img src="<?php echo base_url('assets/images/logo.png');?>" alt="" width="50" height="50" class="me-2">
      Wedding <strong>Organizer</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
      <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" <?php echo anchor('user/home', 'Home', 'attributes'); ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pilihan Paket
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" <?php echo anchor('user/Pemesanan', 'Make Up(Tanpa Dekorasi)', 'attributes'); ?></a></li>
            <li><a class="dropdown-item" <?php echo anchor('user/Pemesanan1', 'Make Up Dan Dekorasi', 'attributes'); ?></a></li>
            <li><a class="dropdown-item" <?php echo anchor('user/Pemesanan2', 'Foto Dan Videografi', 'attributes'); ?></a></li>
            <li><a class="dropdown-item" <?php echo anchor('user/Pemesanan3', 'Catering', 'attributes'); ?></a></li>
          </ul>
          <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" <?php echo anchor('user/galeri', 'Galeri', 'attributes'); ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo anchor('user/TentangKami', 'Tentang Kami', 'attributes'); ?> </a>
        </li>
        
          <a class="nav-link" href="#footer">Narahubung</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir Navbar>-->

<!-- Breadcrumb-->
<div class="container">
<nav aria-label="breadcrumb" style="background-color: whitesmoke;" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Pilihan Paket</a></li>
    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
  </ol>
</nav>
<!-- Akhir Breadcrumb-->

<!-- Single Produk-->

<div class="container">
  <div class="row row-produk">
    <div class="col-lg-5">
      <figure class="figure">
        <img src="<?php echo base_url('assets/images/pengantin/11.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
        <figcaption class="figure-caption d-flex justify-content-evenly">
          <a href="#">
            <img src="<?php echo base_url('assets/images/pengantin/11.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
          <a href="#">
            <img src="<?php echo base_url('assets/images/pengantin/12.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
          <a href="#">
            <img src="<?php echo base_url('assets/images/pengantin/13.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
          <a href="#">
            <img src="<?php echo base_url('assets/images/pengantin/14.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
          <a href="#">
            <img src="<?php echo base_url('assets/images/pengantin/15.jpg');?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>

        </figcaption>
      </figure>
    </div>
    <div class="col-lg-7">
      <h4>Foto & Videografi</h4>
      <div class="garis-nama"></div>
      <h3 class="text-muted mb-3">Rp 1.000.000</h3>
<!-- Description-->
<div class="row row-produk">
  <div class="col-12">
     <div class="row row-produk">
      <div class="col-12">
      <div class="card">
      <div class="card-header">
        Deskripsi Paket 
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p> Fotografi prewedding menawarkan beberapa paket seperti foto album, cinematography dan kaset dvd.
          </p>
          <footer class="blockquote-footer">Fotografer <cite title="Source Title"></cite></footer>
        </blockquote>
        <br>
          </div>
            <button id="pay-button" class="btn btn-warning text-white btn-lg btn-custom"<?php echo anchor('snap', 'Order Sekarang', 'attributes'); ?></button>
    <!-- <a class="btn btn-warning text-white btn-lg btn-custom" </a> -->
    </div>
    <form id="payment-form" method="post" action="<?=site_url()?>/snappp/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/snappp/token',
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>
        </div>
      </div>
    </div>
      </div>
</div>
<!--Akhir Description-->
</div>
</div>
</div>
<!-- Akhir Single Produk-->

<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4 ">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 id="footer" class="text-uppercase mb-4 font-weight-bold text-warning">MARK SUZIEN WEDDING GALERY</h5>
        <p>Merupakan jasa yang membantu user dalam memudahkan mengatur persiapan pernikahan sehingga terciptanya pernikahan sesuai keinginan user</p>
      </div>

      <div class="col-md -2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">LAYANAN KAMI</h5>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;"> MAKE UP </a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;"> DEKORASI </a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;"> FOTO & VIDEOGRAFI </a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">  CATERING </a>
        </p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">LAYANAN LAIN</h5>
      <p>
          <a href="#" class="text-white" style="text-decoration: none;">Sound System</a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">Persewaan Baju</a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">Pre Wedding</a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">Akad Nikah</a>
        </p>
      </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">HUBUNGI KAMI</h5>
          <p>
            <i class="fas fa-home mr-3"></i>  JL. Raya Pandaan - Bangil Desa Baujeng, Beji, Kabupaten Pasuruan
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> tantriyudianti@gmail.com
          </p>
          <p>
            <i class="fab fa-instagram mr-3"></i>  mark_suzein_wedding_gallery
          </p>
          <p>
            <i class="fab fa-whatsapp mr-3"></i>  +6289680278923
          </p>
          </div>

          <hr class="mb-4">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
              <p> Copyright 02020 all rights reserved by:
              <a href="#" style="text-decoration: none;"> <strong class="text-warning">The Profiders</strong></a></p>
              
            </div>
            


          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">

              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/cip.rut.9277" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/mark_suzein_wedding_gallery/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                </li>
                
              </ul>
              
            </div>
            
          </div>

</div>
</div>
</div>
</footer>
<!-- Akhir footer -->

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>