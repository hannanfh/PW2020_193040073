<?php
session_start();
if (!isset($_GET['Id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';
$id = $_GET['Id'];
$buku = query("SELECT * FROM buku WHERE Id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
</head>
<!doctype html>
<html lang="en">

<head>
    <style>
        .container1 {
            margin-left: 20%;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>DETAIL</title>
</head>

<body style="background-color: aquamarine;">
    <!-- navbar -->
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
        <img class="img" src="../assets/img/logo.png">
        <p class="p1">RAMEDIA.COM</p>
        <div class="container search">
            <P>.</P>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- Card -->
    <br> <br> <br>
    <div class="container1">
        <div class="card mt-5" style="max-width: 840px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../assets/img/<?= $buku["cover"]; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p><?= $buku["namaBuku"]; ?></p>
                        </h5>
                        <p class="card-text">
                            <p>PENGARANG : <?= $buku["pengarang"]; ?></p>
                            <p>PENERBIT : <?= $buku["penerbit"]; ?></p>
                            <p>HARGA : <?= $buku["harga"]; ?></p>
                            <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
                            <br><br><br>
                            <a href="https://instagram.com/gramediabandung?igshid=14cku8stekgsv"><img src="../assets/img/ig.jpg" width="60px;"></a>
                            <a href="https://www.facebook.com/gramedia.transstudiomall/"><img src="../assets/img/fb.jpg" width="60px;"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir card -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>