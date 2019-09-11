<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>测试变量存储地址</title>

</head>

<body>
    <?php
    echo '快速测试PHP<br>';
    $v = 'hello';
    echo "{$v}<br>";

    // $a = 0;
    // print_r(isset($a));
    // print_r("年后$v");



    function setName($obj)
    {
        $obj->name = 'Xavier';
        $obj = new stdClass;
        $obj->name = 'Zhao';
    }

    $person = new stdClass;
    setName($person);
    var_dump($person->name);
    ?>
</body>

</html>