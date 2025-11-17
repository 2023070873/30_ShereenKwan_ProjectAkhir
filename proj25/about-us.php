<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="about-us.css">
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
                    <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="btn btn-success ms-3" href="login.php">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleDark" class="carousel carousel-dark slide w-75 mx-auto">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/carousel-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="img/carousel-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/carousel-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
        </div>
        <button class="carousel-control-prev pt-5" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next pt-5" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


<div class="mx-auto pb-4 text-center">
  <h2 style="padding-top: 4%;" class="">About ExploreNature</h2>
    <div class="card">
        <div class="card-content">
            <p class="small">
            ExploreNature is a platform created to help travelers discover the world’s
            most beautiful natural destinations. Our mission is to make exploring nature
            easier, more inspiring, and more enjoyable fo
            </p>
        </div>
        <div class="card-content">
            <p class="small">
            We collect and showcase destinations such as beaches, mountains,
            lakes, forests, and waterfalls — providing essential information
            to help you explore with confidence.
            </p>
        </div>
        <div class="card-content">
            <p class="small">
            Built with passion and dedication, this project is designed as part of
            a learning journey in web development.
            </p>
        </div>
    </div>
</div>

    <footer>
        <div class="container text-center">
            <p>© 2025 ExploreNature. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>