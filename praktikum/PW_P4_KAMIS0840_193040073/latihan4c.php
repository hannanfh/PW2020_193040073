<?php
$pemain = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammaf=d Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germani",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan",
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
<table>
<?php foreach ($pemain as $nama => $club) : ?>
    <tr>
        <td><b><?= "$nama"; ?></td>
        <td>:</td>
        <td><?= "$club" ?></td>
    </tr>
<?php endforeach ?>
</table>
</body>
</html>