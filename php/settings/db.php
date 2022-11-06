<?php
    require_once 'php/settings/db_constants.php';

    /// Тестовое соединение при входе в приложение
    function db_connection_test() {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);
        $mysql->close();
    }

    /// Получение всех комментариев
    function db_get_all() {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        

        $mysql->close();
    }

    /// Добавить 
    function db_insert() {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        

        $mysql->close();
    }


    function db_delete($id) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        

        $mysql->close();
    }

    function db_update($id) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        

        $mysql->close();
    }

    function db_get_sorted_by_date($isNewFirst) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        
        if ($isNewFirst) {

        } else {

        }

        $mysql->close();
    }

    function db_get_sorted_by_score($isGoodFirst) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        if ($isGoodFirst) {

        } else {

        }

        $mysql->close();
    }
?>