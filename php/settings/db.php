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
        $sql_request = 'SELECT * FROM `feed_back`';
        $result = mysqli_query($mysql, $sql_request);
        $mysql->close();

        return $result;
    }

    /// Добавить 
    function db_insert($date, $score, $station, $name, $message) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        $sql_request = "INSERT INTO `feed_back` (`id`, `feed_back_date`, `evaluation`, `service_station`, `user_name`, `message`) VALUES (NULL, '$date', '$score', '$station', '$name', '$message');";

        $res = mysqli_query($mysql, $sql_request);

        $mysql->close();
        if ($res) return true;
        return false;
    }

    /// Удалить
    function db_delete($id) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        $sql_request = 'DELETE FROM `feed_back` WHERE `id` = ' . $id;
        mysqli_query($mysql, $sql_request);
        $mysql->close();
        return true;
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