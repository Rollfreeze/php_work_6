<?php

    switch ($_REQUEST['form_sort_type']) {
        case "score_increase": {
            $custom_href = "index.php?form_sort_type=score_increase";
            break;
        }
        case "score_downgrade": {
            $custom_href = "index.php?form_sort_type=score_downgrade";
            break;
        };
        case "date_desc": {
            $custom_href = "index.php?form_sort_type=date_desc";
            break;
        };
        case "date_asc": {
            $custom_href = "index.php?form_sort_type=date_asc";
            break;
        };
        default: {
            $custom_href = "index.php";
            break;
        };
    }

    echo <<<ADD_ITEM
        <div class="form-container">

            <p class="hleb"><a class="hleb-a" href=$custom_href>Отзывы</a> > Оставить отзыв </p>

            <h2 class="h2 p20-top-bot text-center">Ваш отзыв или пожелание</h2>

            <form name="delete_form" method="post">
                <div class="form-block">
                    <label class="form-label">Ваше имя:</label>
                    <input class="form-input" type="text" name="form_name">
                </div>

                <div class="form-block">
                    <label class="form-label">Дата обслуживания:</label>
                    <input class="form-input" type="date" name="form_date">
                </div>

                <div class="form-block">
                    <label class="form-label">Отзыв:</label>
                    <textarea class="form-text-area" type="text" name="form_message"></textarea>
                </div>


                <div class="form-block">
                    <label class="form-label">Станция обслуживания:</label>
                    <input class="form-input" type="text" name="form_station">
                </div>

                <div class="form-block">
                    <label class="form-label">Оценка:</label>
                    <select class="form-input" name="form_score">
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
?>