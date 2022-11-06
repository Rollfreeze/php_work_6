<?php
require_once 'php/main/card/calendar_score_station.php';
require_once 'php/main/card/message.php';
require_once 'php/main/card/user.php';


function card($date, $score, $station, $message, $name) {
    echo '<div class="card-body">';
        calendar_score_station_container($date, $score, $station);
        message_item($message);
        user_item($name);
    echo '</div>';
}
?>