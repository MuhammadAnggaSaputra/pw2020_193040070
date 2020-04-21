<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040070');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  $conn = koneksi();

  $Nama = htmlspecialchars($data['NAMA']);
  $Nrp = htmlspecialchars($data['NRP']);
  $Email = htmlspecialchars($data['EMAIL']);
  $Jurusan = htmlspecialchars($data['JURUSAN']);
  $Gambar = htmlspecialchars($data['GAMBAR']);

  $query = "INSERT INTO
  mahasiswa
  VALUES
  (null, '$Nama', '$Nrp', '$Email', '$Jurusan', '$Gambar');
  ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
