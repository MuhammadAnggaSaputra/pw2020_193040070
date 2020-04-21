<?php 
// Array Multidimensi
// array didalam array






$angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
foreach ($angka2 as $baris) {
    foreach ($baris as $b) {
        echo $b;
    }
    echo '<br>';
}


   



?>