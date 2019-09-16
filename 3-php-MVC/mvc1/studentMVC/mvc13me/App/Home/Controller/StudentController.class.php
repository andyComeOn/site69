<?php

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
            $this->jump("id = {$id}的记录删除成功！", '?c=Student&p=Home');
        } else {
            $this->jump("id = {$id}的记录删除失败！", '?c=Student&p=Home');
        }
    }

    // 定义公共的默认方法
    public function index() {
        // $modelObj = FactoryModel::getInstance("StudentModel");
        // 获取多行数据
        $arrs = $this->modelObj->fetchAll();
        $records = $this->modelObj->records();

        // 引入视图文件
        include './App/Home/View/Student/index.php';
    }

    // 定义插入学生信息的公共方法
    public function add() {
        // 获取form表单提交过来的数据
        include './App/Home/View/Student/add.php';
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
            $this->jump("记录添加成功！", '?c=Student&p=Home');
        } else {
            $this->jump("记录添加失败！", '?c=Student&p=Home');
        }
    }
}
