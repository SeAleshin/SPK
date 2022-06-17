<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . '../template/menuAdmin.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/getUrl.php';

if (!isset($_SESSION['auth']) || $_SESSION['auth'] == 0) {
    header('Location: /admin/authorization.php');
} 

foreach ($menu as $value) {
    if ($value['link'] === getUrl()) {
        $page = $value;
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>
<body>
    <header class="header_admin">
        <div class="header_wrapper_admin">
            <div class="logo_admin">
                <a href="/admin/"><img src="/style/img/logo.png" height="40px" alt="СПК"></a>
            </div>
            <p><?=$page['name']?></p>

            <div class="clearfix"></div>
        </div>
    </header>