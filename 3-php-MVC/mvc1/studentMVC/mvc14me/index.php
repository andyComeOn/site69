<?php

// 获取路由信息
$c = isset($_GET['c']) ? $_GET['c'] : 'Student';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$p = isset($_GET['p']) ? $_GET['p'] : 'Home';

// 定义平台 platform 常量
define('PLAT', $p);

// 引入的公共css
require_once('./Frame/common.css.php');

define("DS", DIRECTORY_SEPARATOR); // 定义动态分割符
define("ROOT_PATH", getcwd() . DS); // 定义当前目录
define("FRAME_PATH", ROOT_PATH . 'Frame' . DS); // Frame目录
define("MODEL_PATH", ROOT_PATH . 'App' . DS . PLAT . DS . 'Model' . DS); // Model目录
define("CONTROLLER_PATH", ROOT_PATH . 'App' . DS . PLAT . DS . 'Controller' . DS); // Controller目录
define("VIEW_PATH", ROOT_PATH . 'App' . DS . PLAT . DS . 'View' . DS .$c . DS); // View目录

// 类的自动加载
spl_autoload_register(function ($className) {
    // 类文件路径数组
    $arr = array(
        FRAME_PATH . "$className.class.php",
        MODEL_PATH . "$className.class.php",
        CONTROLLER_PATH . "$className.class.php",
    );

    foreach ($arr as $filename) {
        // 如果类文件路径存在，则包含
        if (file_exists($filename)) {
            // echo $filename . '<br>';
            require_once($filename);
        }
    }
});


// 创建控制器
$controllerClassName = $c . "Controller";
$controllerObj = new $controllerClassName();

// 根据不同的动作执行不同的方法
$controllerObj->$a();