<?php

require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
    ('Data berhasil diubah!');
    document.location.href= '../index.php';
    </script>";
  } else {
    echo "Data gagal diubah!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>

  <h3>Form Ubah Data Mahasiswa</h3>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs['ID']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="NAMA" autofocus required value="<?= $mhs['NAMA']; ?>">
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="NRP" required value="<?= $mhs['NRP']; ?>">
        </label>
      </li>
      <li>
        <label>
          EMAIL :
          <input type="text" name="EMAIL" required value="<?= $mhs['EMAIL']; ?>">
        </label>
      </li>
      <li>
        <label>
          JURUSAN :
          <input type="text" name="JURUSAN" required value="<?= $mhs['JURUSAN']; ?>">
        </label>
      </li>
      <li>
        <label>
          GAMBAR :
          <input type="text" name="GAMBAR" required value="<?= $mhs['GAMBAR']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>