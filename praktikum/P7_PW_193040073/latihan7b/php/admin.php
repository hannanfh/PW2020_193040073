<?php
session_start();
require 'functions.php';

$buku = query("SELECT * FROM buku");
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Admin</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-light bg-dark">
    <img class="img" src="../assets/img/logo.png">
    <p class="p1">RAMEDIA.COM</p>
    <div class="container search">
      <P>.</P>
      <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari buku.." aria-label="Search" type="text" name="keyword" autocomplete="off" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>

      </form>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron  -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="jumfont">
        <h1 class="display-4">GRAMEDIA.COM</h1>
        <p class="lead p">Membaca adalah alat paling dasar untuk meraih hidup yang baik.</p>
      </div>
    </div>
  </div>
  <!-- Akhir jumbotron -->
  <div class="container">
    <h1 style="text-align: center">List Buku</h1>
    <a href="logout.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout!</button>
    </a> <br><br>
    <button class="btn btn-outline-danger my-2 my-sm-0">
      <p>Apabila ingin menambahkan buku, klik <a href="tambah.php">Tambah Buku</a></p>
    </button>

  </div>
  <!-- Card -->
  <section class="buku">
    <div class="container">
      <div class="row pt-5">
        <?php foreach ($buku as $bk) : ?>
          <div class="col-sm-3 mb-3">
            <div class="card  mt-3">
              <img class="card-img-top" src="../assets/img/<?= $bk['cover'] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $bk['namaBuku'] ?></h5>
                <a href="ubah.php?Id=<?= $bk['Id']; ?>" onclick="return confirm('Apakah Anda yakin ingin mengubah data ini??')" class="btn btn-primary">Ubah</a>
                <a href="hapus.php?Id=<?= $bk['Id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini??')" class="btn btn-primary">Hapus</a>
                <a href="detail.php?Id=<?= $bk['Id']; ?>" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- Akhir Card -->

  <?php if (empty($buku)) : ?>
    <h1 style="text-align: center">Buku Tidak ditemukan!!</h1>
  <?php endif; ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>