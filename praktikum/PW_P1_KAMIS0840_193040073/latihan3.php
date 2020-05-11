<?php 
$huruf1 = "A";
$huruf2 = "B";
$huruf3 = "C";
?>

<html>
<head>
<title></title>

<style>
.kotak {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border: 1px solid black;
    border-radius: 50%;
    background: salmon;
    margin: 2px;
    float: left;
}
.clear {
 clear: both;
}


</style>
</head>
<body>
    <div>
        <div class="kotak"><?= $huruf1; ?></div>
    </div>
    <div class="clear">
        <div class="kotak"><?= $huruf2; ?></div>
        <div class="kotak"><?= $huruf2; ?></div>
    </div>
    <div class="clear">
        <div class="kotak"><?= $huruf3; ?></div>
        <div class="kotak"><?= $huruf3; ?></div>
        <div class="kotak"><?= $huruf3; ?></div>
    </div>
</body>

</html>