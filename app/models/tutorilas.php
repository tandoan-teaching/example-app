<?php

// import các hàm trong file database
include_once $GLOBALS['CONFIG'] . 'database.php';

// định nghĩa table tutorials là hằng số
$TUTORIALS_TB = 'tutorials';

// lấy tất cả data trong bảng
function tutorial_get_all($fields = '*')
{
    $query_string = "SELECT $fields FROM " . $GLOBALS['TUTORIALS_TB'] . " ORDER BY `id` ASC;";

    return fetch_data($query_string);

}

function tutorial_get_where($where, $fields = '*')
{
    $query_string = "SELECT $fields FROM " . $GLOBALS['TUTORIALS_TB'] . " WHERE $where ORDER BY `id` ASC;";

    return fetch_data($query_string);

}

function tutorial_get_item($id, $fields = '*')
{
    $query_string = "SELECT $fields FROM " . $GLOBALS['TUTORIALS_TB'] . " WHERE `id`='$id' ORDER BY `id` ASC;";

    return fetch_data($query_string);

}