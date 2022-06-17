<?php

require $_SERVER['DOCUMENT_ROOT'] . '../template/menu.php';
require $_SERVER['DOCUMENT_ROOT'] . '../function/getUrl.php';

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="keywords" content="Полипропилен, ПНД, ПВД, Полипропилен (вторичный), Полиэтилен низкого давления, Полиэтилен высокого давления, закупка ПНД, закупка полипропелена">
    <title>Спецполимеркомпозит</title>

    <link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>
<body>
    <header>
        <div class="header_width">
            <div class="title">
                <div class="logo">
                    <a href="/"><img src="/style/img/logo.png" alt="СПК"></a>
                </div>
                <div class="name">
                    <p> Спецполимеркомпозит </p>
                </div>
            </div>
            <div class="backcall">
                <img src="/style/img/feedback_logo.png" alt=" ">
                <a href="/#contact"> Обратный звонок </a> <br>
                <span class="backcall_number"> +7(986) 761-74-50 </span>
            </div>
            <hr class="header_hr">
            <nav>
                <ul>
                    <?php foreach($menu as $value) {

                        if ($value['link'] == getUrl()) {

                            echo '<a class="current_menu_item_bgc" href="' . $value['link'] . '"> <li class="current_menu_item">' . $value['name'] . '</li> </a>';
                        } else {

                            echo '<a href="' . $value['link'] . '"> <li>' . $value['name'] . '</li> </a>';
                        }
                    }
                    
                    ?>
                </ul>
            </nav>
            
            <div class="clearfix"></div>
        </div>
    </header>
    