<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'admin.php';
    </script>";
  } else {
    "<script>
    alert('Data gagal ditambahkan');
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
  <nav class="navbar navbar-light bg-light">
    <img class="img" src="../assets/img/buku.png" width="75px">
    <div class="container search">

    </div>
  </nav>
  <!-- Akhir navbar -->
  <!-- form -->
  <div class="container">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="cover">Gambar
          <input type="file" class="form-control" name="cover" class="cover" onchange="previewImage()">
          <img src="../assets/img/no.png" width="100px" style="display: block;" class="img-preview">
        </label>
      </div>
      <div class="form-group">
        <label for="namaBuku">Nama Buku</label>
        <input type="text" class="form-control" name="namaBuku">
      </div>
      <div class="form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" class="form-control" name="pengarang">
      </div>
      <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" class="form-control" name="penerbit">
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga">
      </div>
      <button type="submit" class="btn btn-primary" name="tambah">Tambah Buku</button>
      <button class="btn btn-outline-success my-2 my-sm-0"><a href="admin.php">kembali!</a></button>
    </form>
  </div>
  <!-- akhir form -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>