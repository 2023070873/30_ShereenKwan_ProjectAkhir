
<?php
    // koneksi data base
    include 'koneksi.php';

    // mengangkap data ke database
    $place = $_POST['place_name'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $rating = $_POST['rating'];
    $desc = $_POST['description'];

    // menginput data ke database
    mysqli_query($koneksi, "insert into destinations (place_name, location, type, rating, description) values('$place','$location','$type', '$rating', '$desc')");



    // mengalihkan halaman kembali ke index.php
    header("location:data.php")
?>
