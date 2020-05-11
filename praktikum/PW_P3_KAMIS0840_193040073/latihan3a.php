<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3a</title>
</head>
<style>
.container {
    width: 700px;
    border: 1px solid black;
    box-shadow: 0px 0px 5px grey;
    border-radius: 10px;
    
}

.tulisan {
    font-size: 28px;
    font-family: arial;
    color: #8c782d;
    font-style: italic;
    font-weight: bold;
    margin: 0;
    padding: 10px;
}


</style>

<body>
<?php
    function gantiStyle($tulisan,$style1,$style2){
        echo "<div class=".$style1.">
        <p class=".$style2.">".$tulisan." </p>
        </div>";
    }
    ?>
    <?php
    gantiStyle("Selamat datang di praktikum Pw 2020","container","tulisan");
    
    ?>
</body>
</html>