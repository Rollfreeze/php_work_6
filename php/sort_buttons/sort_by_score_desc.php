<?php


    echo <<<SCORE_DOWNGRADE
        <form name="score_downgrade_form" method="get" style="display: inline-block;">
            <input type="hidden" name="form_sort_type" id="sort_type" value="score_downgrade">
            <button class="sort-button"><p class="left_feed">По оценке (убывание)</p></button>
        </form>
SCORE_DOWNGRADE;

?>