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
    <div class="container">
    <?php foreach ($buku as $bk) : ?>
        <p class="namaBuku"> 
            <a href="php/detail.php?Id=<?= $bk['Id'] ?>">
            <?= $bk["namaBuku"] ?>
            </a>
        </p> 
    <?php endforeach; ?>
    </div>
</table>
</body>
</html>