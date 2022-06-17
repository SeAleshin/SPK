<?php

function getTuskByNubmer($pdo, $url) {

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {
        $stmt = $pdo->query("SELECT * FROM new_client WHERE client_id = '$url';");

        $row = $stmt->fetch();

        return $row;
    }
}