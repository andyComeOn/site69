<?php

// 定义最终的新闻类控制器
final class NewsController extends BaseContrller {
    // 定义公共的删除方法
    public function delete() {
        $modelObj = FactoryModel::getInstance("NewsModel");
        $id = $_GET['id'];
        if ($modelObj->delete($id)) {
            $this->jump("id = {$id}的记录删除成功！", '?c=News&p=Home');
        } else {
            $this->jump("id = {$id}的记录删除失败！", '?c=News&p=Home');
        }
    }
    // 定义默认的方法
    public function index() {
        $modelObj = FactoryModel::getInstance("NewsModel");
        // 获取多行数据
        $arrs = $modelObj->fetchAll();

        // 引入视图文件
        include './App/Home/View/News/index.php';
    }
}


