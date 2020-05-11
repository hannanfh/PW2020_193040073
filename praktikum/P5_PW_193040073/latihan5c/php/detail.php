<?php 
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $buku["cover"]; ?>" alt="">
        <p><?= $buku["namaBuku"]; ?></p>
        <p><?= $buku["pengarang"]; ?></p>
        <p><?= $buku["penerbit"]; ?></p>
        <p><?= $buku["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div> 
</body>
</html>