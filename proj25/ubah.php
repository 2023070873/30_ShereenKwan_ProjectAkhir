<?php
// koneksi di database
include'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$place_name = $_POST['place_name'];
$location = $_POST['location'];
$type = $_POST['type'];
$rating = $_POST['rating'];
$description = $_POST['description'];

mysqli_query($koneksi, "update destinations set place_name='$place_name', location='$location', type='$type', rating='$rating', description='$description' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data.php");
?>