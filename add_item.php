<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/main_style.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Добавить отзыв</title>
</head>
<body>
    <?php
        require_once 'php/settings/settings_connect.php';
        require_once 'php/header/header.php';
        require_once 'php/card/card.php';
        require_once 'php/main/main_open.php';

        echo <<<ADD_ITEM
            <div class="form-container">
                <h2 class="h2 p20-top-bot text-center">Ваш отзыв или пожелание</h2>

                <form name="delete_form" method="post">
                    <div class="form-block">
                        <label class="form-label">Ваше имя:</label>
                        <input class="form-input" type="text" name="form_name">
                    </div>

                    <div class="form-block">
                        <label class="form-label">Дата обслуживания:</label>
                        <input class="form-input" type="date" name="trip-start">
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
                        <select class="form-input" id="cars" name="cars">
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

        require_once 'php/main/main_close.php';
?>
</body>
</html>