<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>快速测试php</title>

</head>

<body>
    <?php
    echo '快速测试PHP';
    echo '<br>';

    echo rand(1.0, 50.0);
    echo '<br>';
    echo date('Y-m-d H:i:s', 1425022980);
    echo '<br>';
    $ret = 1;
    // var_dump($ret);
    if (isset($ret)) {
        echo 90;
    }


    class Demo1
    {
        public $name = "hello Word!";
        public function getName()
        {
            return $this->name;
        }
        public function getObj()
        {
            return new self();
        }
        public function getStatic()
        {
            return new static();
        }
    }

    class Demo2 extends Demo1
    {
        public function getNewObj()
        {
            return new parent();
        }
    }

    //1.用new 类名（）来创建一个对象
    $obj1 = new Demo1(); //如果不需要传入参数的话，可以省去括号()
    echo $obj1->name;
    echo "<hr >";
    //2.将类名，以字符串的方式存在一个变量中
    $className = "Demo1";
    $obj2 = new $className();
    echo $obj1->name;
    echo "<hr >";
    //3.用对象来创建对象，并且它创建的是一个新对象,
    $obj3 = new $obj1(); //不是引用
    echo $obj3->name;
    echo "<hr >";
    //4.用new self()来创建
    $obj4 = $obj1->getObj();
    echo $obj4->name;
    echo "<hr >";
    //5.用new parent()来创建一个对象
    $obj5 = (new Demo2)->getNewObj(); //要用（）
    echo $obj5->name;
    echo "<hr >";
    //  echo get_class($obj5);//Demo1
    //6.基于当前调用的类来创建：new static
    $obj6 = (new Demo1)->getStatic();
    echo $obj6->name;
    echo "<hr >";
    //注意：和 new self有区别

    $obj7 = (new Demo2)->getStatic();
    $obj8 = (new Demo2)->getObj();
    //new Static()创建的对象，直接与调用者绑定（静态延迟绑定）
    echo get_class($obj7); //Demo2 
    echo get_class($obj8); //Demo1


    ?>

    <script>
        var unixTimestamp = new Date(1425022980000);
        console.log(unixTimestamp.toLocaleString())
    </script>
</body>

</html>