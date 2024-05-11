<?php

/* ------------------------------------------------------------------------------------------------
    khởi tạo các biến global
*/
// trong thư mục tổng

global $BASE_URL;
global $APP;
global $ASSETS;
global $UI;

// trong thư mục APP
global $CONFIG;
global $CONTROLLERS;
global $MODELS;

// trong thư mục ui
global $ADMIN;
global $CLIENT;

// các table
global $TUTORIALS_TB;
global $USERS_TB;

/* ------------------------------------------------------------------------------------------------
    gán giá trị
*/

$BASE_URL = $_SERVER['REQUEST_URI'];

$APP= 'app/';
$ASSETS =  'assets/';
$UI = 'ui/';

$CONFIG = $GLOBALS['APP'] .'config/';
$CONTROLLERS = $GLOBALS['APP'] .'controllers/';
$MODELS = $GLOBALS['APP'] .'models/';

$ADMIN = $GLOBALS['UI'] .'admin/';
$CLIENT = $GLOBALS['UI'] .'client/';


