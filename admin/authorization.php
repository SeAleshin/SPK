<?php

session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
    header('Location: /admin/');
}

require $_SERVER['DOCUMENT_ROOT'] . '../template/connect.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/auth.php';

if (isset($_POST['authorization_submit'])) {
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $data = auth($pdo, $email);

    if ($email === $data['login'] && password_verify($password, $data['password']) && $email !== null && $email !== '') {
        $_SESSION['login'] = $email;
        $_SESSION['auth'] = 1;
        header('Location: /admin/');
    } else {
        $_SESSION['auth'] = 0;
        $wrongLogin = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    
    <link rel="stylesheet" type="text/css" href="../style/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <div class="authorization_block_position">

        <div class="authorization_block">

            <h1>Авторизация</h1>

            <? if (isset($wrongLogin) && $wrongLogin) {
                echo '<p class="wrong_login">Неверный логин или пароль</p>';
            } ?>

            <form action="/admin/authorization.php" method="POST">
                <input type="text" name="email" placeholder="Напишите email"> <br>
                <input type="password" name="password" placeholder="Напишите пароль"> <br>
                <input type="submit" class="js-button" name="authorization_submit" value="Войти">
            </form>
        </div>
    </div>

    <script src="/script/script.js"></script>
</body>
</html>