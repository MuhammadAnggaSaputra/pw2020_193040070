<?php 

require 'php/functions.php';
$pakaian = query("SELECT * FROM pakaian");

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <!--My CSS-->
    <link rel="stylesheet" href="css/style.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
   
</head>
<body>
 
<!-- navbar -->
<nav>
<div class="navbar-fixed">
    <nav class="navbar">
       <div class="container">
        <div class="nav-wrapper">
            <img src="assets/img/logo.png"  width="97px" alt=""><a href="#" class="brand-logo"></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
             <li><a href="#about" class="black-text" >About Us</a></li>
             <li><a href="#clients" class="black-text">Clients</a></li>
             <li><a href="#services" class="black-text">Services</a></li>
             <li><a href="#portfolio" class="black-text">Event</a></li>
             <li><a href="#contact" class="black-text">Contact Us</a></li>
             <li><a href="https://semesterantara.com/user/user_controller/to_login" class="btn btn- blue-grey darken-3 tombol">Login</a></li>
            </ul>
        </div>
     </div>
    </nav>
  </div>
  <!--akhir navbar  -->
        
<!--Sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="">About Us</a></li>
    <li><a href="">Clients</a></li>
    <li><a href="">Services</a></li>
    <li><a href="">Event</a></li>
    <li><a href="">Contact Us</a></li>
    <li><a href="">Login</a></li>
  </ul>  

<!-- Body -->
    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;" align="center" >
    
        <tr>
            <th>No</th>
            <th>PICTURE</th>
            <th>BRAND</th>
            <th>INGREDIENT</th>
            <th>SIZE</th>
            <th>COLOUR</th>
            <th>PRICE</th>
        </tr>

            <?php
                $nomor =1;
            ?>

            <?php foreach ($pakaian as $pkn) : ?>
       <tr>
            <td><?= $nomor ?></td>
            <td><img src="assets/img/<?= $pkn["picture"] ?>"></td> 
            <td><?= $pkn["brand"] ?></td>
            <td><?= $pkn["ingredient"] ?></td>
            <td><?= $pkn["size"] ?></td>    
            <td><?= $pkn["colour"] ?></td>    
            <td><?= $pkn["price"]?></td>   
        </tr>  

            <?php $nomor++; ?>

            <?php endforeach; ?>

    </table>   


<!--Footer-->
<footer class="red page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12" >
        <img src="assets/img/logo.png" alt="" width="250px">
        <p class="grey-text text-lighten-4">Tidak kalah dengan Kabinet Indonesia Maju Kali Ini kami hadir dengan Inovasi dan Wajah baru.</p>
        <div class="gambar1">
          <a href="https://www.niagahoster.co.id/blog/inspirasi-website-terbaik/"> <img src="assets/img/fb.png" alt=""></a>
          <a href="https://www.niagahoster.co.id/blog/inspirasi-website-terbaik/"> <img src="assets/img/twitter.png" alt=""></a>
          <a href="https://www.instagram.com/semesterantaraofficial/"> <img src="assets/img/ig.png" alt=""></a>
          <a href="https://github.com/MuhammadAnggaSaputra?tab=overview&from=2020-04-01&to=2020-04-14"> <img src="assets/img/github.png" alt=""></a>
          
        </div>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Ingin Memberi Saran ?</h5>
            <p><i class="material-icons small">place</i>JL.Cikawao Bandung  indonesia</p>
            <p><i class="material-icons small">phone_in_talk</i>+628127202914</p>
            <p><i class="material-icons small">email</i>manggas703@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <p>Copyright &copy;2020. Muhammad Angga Saputra. Universitas Pasundan Bandung</p>
    <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
  </div>
</footer>
<!-- Akhir Footer -->


<!-- script -->
<script text="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script>
    $(window).scroll(function() {    

    var scroll = $(window).scrollTop();

if (scroll >= 100) {
    $(".navbar").addClass("scrolled");
} else {
    $(".navbar").removeClass("scrolled")    
}
    });
</script>
      <!--akhir script  -->


</body>
</html>