<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR MAHASISWA</title>
</head>

<body>
  <H1 align="center">DAFTAR MAHASISWA</H1>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>ID</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
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