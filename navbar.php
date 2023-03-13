<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar bg-dark" data-bs-theme="dark">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Iron Master</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">


                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search"> <!-- Поиск   -->
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>


                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://shopproject/IronMaster">Главная</a>           <!-- 1 кнопка  -->
                        </li>

                        <li class="nav-item dropdown">                 <!-- Выдвижное меню -->
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Каталог
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Коллекционные доспехи</a></li>
                                <li><a class="dropdown-item" href="#">Коллекционное оружие</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Другие изделия</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="loginscreen.php">Войти</a>   <!-- 2 кнопка -->
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
</nav>

</body>
</html>
