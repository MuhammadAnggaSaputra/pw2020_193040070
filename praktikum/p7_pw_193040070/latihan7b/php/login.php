<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login V4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="../assets/img/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!--===============================================================================================-->
</head>

<body>



  <div class="limiter">
    <div class="container-login100" style="background-image: url('../assets/img/bg-01.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form class="login100-form validate-form " action="" method="POST">
          <span class="login100-form-title p-b-49">
            Login
          </span>

          <?php if (isset($error)) : ?>
            <h5 style="color: red; font-style:italic">Username atau Password anda Salah</h5>
          <?php endif ?>

          <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
            <span class="label-input100" for="username">Username</span>
            <input class="input100" type="text" name="username" placeholder="Type your username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100" for="password">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>


          <input type="checkbox" name="remember">
          <label for="rember">Remember Me</label>

          <div class="text-right p-t-8 p-b-31">
            <a href="#">
              Forgot password?
            </a>
          </div>

          <p>Belum punya Akun? Registrasi <a href="registrasi.php">Disini</a></p>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="submit">
                Login
              </button>
            </div>
          </div>


          <div class="txt1 text-center p-t-54 p-b-20">
            <span>
              Or Sign Up Using
            </span>
          </div>

          <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
              <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg2">
              <i class="fa fa-twitter"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
              <i class="fa fa-google"></i>
            </a>
          </div>

          <div class="flex-col-c p-t-155">
            <span class="txt1 p-b-17">
              Or Sign Up Using
            </span>

            <a href="#" class="txt2">
              Sign Up
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/daterangepicker/moment.min.js"></script>
  <script src="../vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="../vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="../js/main1.js"></script>

</body>

</html>