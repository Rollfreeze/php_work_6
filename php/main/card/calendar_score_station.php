<?php
require_once 'php/main/card/calendar_score.php';
require_once 'php/main/card/station.php';


function calendar_score_station_container($date, $score, $station) {
    echo '<div class="flex-row">';
        calendar_score_container($date, $score);
        station_item($station);
    echo '</div>';
}
?>