<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <tr> <?php for ($a = 1; $a <= 5; $a++) : ?>
            <th>Baris <?= $a; ?></th>
            <?php for ($b = 1; $b <= 5; $b++) : ?>
            <?php if ($a %2==0) : ?>
            <td></td>
            <?php else : ?>
            <td>
            baris <?= $a; ?>, Kolom <?= $b; ?>
            </td>
            <?php endif ?>
            <?php endfor; ?>
        </tr>
            <?php endfor; ?>
    </table>
</body>
</html>