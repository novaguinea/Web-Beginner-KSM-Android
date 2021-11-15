<?php

/**
 * web admin toko alat tulis
 * 
 * bisa apa aja:
 * - insert data buku
 * - delete data buku
 * 
 * data:
 * - id (pk)
 * - nama
 * - harga
 * - stok
 * 
 */
session_start();

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}

require 'function.php';

$data = mysqli_query($db, "SELECT * FROM tabel_gudang");

if(isset($_POST['caridata'])){
    $data = search($_POST['key']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <form action="logout.php" method="post">
        <button class="mt-3 btn btn-danger" type="submit">Logout</button>
    </form>

    <form action="add.php" class="mt-2" method="post">

        <div class="mb-3 col-8 ms-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
        </div>

        <div class="mb-3 col-8 ms-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" id="harga">
            </div>
        </div>

        <div class="mb-3 col-8 ms-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stok" id="stok">
            </div>
        </div>

        <button class="btn btn-primary ms-3 " name="submit" type="submit">Submit</button>

    </form>

    <div class="mt-5 ms-4 col-8 ">

    <form class="row g-3" action="" method="post">
        <div class="mb-3 col-8 ms-3 row">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="key" id="key" placeholder="Cari data...">
                <button class="btn btn-primary" type="submit" name="caridata">Cari</button>
            </div>
        </div>
    </form>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['harga']; ?></td>
                        <td><?= $d['stok']; ?></td>
                        <td> 
                        <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning">Edit</a>    
                        <a href="delete.php?id=<?= $d['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>