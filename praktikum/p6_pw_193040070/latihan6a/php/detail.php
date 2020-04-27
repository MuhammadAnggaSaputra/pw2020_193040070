<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    body {
      background-color: yellow;
    }
  </style>


  <title>Zalora Store!</title>

</head>

<body>
  <h2>Hello Welcome To Zalora Store!</h2>
  <div class="card" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <p><img src="../assets/img/<?= $pakaian['picture'] ?>"></p>
      </div>
      <div class="col-md-6">
        <div class="row ml-5">
          <div class="card-body">
            <p>Brand : <?= $pakaian['brand'] ?></p>
            <p>Ingredient : <?= $pakaian['ingredient'] ?></p>
            <p>Size : <?= $pakaian['size'] ?></p>
            <p>Colour : <?= $pakaian['colour'] ?></p>
            <p>Price : <?= $pakaian['price'] ?></p>
            <button class="btn btn-primary">Order Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>