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
    <title>Toko Genjreng - Checkout</title>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Tujuan pengiriman</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Kota Tujuan <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">Pilih Kota</option>    
                  <option value="2">Aceh</option>    
                  <option value="3">Medan</option>    
                  <option value="4">Palembang</option>    
                  <option value="5">Jakarta</option>    
                  <option value="6">Bandung</option>    
                  <option value="7">Jogja</option>    
                  <option value="8">Bali</option>    
                  <option value="9">Semarang</option>    
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nama Depan <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Nama Belakang <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Alamat <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Alamat" required>
                </div>
              </div>

              <div class="form-group row">
                
                <div class="col-md-12">
                  <label for="c_postal_zip" class="text-black"> Kode Pos<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" required>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address" required>
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">No Telp <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Catatan</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Masukkan Catatan"></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Pesananmu</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>                      
                      <?php if (mysqli_num_rows($query) > 0) { ?>
                      <?php 
                      $no = 1;
                      while ($data = mysqli_fetch_array($query)) {
                      ?>
                        <tr>
                          <td><?php echo $data["nama_produk"]?><strong class="mx-2">x</strong><?php echo $data["qty"]?></td>
                          <td><?php echo "$".$data["total"]?></td>
                      </tr>                 
                      <?php $no++; } ?>
                      <?php } ?>

                      <!-- sum -->
                      <?php
                          include("connection.php");
                          $result_total_harga = mysqli_query($connect,"SELECT SUM(total) 
                          AS total_harga
                          FROM keranjang;");

                          $row_total_harga = mysqli_fetch_assoc($result_total_harga);
                          $total_harga = $row_total_harga['total_harga'];
                        ?>

                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total Pesanan</strong></td>
                        <td class="text-black">
                        <?php if (mysqli_num_rows($query) > 0) { 
                            echo "$". ($total_harga) ;
                            }else {
                              echo "$0";
                            }
                         ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total Pembayaran</strong></td>
                        <td class="text-black font-weight-bold"><strong>
                        <?php if (mysqli_num_rows($query) > 0) { 
                            echo "$". ($total_harga) ;
                            }else {
                              echo "$0";
                            }
                         ?>
                        </strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="notif();window.location='backend/clearCart.php'">Bayar Sekarang</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
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

<script>
function notif() {
  var konfirmasi = confirm("Apakah Anda yakin ingin menyelesaikan pesanan?");
  return konfirmasi;
    }
</script>