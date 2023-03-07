<?php session_start();
if (!$_SESSION['user']) {
    header('Location: loginscreen.php');
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
    <title>Профиль <?= $_SESSION['user']['id'] ?></title>
</head>

<body>

<header>

</header>



</body>

</html>