<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>快速测试php</title>

</head>

<body>
    <?php
    class Student
    {
        public $name = '张三';
        private $age = 24;
        private $height = 170;
        private function showLine()
        {
            return '<hr>';
        }
        private function demo()
        {
            return 'demo';
        }
        
        
        public function showInfo()
        {
            $str = $this->name . '的基本信息';
            $str .= $this->showLine();
            $str .= $this->demo();
            $str .= "名字是：{$this->name}，{$this->age}岁了。";
            echo $str;
        }
    }

    $obj = new Student();
    $obj->name = '王五';

    echo $obj->showInfo();

    ?>
</body>

</html>


<?php
