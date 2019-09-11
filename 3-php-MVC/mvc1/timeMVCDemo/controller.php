<?php

require_once('./model.php');

$type = $_GET['type'] ? $_GET['type'] : 3;

$obj = new DataTime();

switch ($type) {
    case 1:
        $str = $obj->getDate();
        break;

    case 2:
        $str = $obj->getTime();
        break;
    
    default: 
        $str = $obj->getDataTime();
}

include './view.php';
