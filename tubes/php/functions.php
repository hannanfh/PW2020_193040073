<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040073") or die("Database Salah!");

    return $conn;
}
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function upload()
{
    $nama_file = $_FILES['cover']['name'];
    $tipe_file = $_FILES['cover']['type'];
    $ukuran_file = $_FILES['cover']['size'];
    $error = $_FILES['cover']['error'];
    $tmp_file = $_FILES['cover']['tmp_name'];

    // Ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        //   echo "<script>
        //    alert('Pilih gambar terlebih dahulu')
        //   </script>";
        return 'no.png';
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
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
    return $nama_file_baru;
}
function tambah($data)
{
    $conn = koneksi();

    // $cover = htmlspecialchars($data['cover']);
    $namaBuku = htmlspecialchars($data['namaBuku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $harga = htmlspecialchars($data['harga']);
    $cover = upload();
    if (!$cover) {
        return false;
    }

    $query = "INSERT INTO buku VALUES
          (null, '$cover', '$namaBuku', '$pengarang', '$penerbit','$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE Id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['Id']);
    $cover_lama = htmlspecialchars($data['cover_lama']);
    $namaBuku = htmlspecialchars($data['namaBuku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $harga = htmlspecialchars($data['harga']);
    $cover = upload();
    if (!$cover) {
        return false;
    }

    if (!$cover == 'no.png') {
        $cover = $cover_lama;
    }

    $query = "UPDATE buku SET 
            cover = '$cover',
            namaBuku = '$namaBuku',
            pengarang = '$pengarang',
            penerbit = '$penerbit',
            harga = '$harga'
            WHERE Id = '$id'
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku
            WHERE 
            namaBuku LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
             ";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek Username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username sudah digunakan');
                </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
