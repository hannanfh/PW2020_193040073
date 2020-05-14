<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (!isset($_GET['Id'])) {
  header("location: index.php");
  exit;
}


$id = $_GET['Id'];
$m = query("SELECT * FROM mahasiswa WHERE Id = $id");
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Diubah');
      document.location.href = 'index.php';
      </script>";
  } else {
    echo "data gagal diubah";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UBAH DATA MAHASISWA</title>
</head>

<body>
  <h1>Form Ubah Data Mahasisawa</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?= $m['Id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required value="<?= $m['Nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nrp :
          <input type="text" name="Nrp" required value="<?= $m['Nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="Email" required value="<?= $m['Email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="Jurusan" required value="<?= $m['Jurusan']; ?>">
        </label>
      </li>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['Gambar']; ?>">
        <label>
          Gambar
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['Gambar']; ?>" width="100px" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!!</button>
      </li>

    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>