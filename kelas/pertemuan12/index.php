<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Index</title>
  <style>


  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-light bg-info">
    <img class="img" src="img/if.png" width="120px">

    <div class="container search">
      <P>.</P>
      <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="text" placeholder="Cari Mahasiswa" aria-label="Search" type="text" name="keyword" autocomplete="off" autofocus>
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="cari">Cari</button>
      </form>
    </div>
  </nav>
  <!-- akhir navbar -->
  <button>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
  </button>
  <button>
    <a href="logout.php">Logout!</a>
  </button>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR MAHASISWA</title>
  <style>
    body {
      background-color: aquamarine;
    }
  </style>
</head>

<body>


  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>ID</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p>DATA NOT FOUND!!</p>
        </td>
      </tr>

    <?php endif; ?>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['Gambar']; ?>" width="200"></td>
        <td><?= $m['Nama']; ?></td>
        <td>
          <a href="detail.php?Id=<?= $m['Id']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>