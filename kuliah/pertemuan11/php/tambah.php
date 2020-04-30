<?php

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
    alert('Data berhasil ditambahkan!');
    document.location.href= '../index.php';
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Tambah Data Mahasiswa</title>
</head>

<body style="background-color: grey">
  <form action="" method="POST" class="ml-5 mt-3">
    <div class="form-group">
      <label>
        Nama :
        <input type="text" name="NAMA" class="form-control" autofocus required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Nrp :
        <input type="text" name="NRP" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Email :
        <input type="text" name="EMAIL" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Jurusan :
        <input type="text" name="JURUSAN" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Gambar :
        <input type="text" name="GAMBAR" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
    </div>
  </form>
</body>

</html>