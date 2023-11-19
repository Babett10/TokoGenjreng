<?php

    $id_produk = $_POST['id_produk'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $total = $_POST['harga'] * $_POST['qty'] ;


    include "../connection.php";

    mysqli_query($connect,"INSERT INTO `keranjang` (`id_produk`, `harga`, `qty`, `total`) VALUES ('$id_produk','$harga','$qty','$total');");


    header("Location: ../cart.php");

?>