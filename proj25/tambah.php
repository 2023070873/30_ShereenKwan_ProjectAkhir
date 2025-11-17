<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="update.css">
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
                    <li class="nav-item"><a class="nav-link" href="data.php">Data</a></li>
                    <li class="nav-item">
                        <a class="btn btn-success ms-3" href="home.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form d-flex justify-content-center align-items-center">
        <form class="w-50" method="post" action="tambah_aksi.php">
            <div class="row my-3 justify-content-center">
                <p>Add Destination</p>
            </div>
            <div class="container">
                <div class="row my-3">
                    <div class="col-12 col-md-8 mx-auto">
                        <label for="place_name" class="form-label">Place name</label>
                        <input type="text" class="form-control" name="place_name" required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 col-md-8 mx-auto">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                </div>
                <div class="row my-3 justify-content-center">
                    <div class="col-12 col-md-4 col-sm-6">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-control" id="type" required>
                            <option value="" disabled selected></option>
                            <option value="Mountain">Mountain</option>
                            <option value="Beach">Beach</option>
                            <option value="Lake">Lake</option>
                            <option value="Forest">Forest</option>
                            <option value="Waterfall">Waterfall</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="rating" min="1" max="5" step="0.1" required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 col-md-8 mx-auto">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control " name="description">
                    </div>
                </div>
                <div class="row mt-3 py-2 justify-content-center mx-auto">
                    <div class="col-12 justify-content-center col-md-10 col-lg-7 col-xl-4 mx-auto">
                        <button type="submit" class="btn px-3 py-3 w-100" value="submit">Confirm</button>
                    </div>
                </div>
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