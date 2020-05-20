<?php
  $ktp = $_GET["no_ktp"];
  $nama = $_GET["nama"];
  $alamat = $_GET["alamat"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form action="" method="post">
  <table style="text-align=center;" border="0">
    <tr>
      <td colspan="3"><h4>Daftar Peserta</h4></tr>
    </tr>
    <tr>
      <td>No. KTP</td>
      <td>:</td>
      <td><?= $ktp ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $nama ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?= $alamat ?></td>
    </tr>
  </table>
  </form>
</body>
</html>