<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toko Genjreng</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <!-- Panggil DB -->
  <?php
      include("connection.php");
      $query = mysqli_query($connect,"SELECT * FROM `produk` 
      INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
      ORDER BY RAND() LIMIT 6;");
  ?>
  <body>
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Toko Genjreng</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li class="has-children">
              <a href="#">Produk</a>
              <ul class="dropdown">
                <li><a href="shop_gitar.php">Gitar</a></li>
                <li><a href="shop_bass.php">Bass</a></li>
                <li><a href="shop_ampli.php">Amplifier</a></li>
                <li><a href="shop_pedal.php">Efek Pedal</a></li>
              </ul>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Hubungi Kami</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/Banner.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Gibson SG Series</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">SG Series dari Gibson kini hadir dengan pilihan warna baru untuk melengkapi kebutuhan jamming mu!. </p>
              <p>
                <a href="shop.php" class="btn btn-sm btn-primary">Beli Sekarang</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Gratis Pengiriman</h2>
              <p>Dikemas dengan baik, dikirim ke pintu anda, Tanpa biaya.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-shield"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Garansi</h2>
              <p>Dukungan garansi sampai ketangan anda.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Dukungan Khusus</h2>
              <p>Kami selalu ada untuk membantu masalah anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="shop_gitar_bass.php">
              <figure class="image">
                <img src="images/Gitar.png" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Koleksi</span>
                <h3>Gitar & Bass</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="shop_ampli.php">
              <figure class="image">
                <img src="images/ampli.png" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Koleksi</span>
                <h3>Amplifier</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="shop_pedal.php">
              <figure class="image">
                <img src="images/pedal.png" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Koleksi</span>
                <h3>Pedal</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- produk pilihan -->
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Produk Pilihan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">

            <!-- Loop DB -->
            <?php while ($data = mysqli_fetch_array($query)) { ?>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/<?php echo $data["gambar"]?>" style="width: 70%; margin: auto;"  alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="produk_detail.php?id=<?php echo $data['id_produk']?>"><?php echo $data["nama_produk"]?></a></h3>
                    <p class="mb-0"><?php echo $data["nama_jenis"] ?></p>
                    <p class="text-primary font-weight-bold"><?php echo "$".$data["harga"] ?></p>
                  </div>
                </div>
              </div>              
            <?php } ?>  

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <img src="images/pedal_ad.png" alt="Image placeholder" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="shop.php">Discount up to 50%</a></h2>
            <p>Temukan peralatan yang kamu butuhkan dengan potongan harga disini!</p>
            <p><a href="shop.php" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="admin.php">Admin</a></li>
                  <li><a href="about.php">Tentang Kami</a></li>
                  <li><a href="contact.php">Hubungi Kami</a></li>
                </ul>              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Medan, Sumatera utara</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">tokogenjreng@domain.com</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>