<?php

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan3</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <h3><a href="php/tambah.php">Tambah Data Mahasiswa</a></h3>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td>
          <?= $i++; ?></td>
        <td><img src="img/<?= $mhs['GAMBAR']; ?>">
        </td>
        <td><?= $mhs['NAMA']; ?></td>
        <td>
          <a href="php/detail.php?id=<?= $mhs['ID']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>