<?php
require_once('./FactoryModel.class.php');

// 定义最终的学生控制器类
final class StudentController {
    
    protected $modelObj;
    
    // 构造方法
    public function __construct() {
        $this->modelObj = FactoryModel::getInstance("StudentModel");
    }

    // 定义公共的删除方法
    public function delete() {
        $id = $_GET['id'];
        // $modelObj = FactoryModel::getInstance("StudentModel");
        if ($this->modelObj->delete($id)) {
            echo "<h2>id = {$id}的记录删除成功！</h2>";
            header("refresh: 3; url=?");
            exit();
        } else {
            echo "<h2>id = {$id}的记录删除失败！</h2>";
            header("refresh: 3; url=?");
            exit();
        }
    }

    // 定义公共的默认方法
    public function index() {
        // $modelObj = FactoryModel::getInstance("StudentModel");
        // 获取多行数据
        $arrs = $this->modelObj->fetchAll();

        // 引入视图文件
        include './studentView.php';
    }
}


// 获取用户动作
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';

// 创建学生控制器对象
$controllerObj = new StudentController();
// 根据用户的不同动作执行不同的操作
if ($ac == 'delete') {
    $controllerObj->delete();
} else {
    $controllerObj->index();
}