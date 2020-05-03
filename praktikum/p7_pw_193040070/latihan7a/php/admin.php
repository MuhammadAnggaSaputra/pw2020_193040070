<?php
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE 
  picture LIKE '%$keyword%' OR
  brand LIKE '%$keyword%' OR
  ingredient LIKE '%$keyword%' OR
  size LIKE '%$keyword%' OR
  colour LIKE '%$keyword%' OR
  price LIKE '$%keyword%' ");
} else {
  $pakaian = query("SELECT * FROM pakaian");
}
?>


<!doctype html>
<html lang="en">

<head>
  <title>Khusus Admin!!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style2.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../assets/img/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="#">Home 1</a>
              </li>
              <li>
                <a href="#">Home 2</a>
              </li>
              <li>
                <a href="#">Home 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="#">Page 1</a>
              </li>
              <li>
                <a href="#">Page 2</a>
              </li>
              <li>
                <a href="#">Page 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>

        <div class="footer">
          <p>Copyright &copy;2020. Muhammad Angga Saputra. Universitas Pasundan Bandung</p>
        </div>

      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h2 class="mb-4">Zalora Store!</h2>

      <a href="logout.php">
        <button type="logout">logout</button>
      </a>

      <div class="row mb-3">
        <button>
          <a href="tambah.php">Tambah Data</a>
        </button>
      </div>

      <div class="row mb-3">
        <form action="" method="get">
          <input type="text" name="keyword">
          <button type="submit" name="cari">Cari</button>
        </form>
      </div>

      <table border="2" align="center">
        <tr>
          <th>#</th>
          <th>Opsi</th>
          <th>Picture</th>
          <th>Brand</th>
          <th>Ingredient</th>
          <th>Size</th>
          <th>Colour</th>
          <th>Price</th>
        </tr>

        <?php if (empty($pakaian)) : ?>
          <tr>
            <td colspan="8">
              <h1>Data tidak ditemukan</h1>
            </td>
          </tr>
        <?php else :  ?>
          <?php $i = 1; ?>
          <?php foreach ($pakaian as $pkn) :  ?>
            <tr style="text-align: center">
              <td><?= $i++ ?></td>
              <td>
                <a href="ubah.php?id=<?= $pkn['id']; ?>">Ubah</a> ||
                <a href="hapus.php?id=<?= $pkn['id']; ?>" onclick="return confirm('Yakin Mau di Hapus ?')">Hapus</a>
              </td>
              <td><img src="../assets/img/<?= $pkn['picture'] ?>" alt=""></td>
              <td><?= $pkn['brand']; ?></td>
              <td><?= $pkn['ingredient']; ?></td>
              <td><?= $pkn['size']; ?></td>
              <td><?= $pkn['colour']; ?></td>
              <td><?= $pkn['price']; ?></td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </table>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>