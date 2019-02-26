<?php
session_start();
include __DIR__ . '/functions.php';


if (null != getCurrentUser()) {
    header('Location: ' . '/1_homework/index.php');
    exit();
}

if ( isset($_POST['login']) ) {
    $user = $_POST['login'];
}

if ( isset($_POST['password']) ) {
    $password = $_POST['password'];

    check($user, $password);
}


function check($user, $pass) {
    if (checkPassword($user, $pass)) {
        $_SESSION['user'] = $user;
        header('Location: ' . '/1_homework/index.php');
        exit();
    }
}



?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
    <label>Login: </label><input type="text" name="login"><br>
    <label>Password: </label><input type="password" name="password"><br>
    <button type="submit">Sign up</button>
</form>
</body>
</html>
















