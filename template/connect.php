<?php

require $_SERVER['DOCUMENT_ROOT'] . '../template/database.php';

static $pdo = null;

if ($pdo == null) {
    $pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
