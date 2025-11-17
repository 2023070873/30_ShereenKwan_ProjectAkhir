<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="update.css">
</head>
<body>
    
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from destinations where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ExploreNature</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="data.php">data</a></li>
                    <li class="nav-item"><a class="btn btn-success ms-3" href="home.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="form d-flex justify-content-center align-items-center">
            <form class="w-50 mx-auto" method="post" action="ubah.php">
                <div class="row my-3 justify-content-center">
                    <p>Update Destination</p>
                </div>
                <div class="container">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <div class="row my-3">
                        <div class="col-12 col-md-8 mx-auto">
                            <label for="place_name" class="form-label">Place name</label>
                            <input type="text" class="form-control" name="place_name" value="<?php echo $d['place_name']; ?>">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-md-8 mx-auto">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="location" value="<?php echo $d['location']; ?>">
                        </div>
                    </div>
                    <div class="row my-3 justify-content-center">
                        <div class="col-12 col-md-4 col-sm-6">
                            <label for="type">Type</label>
                            <select name="type" class="form-control" id="type" required>
                                <option value="" disabled selected></option>
                                <?php
                                $types = ['Mountain', 'Beach', 'Lake', 'Forest', 'Waterfall'];
                                foreach ($types as $type) {
                                $selected = (isset($d['type']) && $d['type'] == $type) ? 'selected' : '';
                                echo "<option value=\"$type\" $selected>$type</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-4 col-sm-6">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" name="rating" min="1" max="5" step="0.1" value="<?php echo $d['rating']; ?>">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-md-8 mx-auto">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="<?php echo $d['description']; ?>">                
                        </div>
                    </div>
                    <div class="row mt-3 py-2 justify-content-center mx-auto">
                        <div class="col-12 justify-content-center col-md-10 col-lg-7 col-xl-4 mx-auto">
                            <button type="submit" class="btn btn-primary custom px-3 py-3 w-100" value="submit">Confirm</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
        }
        ?>

    <footer>
        <div class="container text-center">
            <p>© 2025 ExploreNature. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>