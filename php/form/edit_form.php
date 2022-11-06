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
                        <select class="form-input" name="form_score" value="$score">
                            <option value="5">5 - отлично</option>
                            <option value="4">4 - хорошо</option>
                            <option value="3">3 - удовлетворительно</option>
                            <option value="2">2 - плохо</option>
                            <option value="1">1 - ужасно</option>
                        </select>
                    </div>
                    
                    <div class="button-center-container">
                        <button class="make_feed_back_button button-center-container"><p class="left_feed">Подтвердить</p></button>
                    </div>
                </form>
            </div>
ADD_ITEM;
    }
?>