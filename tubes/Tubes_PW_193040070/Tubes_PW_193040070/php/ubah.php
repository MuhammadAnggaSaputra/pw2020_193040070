<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
$pkn = query("SELECT * FROM pakaian WHERE id =$id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil Diubah');
    document.location.href = 'admin.php';
     </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah');
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

  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <form action="" method="POST" class="ml-5 mt-3" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $pkn['id']; ?>">
    <div class="form-group">
      <label>
        Brand :
        <input type="text" name="brand" class="form-control" required value="<?= $pkn['brand']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Ingredient :
        <input type="text" name="ingredient" class="form-control" required value="<?= $pkn['ingredient']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Size :
        <input type="text" name="size" class="form-control" required value="<?= $pkn['size']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Colour :
        <input type="text" name="colour" class="form-control" required value="<?= $pkn['colour']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Price :
        <input type="text" name="price" class="form-control" required value="<?= $pkn['price']; ?>">
      </label>
    </div>

    <div class="form-group">
      <input type="hidden" name="gambar_lama" value="<?= $pkn['picture']; ?>">
      <label>
        <input type="file" name="picture" class="gambar" onchange="previewImage()">
      </label>
      <img src="../assets/img/<?= $pkn['picture']; ?>" width="100" style="display: block;" class="img-preview">
    </div>

    <!-- <div class="form-group">
      <label>
        <input type="file" name="picture" class="gambar" onchange="previewImage()">
      </label>
    </div>
    <img src="../assets/img/icons/nophoto.jpg" alt="" width="100" class="img-preview">
    <br><br> -->
    <div class="form-group">
      <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
    </div>
  </form>

  <script src="../js/script.js"></script>
</body>

</html>