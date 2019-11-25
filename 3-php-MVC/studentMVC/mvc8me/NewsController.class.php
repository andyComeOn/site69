<?php

require_once('./BaseController.class.php');

// 定义最终的新闻类控制器
final class NewsController extends BaseContrller {
    // 定义公共的删除方法
    public function delete() {
        $modelObj = FactoryModel::getInstance("NewsModel");
        $id = $_GET['id'];
        if ($modelObj->delete($id)) {
            $this->jump("id = {$id}的记录删除成功！");
            // echo "<h2>id = {$id}的记录删除成功！</h2>";
            // header("refresh: 3; url=?");
            // exit();
        } else {
            $this->jump("id = {$id}的记录删除失败！");
            // echo "<h2>id = {$id}的记录删除失败！</h2>";
            // header("refresh: 3; url=?");
            // exit();
        }
    }
    // 定义默认的方法
    public function index() {
        $modelObj = FactoryModel::getInstance("NewsModel");
        // 获取多行数据
        $arrs = $modelObj->fetchAll();

        // 引入视图文件
        include './newsView.php';
    }
}


// 获取用户动作
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';
$controllerObj = new NewsController();
// 根据用户的不同动作执行不同的操作
if ($ac == 'delete') {
    $controllerObj->delete();
} else {
    $controllerObj->index();
}