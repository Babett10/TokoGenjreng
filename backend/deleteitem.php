<?php

    $id = $_GET['id'];



    include "../connection.php";

    mysqli_query($connect,"DELETE FROM `keranjang` WHERE id_keranjang = '$id';");


    header("Location: ../cart.php");

?>