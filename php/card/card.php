<?php
require_once 'php/card/calendar_score_station.php';
require_once 'php/card/message.php';
require_once 'php/card/user.php';


function card($date, $score, $station, $message, $name) {
    echo <<<CARD_OPEN
        '<div class="card-body">'

        <button class="delete_button"><i class="fa fa-close"></i></button>
        <button class="edit_button"><i class="fa fa-folder"></i></button>
CARD_OPEN;



        calendar_score_station_container($date, $score, $station);
        message_item($message);
        user_item($name);

    echo <<<CARD_CLOSE
        '</div>'
CARD_CLOSE;
}
?>