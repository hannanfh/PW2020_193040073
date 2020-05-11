<?php
// Membuat Array
// cara lama
$mhs = array('Hannan', 'Fakhrul', 'Hakim', 'NN');

// cara baru
$angka =[24, 03, 2001];
$h = ['Pw', 300, false];


// Mencetak Array
// satu elemen pada array

echo $mhs['2'];
echo '<br>';
echo $h[1];
echo '<hr>';

// Mencetak semua isi array
// bisa memakai for
for( $i = 0; $i < count($mhs); $i++) {
    echo $mhs[$i];
    echo '<br>';
}
echo '<hr>';

// foreach
foreach($mhs as $m) {
    echo $m;
    echo '<br>';
}
echo '<hr>';

// Mencetak Array (khusus untuk debug)
// var_dump / print_r
var_dump($mhs);
echo '<br>';
print_r($h);



?>