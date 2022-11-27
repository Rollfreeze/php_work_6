<?php


function station_item($station) {
    echo <<<STATION
        <div class="station">
            <div class="card-description-style">Станция обслуживания:</div>
            <a href="https://www.google.ru/maps/@62.3970863,17.3230347,3a,75y,71.03h,90t/data=!3m7!1e1!3m5!1szoyZ66At_hGiNPwlX2cUCw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DzoyZ66At_hGiNPwlX2cUCw%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D53.42606%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192" class="station_address">$station</a> 
        </div>
STATION;
}
?>