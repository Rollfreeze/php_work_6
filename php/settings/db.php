<?php
    require_once 'php/settings/db_constants.php';


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

        // var_dump($mysql->error);

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

    function db_update($id, $date, $score, $station, $name, $message) {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);

        $sql_request = "UPDATE `feed_back` SET `feed_back_date` = '$date', `evaluation` = '$score', `service_station` = '$station', `user_name` = '$name', `message` = '$message' WHERE `feed_back`.`id` = '$id';";

        $res = mysqli_query($mysql, $sql_request);

        $mysql->close();
        if ($res) return true;
        return false;
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

    function db_sort_score_desc() {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);
        $sql_request = 'SELECT * FROM `feed_back` ORDER BY `evaluation` DESC';
        $result = mysqli_query($mysql, $sql_request);
        $mysql->close();

        return $result;
    }

    function db_sort_score_asc() {
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_errno) exit(ERROR_MESSAGE);
        $mysql->set_charset(CHARSET);
        $sql_request = 'SELECT * FROM `feed_back` ORDER BY `evaluation` ASC';
        $result = mysqli_query($mysql, $sql_request);
        $mysql->close();

        return $result;
    }
?>