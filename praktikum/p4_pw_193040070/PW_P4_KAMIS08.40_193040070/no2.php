<?php 
 $mahasiswa = [
     [
         'nama' => 'Sandhika Galih',
         'nrp' => '043040023',
         'email' => 'sandhikagalih@unpas.ac.id',
         'jurusan' => 'Teknik Informatika'
     ],

     [
        'nama' => 'Dody Ferdiansyah',
        'nrp' => '144040004',
        'email' => 'dody@gmail.com',
        'jurusan' => 'Teknik Mesin'
     ]
     ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ="1" cellpadding="10" cellspacing="0" align="center" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nrp</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

            <?php
                $nomor =1;
            ?>

            <?php foreach ($mahasiswa as $m) { ?>
       <tr>
            <td><?= $nomor ?></td>
            <td><?= $m["nama"] ?></td>
            <td><?= $m["nrp"] ?></td>    
            <td><?= $m["email"] ?></td>    
            <td><?= $m["jurusan"]?></td>   
        </tr>  

            <?php $nomor++; ?>

            <?php }?>
</body>
</html>