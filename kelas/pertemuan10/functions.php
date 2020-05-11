<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040073');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);


  $query = "INSERT INTO mahasiswa
          VALUES
          (null,
          '$nama',
          '$nrp',
          '$email',
          '$jurusan',
          '$gambar')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
