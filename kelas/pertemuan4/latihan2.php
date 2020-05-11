<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<style>
.kotak {
    width: 50px;
    height: 50px;
    background: red;
    text-align: center;
    line-height: 50px;
    transition: 0.5s;
    float: left;
    margin: 2px;
}
.kotak:hover {
    transform: rotate(360deg);
}


</style>
<body>
<?php
for($i = 1; $i <= 1000; $i++) {

    echo "<div class='kotak'>$i</div>";

}
?>

    <div class="kotak">1</div>
    <div class="kotak">2</div>
    <div class="kotak">3</div>
</body>
</html>