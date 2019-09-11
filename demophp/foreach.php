<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>快速测试php</title>

</head>

<body>
    <?php
    echo '<img src="http://139.199.23.2/img/favicon/study.png"/><br>';
    $arr = array(120, 121, 122);
    foreach ($arr as $i => $v) {
        if ($i == 1) {
            echo '第' . ($i + 1) . "个特殊的值是{$v}<br>";
            continue;
        }
        echo '第' . ($i + 1) . "个值是{$v}<br>";
    }



    $arr1 = array(
        'one' => array('name' => '张三', 'age' => '23', 'sex' => '男'),
        'two' => array('name' => '李四', 'age' => '43', 'sex' => '女'),
        'three' => array('name' => '王五', 'age' => '32', 'sex' => '男'),
        'four' => array('name' => '赵六', 'age' => '12', 'sex' => '女')
    );

    foreach ($arr1 as $k => $val) {
        echo '<p>' . $val['name'] . $val['age'] . $val['sex'] . "</p><br>";
    }
    
    // echo '<tr>' . 
    //     '<td>' . $arr['id'] . '</td>' .
    //     '<td>' . $arr['name'] . '</td>' . 
    //     '<td>' . $arr['sex'] . '</td>' .
    //     '<td>' . "$arr['height']" . '</td>' .
    //     '<td>' . $arr['age'] . '</td>' .
    //     '<td>' . $arr['edu'] . '</td>' .
    //     '<td>' . $arr['hobby'] . '</td>' .
    //     '<td>' . $arr['province'] . '</td>' .
    //     '</tr>'; 

    ?>
</body>

</html>