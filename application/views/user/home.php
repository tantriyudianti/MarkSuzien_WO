<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Wedding Galery</title>
  </head>
  <body>
    <!-- Awal Navbar />-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.html">
      <img src="logo/logo.png" alt="" width="50" height="50" class="me-2">
      Wedding <strong>Organizer</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php echo $this->session->userdata('nama');  ?>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
      <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pilihan Paket
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="pemesanan.html">Make Up (Tanpa dekorasi)</a></li>
            <li><a class="dropdown-item" href="pemesanan1.html">Make Up dan Dekorasi</a></li>
            <li><a class="dropdown-item" href="pemesanan2.html">Foto dan Videografi</a></li>
            <li><a class="dropdown-item" href="pemesanan3.html">Catering</a></li>
          </ul>
          <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="galeri.html">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tentang Kami.html">Tentang Kami</a>
        </li>
        
          <a class="nav-link" href="#footer">Narahubung</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir Navbar>-->

<!-- Awal Carousel -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/home/1.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/home/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- Akhir Carousel -->
<!-- Awal servis -->
<div class="container mt-5">
  <div class="judul-servis" style="background-color: white; padding: 5px 10px;">
  <h3 class="text-center" style="margin-top: 10px;">LAYANAN KAMI</h3>
</div>
  <div class="row text-center row-container mt-2">
    <div class="col-lg-3 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="pemesanan.html"><img src="logo/l1.png" class="img-servis mt-2"></a>
          <p>MAKE UP</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="pemesanan1.html"><img src="logo/l2.png" class="img-servis mt-2"></a>
          <p>DEKORASI</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="pemesanan2.html"><img src="logo/l3.png" class="img-servis mt-2"></a>
          <p>FOTOGRAFI</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="pemesanan3.html"><img src="logo/l4.png" class="img-servis mt-2"></a>
          <p>CATERING</p>
        </div>
      </div>
    </div>
  </div>
<!-- Akhir servis -->

<!-- Awal card -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg2 col-md-3 col-sm-4 col-6">
      <div class="card" style="width: 17rem;">
       <img src="images/home/cardmakeup.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KUALITAS MAKE UP TERBAIK</h5>
         <p class="card-text">Terdapat banyak pilihan make up maupun request sesuai keinginan anda</p>
       </div>
     </div>
   </div>
   <div class="col-lg2 col-md-3 col-sm-4 col-6">
      <div class="card" style="width: 17rem;">
       <img src="images/home/cardekorasi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TENTUKAN DEKORASI IMPIAN</h5>
         <p class="card-text">Berbagai macam tema dekorasi untuk memperindah momen bahagia anda </p>
       </div>
     </div>
   </div>
   <div class="col-lg2 col-md-3 col-sm-4 col-6">
      <div class="card" style="width: 17rem;">
       <img src="images/home/cardfoto.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CINEMATOGRAPHY</h5>
        <br>
         <p class="card-text">Abadikan momen indah sebagai kenangan bersama orang tersayang</p>
       </div>
     </div>
   </div>
   <div class="col-lg2 col-md-3 col-sm-4 col-6">
      <div class="card" style="width: 17rem;">
       <img src="images/home/cardkatering.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CATERING</h5>
         <p class="card-text">Tersedia layanan catering yang menghasilkan jamuan nikmat sehingga menyempurnakan momen bahagia anda</p>
       </div>
     </div>
   </div>
  </div>
</div>
<!-- Akhir card -->

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