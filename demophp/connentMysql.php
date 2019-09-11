

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>连接数据库</title>

</head>

<body>
    <?php
        echo '连接数据库测试<br>';
        echo date("Y/m/d H:i:s"), '<br>';

        $db_host = 'localhost';
        $db_port = '3306';
        $db_user = 'root';
        $db_pwd = '123456';
        $db_name = 'itcast';
        $db_name = 'itcast';
        $charset = 'utf8';



        // if (mysqli_connect('localhost:3306', 'root', '123456')) {
        //     echo '<br>连接数据库成功';
        // } else {
        //     echo '<br>连接数据库失败';
        // }

        $link = mysqli_connect($db_host . ':' . $db_port, $db_user, $db_pwd);
        if (mysqli_select_db($link, $db_name)) {
            echo "连接数据库itcast成功<br>";
        }

        // 关闭
        // mysqli_close($link);

        // 设置字符集
        mysqli_set_charset($link, $charset);

        // 查询语句
        $sql = "select * from student";
        $result = mysqli_query($link, $sql);
        // var_dump($result);

        // 更新语句
        // $sql = "update student set age = age + 12 where id = 7";
        // $result = mysqli_query($link, $sql);
        // var_dump($result);

        // 释放与结果集相关联的内存
        // mysqli_free_result($result);

        // 从结果集获取一行数据
        // $arr = mysqli_fetch_row($result);
        // print_r($arr['4']);
        
        // while($arr = mysqli_fetch_row($result)) {
        //     print_r($arr);
        // }
        
        // 从结果集中取得一行作为关联数组 
        // $arr = mysqli_fetch_assoc($result);
        // print_r($arr["age"]);

        // 从结果集中取得一行作为关联数组，或数字数组，或二者兼有(具体看配置参数，默认是MYSQLI_BOTH)
        // $arr = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // print_r($arr);


        // 从结果集中所有行 ALL 作为关联数组，或数字数组，或二者兼有(具体看配置参数，默认是枚举数组)
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r($arr);


        mysqli_close($link);
        // echo "共有{$sql}个员工";
        


        // 测试那个float的类型，使用where看能否查询出来。就在student表上编辑，float(P, D) 整理编辑器; 
        
    ?>
</body>
</html>