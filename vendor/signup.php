<?php
session_start();

include('connect.php');



$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
}

$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Пользователь с такой почтой уже существует",
        "fields" => ['email']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){        //проверим валидацией имейл
    $error_fields[] = 'email';
}

if ($login === ''){
    $error_fields[] = 'login';
}
if ($password === ''){
    $error_fields[] = 'password';
}
if ($password_confirm === ''){
    $error_fields[] = 'password_confirm';
}

if (!isset($_FILES['avatar'])) {
    $error_fields[] = 'avatar';
}

if (!empty($error_fields)){
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

         if ($password === $password_confirm) {     //сравнение идентичности

            $path = 'uploads/' . time() . $_FILES['avatar']['name'];     //Загрузка изображения в переменную $path, вместе с time для уникального значения файла
            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {   //Условие проверки (! - если случится ошибка выполнения, то) с функцией загрузки файла на сервер, tmp name является ключом
                $response = [
                    "status" => false,
                    "type" => 2,
                    "message" => "Ошибка при загрузке изображения",
                ];

                echo json_encode($response);
            }

            $password = md5($password);

            mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `login`, `password`, `avatar`) VALUES (NULL, '$email', '$login', '$password', '$path')");

             $response = [
                 "status" => true,
                 "message" => "Регистрация завершена",
             ];

             echo json_encode($response);
            


         } else {
             $response = [
                 "status" => false,
                 "message" => "Пароли не совпадают",
             ];

             echo json_encode($response);
         }

