<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = 'latihan3.php';
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Ditambahkan');
      document.location.href = 'latihan3.php';
      </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMBAH DATA MAHASISWA</title>
</head>

<body>
  <h1>Form Tambah Data Mahasisawa</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nrp :
          <input type="text" name="Nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="Email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="Jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="Gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!!</button>
      </li>

    </ul>
  </form>
</body>

</html>