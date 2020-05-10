<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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
    alert('Data berhasil diubah!');
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Ubah Data Mahasiswa</title>
</head>

<body style="background-color: grey">
  <form action="" method="POST" class="ml-5 mt-3">
    <input type="hidden" name="id" value="<?= $mhs['ID']; ?>">
    <div class="form-group">
      <label>
        Nama :
        <input type="text" name="NAMA" class="form-control" autofocus required value="<?= $mhs['NAMA']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Nrp :
        <input type="text" name="NRP" class="form-control" required value="<?= $mhs['NRP']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Email :
        <input type="text" name="EMAIL" class="form-control" required value="<?= $mhs['EMAIL']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Jurusan :
        <input type="text" name="JURUSAN" class="form-control" required value="<?= $mhs['JURUSAN']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Gambar :
        <input type="text" name="GAMBAR" class="form-control" required value="<?= $mhs['GAMBAR']; ?>">
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
    </div>
  </form>
</body>

</html>