<?php
// 包含数据库工具类
require_once('./Db.class.php');

// 定义学生模型类
class NewsModel {
    private $db = null;

    // 构造方法
    public function __construct() {
        $arr = array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_pwd' => '123456',
            'db_name' => 'itcast',
            'charset' => 'utf8'
        );

        $this->db = Db::getInstance($arr);
    }
    // 获取多行方法
    public function fetchAll() {
        // 构建sql语句
        $sql = "select * from student order by age";

        // 执行sql语句返回二维数组
        return $this->db->fetchAll($sql);
    }

    public function delete($id) {
        // 构建sql语句
        $sql = "delete from student where id={$id}";

        // 执行sql语句
        return $this->db->exec($sql);
    }

}