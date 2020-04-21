<?php
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa kita gunakan dimana saja
// Bentuknya adalah Array ASSOCIATIVE
// $_GET
// $_POST
// $_SESSION
// $_COOKIE
// $_SERVER



// $_GET
// Bisa mengabil data dari URL
print_r($_GET);
echo '<hr>';

echo '<h1>Selamat Datang' . $_GET['nama'] . '</h1>';
?>