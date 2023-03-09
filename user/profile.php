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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../StyleDIR\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль <?= $_SESSION['user']['id'] ?></title>
</head>



<body>

<header>
    <?php include '../navbar.php'?>
</header>

<main>
    <div>
        <h2>Welcome to my website</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique nisi sit amet nibh sollicitudin elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam non felis a ante commodo ultricies vitae at lacus.</p>
    </div>
</main>
<footer>
    <p>&copy; 2023 My Website</p>
</footer>

</body>

</html>