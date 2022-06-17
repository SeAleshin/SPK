<?php

function changeStatus ($pdo, $task) {
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
    } else {
        $pdo->query("UPDATE new_client 
                                SET status = 'close' 
                                WHERE client_id = '$task';"
                            );
    
        $pdo = null;
    }
}
