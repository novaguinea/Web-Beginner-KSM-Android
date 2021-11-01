<?php

require 'function.php';

$id = $_GET['id'];

$data = query("SELECT * FROM tabel_gudang WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            
            document.location.href = 'index.php';
        </script>
        
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                
                document.location.href = 'index.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE HTML>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
        <form action="" class="mt-5" method="post">
            <input type="hidden" name="id" id="id" value="<?= $data['id']; ?>">
            <div class="mb-3 col-8 ms-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama']; ?>">
                </div>
            </div>

            <div class="mb-3 col-8 ms-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="harga" value="<?= $data['harga']; ?>">
                </div>
            </div>

            <div class="mb-3 col-8 ms-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" id="stok" value="<?= $data['stok']; ?>">
                </div>
            </div>

            <button class="btn btn-primary ms-3 " name="submit" type="submit">Submit</button>

        </form>
    </body>
</html>