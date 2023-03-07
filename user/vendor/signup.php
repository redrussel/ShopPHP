<?php
session_start();

require_once('connect.php');



$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$Reg_Date = date('Y-m-d H:i:s');

     
         if ($password === $password_confirm) {     //сравнение идентичности

            $path = 'avatar/' . time() . $_FILES['avatar']['name'];     //Загрузка изображения в переменную $path, вместе с time для уникального значения файла
            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {   //Условие проверки (! - если случится ошибка выполнения, то) с функцией загрузки файла на сервер, tmp name является ключом
                $_SESSION['message'] = 'Ошибка при загрузке изображения';    //То выдаст вот эту ошибку
                header('Location: ../register.php');                         //И перенаправит сюда(на ту же страницу)
            }

            $password = md5($password);

            mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `login`, `password`, `avatar`) VALUES (NULL, '$email', '$login', '$password', '$path')");
         
            $_SESSION['message_good'] = 'Вы успешно создали аккаунт!';
            header('Location: ../loginscreen.php'); 
            


         } else {     //else - ИНАЧЕ, если операция false, например 1 === 2 - false(срабатывает else), 1 === 1 - true (не срабатывает else)
            $_SESSION['message_bad'] = 'Пароли не совпадают! Введите одинаковые значения';
            header('Location: ../register.php');  //И перенаправит сюда(на ту же страницу)
         }

