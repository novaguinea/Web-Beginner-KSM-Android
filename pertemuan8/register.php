
<?php

require 'function.php';

if(isset($_POST['register'])){
    if(register($_POST) > 0){
        echo "
            <script>
                alert('user berhasil ditambahkan')
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

<h3>Register Account</h3>
    <form action="" class="mt-2" method="post">

        <div class="mb-3 col-8 ms-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username">
            </div>
        </div>

        <div class="mb-3 col-8 ms-3 row">
            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="pwd" id="pwd">
            </div>
        </div>

        <div class="mb-3 col-8 ms-3 row">
            <label for="pwd2" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="pwd2" id="pwd2">
            </div>
        </div>

        <button class="btn btn-primary ms-3 " name="register" type="submit">Submit</button>

    </form>
</body>

</html>