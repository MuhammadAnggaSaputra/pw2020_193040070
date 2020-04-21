<?php

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
    ('Data berhasil ditambahkan!');
    document.location.href= '../latihan3.php';
    </script>";
  } else {
    echo "Data gagal ditambahkan";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>

  <h3>Form Tambah Data Mahasiswa</h3>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="NAMA" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="NRP" required>
        </label>
      </li>
      <li>
        <label>
          EMAIL :
          <input type="text" name="EMAIL" required>
        </label>
      </li>
      <li>
        <label>
          JURUSAN :
          <input type="text" name="JURUSAN" required>
        </label>
      </li>
      <li>
        <label>
          GAMBAR :
          <input type="text" name="GAMBAR" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>