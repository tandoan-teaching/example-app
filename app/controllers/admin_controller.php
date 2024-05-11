<?php

include_once 'app/models/tutorilas.php';
include_once 'app/models/tutorilas_type.php';

// tutorials
function c_tutorials_get_all()
{
    return tutorial_get_all();
}

function c_tutorials_get_item()
{
    return tutorial_get_item();
}

// type
function c_tutorials_type_get_all()
{
    return tutorial_type_get_all();
}