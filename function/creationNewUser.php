<?php

function creationNewUser (object $pdo, string $login, string $password) {

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {

        $stmt = $pdo->query("SELECT login FROM admin WHERE login = '$login'");
        $result = $stmt->fetch();

        if ($result) {
            return false;
        } else {
            $stmt = $pdo->prepare("INSERT INTO admin (login, password) VALUES (:login, :password)");
            $stmt->execute([':login' => $login, ':password' => $password]);
            $pdo->null;
        }
    }
}