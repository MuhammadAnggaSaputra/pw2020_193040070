<?php
function cetak_bintang($bintang){
    for ($i =$bintang; $i >= 1; $i--){
        for($j =1; $j<=$i;$j++){
            echo '*';
        }
            echo '<br>';
    }
}
cetak_bintang(5);
?>