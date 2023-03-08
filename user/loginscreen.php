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
    <link rel="stylesheet" href="../StyleDIR\style.scss">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация</title>
</head>

<body>
  <header>
   <?php include '../navbar.php'?>

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