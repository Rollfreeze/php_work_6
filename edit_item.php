<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/main_style.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Редактировать отзыв</title>
</head>
<body>
    <?php
        require_once 'php/settings/settings_connect.php';
        require_once 'php/header/header.php';
        require_once 'php/card/card.php';

        $form_filled = isset($_POST['form_id'], $_POST['form_name']) && isset($_POST['form_date']) && isset($_POST['form_message']) && isset($_POST['form_station']) && isset($_POST['form_score']);
        $form_not_empty = !empty($_POST['form_id']) && !empty($_POST['form_name']) && !empty($_POST['form_date']) && !empty($_POST['form_message']) && !empty($_POST['form_station']) && !empty($_POST['form_score']);
        $res = false;

        if (count($_POST) != 0) {
            if ($form_filled && $form_not_empty) {
                $res = db_update($_POST['form_id'], $_POST['form_date'], $_POST['form_score'], $_POST['form_station'], $_POST['form_name'], $_POST['form_message']);

                if ($res) require_once 'php/states/success_update_bar.php';
                else require_once 'php/states/exception_bar.php';
            } else {
                require_once 'php/states/exception_bar.php';
            }
        }

        require_once 'php/main/main_open.php';

        require_once 'php/form/edit_form.php'; // она не верстает, а дает вызывать функцию ниже

        $form_sort_type = "no_sort";
        if (isset($_REQUEST['form_sort_type']) and !empty($_REQUEST['form_sort_type']) and $_REQUEST['form_sort_type'] != null) {
            $form_sort_type = $_REQUEST['form_sort_type'];
        }
        
        if ($res) edit_form($_POST['form_id'], $_POST['form_name'], $_POST['form_date'], $_POST['form_message'], $_POST['form_station'], $_POST['form_score'], $form_sort_type);
        else edit_form($_GET['card_id_field'], $_GET['card_name_field'], $_GET['card_date_field'], $_GET['card_message_field'], $_GET['card_station_field'], $_GET['card_score_field'], $form_sort_type);

        require_once 'php/main/main_close.php';
    ?>
</body>
</html>