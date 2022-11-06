<?php


    echo <<<DATE_DESC
        <form name="score_increase_form" method="get" style="display: inline-block; margin-left: 10px;">
            <input type="hidden" name="form_sort_type" id="sort_type" value="date_desc">
            <button class="sort-button"><p class="left_feed">По дате (от нового к старому)</p></button>
        </form>
DATE_DESC;

?>