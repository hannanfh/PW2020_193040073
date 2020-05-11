<?php
$buku = [
    ["cover"        => "1.jpg",
     "namaBuku"     => "~SEBUAH SENI UNTUK BERSKAP BODO AMAT~",
     "pengarang"    => "MARK MANSON",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "2.jpg",
     "namaBuku"     => "~NANTI KITA CERITA TENTANG HARI INI~",
     "pengarang"    => "MARCHELLA FP",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "3.jpg",
     "namaBuku"     => "~ORANG-ORANG BIASA~",
     "pengarang"    => "ANDREA HIRATA",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "4.jpg",
     "namaBuku"     => "~11:11~",
     "pengarang"    => "FIERSA BESARI",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "5.jpg",
     "namaBuku"     => "~FATE GRAND ORDER~",
     "pengarang"    => "TAKESHI KAWAGUCHI",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "6.jpg",
     "namaBuku"     => "~KOMIK MUSLIM CILIK CINTAI MASJID~",
     "pengarang"    => "DK.WARDHANI",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "7.jpg",
     "namaBuku"     => "~OTORITAS HADIS-HADIS~",
     "pengarang"    => "FAIQOTUL MALA",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "8.jpg",
     "namaBuku"     => "~MUSLIM PRODUKTIF~",
     "pengarang"    => "MOHAMMED FARIS",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "9.jpeg", 
     "namaBuku"     => "~KALA~",
     "pengarang"    => "STEFANI BELLA-SYAHID MUHAMMAD",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "10.jpg",
     "namaBuku"     => "~LASKAR PELANGI~",
     "pengarang"    => "ANDREA HIRATA",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

    ["cover"        => "11.jpg",
     "namaBuku"     => "FRIEND ZONE",
     "pengarang"    => "VANESA MARCELLA",
     "penerbit"     => "GRAMEDIA.COM",
     "harga"        => "Rp.99.000",],

];
?>
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
    <?php foreach ($buku as $bk) {?>
    <tr>
        <td><img src="img/<?= $bk['cover']; ?>" height="450px"></td>
        <td><?= $bk['namaBuku']; ?></td>
        <td><?= $bk['pengarang']; ?></td>
        <td><?= $bk['penerbit']; ?></td>
        <td><?= $bk['harga']; ?></td>

    <?php } ?>
    </tr>

</table>
</body>
</html>