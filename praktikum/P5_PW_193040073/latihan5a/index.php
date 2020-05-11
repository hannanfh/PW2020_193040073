<?php
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

mysqli_select_db($conn, "tubes_193040073") or die("Database salah!");

$buku = mysqli_query($conn, "SELECT * FROM buku")




?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
<table border="1" cellpadding="8" cellspacing="0" style="text-align : center " >
    <tr>
        <th>COVER</th>
        <th>NAMA BUKU</th>
        <th>PENGARANG</th>
        <th>PENERBIT</th>
        <th>HARGA</th>
    </tr>
    <?php while($bk = mysqli_fetch_assoc($buku)) : ?>
    <tr>
        <td><img src="assets/img/<?= $bk['cover']; ?>"></td>
        <td><?= $bk['namaBuku']; ?></td>
        <td><?= $bk['pengarang']; ?></td>
        <td><?= $bk['penerbit']; ?></td>
        <td><?= $bk['harga']; ?></td>
    </tr>
    <?php endwhile; ?>

</table>
</body>
</html>