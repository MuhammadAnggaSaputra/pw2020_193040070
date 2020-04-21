<?php 
//pengkondisian/conditionals
//if
//||(or) jika satu aja true maka hasilnya akan true
//&&(dan) jika satu aja true maka hasilnya akan false jika ingin menghasilkan true semuannya harus true
// $i = 10;
// if($i <10 && $i >= 1) {
//     echo "anda benar <br>";
// }else if() {

// } else {
//     echo "anda salah <br>";
// }

for ($i = 1; $i <=10; $i++) {
if($i % 2== 0) {
    echo "$i adalah bilangan Genap <br>";
} else {
    echo "$i adalah bilangan Ganjil <br>";
    }
}
?>
