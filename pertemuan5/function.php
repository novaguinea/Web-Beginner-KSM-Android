<?php

$db = mysqli_connect("localhost", "root", "", "web_beginner");

function insert($data)
{
    global $db;

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];

    mysqli_query($db, "INSERT INTO tabel_gudang VALUES('', '$nama', '$harga', '$stok')");

    return mysqli_affected_rows($db);
}

function delete($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM tabel_gudang WHERE id =  $id");

    return mysqli_affected_rows($db);
}
