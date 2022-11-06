<?php


    echo <<<DATE_ASC
        <form name="score_increase_form" method="get" style="display: inline-block; margin-left: 10px;">
            <input type="hidden" name="form_sort_type" id="sort_type" value="date_asc">
            <button class="sort-button"><p class="left_feed">По дате (от старого к новому)</p></button>
        </form>
DATE_ASC;

?>