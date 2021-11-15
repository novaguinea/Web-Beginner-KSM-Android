<?php
/**
 * 
 * session_start()
 * $_SESSION['login'] = true
 * $_SESSION = []
 * session_unset()
 * session_destroy()
 * 
 */

session_start();
require 'function.php';



if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $data_db = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($data_db) === 1){
        $data = mysqli_fetch_assoc($data_db);

        if(password_verify($password, $data['password'])){
            $_SESSION['login'] = true;

            if(isset($_POST['remember'])){
                //setcookie(key, value, waktu)
                setcookie('key', hash( 'md5' ,$data['username']), time()+120);
            }

            header("Location: index.php");
            exit;
        }
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

<h3>Login Account</h3>
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

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label> <br>

        <button class="btn btn-primary ms-3 " name="login" type="submit">Submit</button>

    </form>
</body>

</html>