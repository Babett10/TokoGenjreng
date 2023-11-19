<?php

    $id = $_GET['id'];
    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'] ;


    include "../connection.php";

    mysqli_query($connect,"UPDATE `produk` SET `nama_produk`='$nama_produk',`stok`='$stok',`harga`='$harga',`id_jenis`='$jenis',`merk`='$merk',`gambar`='$gambar',`deskripsi`='$deskripsi' WHERE id_produk = '$id';");


    header("Location: ../DBproduk.php");

?>