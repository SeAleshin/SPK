    <footer>
        <div class="footer_width">
            <div class="footer_block">
                <div class="footer_nav">
                    <ul>
                        <?php foreach($menu as $value) {

                            if ($value['link'] == $url) {

                                echo '<li> <a class="current_menu_item" href="' . $value['link'] . '">' . $value['name'] . '</a> </li>';
                            } else {

                                echo '<li> <a href="' . $value['link'] . '">' . $value['name'] . '</a> </li>';
                            }
                        }
                        
                        ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="address">
                    <p><span class="">Физ. адрес:</span> г. Н.Новогород, ул. Коновалова, д. 17, пом. 4</p>
                    <p><span class="">Юр. адрес:</span> г. Н.Новогород, ул. Коновалова, д. 17, пом. 4</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr>
            <div class="footer_logo">
                <a href="/"><img src="/style/img/logo.png" alt="СПК"></a>
            </div>
            <div class="clearfix"></div>
            <div class="copyright">
                <p>2022 ООО “СПК”. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>