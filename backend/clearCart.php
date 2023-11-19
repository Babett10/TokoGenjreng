<?php

    include "../connection.php";

    mysqli_query($connect,"DELETE FROM `keranjang`");


    header("Location: ../thankyou.php");

?>