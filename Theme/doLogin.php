<?php
include_once "../bd/BdMySQL.class.php";
include_once "../bd/Users.class.php";
session_start();

$users = new Users();

$email = $_POST['email'];
$password = $_POST['password'];

$login = $users->efectuarLogin($email, $password);

if ($login == true){
    $_SESSION['login'] = true;
    return "1";
}else{
    $_SESSION['login'] = false;
    return "0";
}

?>