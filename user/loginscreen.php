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
  <title>Авторизация</title>
</head>

<body>
  <header>


  </header>



      <?php
      $message = $_SESSION['message_good'] ?? '';
      if (!empty($message)) {
        echo '<div class="alert alert-success">' . $message . '</div>';
        unset($_SESSION['message_good']);
      }
      ?>

      <?php
      $message = $_SESSION['message_bad'] ?? '';
      if (!empty($message)) {
        echo '<div class="alert alert-danger">' . $message . '</div>';
        unset($_SESSION['message_bad']);
      }
      ?>




        <form action="vendor/signin.php" method="post">

          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <input type="email" name="email" class="form-control" id="inputPassword" placeholder="Введите свою почту">

          <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Введите пароль">

          <button type="submit" class="btn btn-primary btn-sm">Войти</button>

          <a href="register.php">Зарегистрироваться</a>

        </form>

</body>

</html>