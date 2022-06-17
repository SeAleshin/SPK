<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/creationNewUser.php';
require $_SERVER['DOCUMENT_ROOT'] . '../template/connect.php';

if (isset($_POST['creation'])) {

    $newLogin = htmlspecialchars($_POST['newEmail'], ENT_QUOTES);
    $newPassword = htmlspecialchars($_POST['newPassword'], ENT_QUOTES);
    $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    creationNewUser($pdo, $newLogin, $passwordHash);
}

?>

    <main class="newUser">
        <p class="created">Новый пользователь создан</p>

        <p class="created_link"><a href="/admin/"><-- Вернуться на главную</a></p>
    </main>

<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/footer.php';

?>
