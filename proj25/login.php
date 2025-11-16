<?php


session_start();//
include 'koneksi.php';//


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">ExploreNature</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="data.php">Data</a></li>
                <li class="nav-item">
                    <a class="btn btn-success ms-3" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="conlog">
        <div class="mt-5">
            <p >Login</p>
        </div>
        <form class="mt-5" action="" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="container-a">
                <button class="btn btn-primary" type="submit" name="login">Login</button>
                <a href="register.php">Don't have an account?</a>
            </div>
        </form>
    </div>

    <footer>
        <div class="container text-center">
            <p>© 2025 ExploreNature. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>