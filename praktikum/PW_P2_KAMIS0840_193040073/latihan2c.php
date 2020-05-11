<?php 
 for ($a = 1; $a <= 3; $a++) {
     for ($b = 1; $b <= $a; $b++) {
 echo "<div class='bulat'>$a</div>";
 }
 echo '<div class="clear"></div>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2c</title>
</head>
<style>
.bulat {
    height : 50px;
    width : 50px;
    background-color : salmon;
    text-align : center;
    border : 2px solid black;
    border-radius : 100%;
    font-weight : bold;
    line-height : 50px;
    margin : 2px;
    float : left;
}
.clear {
    clear : both;
}


</style>
<body>
    
</body>
</html>

