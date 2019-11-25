<?php
require_once('./StudentModel.class.php');

// 创建一个学生类对象
$modelObj = new StudentModel();

// 获取用户动作
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';

// 根据用户的不同动作执行不同的操作
if ($ac == 'delete') {
    $id = $_GET['id'];
    if ($modelObj->delete($id)) {
        echo "<h2>id = {$id}的记录删除成功！</h2>";
        header("refresh: 3; url=?");
        exit();
    } else {
        echo "<h2>id = {$id}的记录删除失败！</h2>";
        header("refresh: 3; url=?");
        exit();
    }
    
} else {
    // 获取多行数据
    $arrs = $modelObj->fetchAll();

    // 引入视图文件
    include './studentView.php';
}