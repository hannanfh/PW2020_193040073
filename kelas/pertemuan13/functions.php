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
function upload()
{
  $nama_file = $_FILES['Gambar']['name'];
  $tipe_file = $_FILES['Gambar']['type'];
  $ukuran_file = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmp_file = $_FILES['Gambar']['tmp_name'];

  // Ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    //   echo "<script>
    //    alert('Pilih gambar terlebih dahulu')
    //   </script>";
    return 'nophoto.jpg';
  }

  //Cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
    alert('Yang anda pilih bukan gambar!')
    </script>";
    return false;
  }

  // Cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert('Yang anda pilih bukan gambar!')
    </script>";
    return false;
  }

  // Cek ukuran file
  // maksimal 5mb == 5000000 byte
  if ($ukuran_file > 5000000) {
    echo "<script>
    alert('Ukuran terlalu besar!')
    </script>";
    return false;
  }

  // Lolos Pengecekan
  // Siap Upload File
  // Generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO mahasiswa
          VALUES
          (null,
          '$nama',
          '$nrp',
          '$email',
          '$jurusan',
          '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function hapus($id)
{

  $conn = koneksi();

  $mhs = query("SELECT * FROM mahasiswa WHERE Id = $id");
  if ($mhs['Gambar'] != 'nophoto.jpg') {
    unlink('img/' . $mhs['Gambar']);
  }


  mysqli_query($conn, "DELETE FROM mahasiswa WHERE Id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['Id']);
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if (!$gambar == 'nophoto.jpg') {
    $gambar = $gambar_lama;
  }


  $query = "UPDATE mahasiswa SET
            Nama = '$nama',
            Nrp = '$nrp',
            Email = '$email',
            Jurusan = '$jurusan',
            Gambar = '$gambar'
            WHERE Id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE 
            Nama LIKE '%$keyword%' OR
            Nrp LIKE '%$keyword%' OR
            Email LIKE '%$keyword%' OR
            Jurusan LIKE '%$keyword%' OR
            Gambar LIKE '%$keyword%'
             ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);



  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    if (password_verify($password, $user['password'])) {
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty('$username') || empty($password1) || empty($password2)) {
    echo "<script>
      alert('Username / Password tidak boleh kosong!');
      document.location.href = 'registrasi.php';
      </script>";
    return false;
  }
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
      alert('Username sudah terdaftar!');
      document.location.href = 'registrasi.php';
      </script>";
    return false;
  }
  if ($password1 !== $password2) {
    echo "<script>
      alert('Password tidak sesuai!');
      document.location.href = 'registrasi.php';
      </script>";
    return false;
  }
  if (strlen($password1) < 5) {
    echo "<script>
    alert('Password terlalu pendek!');
    document.location.href = 'registrasi.php';
    </script>";
  }
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  $query = "INSERT INTO user
            VALUES 
            (null, '$username', '$password_baru')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
