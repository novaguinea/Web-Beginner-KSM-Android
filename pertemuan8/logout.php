<?php

session_start();
// $_SESSION = [];
// session_unset();
session_destroy();
setcookie('key', time()-36000);
header("Location: login.php");

?>