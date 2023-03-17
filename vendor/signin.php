<?php
session_start();
include('connect.php');

$login = $_POST['login'];
$password = ($_POST['password']);

$error_fields = [];                  //в эту переменную будем помещать ошибки

if ($login === ''){
    $error_fields[] = 'login';          //присваиваем переменной поля ошибок значение логина
}

if ($password === ''){
    $error_fields[] = 'password';                //присваиваем переменной поля ошибок значение пароля
}

if (!empty($error_fields)){             //если не пустая переменная поля ошибок, то передаем в переменную ответа свойства
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);            //Преобразуем ответ в json

    die();
}

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id"=> $user['id'],
        "email"=> $user['email'],
        "login"=> $user['login'],
        "avatar"=> $user['avatar'],
    ];

    $response = [
        "status" => true
    ];


    echo json_encode($response);

} else {

    $response = [
        "status" => false,
        "message" => 'Неправильный логин или пароль'
    ];
    echo json_encode($response);
}
