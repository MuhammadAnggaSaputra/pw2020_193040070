<?php
        $jawabanIsset = "digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variabel akan mengembalikan nilai true, sebaliknya akan bernilai false. <br>";
        $jawabanEmpty = " digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";

    $GLOBALS['Isset'] = $jawabanIsset;
    $GLOBALS['Empty'] = $jawabanEmpty;
    function soal($style){
        echo "<div class='$style'>
        <p>Isset adalah = " . $GLOBALS['Isset'] . "</p>
        <p>Empty adalah = " . $GLOBALS['Empty'] . "</p>
        </div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<style>
.container {
    border: 1px solid black;
}

</style>
<body>
<?php   
soal('container');
?>
   
    



</body>
</html>