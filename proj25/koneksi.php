<?php

    $koneksi = mysqli_connect("localhost","root","mysql","proj25");

    if(mysqli_connect_error()){

        echo "koneksi database gagal : " . mysqli_connect_error();

    }
    
?>