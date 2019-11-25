<?php

require_once('./BaseController.class.php');

// 定义最终的学生控制器类
final class StudentController extends BaseContrller {
    
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

    // 定义公共的默认方法
    public function index() {
        // $modelObj = FactoryModel::getInstance("StudentModel");
        // 获取多行数据
        $arrs = $this->modelObj->fetchAll();

        // 引入视图文件
        include './studentView.php';
    }

    // 定义插入学生信息的公共方法
    public function add() {
        // 获取form表单提交过来的数据
        include './studentAddView.php';
    }

    // 定义插入数据的方法
    public function insert() {
        $data['name'] = $_POST['name'];
        $data['sex'] = $_POST['sex'];
        $data['height'] = $_POST['height'];
        $data['age'] = $_POST['age'];
        $data['edu'] = $_POST['edu'];
        $data['hobby'] = $_POST['hobby'];
        $data['province'] = $_POST['province'];
        
        if ($this->modelObj->insert($data)) {
            echo "<h2>记录添加成功！</h2>";
            header("refresh:3;url=?");
            die();
        } else {
            echo "<h2>记录添加失败！</h2>";
            header("refresh:3;url=?");
            die();
        }
    }
}

// 获取用户动作
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';

// 创建学生控制器对象
$controllerObj = new StudentController();

// 根据用户的不同动作执行不同的操作
if ($ac == 'delete') {
    $controllerObj->delete();
} else if ($ac == 'add') {
    $controllerObj->add();
} else if ($ac == 'insert') {
    $controllerObj->insert();
} else {
    $controllerObj->index();
}