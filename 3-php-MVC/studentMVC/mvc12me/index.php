<?php

// 获取路由信息
$c = isset($_GET['c']) ? $_GET['c'] : 'Student';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$p = isset($_GET['p']) ? $_GET['p'] : 'Home';

require_once('./Frame/BaseController.class.php');
require_once('./Frame/BaseModel.class.php');
require_once('./Frame/FactoryModel.class.php');
require_once('./Frame/Db.class.php');
require_once('./Frame/common.css.php');

require_once("./App/{$p}/Model/NewsModel.class.php");
require_once("./App/{$p}/Model/StudentModel.class.php");

require_once("./App/{$p}/Controller/NewsController.class.php");
require_once("./App/{$p}/Controller/StudentController.class.php");


// 创建控制器
$controllerClassName = $c . "Controller";
$controllerObj = new $controllerClassName();

// 根据不同的动作执行不同的方法
$controllerObj->$a();