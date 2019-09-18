<?php

// 获取路由信息
$c = isset($_GET['c']) ? $_GET['c'] : 'Student';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$p = isset($_GET['p']) ? $_GET['p'] : 'Home';
define('PLAT', $p);

require_once('./Frame/common.css.php');

// 类的自动加载
spl_autoload_register(function ($className) {
    // 类文件路径数组
    $arr = array(
        "./Frame/$className.class.php",
        "./App/".PLAT."/Model/$className.class.php",
        "./App/".PLAT."/Controller/$className.class.php",
    );

    foreach ($arr as $filename) {
        // 如果类文件路径存在，则包含
        if (file_exists($filename)) {
            echo $filename . '<br>';
            require_once($filename);
        }
    }
});


// 创建控制器
$controllerClassName = $c . "Controller";
$controllerObj = new $controllerClassName();

// 根据不同的动作执行不同的方法
$controllerObj->$a();