<?php

    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'] ;


    include "../connection.php";

    mysqli_query($connect,"INSERT INTO `produk` (`nama_produk`, `stok`, `harga`, `id_jenis`,`merk`, `gambar`, `deskripsi`) VALUES ('$nama_produk','$stok','$harga','$jenis','$merk','$gambar','$deskripsi');");


    header("Location: ../DBproduk.php");

?>