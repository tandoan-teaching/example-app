<?php

// import các hàm trong file database
include_once $GLOBALS['CONFIG'] . 'database.php';

// định nghĩa table tutorials là hằng số
$TUTORIALS_TYPE_TB = 'tutorials_type';

// lấy tất cả data trong bảng
function tutorial_type_get_all($fields = '*')
{
    $query_string = "SELECT $fields FROM " . $GLOBALS['TUTORIALS_TYPE_TB'] . " ORDER BY `type_id` ASC;";

    return fetch_data($query_string);

}

function tutorial_type_get_item($fields = '*')
{
    $query_string = "SELECT $fields FROM " . $GLOBALS['TUTORIALS_TYPE_TB'] . " ORDER BY `type_id` ASC;";

    return fetch_data($query_string);

}