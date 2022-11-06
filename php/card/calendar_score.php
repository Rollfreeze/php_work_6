<?php
require_once 'php/card/calendar.php';
require_once 'php/card/score.php';


function calendar_score_container($date, $score) {
    echo '<div class="calendar_score">';
        calendar_item($date);
        score_item($score);
    echo '</div>';
}
?>