<?php
$pemain = [
    "Cristiano Ronaldo" => "juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4c</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
    <?php foreach ($pemain as $nama => $club) : ?>
        <tr>
            <td><b><?= $nama; ?></td> 
            <td>:</td>
            <td><?= $club; ?></td>       
        </tr>
    <?php endforeach; ?>    
    </table>
</body>
</html>