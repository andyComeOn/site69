<?php

// var_dump($_POST);

// var_dump(file_get_contents('php://input'));


$book = array('a' => 'xiyouji', 'b' => 'sanguo', 'c' => 'shuihu', 'd' => 'hongloumeng');
$json = json_encode($book);

$array = json_decode($json, TRUE);
$obj = json_decode($json);
var_dump($array['b']); //调用数组元素
echo '<br/>';
var_dump($obj->c);//调用对象元素
