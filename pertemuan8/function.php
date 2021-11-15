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

function query($query){
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function edit($data)
{
    global $db;

    $id = $data['id'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];

    mysqli_query($db, "UPDATE tabel_gudang SET nama='$nama', harga=$harga, stok=$stok WHERE id=$id");

    return mysqli_affected_rows($db);
}


function search($key){
    global $db;

    $query = "SELECT * FROM tabel_gudang WHERE nama LIKE '%$key%' OR stok LIKE '%$key%'";

    return query($query);
}

function register($data){
    global $db;

    $username = $data['username'];
    $pwd = mysqli_real_escape_string($db, $data['pwd']);
    $pwd2 = mysqli_real_escape_string($db, $data['pwd2']);

    $data_db = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($data_db)){
        echo "
            <script>
                alert('username sudah terdaftar')
            </script>
        ";
        return false;
    }

    if($pwd !== $pwd2){
        echo "
            <script>
                alert('cek kembali password anda')
            </script>
        ";
        return false;
    }

    $pwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$pwd')");

    return mysqli_affected_rows($db);

}