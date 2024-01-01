<!DOCTYPE html>
<!-- query -->
  <?php
    include("connection.php");
    $id = $_GET['id'];

    $produk = mysqli_query($connect,"SELECT * FROM produk
    WHERE id_produk = '$id'");
    foreach ($produk as $key => $prdk) {
        $id = $prdk["id_produk"];
        $nama = $prdk['nama_produk'];
        $image = $prdk['gambar'];
        $harga = $prdk['harga'];
        $desc = $prdk['deskripsi'];
        $gambar = $prdk['gambar'];
      }
  ?>
<html lang="en">
  <head>
    <title><?php echo $nama ?></title>
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
          <div class="col-md-12 mb-0"><a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $nama ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/<?php echo $image ?>" style="margin-left: 70px; width: 60%;" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $nama ?></h2>
            <p><?php echo $desc ?></p>
            <p class="mb-4">Beli produk ini hanya di Toko Genjreng dan dapatkan bonusnya!</p>
            <p><strong class="text-primary h4"><?php echo "$".$harga ?></strong></p>
            <form action="backend/addCart.php" method="post">
            <input type="hidden" name="id_produk" value="<?php echo $id?>">
            <input type="hidden" name="harga" value="<?php echo $harga?>">
            <input type="hidden" name="gambar" value="<?php echo $gambar?>">
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" name="qty" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>     
            <input type="submit" name="Submit" value="Tambah Ke Keranjang"  class="buy-now btn btn-sm btn-primary">
          </form>
          </div>
          
          
            

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
              <!-- query -->
            <?php
                include("connection.php");
                $query = mysqli_query($connect,"SELECT * FROM `produk` 
                INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                ORDER BY RAND() LIMIT 6;");
            ?>
              <!-- Loop DB -->
            <?php while ($data = mysqli_fetch_array($query)) { ?>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/<?php echo $data["gambar"]?>" style="width: 100%; margin-left: 120px;"  alt="Image placeholder" class="img-fluid">
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