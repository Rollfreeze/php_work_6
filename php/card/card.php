<?php
require_once 'php/card/calendar_score_station.php';
require_once 'php/card/message.php';
require_once 'php/card/user.php';


function card($date, $score, $station, $message, $name) {
    echo '<div class="card-body">';
        calendar_score_station_container($date, $score, $station);
        message_item($message);
        user_item($name);
    echo '</div>';
}
?>