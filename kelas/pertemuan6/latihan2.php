<?php
// Array multidimensi
// Array di dalam arrrya

$angka = [24, 03,[01, [01], 218], 200];
echo $angka[2][1][0];
echo '<hr>';

$angka2 = [[1,2,3], [4,5,6], [7,8,9]];
foreach($angka2 as $baris) {
 foreach($baris as $b) {
    echo $b;
 }
 echo '<br>';
}


?>