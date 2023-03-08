<?php

//mysqli_connect

$connect = mysqli_connect('localhost', 'root','','shop');


if (!$connect) {
    die('Error connect to DataBase');
}