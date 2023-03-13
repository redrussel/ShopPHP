<?php

//mysqli_connect

$connect = mysqli_connect('localhost', 'root','','shop');
if ($connect) {
    echo "Подключено к БД!";
    } else {
    die('Error connect to DataBase');
}
