<?php
$pemain = [
    ["Nama"     => "Cristian Ronaldo",
     "Club"     => "Juventus",
     "Main"     => "100",
     "Gol"      => "76",
     "Assist"   => "30",],

     ["Nama"     => "Lionel Messi",
     "Club"     => "Barcelona",
     "Main"     => "120",
     "Gol"      => "80",
     "Assist"   => "12",],

     ["Nama"     => "Luca Mordic",
     "Club"     => "Real Madrid",
     "Main"     => "87",
     "Gol"      => "12",
     "Assist"   => "48",],
     ["Nama"     => "Mohammad Salah",
     "Club"     => "Liverpool",
     "Main"     => "90",
     "Gol"      => "103",
     "Assist"   => "8",],

     ["Nama"     => "Neymar jr",
     "Club"     => "Paris Saint german",
     "Main"     => "109",
     "Gol"      => "56",
     "Assist"   => "15",],

     ["Nama"     => "Sadio Mana",
     "Club"     => "Liverpool",
     "Main"     => "63",
     "Gol"      => "30",
     "Assist"   => "70",],

     ["Nama"     => "Zlata Ibrahimovic",
     "Club"     => "AC Milan",
     "Main"     => "100",
     "Gol"      => "10",
     "Assist"   => "12",],
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
<h3>Daftar pemain Bola terkenal</h3>
<table border="1" cellpadding="8" cellspacing="0" style="text-align : center " >
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>CLUB</th>
        <th>MAIN</th>
        <th>GOL</th>
        <th>ASSIST</th>
    </tr>
    <?php 
    $no = 1; 
    $tMain = 0;
    $tGol = 0;
    $tAssist = 0;
    ?> 
    <?php foreach ($pemain as $a) {?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $a['Nama']; ?></td>
        <td><?= $a['Club']; ?></td>
        <td><?= $a['Main']; ?></td>
        <td><?= $a['Gol']; ?></td>
        <td><?= $a['Assist']; ?></td>

        <?php
        $no++;
        $tMain += $a['Main'];
        $tGol += $a['Gol'];
        $tAssist += $a['Assist'];
        ?>

    <?php } ?>
    </tr>
    <tr>
        <td>#</td>
        <td colspan="2"><b>Jumlah</b></td>
        <td><?= $tMain ?></td>
        <td><?= $tGol ?></td>
        <td><?= $tAssist ?></td>
    </tr>
</table>
</body>
</html>