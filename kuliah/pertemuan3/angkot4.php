<?php 

for ($i = 1; $i <=10; $i++) {
    if($i <=4 || $i==6) {
        echo "$i sedang beroperasi <br>";
    } else if($i ==8 || $i==10 || $i==5) {
        echo "$i Sedang lembur <br>";
    }  else {
        echo "$i sedang tidak beroperasi <br>";
        }
    }


?>