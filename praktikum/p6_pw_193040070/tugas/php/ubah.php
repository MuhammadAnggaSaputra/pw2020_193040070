<?php
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
  <title>Document</title>
</head>

<body style="background-color: grey">
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $pkn['id']; ?>">
    <table>
      <tr>
        <td>
          <label for="picture">Picture</label>
        </td>
        <td>
          <input type="text" name="picture" value="<?= $pkn['picture']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="brand">Brand</label>
        </td>
        <td>
          <input type="text" name="brand" value="<?= $pkn['brand']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="ingredient">Ingredient</label>
        </td>
        <td>
          <input type="text" name="ingredient" value="<?= $pkn['ingredient']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="size">Size</label>
        </td>
        <td>
          <input type="text" name="size" value="<?= $pkn['size']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="colour">Colour</label>
        </td>
        <td>
          <input type="text" name="colour" value="<?= $pkn['colour']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="price">Price</label>
        </td>
        <td>
          <input type="text" name="price" value="<?= $pkn['price']; ?>">
        </td>
      </tr>
    </table>
    <br>
    <button type="submit" name="ubah">Ubah Data!</button>

  </form>
</body>

</html>