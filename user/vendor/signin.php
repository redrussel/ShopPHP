<?php
session_start();
require_once ('connect.php');

$email = $_POST['email'];
$pass = md5($_POST['pass']);


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id"=> $user['id'],
        "email"=> $user['email'],
        "login"=> $user['login'],
        "avatar"=> $user['avatar'],
    ];
    header('Location: ../profile.php');

} else {
    $_SESSION['message_bad'] = 'Неправильный логин или пароль';
    header('Location: ../loginscreen.php'); 
}
