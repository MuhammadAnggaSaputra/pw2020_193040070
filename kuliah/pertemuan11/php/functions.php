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
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $Nama = htmlspecialchars($data['NAMA']);
  $Nrp = htmlspecialchars($data['NRP']);
  $Email = htmlspecialchars($data['EMAIL']);
  $Jurusan = htmlspecialchars($data['JURUSAN']);
  $Gambar = htmlspecialchars($data['GAMBAR']);

  $query = "UPDATE mahasiswa SET
              Nama = '$Nama',
              Nrp = '$Nrp',
              Email = '$Email',
              Jurusan = '$Jurusan',
              Gambar = '$Gambar'
              WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
