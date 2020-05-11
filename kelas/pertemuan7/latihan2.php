<?php
$mhs = 
    [
        [
        'nama' => 'Hannan Fakhrul Hakim',
        'nrp' => '193040073',
        'email' => '193040073@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika'
        ],
        [
        'nama' => 'Nura Nuraeni',
        'nrp' => '193040074',
        'email' => '193040074@mail.unpas.ac.id',
        'jurusan' => 'Teknik Industri'
        ],
        [
        'nama' => 'Sarah Nurlatifah',
        'nrp' => '193040075',
        'email' => '193040075@mail.unpas.ac.id',
        'jurusan' => 'Teknik mesin'
        ],
        [
        'nama' => 'Tanti Faridah',
        'nrp' => '193040076',
        'email' => '193040076@mail.unpas.ac.id',
        'jurusan' => 'Teknik pangan'
        ],
        [
        'nama' => 'Dimas Jatnika',
        'nrp' => '193040077',
        'email' => '193040077@mail.unpas.ac.id',
        'jurusan' => 'Teknik kimia'
        ],
        [
        'nama' => 'Anggi Abdul Manaf',
        'nrp' => '193040078',
        'email' => '193040078@mail.unpas.ac.id',
        'jurusan' => 'Teknik Takol'
        ]
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
        <li>Nama    : <?php echo $m['nama']; ?></li>
        <li>Nrp     : <?php echo $m['nrp']; ?></li>
        <li>Email   : <?php echo $m['email']; ?></li>
        <li>Jurusan : <?php echo $m['jurusan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>