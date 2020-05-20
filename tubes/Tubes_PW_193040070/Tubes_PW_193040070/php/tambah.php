<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahakan');
    document.location.href = 'admin.php';
     </script>";
  } else {
    echo "<script>
    alert('Data Gagal Ditambahakan');
    document.location.href = 'admin.php';
     </script>";
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

  <style>
    body {
      background-image: url("../assets/img/infopanel/belanja.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

  <title>Tambah Data!</title>
</head>

<body style="background-color: grey">
  <form action="" method="POST" class="ml-5 mt-3" enctype="multipart/form-data">
    <div class="container ml-1">
      <h3 style="font-style:italic">Form Tambah</h3>
      <div class="form-group">
        <label>
          <h5>Brand : </h5>
          <input type="text" name="brand" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <h5>Ingredient : </h5>
          <input type="text" name="ingredient" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <h5>Size : </h5>
          <input type="text" name="size" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <h5>Colour : </h5>
          <input type="text" name="colour" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <h5>Price : </h5>
          <input type="text" name="price" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <input type="file" name="picture" class="gambar" onchange="previewImage()">
        </label>
      </div>
      <img src="../assets/img/icons/nophoto.jpg" alt="" width="100" class="img-preview">
      <br><br>
      <div class="form-group">
        <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
      </div>
    </div>
  </form>


  <script src="../js/script.js"></script>
</body>

</html>