<?php  

// penghitungan nilai akhir
// A : minimal 85
// B : 70-85
// c : 55-70
// D : 40-55
// E : dibawah 40

$nilai = 50;
if ($nilai >= 85) {
    echo "A";
} else if ($nilai >= 70) {
    echo "B";
}else if ($nilai >= 55) {
    echo "C";
} else if ($nilai >= 40) {
    echo "D";
} else {
    echo "E" ;
}
?>