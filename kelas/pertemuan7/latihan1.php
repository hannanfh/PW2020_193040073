<?php
// ARRAY
// variabel jamak yang bisa di isi banyak nilai
// pasangan antara key dan value

// Array numerik
// array yang keynya adalah angka yang di sebiut juga index
// index di buat otomatis oleh php
// index dibuat dari nol "0"
$mhs = ['Hannan', 'Fakhrul', 'Hakim'];
echo $mhs[1];
echo'<br>';
print_r($mhs);
echo '<hr>';

// array associative
// Array yang key nya adalah String
// dibuat oleh programmer
$buku = [
    'judul' => 'Harry potter', 
    'pengarang' => 'J.K. Rowling',
    'penerbit' => 'Gramedia',
    'gendre' => 'Scifi'
        ];

echo $buku['penerbit'];



?>