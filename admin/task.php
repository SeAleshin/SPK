<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '../template/connect.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/getTaskByNumber.php';

$taskNumber = mb_substr($_SERVER['QUERY_STRING'], 5);
$task = getTuskByNubmer($pdo, $taskNumber);

?>

<main>

    <div class="task">

        <h1>Заявка №<?=$task['client_id'];?></h1>

        <div class="client_data">
            <p><span class="client_title">Имя:</span> <?= $task['client_name']; ?></p>
            <p class="task_status"><span class="client_title">Статус:</span> <?= ($task['status'] == 'new') ? 'заявка открыта' : 'заявка закрыта'; ?></p>
            <p><span class="client_title">Номер:</span> <?= $task['phone']; ?></p>
            <p><span class="client_title">Почта:</span> <?= ($task['email'] !== '-') ? $task['email'] : 'Не указано'; ?></p>
        </div>

        <?php if ($task['status'] == 'new') {?>

        <div class="task_button">
            <form action="/admin/" method="POST">
                <input type="hidden" name="taskNumber" value="<?= $taskNumber;?>">
                <input type="submit" name="send_archive" value="Закрыть заявку">
            </form>
        </div>
        
        <?php } ?>

    </div>
</main>

<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/footer.php';
