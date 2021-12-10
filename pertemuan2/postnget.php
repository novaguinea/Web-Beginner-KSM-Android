<?php

//POST DAN GET
//get dipake untuk data yang kelihatan

if (isset($_GET["nama"])) {
    $nama = $_GET["nama"];
    echo $nama;
} else {
    $nama = " ";
}
//post itu kita pake untuk data yg ga keliatan

?>

<form action="postnget.php" method="GET">
    Nama : <input type="text" name="nama"> <br>
    Password : <input type="text" name="password">
    <input type="submit">
</form>