<?php
$jawabanIsset = "Isset = adalah salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. <br><br> ";
$jawabanEmpty = "Empty = merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong.";

$GLOBALS['Isset'] = $jawabanIsset;
$GLOBALS['Empty'] = $jawabanEmpty;
function soal($style){
    echo "<div class= '$style'>
    <p>Isset adalah = " . $GLOBALS['Isset'] . "</P>
    <p>Empty adalah = " . $GLOBALS['Empty'] . "</P>
    </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b</title>
</head>
<style>
.container {
    border: 1px solid black;
}

</style>
<body>
    <?php
     soal('container');
    ?>
</body>
</html>