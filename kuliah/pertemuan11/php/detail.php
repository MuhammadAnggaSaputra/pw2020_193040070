<?php

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// Query Mahasiswa Berdasarkan ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    body {
      background-color: grey;
    }
  </style>

  <title>Detail</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <div class="card" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-6">
        <p><img src="../img/<?= $mhs['GAMBAR'] ?>"></p>
      </div>
      <div class="col-md-6">
        <div class="row ml-5">
          <div class="card-body">
            <p>Nama : <?= $mhs['NAMA'] ?></p>
            <p>Nrp : <?= $mhs['NRP'] ?></p>
            <p>Email : <?= $mhs['EMAIL'] ?></p>
            <p>Jurusan : <?= $mhs['JURUSAN'] ?></p>
            <button>
              <a href="ubah.php?id=<?= $mhs['ID']; ?>">Ubah</a>
            </button>
            <button>
              <a href="hapus.php?id=<?= $mhs['ID']; ?>">Hapus</a>
            </button>
            <br><br>
            <a href="../index.php">Kembali ke Halaman Index</a>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>