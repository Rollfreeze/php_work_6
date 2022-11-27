<?php
require_once 'php/card/calendar_score_station.php';
require_once 'php/card/message.php';
require_once 'php/card/user.php';


function card($id, $date, $score, $station, $message, $name, $form_sort_type) {
    echo <<<CARD_OPEN
        <div class="card-body">

        <form name="delete_form" method="post">
            <input type="hidden" name="form_sort_type" id="form_sort_type" value="$form_sort_type">
            <button class="delete_button"><i class="fa fa-close"></i></button>
            <div class="secret-box">
                <input type="hidden" name="card_id_field" id="card_id" value="$id">
                <input type="hidden" name="card_date_field" id="card_date" value="$date">
                <input type="hidden" name="card_score_field" id="card_score" value="$score">
                <input type="hidden" name="card_station_field" id="card_station" value="$station">
                <input type="hidden" name="card_message_field" id="card_message" value="$message">
                <input type="hidden" name="card_name_field" id="card_name" value="$name">

                <input type="hidden" name="card_type_field" id="card_type" value="delete">
            </div>
        </form>

        <form name="edit_form" method="get" action="edit_item.php">
            <input type="hidden" name="form_sort_type" id="form_sort_type" value="$form_sort_type">
            <button class="edit_button"><i class="fa fa-folder"></i></button>
            <div class="secret-box">
                <input type="hidden" name="card_id_field" id="card_id" value="$id">
                <input type="hidden" name="card_date_field" id="card_date" value="$date">
                <input type="hidden" name="card_score_field" id="card_score" value="$score">
                <input type="hidden" name="card_station_field" id="card_station" value="$station">
                <input type="hidden" name="card_message_field" id="card_message" value="$message">
                <input type="hidden" name="card_name_field" id="card_name" value="$name">

                <input type="hidden" name="card_type_field" id="card_type" value="edit">
            </div>
        </form>
CARD_OPEN;


        calendar_score_station_container($date, $score, $station);
        message_item($message);
        user_item($name);

    echo <<<CARD_CLOSE
        </div>
CARD_CLOSE;
}
?>