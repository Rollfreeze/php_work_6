<?php


function station_item($station) {
    echo <<<STATION
        <div class="station">
            <div class="card-description-style">Станция обслуживания:</div>
            <a href="/" class="station_address">$station</a> 
        </div>
STATION;
}
?>