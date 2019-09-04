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
        private $name;
        private $age;
        
        private function showLine()
        {
            return '<hr>';
        }
        public function __construct($name, $age)
        {
            $this->name =  $name;
            $this->age =  $age;
        }
        public function showInfo()
        {
            
            $str = $this->name . '的基本信息';
            $str .= $this->showLine();
            $str .= "名字：{$this->name}，年龄：{$this->age}。";
            echo $str;
        }
    }

    $obj = new Student('王五', 12);
    // $obj->name = '王五';
    // $obj->showInfo();
    echo $obj->showInfo();

    ?>
</body>

</html>


<?php
