<?php
$pemain = [ "Mohammad Salah", "Christiano Ronaldo", "Lionel Messi", "zlatan Ibrahimovic", "Neymar Jr"]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4b</title>
</head>
<body>
    <h3>Daftar pemain Bola terkenal</h3>
    <ol>
    <?php foreach ($pemain as $a) : ?>
    <li><?php echo "$a"?></li>
    <?php endforeach; ?>
    </ol>

    <?php 
    $pemain [] = "Luca Modric";
    $pemain [] = "Sadio Mane";
    sort($pemain);
    ?>

<h3>Daftar pemain Bola terkenal baru</h3>
    <ol>
    <?php foreach ($pemain as $a) : ?>
    <li><?php echo"$a" ?> </li>
    <?php endforeach; ?>
    </ol>
</body>
</html>