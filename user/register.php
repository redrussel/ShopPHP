<?php session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="\bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <header>
        <nav id="navbar" class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/NotLaravelProject/main.php">Назад на главную</a>
                        </li>
                </div>
            </div>
        </nav>

        <script>
            window.addEventListener('scroll', e => {
                let.navbar = document.getElementById('navbar').classList
                let active_class = "navbar_scrolled"

                if (scrollY > 400) navbar.add(active_class)
                else navbar.remove(active_class)
            })
        </script>
    </header>



    <div id="logplace" class="d-flex align-items-center justify-content-center">
        <div class="container">


            <?php
            $message = $_SESSION['message_bad'] ?? '';
            if (!empty($message)) {
                echo '<div class="alert alert-danger">' . $message . '</div>';
                unset($_SESSION['message_bad']);
            }
            ?>


            <div class="row justify-content-center">

                <form action="vendor/signup.php" method="post" enctype="multipart/form-data">

                    <label class="col-sm-2 col-form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Введите свою почту">


                    <label class="col-sm-2 col-form-label">Логин</label>
                    <input type="text" name="login" class="form-control" placeholder="Введите имя">


                    <label class="col-sm-2 col-form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" placeholder="Введите пароль">


                    <label class="col-sm-2 col-form-label">Подтверждение пароля</label>
                    <input type="password" name="password_confirm" class="form-control" placeholder="Введите пароль ещё раз">


                    <label class="col-sm-2 col-form-label">Аватар</label>
                    <input type="file" name="avatar" class="form-control">


                    <button class="btn btn-primary btn-sm" type="submit">Создать аккаунт</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>