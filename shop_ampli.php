<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toko Genjreng - Shop</title>
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
      WHERE produk.id_jenis = 3
      ORDER BY produk.id_produk ASC;");
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
            <li class="home">
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
            <li class="active"><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Hubungi Kami</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Amplifier</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Terbaru
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Harga tertinggi</a>
                      <a class="dropdown-item" href="#">Harga Terendah</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

            <!-- Looping DB -->
            <?php while ($data = mysqli_fetch_array($query)) { ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
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
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="shop_gitar.php" class="d-flex"><span>Gitar</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="shop_bass.php" class="d-flex"><span>Bass</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="shop_ampli.php" class="d-flex"><span>Amplifier</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                <li class="mb-1"><a href="shop_pedal.php" class="d-flex"><span>Pedal</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                <li class="mb-1"><a href="Shop.php" class="d-flex"><span>Semua</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Merk</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Gibson</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Fender</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Squire</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Epiphone</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Dan Lain - lain</span>
                </label>
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