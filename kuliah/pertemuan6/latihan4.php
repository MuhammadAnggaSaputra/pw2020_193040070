<!-- array numerik -->

<?php

$mhs = [
    ['Muhammad Angga Saputra', '193040070', 'angga@mail.ac.id', 'teknik informatika'],
    ['herlan', '193040071', 'herlan@mail.ac.id', 'teknik Mesin'],
    ['Sutan', '193040072', 'sultan@mail.ac.id', 'teknik informatika'],
    ['agam', '193040073', 'agam@mail.ac.id', 'teknik informatika'],
    ['bayu', '193040074', 'bayu@mail.ac.id', 'teknik informatika'],
    ['bayu', '193040074', 'bayu@mail.ac.id', 'teknik informatika'],
    ['bayu', '193040074', 'bayu@mail.ac.id', 'teknik informatika']



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
    <li>Nama : <?php echo $m[0]; ?></li>
    <li>Nrp :<?php echo $m[1]; ?></</li>
    <li>Email : <?php echo $m[2]; ?></</li>
    <li>Jurusan :<?php echo $m[3]; ?></</li>    
    </ul>

<?php } ?>
</body>
</html>