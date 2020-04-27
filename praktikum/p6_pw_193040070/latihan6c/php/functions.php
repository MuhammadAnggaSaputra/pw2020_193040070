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

function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $brand = htmlspecialchars($data['brand']);
    $ingredient = htmlspecialchars($data['ingredient']);
    $size = htmlspecialchars($data['size']);
    $colour = htmlspecialchars($data['colour']);
    $price = htmlspecialchars($data['price']);

    $query = "INSERT INTO
  pakaian
  VALUES
  (' ', '$picture', '$brand', '$ingredient', '$size', '$colour', '$price');
  ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

//Hapus
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");
    return mysqli_affected_rows($conn);
}
