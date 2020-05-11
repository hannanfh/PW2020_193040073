<?php

    require 'php/functions.php';

    $buku = query("SELECT * FROM buku")
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
    <?php foreach ($buku as $bk) : ?>
    <tr>
        <td><img src="assets/img/<?= $bk['cover']; ?>"></td>
        <td><?= $bk['namaBuku']; ?></td>
        <td><?= $bk['pengarang']; ?></td>
        <td><?= $bk['penerbit']; ?></td>
        <td><?= $bk['harga']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</body>
</html>