<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

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
  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br><br>
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