<?php


    echo <<<SCORE_DOWNGRADE
        <form name="score_increase_form" method="get" style="display: inline-block; margin-left: 10px;">
            <input type="hidden" name="form_sort_type" id="sort_type" value="score_increase">
            <button class="sort-button"><p class="left_feed">По оценке (возрастание)</p></button>
        </form>
SCORE_DOWNGRADE;

?>