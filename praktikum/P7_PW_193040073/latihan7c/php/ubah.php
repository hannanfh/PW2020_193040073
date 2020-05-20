<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$id = $_GET['Id'];
$bk = query("SELECT * FROM buku WHERE Id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diubah');
    document.location.href = 'admin.php';
    </script>";
  } else {
    "<script>
    alert('Data gagal diubah');
    document.location.href = 'admin.php';
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Form Tambah Data</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-dark">
    <img class="img" src="../assets/img/logo.png">
    <p class="p1">RAMEDIA.COM</p>
    <div class="container search">
      <P>.</P>
      <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari Buku.." aria-label="Search" type="text" name="keyword" autocomplete="off" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
        <a href="php/admin.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button" name="admin">Admin</button></a>
      </form>
    </div>
  </nav>
  <!-- Akhir navbar -->
  <!-- form -->
  <div class="container">
    <form method="post">
      <input type="hidden" name="Id" value="<?= $bk['Id']; ?>">
      <div class="form-group">
        <label for="cover">Gambar</label>
        <input type="text" class="form-control" name="cover" value="<?= $bk['cover']; ?>">
      </div>
      <div class=" form-group">
        <label for="namaBuku">Nama Buku</label>
        <input type="text" class="form-control" name="namaBuku" value="<?= $bk['namaBuku']; ?>">
      </div>
      <div class=" form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" class="form-control" name="pengarang" value="<?= $bk['pengarang']; ?>">
      </div>
      <div class=" form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" value="<?= $bk['penerbit']; ?>">
      </div>
      <div class=" form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" value="<?= $bk['harga']; ?>">
      </div>
      <button type=" submit" class="btn btn-primary" name="ubah">Ubah Buku</button>
    </form>
  </div>
  <!-- akhir form -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>