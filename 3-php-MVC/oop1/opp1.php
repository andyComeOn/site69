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
        public $name = '张三山';
        // private $age = 24;
        // private $height = 170;
        public function __construct($name)
        {
            $this->name = $name;
        }
        public function showInfo()
        {
            echo $this->name;
        }
    }

    $obj = new Student('张三山12');
    $obj->showInfo();
    

    ?>
</body>

</html>


<?php
