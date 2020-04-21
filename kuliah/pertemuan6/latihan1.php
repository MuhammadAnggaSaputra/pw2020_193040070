<?php
// membuat array
// cara lama
$mhs = array('sandhika', 'galih', 'dody', 'fajar');

// cara baru
$angka = [3, 10, 200];
$myArray = ['Pemrograman Web', 300, false];

// mencetak Array
// satu elemen pada Array
echo $mhs[2];
echo '<br>';
echo $myArray[1];
echo '<hr>';

// Mencetak semua isi Array
// for
for ($i = 0; $i < count ($mhs); $i++) {
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

// Mencetak Array (Khusus untuk debug)
// var_dump / print_r
var_dump($mhs);
echo '<br>';
print_r($myArray);

?>