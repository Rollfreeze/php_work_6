<?php
    // require_once 'php/settings/settings_connect.php'; // подключили настройки приложения и бд
    require_once 'php/card/card.php'; // позволяет строить карточку
    require_once 'php/main/main_open.php';

    // require_once 'php/main/feed_back/empty.php';

    // db_connection_test();

    $date = '05.11.2022';
    $score = 5;
    $station = 'Балтийская 128к1';
    $message = 'Записался на шиномонтаж через сайт . Приняли машину минута в минуту! Быстро переобули и не дорого . До гаража доехал , машину не ведёт. Доволен.';
    $name = 'Van Sama';

    card($date, $score, $station, $message, $name);
    // card($date, $score, $station, $message, $name);
    // card($date, $score, $station, $message, $name);



    require_once 'php/main/main_close.php';
?>