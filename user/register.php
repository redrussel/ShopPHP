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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../StyleDIR\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <header>
        <?php include '../navbar.php'?>
    </header>


    <main>
        <div>


                <form action="vendor/signup.php" method="post" enctype="multipart/form-data">

                    <label class="col-sm-2 col-form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Введите свою почту">


                    <label class="col-sm-2 col-form-label">Логин</label>
                    <input type="text" name="login" class="form-control" placeholder="Введите имя">


                    <label class="col-sm-2 col-form-label">Пароль</label>
                    <input type="password" name="pass" class="form-control" placeholder="Введите пароль">


                    <label class="col-sm-2 col-form-label">Подтверждение пароля</label>
                    <input type="password" name="pass_confirm" class="form-control" placeholder="Введите пароль ещё раз">


                    <label class="col-sm-2 col-form-label">Аватар</label>
                    <input type="file" name="avatar" class="form-control">


                    <button class="btn btn-primary btn-sm" type="submit">Создать аккаунт</button>

                </form>

                <?php
                $message = $_SESSION['message_bad'] ?? '';
                if (!empty($message)) {
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                    unset($_SESSION['message_bad']);
                }
                ?>


        </div>
    </main>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>


</body>

</html>