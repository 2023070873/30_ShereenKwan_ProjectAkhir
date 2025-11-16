<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExploreNature | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
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
                <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="data.php">data</a></li>
                <li class="nav-item"><a class="btn btn-success ms-3" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero d-flex">
    <div class="container hero-content text-center">
        <h1 class="display-4 fw-bold">Discover the World’s Natural Wonders</h1>
        <p class="lead mb-4">Mountains, oceans, forests, deserts — explore nature in every corner of the globe.</p>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Featured Destinations</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow">
                    <img src="img/swiss.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Swiss Alps</h5>
                        <p class="card-text">Switzerland – Iconic snow-capped mountains with breathtaking alpine scenery.</p>
                        <a href="" class="btn btn-success">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <img src="img/black-forest.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Black Forest</h5>
                        <p class="card-text">Germany – A famous dense woodland known for pine trees, misty hills, and calm trails.</p>
                        <a href="" class="btn btn-success">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <img src="img/maldives.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Maldives</h5>
                        <p class="card-text">Indian Ocean – Crystal-clear waters, white sand beaches, and vibrant marine life.</p>
                        <a href="" class="btn btn-success">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Explore by Category</h2>

        <div class="category row g-4 justify-content-center">
            <div class="col-md-2 col-6">
                <div class="p-4 rounded category-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mountain">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 20h18l-6.921 -14.612a2.3 2.3 0 0 0 -4.158 0l-6.921 14.612z" />
                        <path d="M7.5 11l2 2.5l2.5 -2.5l2 3l2.5 -2" />
                    </svg>
                    <br>Mountains
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="p-4 rounded category-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trees">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M16 5l3 3l-2 1l4 4l-3 1l4 4h-9" />
                        <path d="M15 21l0 -3" />
                        <path d="M8 13l-2 -2" />
                        <path d="M8 12l2 -2" />
                        <path d="M8 21v-13" />
                        <path d="M5.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z" />
                    </svg>
                    <br>Forests
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="p-4 rounded category-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-beach">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17.553 16.75a7.5 7.5 0 0 0 -10.606 0" />
                        <path d="M18 3.804a6 6 0 0 0 -8.196 2.196l10.392 6a6 6 0 0 0 -2.196 -8.196z" />
                        <path d="M16.732 10c1.658 -2.87 2.225 -5.644 1.268 -6.196c-.957 -.552 -3.075 1.326 -4.732 4.196" />
                        <path d="M15 9l-3 5.196" />
                        <path d="M3 19.25a2.4 2.4 0 0 1 1 -.25a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 1 .25" />
                </svg>
                    <br>Beaches
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="p-4 rounded category-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-ripple">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 7c3 -2 6 -2 9 0s6 2 9 0" />
                        <path d="M3 17c3 -2 6 -2 9 0s6 2 9 0" />
                        <path d="M3 12c3 -2 6 -2 9 0s6 2 9 0" />
                    </svg>
                    <br>Waterfall
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="p-4 rounded category-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-droplet">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10.708 2.372a2.382 2.382 0 0 0 -.71 .686l-4.892 7.26c-1.981 3.314 -1.22 7.466 1.767 9.882c2.969 2.402 7.286 2.402 10.254 0c2.987 -2.416 3.748 -6.569 1.795 -9.836l-4.919 -7.306c-.722 -1.075 -2.192 -1.376 -3.295 -.686z" />
                    </svg>
                    <br>Lakes
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 text-center text-white" style="background: #2a6214ff;">
    <h2 class="fw-bold">Start Your Nature Journey Today</h2>
    <p class="lead">Create an account and explore thousands of natural wonders around the world.</p>
    <a href="login.php" class="btn btn-light btn-lg">Get Started</a>
</section>

<footer>
    <div class="container text-center">
        <p>© 2025 ExploreNature. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
