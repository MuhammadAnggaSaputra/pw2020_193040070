<?php

require 'php/functions.php';
$pakaian = query("SELECT * FROM pakaian");

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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="css/style1.css">

  <title>Zalora Store!</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-warning bg-warning fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="assets/img/logonavbar.png" width="150px" alt="">
      <form class="form-inline my-2 my-lg-0">
        <input type="text" name="keyword" placeholder="Apa yang anda cari?">
        <button class="btn btn-primary my-2 my-sm-0 ml-2" type="submit" name="cari">Search</button>
      </form>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- caraousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/zalora1.gif" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/zalora2.gif" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <div class="iklan">
    <div class="container">
      <div class="row mb-4 mt-4">
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/gratisongkir.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/lawancorona.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/dirumahaja.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card -->
    <div id="pakaian"></div>
    <section id="skill" class="skill bg-warning pb-4">
      <h3 style="text-align: center">BEST SELLER</h3>
      <div class="container">
        <div class="row ">
          <?php if (empty($pakaian)) : ?>
            <tr>
              <td colspan="8">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
          <?php else :  ?>
            <?php foreach ($pakaian as $pkn) : ?>
              <div class="col">
                <div class="card mt-3" style="width: 12rem;">
                  <img src="assets/img/<?= $pkn['picture']; ?>" class="card-img-top img-fluid " alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Belanja Puas Harga Pas, Membuat Hari-hari anda menjadi Ceria.</p>
                    <a href="php/detail.php?id=<?= $pkn['id']; ?>" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- akhir card -->

    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row text-center pt-3">
          <div class="col">
            <p>Copyright &copy;2020. Muhammad Angga Saputra. Universitas Pasundan Bandung</p>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">
              <a href="php/login.php" style="color: white">Kembali Ke Halaman Admin</a>
            </button>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>