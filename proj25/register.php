<?php
    include 'koneksi.php';

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (first_name ,last_name , email, gender, password) VALUES ('$first_name', '$last_name', '$email', '$gender', '$password')";
        $result = mysqli_query($koneksi, $query);

        if($result){ 
            echo "<script> alert('Registrasi berhasil! Silahkan login.');
            window.location='login.php';</script>";
        } else {
            echo "Gagal mendaftar! Error: "; 
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
                    <li class="nav-item">
                        <a class="btn btn-success ms-3" href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="conlog">
        <div class="mt-5">
            <p class="">Sign in</p>
        </div>
        <form action="" method="post">
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <input type="text" name="email" placeholder="Email" required>
            <label for="gender">Gender</label>
            <select name="gender" id="gender" placeholder="Gender" required>
                <option value="" disabled selected></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="password" name="password" placeholder="Password" required>
            <div class="container-a">
                <button class="btn btn-primary" type="submit" name="register">Sign in</button>
                <a href="Login.php">Already have an account?</a>
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