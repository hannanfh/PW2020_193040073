<?php
// SUPERGLOBALS
//variabel bawaan php yang bisa kita akses dimanapun
// buktinya array associative
//$_GET
//$_POST
//$_COOKIE
//$_SERVER

print_r($_GET);
echo '<hr>';

echo '<h1>Selamat Datang ' . $_GET['nama'] . '</h1>';

?>