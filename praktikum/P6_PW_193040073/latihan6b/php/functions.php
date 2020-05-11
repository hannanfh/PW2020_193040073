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
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $cover = htmlspecialchars($data['cover']);
    $namaBuku = htmlspecialchars($data['namaBuku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO buku VALUES
          ('', '$cover', '$namaBuku', '$pengarang', '$penerbit','$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
