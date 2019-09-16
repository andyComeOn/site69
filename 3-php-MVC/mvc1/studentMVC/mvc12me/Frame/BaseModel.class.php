<?php

// 引入数据库工具类
// require_once('./Db.class.php');

// 定义抽象类基础类
abstract class BaseModel {
    // 受保护的保存数据库对象的属性
    protected $db = null;
    
    // 构造方法
    public function __construct() {
        $arr = array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_pwd' => '123456',
            'db_name' => 'itcast',
            'charset' => 'utf8'
        );

        // 把引入的Db的成员方法执行之后赋值给私有的db
        $this->db = Db::getInstance($arr);
    }
}