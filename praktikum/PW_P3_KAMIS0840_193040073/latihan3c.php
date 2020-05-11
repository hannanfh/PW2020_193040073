<?php
function tumpukanBola($tumpukan){
    for($i=1; $i<= $tumpukan; $i++){
        for($j=1; $j<=$i; $j++){
            echo '<div class="bulat">'.$i.'</div>';
        }
        echo '<div class="clear"></div>';
        echo"<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3c</title>
</head>
<style>
.bulat{
    border: 3px solid black;
    border-radius: 50%;
    background-color: salmon;
    width: 50px;
    height: 50px;
    text-align: center;
    float: left;
    line-height: 50px;
    margin-bottom: -5px;
}

.clear {
    clear: both;
}

</style>

<body>
<?php tumpukanBola(5)
    ?> 
</body>
</html>