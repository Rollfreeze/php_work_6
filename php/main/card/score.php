<?php


function _get_score_color($score) {
    switch ($score) {
        case 1: return 'r-1';
        case 2: return 'r-2';
        case 3: return 'r-3';
        case 4: return 'r-4';
        case 5: return 'r-5';
        default: return 'r-default';
    }
}

function score_item($score) {
    $raiting_color = _get_score_color($score);

    echo <<<SCORE
        <div class="card-description-style score">Оценка:</div>
        <div class="raiting $raiting_color">$score</div>
SCORE;
}
?>