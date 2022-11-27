<?php


    function edit_form($id, $name, $date, $message, $station, $score) {
        echo <<<ADD_ITEM
            <div class="form-container">

                <p class="hleb"><a class="hleb-a" href="index.php">Отзывы</a> > Оставить отзыв </p>

                <h2 class="h2 p20-top-bot text-center">Ваш отзыв или пожелание</h2>

                <form name="edit_form" method="post">
                    <input type="hidden" name="form_id" id="card_id" value="$id">

                    <div class="form-block">
                        <label class="form-label">Ваше имя:</label>
                        <input class="form-input" type="text" name="form_name" value="$name">
                    </div>

                    <div class="form-block">
                        <label class="form-label">Дата обслуживания:</label>
                        <input class="form-input" type="date" name="form_date" value="$date">
                    </div>

                    <div class="form-block">
                        <label class="form-label">Отзыв:</label>
                        <textarea class="form-text-area" type="text" name="form_message">$message</textarea>
                    </div>

                    <div class="form-block">
                        <label class="form-label">Станция обслуживания:</label>
                        <input class="form-input" type="text" name="form_station" value="$station">
                    </div>

                    <div class="form-block">
                        <label class="form-label">Оценка:</label>
                        <select class="form-input" name="form_score">
ADD_ITEM;
                            score_selected($score);
        echo <<<ADD_ITEM
                        </select>
                    </div>
                    
                    <div class="button-center-container">
                        <button class="make_feed_back_button button-center-container"><p class="left_feed">Подтвердить</p></button>
                    </div>
                </form>
            </div>
ADD_ITEM;
    }

    function scroe_name($score) {
        switch($score) {
            case 1: return 'ужасно';
            case 2: return 'плохо';
            case 3: return 'удовлетворительно';
            case 4: return 'хорошо';
            case 5: return 'отлично';
            default: return 'unknown';
        }
    }

    function score_selected($score) {
        for ($i = 5; $i > 0; $i--) {
            $score_item_name = scroe_name($i);
            if ($score == $i) echo "<option selected='$score'>$score - $score_item_name</option>";
            else echo "<option value='$i'>$i - $score_item_name</option>";
        }
    }

?>