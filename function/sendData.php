<?php

function sendData ($pdo, string $name, int $phone, string $email) {

    $stmt = $pdo->prepare("INSERT INTO new_client (client_name, phone, email, status) VALUES (:client_name, :phone, :email, :status);");
    $stmt->execute([':client_name' => $name, ':phone' => $phone, ':email' => $email, ':status' => 'new']);
    $pdo->null;
}