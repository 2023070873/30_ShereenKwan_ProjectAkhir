<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Dastinations Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="data.css">
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
                    <li class="nav-item"><a class="nav-link" href="data.php">data</a></li>
                    <li class="nav-item"><a class="btn btn-success ms-3" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="table-container">
            <div class="">
                <div class="header">
                    <h3>Nature Destinations Data</h3>
                    <p>“Browse, manage, and update natural destinations all around the world.”</p>
                </div>
                <a href="tambah.php">+ Add Destination</a>
            </div>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Place Name</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "select * from destinations");
                    while($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $d['place_name']; ?></td>
                            <td><?php echo $d['location']; ?></td>  
                            <td><?php echo $d['type']; ?></td>
                            <td>
                                <span class="rating-badge">⭐ <?php echo $d['rating']; ?> / 5</span>
                            </td>
                            <td><?php echo $d['description']; ?></td>
                            <td class="action-container">
                                <a href="update.php?id=<?php echo $d['id']; ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
                            </td>                          
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="container text-center">
            <p style="color: #ccc;">© 2025 ExploreNature. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>