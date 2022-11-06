<?php

function calendar_item($date) {
    echo <<<CALENDAR
        <img src="/assets/calendar.png" class="calendar"></img>
        <div class="card-description-style">$date</div>
CALENDAR;
}
?>