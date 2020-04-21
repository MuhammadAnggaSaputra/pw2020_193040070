<?php

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan2</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td>
          <?= $i++; ?></td>
        <td><img src="img/<?= $mhs['GAMBAR']; ?>">
        </td>
        <td><?= $mhs['NRP']; ?></td>
        <td><?= $mhs['NAMA']; ?></td>
        <td><?= $mhs['EMAIL']; ?></td>
        <td><?= $mhs["JURUSAN"]; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>