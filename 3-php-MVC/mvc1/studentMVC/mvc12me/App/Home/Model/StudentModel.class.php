<?php
// 包含数据库工具类
// require_once('./BaseModel.class.php');

// 定义学生模型类
class StudentModel extends BaseModel{
    
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

    // 添加方法
    public function insert($data) {
        // 构建数据库键值对
        $fileds = "";
        $datas = "";

        foreach ($data as $key => $value) {
            $fileds .= "$key,";

            if ($key == 'name') {
                $datas .= "'" . $value . "',";
                continue;
            } else if ($key == 'edu') {
                $datas .= "'" . $value . "',";
                continue;
            } else if ($key == 'hobby') {
                $datas .= "'" . $value . "',";
                continue;
            } else if ($key == 'province') {
                $datas .= "'" . $value . "',";
                continue;
            } 
            $datas .= "$value,";
        }

        // 除去结尾处的 , 号
        $fileds = rtrim($fileds, ',');
        $datas = rtrim($datas, ',');
        
        // 构建sql语句
        $sql = "insert into student ($fileds) values ($datas)";
        
        return $this->db->exec($sql);
    }
}