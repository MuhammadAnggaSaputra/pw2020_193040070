<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol dicari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
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
  <link rel="stylesheet" href="css/style3.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(img/logo.png);"></a>
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
              <button>
                <a href="php/logout.php">Logout</a>
              </button>
            </ul>
          </div>
        </div>
      </nav>

      <h2 class="mb-4">Daftar Mahasiswa Universitas Pasundan</h2>

      <div class="row mb-3">
        <button>
          <a href="php/tambah.php">Tambah Data</a>
        </button>
      </div>

      <form action="" method="POST">
        <input type="text" name="keyword" size="30" placeholder="Masukkan Keyword Pencarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
      </form>
      <br>

      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
          <tr>
            <td colspan="4">
              <h3>Data Tidak Ditemukan!</h3>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td>
              <?= $i++; ?></td>
            <td>
              <img src="img/<?= $mhs['GAMBAR']; ?>">
            </td>
            <td><?= $mhs['NAMA']; ?></td>
            <td>
              <a href="php/detail.php?id=<?= $mhs['ID']; ?>">Lihat Detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>