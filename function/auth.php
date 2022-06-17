<?php

function auth ($pdo, $login) {
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {
        $stmt = $pdo->query("SELECT login, password FROM admin WHERE login = '$login';");

        $result = $stmt->fetch();

        return $result;
    }
}