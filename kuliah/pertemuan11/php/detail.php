<?php

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// Query Mahasiswa Berdasarkan ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail.php</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>

  <ul>
    <li><img src="../img/<?= $mhs['GAMBAR']; ?>"></li>
    <li>NRP : <?= $mhs['NRP']; ?></li>
    <li>Nama : <?= $mhs['NAMA']; ?></li>
    <li>E-mail : <?= $mhs['EMAIL']; ?></li>
    <li>Jurusan : <?= $mhs['JURUSAN']; ?></li>
    <li><a href="ubah.php?id=<?= $mhs['ID']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['ID']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
    <li><a href="../index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>