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

  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nrp</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['Gambar']; ?>" width="200"></td>
        <td><?= $m['Nrp']; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Email']; ?></td>
        <td><?= $m['Jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>