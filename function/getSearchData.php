<?php

function getSearchData ($pdo, string $search) {

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {
        $stmt = $pdo->query("SELECT * FROM new_client WHERE phone = '$search' OR client_id = '$search' OR client_name = '$search' OR email = '$search';");

        while ($row = $stmt->fetch()) {
            $results[] = $row;
        }

        return $results;
    }
}
