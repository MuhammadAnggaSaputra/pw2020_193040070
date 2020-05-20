<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_193040070");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['picture']['name'];
    $tipe_file = $_FILES['picture']['type'];
    $ukuran_file = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmp_file = $_FILES['picture']['tmp_name'];


    // ketika tidak ada gambar yang di pilih
    if ($error == 4) {
        // echo "<script>
        //         alert('Silahkan Input gambar Lebih dahulu!');
        //       </script>";
        return 'nophoto.jpg';
    }

    // cek estensi file
    $daftar_picture = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_picture)) {
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
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}


//tambah
function tambah($data)
{
    $conn = koneksi();

    // $picture = htmlspecialchars($data['picture']);
    $brand = htmlspecialchars($data['brand']);
    $ingredient = htmlspecialchars($data['ingredient']);
    $size = htmlspecialchars($data['size']);
    $colour = htmlspecialchars($data['colour']);
    $price = htmlspecialchars($data['price']);

    // upload gambar
    $picture = upload();
    if (!$picture) {
        return false;
    }

    $query = "INSERT INTO
  pakaian
  VALUES
  ('null', '$picture', '$brand', '$ingredient', '$size', '$colour', '$price');
  ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

//Hapus
function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar folder img
    $pkn = query("SELECT * FROM pakaian WHERE id = $id")[0];
    if ($pkn['picture'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $pkn['picture']);
    }

    mysqli_query($conn, "DELETE FROM pakaian WHERE id =$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// ubah
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $brand = htmlspecialchars($data['brand']);
    $ingredient = htmlspecialchars($data['ingredient']);
    $size = htmlspecialchars($data['size']);
    $colour = htmlspecialchars($data['colour']);
    $price = htmlspecialchars($data['price']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $picture = upload();
    if (!$picture) {
        return false;
    }

    if ($picture == 'nophoto.jpg') {
        $picture = $gambar_lama;
    }

    $query = "UPDATE pakaian SET
              brand = '$brand',
              ingredient = '$ingredient',
              size = '$size',
              colour = '$colour',
              price = '$price',
              picture = '$picture'
              WHERE id = '$id' ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// register
function registrasi($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username Sudah Digunakan!')
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES
        ('null', '$username', '$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
