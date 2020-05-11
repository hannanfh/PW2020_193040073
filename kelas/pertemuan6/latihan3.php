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
.clear {
    clear: both;
}


</style>
<body>
<?php
$angka2 = [[1,2,3], [4,5,6], [7,8,9]];
foreach($angka2 as $baris) {
 foreach($baris as $b) {
echo "<div class='kotak'>$b</div>";
 }
echo '<div class="clear"></div>';

}

?>



<div class="clear">
</div>
</body>
</html>