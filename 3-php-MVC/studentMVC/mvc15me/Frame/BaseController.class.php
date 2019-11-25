<?php
// require_once('./FactoryModel.class.php');
abstract class BaseController {
    // 受保护的跳转方法
    protected function jump($msg, $url='?', $time = 3) {
        echo "<h2> {$msg} </h2>";
        header("refresh: {$time}, url={$url}");
        die();
    }
}
?>