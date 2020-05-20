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

  <!--Import Google Icon Font-->
  <script src="https://kit.fontawesome.com/b03c41483f.js" crossorigin="anonymous"></script>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="icon" type="image/png" href="assets/img/icons/favicon.ico" />




  <!-- My Css -->
  <link rel="stylesheet" href="css/style.css">

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
      <form action="" method="GET" class="form-inline my-2 my-lg-0">
        <input type="text" name="keyword" placeholder="Apa yang anda cari?" autocomplete="off" autofocus class="keyword">
        <button class="btn btn-primary my-2 my-sm-0 ml-2" type="submit" name="cari">Search</button>
      </form>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- caraousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="row mt-5">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/zalora1.gif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/zalora2.gif" class="d-block w-100" alt="...">
        </div>
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
    <!-- akhir iklan -->


    <!-- Card -->
    <div id="pakaian">
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
                      <h6><?= $pkn['ingredient']; ?></h6>
                      <p class="card-text mt-3">Belanja Puas Harga Pas, Membuat Hari-hari anda menjadi Ceria.</p>
                      <a href="php/detail.php?id=<?= $pkn['id']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
    </div>
    <!-- akhir card -->

    <!-- komentar -->
    <div id="komentar"></div>
    <section id="skill" class="skill bg-secondary pb-4">
      <h3 style="text-align: center">Komentar Pelanggan</h3>
      <div class="container">
        <div class="row mb-3 mt-3">
          <div class="card-deck">
            <div class="card mb-4">
              <img src="assets/img/comment/foto1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Riky Hardianto</h5>
                <p class="card-text">Berbelanja di Toko ini sangat Memuaskan, ketika pelanggan berbelanja. Mereka tidak segan untuk menawarkan air, jus, snack, atau bahkan segelas sampanye. </p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
            <div class="card mb-4">
              <img src="assets/img/comment/foto2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Salsabila</h5>
                <p class="card-text">Ketika awal masuk Toko ini serasa masuk surga Dunia karena di sambut sama para karyawannya yang sangat ramah dan Barang-barang yang sangat mewah dan original.</p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
            <div class="card mb-4">
              <img src="assets/img/comment/foto3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Riyadha</h5>
                <p class="card-text">Sangat Memuaskan Karyawannya yang sangat ramah dan tempatnya sangat mewah, sehingga nyaman untuk berbelanja.</p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
          </div>

          <div class="card-deck">
            <div class="card mb-4">
              <img src="assets/img/comment/foto4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Rima</h5>
                <p class="card-text">Tempatnya yang sangat mewah dan bersih sehingga nyaman untuk berbelanja, produknya sangat bagus dan original.</p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
            <div class="card mb-4">
              <img src="assets/img/comment/foto5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dinda</h5>
                <p class="card-text">Bener bakal langganan Belanja di sini produknya original dan Mewah dan Harganya pas.</p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
            <div class="card mb-4">
              <img src="assets/img/comment/foto6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Rio</h5>
                <p class="card-text">Selain produknya yang original ada juga tempat bermain anak-anak sehingga sangat cocok tempat berbelanja keluarga.</p>
                <p class="card-text"><small class="text-muted">Belanja Puas Harga Pas</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- akhir komentar -->


  <!-- Container -->
  <div class="container">
    <div class="row mt-5">

      <!-- Info Panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row ">
            <div class="col-lg">
              <img src="assets/img/infopanel/employee.png" alt="Employee" class="float-left">
              <h4>24 Hours</h4>
              <p>"The 24-hour system is a standard time where days start from midnight to midnight "</p>
            </div>
            <div class="col-lg">
              <img src="assets/img/infopanel/hires.png" alt="High Res" class="float-left">
              <h4>High-Res</h4>
              <p>" Download HD high resolution pictures for free on Unsplash."</p>
            </div>
            <div class="col-lg">
              <img src="assets/img/infopanel/security.png" alt="Security" class="float-left">
              <h4>24 Hours</h4>
              <p>"Defense News is a global website and magazine about the politics, business and technology of defense"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->


    <!-- Workingspace -->

    <div class="row workingspace mt-4">
      <div class="col-lg-6">
        <img src="assets/img/infopanel/belanja.jpg" alt="Workingspace" class="img-fluid">
      </div>
      <div class="col-lg-5">
        <h3>You <span>Shooping</span> like at <span>home</span></h3>
        <p>"Sebagai Pusat Fashion Online di Asia, kami menciptakan kemungkinan-kemungkinan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk internasional hingga produk lokal dambaan. Kami menjadikan Anda sebagai pusatnya. Bersama ZALORA, You Own Now.".</p>
      </div>
    </div>
    <!-- akhir workingspace -->

    <section id="contact" class="contact mb-5 mt-3">
      <div class="container">
        <div class="row pd-4 mb-4">
          <div class="col text-center">
            <h2>Silahkan Berikan Pendapat Anda</h2>
          </div>
        </div>
        <div id="contact"></div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card text-white bg-secondary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Person</h5>
                <div class="row mb-4 ml-5 mt-3">
                  <i class="fas fa-phone-square-alt"> +628127202914</i>
                </div>
                <div class="row mb-4 ml-5">
                  <i class="fas fa-envelope"> zalora.com</i>
                </div>
                <div class="row mb-4 ml-5">
                  <i class="fab fa-instagram"> zalora</i>
                </div>
                <div class="row mb-4 ml-5">
                  <i class="fas fa-map-marked-alt"> Jl. Cikawao dalam no.43, Bandung</i>
                </div>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <h1>Location</h1>
              </li>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6661.075745257882!2d107.6090239478086!3d-6.926497454633161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e625ff6655e1%3A0xcb60b998710d60c3!2sAlun%20-%20alun%20Bandung!5e0!3m2!1sid!2sid!4v1576852274193!5m2!1sid!2sid" width="340" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Cikawao dalam no.43, Bandung</li>
              <li class="list-group-item">West java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">E-mail</label>
                <input type="Email" class="form-control" id="exampleInputPassword1" placeholder="Enter your E-mail">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Keterangan</label>
                <input type="KET" class="form-control" id="exampleInputPassword1" placeholder="KET">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!-- Akhir card contact -->

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <img src="assets/img/logonavbar.png" alt="" width="250">
          <p class="text-justify">Sebagai Pusat Fashion Online di Asia, kami menciptakan kemungkinan-kemungkinan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk internasional hingga produk lokal dambaan. Kami menjadikan Anda sebagai pusatnya. Bersama ZALORA, You Own Now.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Layanan</h6>
          <ul class="footer-links">
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">Cara Pengambilan</a></li>
            <li><a href="#">Produk index</a></li>
            <li><a href="#">Promo partner kami</a></li>
            <li><a href="#">Konfirmasi Transfer</a></li>
            <li><a href="#">Pengembalian Ongkir</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Tentang Kami</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Pers Media</a></li>
            <li><a href="#">Karir</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
          </ul>
          <button class="btn btn-primary my-2 my-sm-0" type="submit">
            <a href="php/login.php" style="color: white">Login</a>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 Zalora Puas DiHati
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>