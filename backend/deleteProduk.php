<?php

    $id = $_GET['id'];

    include "../connection.php";

    mysqli_query($connect,"DELETE FROM `produk` WHERE id_produk = '$id';");


    header("Location: ../DBproduk.php");

?>