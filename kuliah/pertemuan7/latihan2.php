<!-- array numerik -->

<?php

$mhs = [
    ['nama'=>'Muhammad Angga Saputra', 
    'nrp'=> '193040070',
    'email'=> 'angga@mail.ac.id',
    'jurusan'=> 'teknik informatika'
],
    ['nama'=>'herlan',
    'nrp'=> '193040071',
    'email'=> 'herlan@mail.ac.id',
    'jurusan'=> 'teknik Mesin'
],
    ['nama'=>'Sutan',
    'nrp'=> '193040072', 'email' =>'sultan@mail.ac.id',
    'jurusan'=> 'teknik informatika'
],
    ['nama'=>'agam', 
    'nrp'=>'193040073', 
    'email'=>'agam@mail.ac.id', 
    'jurusan'=>'teknik informatika'
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mhasiswa</h2>

<?php foreach ($mhs as $m) { ?>
    <ul>
    <li>Nama : <?php echo $m['nama']; ?></li>
    <li>Nrp :<?php echo $m['nrp']; ?></</li>
    <li>Email : <?php echo $m['email']; ?></</li>
    <li>Jurusan :<?php echo $m['jurusan']; ?></</li>    
    </ul>

<?php } ?>
</body>
</html>