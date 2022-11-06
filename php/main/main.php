<?php
    require_once 'php/settings/settings_connect.php';
    require_once 'php/card/card.php';
    require_once 'php/main/main_open.php';

    $db_result = db_get_all();
    
    if (mysqli_num_rows($db_result) == 0) {
        require_once 'php/card/empty.php';
    } else {
        $rows = mysqli_fetch_all($db_result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            card(
                $row['feed_back_date'],
                $row['evaluation'],
                $row['service_station'],
                $row['message'],
                $row['user_name']
            );
        }
    }

    require_once 'php/main/main_close.php';
?>