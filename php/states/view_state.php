<?php
    echo <<<VIEW_STATE
        <div class="flex-row">
            <h2 class="h2 p20-top-bot">Отзывы о шиномонтаже Pit-Stop</h2>
            
            <form name="add_item_form" method="post" action="add_item.php">
                <button class="make_feed_back_button"><i class="fa fa-bars"></i><p class="left_feed">Оставить отзыв</p></button>
            </form>
        </div>

        <p class="description">Ваши объективные отзывы о шиномонтаже Pit-Stop и пожелания помогут нам улучшить качество работы шиномонтажных станций, а другим автолюбителям правильно выбрать удобный, доступный и недорогой шиномонтаж в Санкт-Петербурге или в Москве. Если у Вас есть претензии к качеству выполненных работ, опишите ситуацию и укажите в отзыве свой номер телефона для оперативного решения проблемы. Обещаем, что каждый Ваш отзыв будет внимательно изучен и отработан на 100%.</p>
VIEW_STATE;

    $db_result;
    switch ($_GET['form_sort_type']) {
        case "score_increase": {
            $db_result = db_sort_score_asc();
            break;
        }
        case "score_downgrade": {
            $db_result = db_sort_score_desc();
            break;
        };
        default: {
            $db_result = db_get_all();
            break;
        };
    }


    // $db_result = db_get_all();


    if (mysqli_num_rows($db_result) == 0) {
        require_once 'php/card/empty.php';
    } else {
        require_once 'php/sort_buttons/sort_by_score_downgrade.php';
        require_once 'php/sort_buttons/sort_by_score_increase.php';

        $rows = mysqli_fetch_all($db_result, MYSQLI_ASSOC);
        foreach ($rows as $row) card($row['id'], $row['feed_back_date'], $row['evaluation'], $row['service_station'], $row['message'], $row['user_name']);
    }
?>