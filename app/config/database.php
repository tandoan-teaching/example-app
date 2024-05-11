<?php

function open_conn($db = null)
{
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = ($db == null) ? $db = "example_app" : $db;
    $conn = mysqli_connect($host, $username, $password, $db);
    $conn->query("SET NAMES 'utf8'");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function close_conn($conn)
{
    mysqli_close($conn);
}

function fetch_data($query_string, $default_conn = null)
{
    $conn = ($default_conn == null) ? $conn = open_conn() : $default_conn;
    $query = mysqli_query($conn, $query_string);
    $result = mysqli_num_rows($query) > 0 ? mysqli_fetch_all($query, MYSQLI_ASSOC) : [];

    mysqli_close($conn);

    return $result;
}

function fetch_data_array($query_string, $default_conn = null)
{
    $conn = ($default_conn == null) ? $conn = open_conn() : $default_conn;
    $query = mysqli_query($conn, $query_string);
    $result = mysqli_num_rows($query) > 0 ? mysqli_fetch_array($query, MYSQLI_ASSOC) : [];

    mysqli_close($conn);

    return $result;
}

function excute_none_query($query_string, $default_conn = null)
{
    $conn = ($default_conn == null) ? $conn = open_conn() : $default_conn;

    $query = mysqli_query($conn, $query_string);
    $result = mysqli_num_rows($query);

    mysqli_close($conn);
    return $result;
}
