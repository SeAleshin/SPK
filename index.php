<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/sendData.php';
require $_SERVER['DOCUMENT_ROOT'] . '../template/connect.php';

if (isset($_POST['send_contact_data'])) {

    $data = true;
    $clientName = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $clientPhone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $clientEmail = htmlspecialchars($_POST['email'], ENT_QUOTES);

    if ($_POST['agreement'] === 'on') {
        
        if ($clientEmail == '') {
            $clientEmail = '-';
        }

        sendData($pdo, $clientName, $clientPhone, $clientEmail);
        $success = 'Спасибо! Мы скоро свяжемся с вами.';
    } else {

        $error = 'Подтвердите согласие на обработку данных.';
    }
}

?>

<main>

    <div class="product">

        <h1>Продукция</h1>

        <div class="products">
            <a href="/product.php?material=ПП">
                <div class="product-1"><p>Полипропилен вторичный (ПП)</p></div>
            </a>
            <a href="/product.php?material=ПНД">
                <div class="product-2"><p>Полиэтилен низкого давления (ПНД)</p></div>
            </a>
            <a href="/product.php?material=ПВД">
                <div class="product-3"><p>Полиэтилен высокого давления (ПВД)</p></div>
            </a>
            <div class="product-block"></div>
        </div>

    </div>

    <div class="product_offer">

        <h1>Почему выбирают именно нас?</h1>

        <div class="cause-1">
            <img src="/style/img/time.png" alt="Время">
            <p>15 лет на рынке</p>
        </div>
        <div class="cause-2">
            <img src="/style/img/production.png" alt="Продукция">
            <p>Собственное производство</p>
        </div>
        <div class="clearfix"></div>
        <div class="cause-3">
            <img src="/style/img/quality.png" alt="Качество">
            <p>Всегда отвечаем за качество нашей продукции</p>
        </div>

    </div>

    <div class="contact">
        <h1>Мы свяжемся с вами:</h1>
        <a name="contact"></a>

        <form action="/#contact" method="POST">
            <input type="text" name="name" placeholder="*Ваше имя" required>
            <input type="tel" name="phone" pattern="[0-9]{11}" placeholder="*Телефон (начиная с 8)" required>
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="send_contact_data" value="Отправить заявку">
            <br>
            <input type="checkbox" name="agreement" required>
            <p> <a href="soglasiye_na_obrabotku_personal'nykh_dannykh.pdf">*Согласен на обработку персональных данных</a></p>
        </form>

        <?php
            if ($data) {
                if (isset($success)) {
                    echo '<p class="success">' . $success . '</p>';
                } else {
                    echo '<p class="error">'. $error . '</p>';
                }
            }
        ?>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1475.3901451221664!2d43.78925011201978!3d56.3542001723998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4151d7e268afd3c7%3A0x9cb2e62b9ad53fdd!2z0YPQuy4g0JrQvtC90L7QstCw0LvQvtCy0LAsIDE3LCDQndC40LbQvdC40Lkg0J3QvtCy0LPQvtGA0L7QtCwg0J3QuNC20LXQs9C-0YDQvtC00YHQutCw0Y8g0L7QsdC7LiwgNjAzMTI3!5e0!3m2!1sru!2sru!4v1630544165794!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <h1>Наше местоположение:</h1>
    </div>

</main>

<?php

require $_SERVER['DOCUMENT_ROOT'] . '../veiw/footer.php';

?>
