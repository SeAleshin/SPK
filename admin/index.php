<?php
    require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/header.php';
    require $_SERVER['DOCUMENT_ROOT'] . '../template/connect.php';
    require $_SERVER['DOCUMENT_ROOT'] . '../function/getData.php';
    require $_SERVER['DOCUMENT_ROOT'] . '../function/getSearchData.php';
    require $_SERVER['DOCUMENT_ROOT'] . '../function/changeStatus.php';
    
    if (isset($_POST['send_archive'])) {
        changeStatus($pdo, $_POST['taskNumber']);
    }

    if (isset($_POST['search'])) {
        $results = getSearchData($pdo, $_POST['search']);
        if ($results == NULL) {
            $searchResult = false;
        } else {
            $searchResult = true;
        }
    } else {
        $results = getData($pdo, 'new');
        $searchResult = true;
    }

?>

<div class="archive">
        <p><a href="/admin/archive.php">Закрытые заявки</a></p>
</div>

<main>

    <div class="request_admin">

        <h3>Заявки</h3>

        <div class="search">
            <form action="/admin/" method="POST">
                <input type="search" name="search" placeholder="Напишите номер заявки, имя, email или телефон">
                <input type="submit" name="search_submit" value="Поиск">
                <p class="drop"><a href="/admin/">Сбросить</a></p>
            </form>
        </div>

        <table>
            <tr>
                <th>Номер заявки</th>
                <th>ФИО</th>
                <th>Номер телефона</th>
                <th>Email</th>
            </tr>

            <?php if ($searchResult && $results !== NULL) {
                foreach ($results as $result) {
            ?>

            <tr>
                <td><a href="/admin/task.php?task=<?=$result['client_id'];?>"><?=$result['client_id']?></a></td>
                <td><?=$result['client_name']?></td>
                <td><?=$result['phone']?></td> 
                <td><?=$result['email']?></td>
                </td>
            </tr>
            <?php }
                    } ?>

        </table>
        <?php if (!$searchResult) {
            echo '<p class="search_result"> Ничего не найдено </p>';
        }
        
        if ($results == NULL && $searchResult) {
            echo '<p class="search_result"> Нет новых заявок </p>';
        } ?>
        </div>

</main>

<?php
    require $_SERVER['DOCUMENT_ROOT'] . '../veiw/view_admin/footer.php';
?>