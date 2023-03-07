<?php

//mysqli_connect

$connect = mysqli_connect('localhost', 'root', 'mysql', 'shop');


if (!$connect) {
    die('Error connect to DataBase');
}