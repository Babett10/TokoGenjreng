<!-- Panggil DB -->
<?php
      include("connection.php");
      $query = mysqli_query($connect,"SELECT * FROM `keranjang` 
      INNER JOIN produk ON keranjang.id_produk = produk.id_produk
      ORDER BY id_keranjang DESC");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toko Genjreng - Keranjang</title>
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
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Hubungi Kami</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Keranjang</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Gambar</th>
                    <th class="product-name">Produk</th>
                    <th class="product-price">Harga</th>
                    <th class="product-quantity">Qty</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (mysqli_num_rows($query) > 0) { ?>
                <?php 
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $data["gambar"]?>" width="60%" alt="<?php echo $data["gambar"]?>" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $data["nama_produk"] ?></h2>
                    </td>
                    <td><?php echo "$". $data["harga"] ?></td>
                    <td>
                      <?php echo $data["qty"] ." pcs"?>
                    </td>
                    <td><?php echo "$".$data["total"]?></td>
                    <td><a href="backend/deleteitem.php?id=<?php echo $data['id_keranjang']?>" class="btn btn-primary btn-sm">X</a></td>
                  </tr>                 
                <?php $no++; } ?>
                <?php } ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location='shop.php'">Lanjutkan Belanja</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total Belanja</h3>
                  </div>
                </div>
                <!-- sum -->
                <?php
                        include("connection.php");
                        $result_total_harga = mysqli_query($connect,"SELECT SUM(total) 
                        AS total_harga
                        FROM keranjang;");

                        $row_total_harga = mysqli_fetch_assoc($result_total_harga);
                        $total_harga = $row_total_harga['total_harga'];

                  ?>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                    <?php if (mysqli_num_rows($query) > 0) { 
                      echo "$". ($total_harga) ;
                    }else {
                      echo "$0";
                    }
                      ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Lanjutkan Pembayaran</button>
                  </div>
                </div>
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