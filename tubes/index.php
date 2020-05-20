<?php
session_start();
require 'php/functions.php';

$buku = query("SELECT * FROM buku");

if (isset($_POST['cari'])) {
    $buku = cari($_POST['keyword']);
}


?>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Halaman Utama</title>
    <style>
        .jumbotron {
            background-image: url(assets/img/jb1.jpg);
            height: 600px;
            background-size: cover;
            margin-top: -100px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 85px;
            text-align: center;
            margin-top: 50px;
        }

        .buku {
            background-color: aquamarine;
        }

        .footer {
            font-family: 'Dancing Script', cursive;
            font-size: 40px;
            background-color: grey;
            text-align: center;
            height: 100px;
            line-height: 50px;
            padding-top: 25px;
        }

        body {
            background-image: url(assets/img/bg.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="assets/img/buku.png" width="75px">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><img src="assets/img/home.png" width="30px">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
            <a href="php/login.php">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="login">Login!</button>
            </a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron  -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Selamat Datang di Book Store</h1>
        </div>
    </div>
    <!-- Akhir jumbotron -->


    <!-- Card -->
    <div class="container">
        <form class="form-inline" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Buku.." aria-label="Search" type="text" name="keyword" autocomplete="off" autofocus>
            <button class="btn btn-outline-dark bg-light my-2 my-sm-0" type="submit" name="cari">Cari</button>
        </form>
        <div class="row pt-5">
            <?php foreach ($buku as $bk) : ?>
                <div class="col-sm-3 mb-3">
                    <div class="card mt-3">
                        <img class="card-img-top" src="assets/img/<?= $bk['cover'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $bk["namaBuku"] ?></h5>
                            <a href="php/detail.php?Id=<?= $bk['Id']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php if (empty($buku)) : ?>
        <h1 style="text-align: center">Buku Tidak ditemukan!!</h1>

    <?php endif; ?>
    <!-- Akhir Card -->
    <!-- footer -->
    <div class="footer">
        <p>www.BookStore.com</p>
    </div>
    <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>