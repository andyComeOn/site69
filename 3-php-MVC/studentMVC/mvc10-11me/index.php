<?php

require_once('./Frame/BaseController.class.php');
require_once('./Frame/BaseModel.class.php');
require_once('./Frame/FactoryModel.class.php');
require_once('./Frame/Db.class.php');

require_once('./Model/NewsModel.class.php');
require_once('./Model/StudentModel.class.php');

require_once('./Controller/NewsController.class.php');
require_once('./Controller/StudentController.class.php');

require_once('./Frame/common.css.php');

// 获取路由信息
$c = isset($_GET['c']) ? $_GET['c'] : 'Student';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

// 创建控制器
$controllerClassName = $c . 'Controller';

$controllerObj = new $controllerClassName();

// 根据不同的动作执行不同的方法
$controllerObj->$a();

