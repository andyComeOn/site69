<?php
require_once('./StudentModel.class.php');

// 创建一个学生类对象
$modelObj = new StudentModel();

// 获取多行数据
$arrs = $modelObj->fetchAll();

// 引入视图文件
include './studentView.php';
