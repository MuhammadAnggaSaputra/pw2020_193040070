<?php
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
  <title>Document</title>
</head>

<body>
  <form action="" method="POST">
    <table>
      <tr>
        <td>
          <label for="picture">Picture</label>
        </td>
        <td>
          <input type="text" name="picture">
        </td>
      </tr>
      <tr>
        <td>
          <label for="brand">Brand</label>
        </td>
        <td>
          <input type="text" name="brand">
        </td>
      </tr>
      <tr>
        <td>
          <label for="ingredient">Ingredient</label>
        </td>
        <td>
          <input type="text" name="ingredient">
        </td>
      </tr>
      <tr>
        <td>
          <label for="size">Size</label>
        </td>
        <td>
          <input type="text" name="size">
        </td>
      </tr>
      <tr>
        <td>
          <label for="colour">Colour</label>
        </td>
        <td>
          <input type="text" name="colour">
        </td>
      </tr>
      <tr>
        <td>
          <label for="price">Price</label>
        </td>
        <td>
          <input type="text" name="price">
        </td>
      </tr>
    </table>
    <br>
    <button type="submit" name="tambah">Tambah Data!</button>

  </form>
</body>

</html>