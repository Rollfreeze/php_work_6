<?php
    require_once 'php/settings/settings_connect.php';
    require_once 'php/card/card.php';
    require_once 'php/main/main_open.php';

    if (!isset($_POST['card_type_field'])) {
        require_once 'php/states/view_state.php';
    } else {
        switch ($_POST['card_type_field']) {
            case 'delete': {
                db_delete($_POST['card_id_field']);
                require_once 'php/states/view_state.php';
                break;
            }

            case 'edit': {
                break;
            }

            default: {
                require_once 'php/states/uncknown_type.php';
                break;
            }
        }
    }

    require_once 'php/main/main_close.php';
?>