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

//     echo <<<ADD_ITEM
//         <div class="form-container">
//             <h2 class="h2 p20-top-bot text-center">Ваш отзыв или пожелание</h2>

//             <form name="delete_form" method="post">
//                 <p>Ваше имя: <input type="text" name="name" /></p>
//                 <p>Ваш возраст: <input type="text" name="age" /></p>
//                 <p><input type="submit" /></p>
//             </form>
//         </div>
// ADD_ITEM;

    require_once 'php/main/main_close.php';
?>