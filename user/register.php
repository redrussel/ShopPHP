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
    <link href="../../bootstrap/dist/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../StyleDIR\style.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <header>


    </header>


            <?php
            $message = $_SESSION['message_bad'] ?? '';
            if (!empty($message)) {
                echo '<div class="alert alert-danger">' . $message . '</div>';
                unset($_SESSION['message_bad']);
            }
            ?>

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


</body>

</html>