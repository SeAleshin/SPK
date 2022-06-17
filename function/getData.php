<?php

function getData (object $pdo, string $status) {

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {
        $stmt = $pdo->query("SELECT * FROM new_client WHERE status = '$status';");

        while ($row = $stmt->fetch()) {
            $results[] = $row;
        }

        return $results;
    }
}
