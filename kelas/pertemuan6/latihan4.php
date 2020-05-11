<?php
$mhs = 
    [
        ['Hannan Fakhrul Hakim', '193040073', '193040073@mail.unpas.ac.id', 'Teknik Informatika'],
        ['Nura Nuraeni', '193040074', '193040074@mail.unpas.ac.id', 'Teknik Industri'],
        ['Sarah Nurlatifah', '193040075', '193040075@mail.unpas.ac.id', 'Teknik mesin'],
        ['Tanti Faridah', '193040076', '193040076@mail.unpas.ac.id', 'Teknik pangan'],
        ['Dimas Jatnika', '193040077', '193040077@mail.unpas.ac.id', 'Teknik kimia'],
        ['Anggi Abdul Manaf', '193040078', '193040078@mail.unpas.ac.id', 'Teknik Takol']
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h2>Daftar Mahasiswa UNIVERSITAS PASUNDAN</h2>

    <?php foreach($mhs as $m) { ?>
    <ul>
        <li>Nama    : <?php echo $m[0]; ?></li>
        <li>Nrp     : <?php echo $m[1]; ?></li>
        <li>Email   : <?php echo $m[2]; ?></li>
        <li>Jurusan : <?php echo $m[3]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>