<?php

// 包含所有模型类
// require_once('./StudentModel.class.php');
// require_once('./NewsModel.class.php');

// 定义最终的工厂模型类
final class FactoryModel {
    // 公共的静态的创建不同模型类对象的方法
    public static function getInstance($modelClassName) {
        // 创建指定的模型对象并返回
        return new $modelClassName();
    }
}