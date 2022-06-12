<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylegaleri.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/stylegaleri.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.min.css');?>">
    <script src="<?php echo base_url('assets/js/jquery/node_modules/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-4.4.1-dist/js/bootstrap.min.js');?>"></script>
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

<div class="badan">
  <div class="kepala"> Wedding Gallery</div>
    <h2>Gallery Photos</h2>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" <?php echo base_url('assets/images/buatweb/DSC_0316.jpg');?>">
        <img class="c" src="<?php echo base_url('assets/images/buatweb/DSC_0316.jpg');?>"  width="600" height="400">
        </a>
        <div class="desc">Gambar diatas merupakan foto testimoni dari customer yang pernah menggunakan jasa Wedding Organizer Mark Suizen. Pada paket pernikahan tersebut customer menyewa dekorasi pelaminan sekaligus beberapa pasang gaun dan juga paket make up. untuk gaun yang dipesan terdiri dari beberapa pasang yang masing-masing dapat digunakan untuk beberapa sesi foto. Untuk informasi lebih lengkap silahkan menghubungi kontak yang tersedia pada halaman Narahubung. </div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" <?php echo base_url('assets/images/buatweb/DSC_0297.jpg');?>">
        <img class="c" src="<?php echo base_url('assets/images/buatweb/DSC_0297.jpg');?>"  width="600" height="400">
        </a>
        <div class="desc">Gambar diatas merupakan foto testimoni dari customer yang pernah menggunakan jasa Wedding Organizer Mark Suizen. Pada paket pernikahan tersebut customer menyewa dekorasi pelaminan sekaligus beberapa pasang gaun dan juga paket make up. untuk gaun yang dipesan terdiri dari beberapa pasang yang masing-masing dapat digunakan untuk beberapa sesi foto. Untuk informasi lebih lengkap silahkan menghubungi kontak yang tersedia pada halaman Narahubung.</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="<?php echo base_url('assets/images/buatweb/_DSC0272.JPG');?>">
        <img class="c" src="<?php echo base_url('assets/images/buatweb/_DSC0279.JPG');?>"  width="600" height="400">
        </a>
        <div class="desc">Gambar diatas merupakan foto testimoni dari customer yang pernah menggunakan jasa Wedding Organizer Mark Suizen. Pada paket pernikahan tersebut customer menyewa dekorasi pelaminan sekaligus beberapa pasang gaun dan juga paket make up. untuk gaun yang dipesan terdiri dari beberapa pasang yang masing-masing dapat digunakan untuk beberapa sesi foto. Untuk informasi lebih lengkap silahkan menghubungi kontak yang tersedia pada halaman Narahubung.</div>
    </div>
    </div> 

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="buatweb/_DSC0680.JPG">
        <img class="c" src="<?php echo base_url('assets/images/buatweb/_DSC0680.JPG');?>"  width="600" height="400">
        </a>
        <div class="desc">Gambar diatas merupakan foto testimoni dari customer yang pernah menggunakan jasa Wedding Organizer Mark Suizen. Pada paket pernikahan tersebut customer menyewa dekorasi pelaminan sekaligus beberapa pasang gaun dan juga paket make up. untuk gaun yang dipesan terdiri dari beberapa pasang yang masing-masing dapat digunakan untuk beberapa sesi foto. Untuk informasi lebih lengkap silahkan menghubungi kontak yang tersedia pada halaman Narahubung.</div>
    </div>
    </div>

    <div class="clearfix"></div>
    <div class="poto"><img class="y , c" src="<?php echo base_url('assets/images/buatweb/_DSC0204.JPG');?>" alt=""> <img class="y , c" src="<?php echo base_url('assets/images/buatweb/_DSC0322.JPG');?>" alt="">
        <img class="y , c" src="<?php echo base_url('assets/images/buatweb/DSC_0292.JPG');?>" alt=""> <img class="y , c " src="<?php echo base_url('assets/images/buatweb/DSC_0296.JPG');?>" alt="">
        <img class="y , c" src="<?php echo base_url('assets/images/buatweb/DSC_0318.JPG');?>" alt=""> <img class="y , c" src="<?php echo base_url('assets/images/buatweb/6.jpg');?>" alt="">
    </div>

    <div class="potos">
      <img class="c , g" src="<?php echo base_url('assets/images/buatweb/DSC_0314.JPG');?>" alt="" >
      <div class="baru" >Pernikahan adalah upacara pengikatan janji nikah yang dirayakan atau dilaksanakan oleh dua orang pria dan wanita dengan maksud meresmikan ikatan perkawinan secara norma agama, norma hukum, dan norma sosial. Upacara pernikahan memiliki banyak ragam dan variasi menurut tradisi suku bangsa, agama, budaya, maupun kelas sosial. Penggunaan adat atau aturan tertentu kadang-kadang berkaitan dengan aturan atau hukum agama tertentu."Pernikahan adalah selalu bersama dan tetap dalam satu tujuan, meski dengan cara yang terkadang berbeda"</div>
    </div>
    <div class="potoss">
      <img class="c , g" src="<?php echo base_url('assets/images/buatweb/_DSC0278.JPG');?>" alt="" >
      <div class="baru" >Pernikahan merupakan hal yang mulia dalam Islam. Ikatan suci yang bermanfaat dalam menjaga kehormatan diri, serta terhindar dari hal-hal yang dilarang agama. Apabila telah menikah, diketahui baik untuk mmenundukkan pandangan. Juga membentengi diri dari perbuatan keji dan merendahkan martabat, salah satunya zina."Jika melangkah ke tingkat tertinggi, beruntunglah yang tetap bertahan dan menjadikan cinta hanya ujian dan kesabaran sebagai penjaganya"

</div>
    </div>
    <div class="potos">
      <img class="c , g" src="<?php echo base_url('assets/images/buatweb/_DSC0277.JPG');?>" alt="" >
      <div class="baru" >Dalam agama Islam, pernikahan merupakan ibadah yang mulia dan suci. Untuk itu, menikah tidak boleh dilakukan secara sembarangan karena ini merupakan bentuk ibadah terpanjang dan selayaknya dapat dijaga hingga maut memisahkan. Pernikahan sejatinya bukan hanya menyatukan dua insan untuk membangun biduk rumah tangga saja."Riak malam yang damai, tawa ceria di siang hari akan menjadi kebahagiaan yang tiada tara tatkala semua ada dalam pernikahan"</div>
    </div>
    <br>
    <a href="lebih.html" class="lihat"><strong> LIHAT LEBIH BANYAK GAMBAR >>></strong></a>
    
  
</div>

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