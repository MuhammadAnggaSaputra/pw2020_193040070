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

function upload()
{
  $nama_file = $_FILES['GAMBAR']['name'];
  $tipe_file = $_FILES['GAMBAR']['type'];
  $ukuran_file = $_FILES['GAMBAR']['size'];
  $error = $_FILES['GAMBAR']['error'];
  $tmp_file = $_FILES['GAMBAR']['tmp_name'];


  // ketika tidak ada gambar yang di pilih
  if ($error == 4) {
    // echo "<script>
    //         alert('Silahkan Input gambar Lebih dahulu!');
    //       </script>";
    return 'nophoto.jpg';
  }

  // cek estensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang Anda pilih bukan Gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('Yanga anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5 mb
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('Ukuran File Terlalu Besar!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $Nama = htmlspecialchars($data['NAMA']);
  $Nrp = htmlspecialchars($data['NRP']);
  $Email = htmlspecialchars($data['EMAIL']);
  $Jurusan = htmlspecialchars($data['JURUSAN']);
  // $Gambar = htmlspecialchars($data['GAMBAR']);

  // upload gambar
  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

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

  // menghhapus gambar folder img
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
  if ($mhs['GAMBAR'] != 'nophoto.jpg') {
    unlink('../img/' . $mhs['GAMBAR']);
  }

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
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

  if ($Gambar == 'nophoto.jpg') {
    $Gambar = $gambar_lama;
  }

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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {

      // set session
      $_SESSION['login'] = true;

      header("Location:../index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username/Password anda salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username Sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password <5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username dan passwordnya sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel user
  $query = "INSERT INTO user 
              VALUES
            (null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
