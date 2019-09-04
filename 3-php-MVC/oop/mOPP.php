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
        public function showInfo($name, $age = 11)
        {
            echo __FILE__ . '<br>' . "我的名字是：{$name}，我{$age}岁了。";

        }
    }

    $obj = new Student;
    $obj->name = '李凯';


    echo $obj->name . '<br>';
    // echo $obj->showInfo('张松林');
    echo $obj->showInfo('张松林', 13);

    ?>
</body>

</html>


<?php
