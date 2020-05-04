<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}
require 'functions.php';

// Ketia tombol login di klik
if (isset($_POST['login'])) {
  $login = login($_POST);
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
  <h3>Form Login</h3>

  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
  <?php endif; ?>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password" required>
        </label>
      </li>
      <button type="submit" name="login">Login</button>
    </ul>
  </form>
</body>

</html>